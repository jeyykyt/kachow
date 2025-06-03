<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function storeGender(Request $request)
    {
        $data = $request->validate([
            'gender' => 'required|in:male,female,other',
        ]);

        // 1) Grab the current quote_id from session
        $quoteId = session('quote_id');
        if (! $quoteId) {
            abort(404, 'No active quote in session.');
        }

        // 2) Create or fetch the “primary” driver record for this quote.
        //    If it does not yet exist, set defaults for all other columns.
        $driver = Driver::firstOrCreate(
            [
                'quote_id'  => $quoteId,
                'is_primary'=> true,
            ],
            [
                'gender'                 => $data['gender'],
                'birth_month'            => 0,
                'birth_day'              => 0,
                'birth_year'             => 0,
                'is_married'             => false,
                'served_military'        => false,
                'relationship_to_primary'=> null,
                'first_name'             => '',
                'last_name'              => '',
            ]
        );

        // 3) Redirect to Step 2: birthdate
        return redirect()->route('make.index', ['step' => 'birthMonth']);
    }
}
