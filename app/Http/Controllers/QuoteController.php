<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function showDetailsForm()
    {
        // Show the form (email, address, etc.).
//        return view('quote.details');
    }

    public function saveDetails(Request $request)
    {
        $data = $request->validate([
            'currently_insured' => 'required|boolean',
            'own_house'         => 'required|boolean',
            'street_address'    => 'required|string',
            'zip_code'          => 'required|string',
            'city'              => 'required|string',
            'state'             => 'required|string',
            'home_ownership'    => 'required|string',
            'phone'             => 'required|string',
            'email'             => 'required|email',
        ]);

        // Fetch the placeholder ID from session
        $quoteId = session('quote_id');
        if (! $quoteId) {
            // If somehow the session expired, create a brand-new row:
            $quote = Quote::create($data);
        } else {
            // Otherwise, update the existing placeholder row:
            $quote = Quote::findOrFail($quoteId);
            $quote->update($data);
            // Optionally clear it from session now that we’ve saved real data:
            session()->forget('quote_id');
        }

        // Now everything is saved: vehicles are tied to this quote row,
        // and the quote has all its details.
        return redirect()->route('make.addVehicle')
            ->with('success','Quote saved! Proceeding...');
    }
}
