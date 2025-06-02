<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Make;
use App\Models\BrandYear;
use App\Models\CarModel;

class ImportVehiclesStructured extends Command
{
    protected $signature   = 'import:structured-vehicles';
    protected $description = 'Import makes, years, and models from NHTSA';

    public function handle()
    {
        $this->info("Fetching all makes…");

        // 1) GetAllMakes from vPIC (includes Make_ID and Make_Name)
        $allMakesData = Http::get(
            'https://vpic.nhtsa.dot.gov/api/vehicles/GetAllMakes?format=json'
        )->json()['Results'];

        // 2) Restrict to only the “allowed” make names
        $allowedMakes = [
            'ACURA','ALFA ROMEO','ASTON MARTIN','AUDI','BMW','BUICK',
            'CADILLAC','CHEVROLET','CHRYSLER','DODGE','FIAT','FORD',
            'GENESIS','GEO','GMC','HONDA','HUMMER','HYUNDAI','INFINITI',
            'ISUZU','JAGUAR','JEEP','KIA','LAND ROVER','LEXUS','LINCOLN',
            'LOTUS','LUCID MOTORS','MASERATI','MAZDA','MERCEDES-BENZ','MERCURY',
            'MINI','MITSUBISHI','OLDSMOBILE','PLYMOUTH','POLESTAR','PONTIAC',
            'PORSCHE','RAM','RIVIAN','SAAB','SATURN','SMART','SPRINTER',
            'SUBARU', 'SUZUKI','TESLA','TOYOTA','VOLKSWAGEN','VOLVO',
            'NISSAN'
        ];

        foreach ($allMakesData as $makeData) {
            $makeName = trim($makeData['Make_Name']);
            $makeId   = $makeData['Make_ID'];  // numeric vPIC Make_ID

            if (! in_array(strtoupper($makeName), $allowedMakes)) {
                continue; // skip any makes not in our allowed list
            }

            // 3) Create/fetch one Make row (in your DB) for this makeName
            //    image_path will remain NULL because we never set it here
            $make = Make::firstOrCreate([
                'name' => $makeName,
            ]);

            // 4) Loop years 1990–2025 and call GetModelsForMakeIdYear
            for ($year = 1990; $year <= 2025; $year++) {
                $this->info("Fetching models for {$makeName} ({$year})…");

                try {
                    $endpoint = "https://vpic.nhtsa.dot.gov/api/vehicles/"
                        . "GetModelsForMakeIdYear/makeId/{$makeId}/modelyear/{$year}"
                        . "?format=json";

                    $response = Http::timeout(60)
                        ->retry(2, 500)
                        ->get($endpoint);

                    // If you use ->throw(), uncomment the next line:
                    // $response->throw();

                    $payload = $response->json();
                }
                catch (\Illuminate\Http\Client\ConnectionException $e) {
                    $this->warn("  → Timeout/Connection error for {$makeName} ({$year}), skipping.");
                    continue;
                }
                catch (\Illuminate\Http\Client\RequestException $e) {
                    $status = optional($e->response)->status() ?? 'unknown';
                    $this->warn("  → HTTP {$status} for {$makeName} ({$year}), skipping.");
                    continue;
                }

                if (! isset($payload['Results']) || empty($payload['Results'])) {
                    continue; // no models for that year
                }

                // 5) Create a BrandYear row (make_id + year)
                $brandYear = BrandYear::firstOrCreate([
                    'make_id' => $make->id,
                    'year'    => $year,
                ]);

                // 6) Insert each model
                foreach ($payload['Results'] as $modelData) {
                    $modelName = trim($modelData['Model_Name']);

                    CarModel::firstOrCreate([
                        'make_id'       => $make->id,
                        'brand_year_id' => $brandYear->id,
                        'name'          => $modelName,
                    ]);
                }

                // 7) Pause briefly so we don’t exceed rate limits
                sleep(1);
            }
        }

        $this->info("Makes, years, and models imported!");
    }
}
