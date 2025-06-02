<?php

namespace App\Http\Controllers;

use App\Models\BrandYear;
use App\Models\Make;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $featuredList = [
            'BUICK',
            'CHEVROLET',
            'CHRYSLER',
            'DODGE',
            'FORD',
            'GMC',
            'HONDA',
            'HYUNDAI',
            'JEEP',
            'KIA',
            'NISSAN',
            'TOYOTA',
        ];

        // 2) Fetch those 12 (in any order, or orderBy('name'))
        $featured = Make::whereIn('name', $featuredList)
            ->orderBy('name')
            ->get(['id', 'name', 'image_path']);

        // 3) Fetch all the other makes
        $others = Make::whereNotIn('name', $featuredList)
            ->orderBy('name')
            ->get(['id', 'name', 'image_path']);


        $selectedMakeId = $request->query('selected');
        \Log::info('Index(): selectedMakeId = ' . $selectedMakeId);
        $step = $request->query('step', 'make');


        $step           = $request->query('step', 'make');
        $selectedMakeId = $request->query('make');
        $selectedYear   = $request->query('year');
        $selectedModel  = $request->query('model');
        $selectedTrim   = $request->query('trim');

        return view('index', [
            'step'            => $step,
            'featured'        => $featured,
            'others'          => $others,
            'make'            => $selectedMakeId ? Make::find($selectedMakeId) : null,
            'years'           => null,
            'models'          => null,
            'trims'           => null,
            'selectedMakeId'  => $selectedMakeId,
            'selectedYear'    => $selectedYear,
            'selectedModel'   => $selectedModel,
            'selectedTrim'    => $selectedTrim,
        ]);



    }

    public function showYears(Make $make)
    {
        // Grab all distinct years for this make_id, sorted descending
        $years = BrandYear::where('make_id', $make->id)
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->unique()
            ->values();

        $featuredList = [
            'BUICK','CHEVROLET','CHRYSLER','DODGE',
            'FORD','GMC','HONDA','HYUNDAI',
            'JEEP','KIA','NISSAN','TOYOTA',
        ];

        $featured = Make::whereIn('name', $featuredList)
            ->orderBy('name')
            ->get(['id','name','image_path']);

        $others = Make::whereNotIn('name', $featuredList)
            ->orderBy('name')
            ->get(['id','name','image_path']);

        return view('index', [
            'step'     => 'year',    // tells Blade to show vehicle.year
            'featured' => $featured,
            'others'   => $others,
            'make'     => $make,     // the selected Make model
            'years'    => $years,    // collection of integers
            'selectedMakeId' => $make->id // pass the chosen make ID forward

        ]);
    }


    // Later, you’ll add showModels(), showTrims(), etc. following the same pattern.

    public function showModels(Make $make, $year)
    {
        // 1) Find the BrandYear record for this make & year
        $brandYear = BrandYear::where('make_id', $make->id)
            ->where('year', $year)
            ->first();

        // If no BrandYear exists (edge case), redirect back to Year step
        if (! $brandYear) {
            return redirect()->route('make.years', $make->id);
        }

        // 2) Query CarModel for all models that reference this brand_year_id
        $models = CarModel::where('make_id', $make->id)
            ->where('brand_year_id', $brandYear->id)
            ->orderBy('name')
            ->get(['id', 'name']);

        // 3) We still need $featured and $others if user wants a “Back” link
        $featuredList = [
            'BUICK','CHEVROLET','CHRYSLER','DODGE',
            'FORD','GMC','HONDA','HYUNDAI',
            'JEEP','KIA','NISSAN','TOYOTA',
        ];

        $featured = Make::whereIn('name', $featuredList)
            ->orderBy('name')
            ->get(['id','name','image_path']);

        $others = Make::whereNotIn('name', $featuredList)
            ->orderBy('name')
            ->get(['id','name','image_path']);

        // 4) Render “index” with step='model'
        return view('index', [
            'step'            => 'model',
            'featured'        => $featured,
            'others'          => $others,
            'make'            => $make,         // the selected Make
            'year'            => $year,         // the selected Year
            'models'          => $models,       // Collection of CarModel
            'selectedMakeId'  => $make->id,     // keep “Other Make” state
            'selectedYear'    => $year,         // remember which year was clicked
            // we can pass null for 'years' because we’re past that step:
            'years'           => null,
        ]);
    }

    public function showTrims(Make $make, $year, $modelId)
    {
        // Find the CarModel instance
        $carModel = CarModel::where('id', $modelId)
            ->where('make_id', $make->id)
            ->first();

        if (! $carModel) {
            return redirect()->route('make.models', [
                'make' => $make->id,
                'year' => $year
            ]);
        }

        // Call CarQuery to get trims
        $makeName  = urlencode($make->name);
        $modelName = urlencode($carModel->name);
        $response  = Http::get(
            "https://www.carqueryapi.com/api/0.3/?cmd=getTrims&make={$makeName}&year={$year}&model={$modelName}"
        );

        $json      = $response->json();
        $trimList  = $json['Trims'] ?? [];
        $trims     = collect($trimList)
            ->pluck('model_trim')
            ->filter()   // remove empty strings
            ->unique()
            ->sort()
            ->values();

        // Re‐fetch featured/others for “Back” links, etc.
        $featuredList = [/* … same 12 names … */];
        $featured     = Make::whereIn('name', $featuredList)
            ->orderBy('name')
            ->get(['id','name','image_path']);
        $others       = Make::whereNotIn('name', $featuredList)
            ->orderBy('name')
            ->get(['id','name','image_path']);

        return view('index', [
            'step'            => 'trim',
            'featured'        => $featured,
            'others'          => $others,
            'make'            => $make,
            'year'            => $year,
            'modelObj'        => $carModel,
            'trims'           => $trims,
            'selectedMakeId'  => $make->id,
            'selectedYear'    => $year,
            'selectedModel'   => $modelId,
        ]);
    }

    public function showOwn(Make $make, $year, $model, $trim)
    {
        // 1) Ensure the CarModel belongs to this Make
        $carModel = CarModel::where('id', $model)
            ->where('make_id', $make->id)
            ->first();

        if (! $carModel) {
            // If the model is invalid, redirect back to the models step
            return redirect()->route('make.models', [
                'make' => $make->id,
                'year' => $year,
            ]);
        }

        // 2) We already know $trim is a string (or null‐string).
        //    We pass all data into the “own” partial.
        return view('index', [
            'step'            => 'own',
            'make'            => $make,
            'selectedYear'    => $year,
            'modelObj'        => $carModel,
            'selectedTrim'    => $trim,
            'selectedMakeId'  => $make->id,

            // We don’t need featured/others here,
            // but if you want to keep the back‐links consistent you can pass them:
            'featured'        => Make::whereIn('name', [
                'BUICK','CHEVROLET','CHRYSLER','DODGE',
                'FORD','GMC','HONDA','HYUNDAI',
                'JEEP','KIA','NISSAN','TOYOTA',
            ])->orderBy('name')->get(['id','name','image_path']),
            'others'          => Make::whereNotIn('name', [
                'BUICK','CHEVROLET','CHRYSLER','DODGE',
                'FORD','GMC','HONDA','HYUNDAI',
                'JEEP','KIA','NISSAN','TOYOTA',
            ])->orderBy('name')->get(['id','name','image_path']),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
