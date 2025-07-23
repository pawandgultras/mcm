<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request->all());
        return view('Pages.form.date');
    }
}
