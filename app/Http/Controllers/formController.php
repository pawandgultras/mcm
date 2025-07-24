<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Mail\QuoteSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class formController extends Controller
{
    /**
     * Show the address form.
     *
     * @return \Illuminate\View\View
     */
    public function showAddressForm(Request $request)
    {
        $validated =  $request->validate([
            'moving_from' => 'required|string|max:255',
            'moving_to' => 'required|string|max:255',
        ]);

        $moving_from = $validated['moving_from'];
        $moving_to = $validated['moving_to'];
        return view('Pages.form.address', compact('moving_from', 'moving_to'))->with('success', 'Form submitted successfully!');
    }

    /**
     * Handle the address form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitAddressForm(Request $request)
    {
        $validated = $request->validate([
            'moving_from' => 'required|string|max:255',
            'moving_to' => 'nullable|string|max:255',
        ]);

        $moving_from = $validated['moving_from'];
        $moving_to = $validated['moving_to'] ?? 'unsure';
        return view('Pages.form.property', compact('moving_from', 'moving_to'))
            ->with('success', 'Form submitted successfully!');
    }


    public function showDateForm(Request $request)
    {
        $validated = $request->validate([
            'moving_from' => 'required|string|max:255',
            'moving_to' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'property_size' => 'required|string|max:255',
            'other_details' => 'nullable|string|max:255',
        ]);

        $moving_from = $validated['moving_from'];
        $moving_to = $validated['moving_to'];
        $property_type = $validated['property_type'];
        $property_size = $validated['property_size'];
        $other_details = $validated['other_details'];

        return view('Pages.form.date', compact('moving_from', 'moving_to', 'property_type', 'property_size', 'other_details'))
            ->with('success', 'Form submitted successfully!');
    }

    public function showDetailsForm(Request $request)
    {
        $validated = $request->validate([
            'moving_from' => 'required|string|max:255',
            'moving_to' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'property_size' => 'required|string|max:255',
            'moving_date' => 'required|string|max:255',
            'specific_date' => 'nullable|string|max:255',
            'other_details' => 'nullable|string|max:255',
        ]);

        $moving_from = $validated['moving_from'];
        $moving_to = $validated['moving_to'];
        $property_type = $validated['property_type'];
        $property_size = $validated['property_size'];
        $moving_date = $validated['moving_date'];
        $specific_date = $validated['specific_date'] ?? null;
        $other_details = $validated['other_details'] ?? null;

        return view('Pages.form.details', compact('moving_from', 'moving_to', 'property_type', 'property_size', 'moving_date', 'specific_date', 'other_details'))
            ->with('success', 'Form submitted successfully!');
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'moving_from' => 'required|string',
            'moving_to' => 'required|string',
            'property_type' => 'required|string',
            'moving_date' => 'required|string',
            'specific_date' => 'nullable|date',
            'other_details' => 'nullable|string',
            'enquiry' => 'required|string',
            'quote_type' => 'required|string',
            'previous_booking' => 'nullable|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'mobile_number' => 'required|string',
            'addons' => 'nullable|array',
            'contact_time' => 'required|string',
        ]);

        $validated['previous_booking'] = $request->has('previous_booking');
        $validated['addons'] = json_encode($request->input('addons'));

        $quote = Quote::create($validated);

        // Send email to admin (or to user)
        Mail::to('admin@example.com')->send(new QuoteSubmitted($quote));

        return view('Pages.form.thank-you')->with('success', 'Quote submitted successfully!');


    }
}
