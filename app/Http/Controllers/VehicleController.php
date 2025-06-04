<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'make_id'       => 'required|integer|exists:makes,id',
            'car_model_id'  => 'required|integer|exists:car_models,id',
            'year'          => 'required|integer|min:1900|max:' . date('Y'),
            'trim_name'     => 'nullable|string',
            'owns_this'     => 'required|boolean',
        ]);

        // 1) Create or fetch a “placeholder” Quote for this session/user
        //    For example, store its ID in the session so we only create one:
        $quoteId = session('quote_id');
        if (! $quoteId) {
            $quote = \App\Models\Quote::create([
                // You can leave all the “final” fields null/blank for now
                'currently_insured' => false,
                'own_house'         => false,
                'street_address'    => '',
                'zip_code'          => '',
                'city'              => '',
                'state'             => '',
                'home_ownership'    => '',
                'phone'             => '',
                'email'             => '',
            ]);
            $quoteId = $quote->id;
            session(['quote_id' => $quoteId]);
        }

        // 2) Save the vehicle with trim_name directly
        \App\Models\Vehicle::create([
            'quote_id'      => $quoteId,
            'make_id'       => $data['make_id'],
            'car_model_id'  => $data['car_model_id'],
            'trim_name'     => $data['trim_name'],
            'year'          => $data['year'],
            'owns_this'     => $data['owns_this'],
        ]);



        return redirect()->route('make.index', [
            'step'   => 'addVehicle',
//            'make'   => $make->id,
//            'year'   => $selectedYear,
//            'model'  => $selectedModel,   // i.e. $modelObj->id
//            'trim'   => $selectedTrim,     // e.g. "Leather Group…" or "none"
        ]);
    }

}
