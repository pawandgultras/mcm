<h2>Contact Form Submission</h2>

<p><strong>Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
<p><strong>Moving Date:</strong> {{ $formData['move_date'] ?? '' }}</p>
<p><strong>Moving From:</strong> {{ $formData['move_from'] ?? '' }}</p>
<p><strong>Moving To:</strong> {{ $formData['move_to'] ?? '' }}</p>
<p><strong>Message:</strong></p>
<p>{{ $formData['message'] ?? '' }}</p>
