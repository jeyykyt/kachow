<?php

namespace App\Http\Controllers;

use App\Models\Quote;
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

    public function storeInsured(Request $request)
    {
        $data = $request->validate([
            'currently_insured' => 'required|boolean',
        ]);

        $quoteId = session('quote_id');
        if (! $quoteId) {
            // If no quote exists yet, create a placeholder so we can update later
            $quote = Quote::create([
                'currently_insured' => $data['currently_insured'],
                'own_house'         => false, // placeholder
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
        } else {
            // Otherwise just update the existing placeholder
            $quote = Quote::findOrFail($quoteId);
            $quote->update([
                'currently_insured' => $data['currently_insured'],
            ]);
        }

        // Redirect to “Do you own a house?” step:
        return redirect()->route('make.index', ['step' => 'ownHouse']);
    }

    /**
     * STEP: “Do you own a house?” Form Submission
     * Only updates `own_house` on the Quote.
     */
    public function storeOwnHouse(Request $request)
    {
        $data = $request->validate([
            'own_house' => 'required|boolean',
        ]);

        $quoteId = session('quote_id');
        if (! $quoteId) {
            // If session expired, create a new placeholder
            $quote = Quote::create([
                'currently_insured' => false, // placeholder
                'own_house'         => $data['own_house'],
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
        } else {
            // Otherwise update existing placeholder
            $quote = Quote::findOrFail($quoteId);
            $quote->update([
                'own_house' => $data['own_house'],
            ]);
        }

        // Redirect to the final quote-details form:
        return redirect()->route('make.index', ['step' => 'gender']);
    }
}
