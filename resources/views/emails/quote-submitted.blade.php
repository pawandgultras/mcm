<h2>New Quote Submitted</h2>

<p><strong>Name:</strong> {{ $quote->first_name }} {{ $quote->last_name }}</p>
<p><strong>Email:</strong> {{ $quote->email }}</p>
<p><strong>Mobile:</strong> {{ $quote->mobile_number }}</p>
<p><strong>Moving From:</strong> {{ $quote->moving_from }}</p>
<p><strong>Moving To:</strong> {{ $quote->moving_to }}</p>
<p><strong>Property Type:</strong> {{ $quote->property_type }}</p>
<p><strong>Moving Date:</strong> {{ $quote->moving_date }} ({{ $quote->specific_date }})</p>
<p><strong>Enquiry:</strong> {{ $quote->enquiry }}</p>
<p><strong>Quote Type:</strong> {{ $quote->quote_type }}</p>
<p><strong>Previous Booking:</strong> {{ $quote->previous_booking ? 'Yes' : 'No' }}</p>
<p><strong>Contact Time:</strong> {{ $quote->contact_time }}</p>

@if($quote->addons)
<p><strong>Addons:</strong> {{ implode(', ', json_decode($quote->addons, true)) }}</p>
@endif

@if($quote->other_details)
<p><strong>Other Details:</strong> {{ $quote->other_details }}</p>
@endif
