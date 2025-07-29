<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Quote;
use App\Mail\QuoteSubmitted;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Http;
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

        // Format values
        $validated['previous_booking'] = $request->has('previous_booking');
        $validated['addons'] = json_encode($request->input('addons'));
        $validated['mobile_number'] = substr(preg_replace('/[^0-9+]/', '', $validated['mobile_number']), 0, 15);

        // Decide final moving date to be sent to Pabbly
        if ($validated['moving_date'] === 'Specific Date' && !empty($validated['specific_date'])) {
            try {
                $movingDate = \Carbon\Carbon::parse($validated['specific_date'])->format('Y-m-d');
            } catch (\Exception $e) {
                $movingDate = ''; // fallback in case of parse error
            }
        } else {
            $movingDate = $validated['moving_date'];
        }

        // Save to DB
        $quote = Quote::create($validated);

        // Send email to internal team
        Mail::to("mcmcentralmovers@gmail.com")->send(new QuoteSubmitted($quote));

        // // Send data to Pabbly webhook
        // $pabblyData = [
        //     'moving_from' => $validated['moving_from'],
        //     'moving_to' => $validated['moving_to'],
        //     'property_type' => $validated['property_type'],
        //     'moving_date' => $movingDate,
        //     'specific_date' => $validated['specific_date'], // You may remove this if not needed
        //     'other_details' => $validated['other_details'],
        //     'enquiry' => $validated['enquiry'],
        //     'quote_type' => $validated['quote_type'],
        //     'previous_booking' => $validated['previous_booking'] ? 'Yes' : 'No',
        //     'first_name' => $validated['first_name'],
        //     'last_name' => $validated['last_name'],
        //     'email' => $validated['email'],
        //     'mobile_number' => $validated['mobile_number'],
        //     'addons' => $validated['addons'],
        //     'contact_time' => $validated['contact_time'],
        // ];

        // Http::post('https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjYwNTZhMDYzNTA0MzA1MjY1NTUzNTUxMzAi_pc', $pabblyData);

        return view('Pages.thankyou')->with('success', 'Thank you for your enquiry! We will get back to you soon.');
    }



    public function contactUsFormStore(Request $request)
    {
        $formData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'nullable|string|max:50',
            'move_date'     => 'nullable|string|max:255',
            'move_from'     => 'nullable|string|max:255',
            'move_to'       => 'nullable|string|max:255',
            'message'  => 'nullable|string',
        ]);


        if ($formData['move_date']) {
            $movingDate = \Carbon\Carbon::parse($formData['move_date'])->format('Y-m-d');
        } else {
            $movingDate = ''; // fallback in case of parse error
        }


        // Store in database
        ContactSubmission::create($formData);

        $mailid = "mcmcentralmovers@gmail.com";
        // Send email
        Mail::to($mailid)->send(new ContactFormMail($formData));

        // $pabblyData = [
        //     'moving_from' => $formData['move_from'],
        //     'moving_to' => $formData['move_to'],
        //     'first_name' => $formData['name'],
        //     'email' => $formData['email'],
        //     'mobile_number' => $formData['phone'],
        //     'moving_date' => $movingDate,
            
        // ];
        // Http::post('https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NjYwNTZhMDYzNTA0MzA1MjY1NTUzNTUxMzAi_pc', $pabblyData);

        return view('Pages.thankyou')->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    public function thankyou(Request $request)
    {
        return view('Pages.thankyou');
    }
}
