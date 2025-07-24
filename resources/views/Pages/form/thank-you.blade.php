@extends('Pages.layouts.app')
@section('metadata')
<title> MCM - Thank You</title>
<link rel="stylesheet" href="{{ asset('assets/css/mobile.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

<style>
    .contact-remove {
        display: none;
    }

    footer {
        display: none;
    }
</style>

@endsection
@section('form')

<!-- Main Content Section -->
<div class="max-w-6xl mx-auto mt-4">

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 items-start justify-start place-content-center">

        <div action="{{ route('details.form') }}" method="GET" class="md:col-span-2 rounded-md shadow-[0_0_20px_rgba(0,0,0,0.20)] p-6 w-full mx-auto">


            <!-- Success Icon + Title -->
            <div class="flex items-start space-x-4 mb-6">
                <div class="text-green-500 text-3xl">
                    ✅
                </div>
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">Thank you for your enquiry! We'll be in touch soon.</h1>
                </div>
            </div>

            <!-- Message Body -->
            <p class="text-gray-700 mb-6">
                We appreciate you reaching out to us for your removalist quote! Your enquiry has been successfully submitted.
            </p>

            <!-- What Happens Next -->
            <h2 class="font-semibold text-gray-800 mb-1">What Happens Next?</h2>
            <p class="text-gray-700 mb-6">
                One of our moving specialists will be in touch with you soon to provide you with a personalized quote and discuss your specific moving needs.
            </p>

            <!-- Need Assistance -->
            <h2 class="font-semibold text-gray-800 mb-1">Need Immediate Assistance?</h2>
            <p class="text-gray-700 mb-2">
                If you have any urgent questions or need further information, please feel free to contact us at
                <a href="tel:1300163694" class="text-blue-600 underline font-medium">1300 163 694</a>.
            </p>
            <p class="text-gray-700 mb-6">
                We're looking forward to assisting with your move!
            </p>

            <!-- Divider -->
            <hr class="my-6">

            <!-- Footer Links -->
            <div class="flex flex-wrap gap-6 text-sm text-blue-600 font-medium">
                <a href="#" class="hover:underline">Read our Moving Guides</a>
                <a href="#" class="hover:underline">Helpful Tips & Articles</a>
                <a href="#" class="hover:underline">About our Company</a>
            </div>

        </div>



        <!-- Right Summary and Contact Panel -->
        <div class="space-y-6 md:col-span-1">


            <!-- Contact Box -->
            <div class="bg-white rounded-md shadow-[0_0_20px_rgba(0,0,0,0.20)] p-6 text-sm text-black">
                <h3 class="font-semibold mb-2">Don't want to fill out a form?</h3>
                <p class="text-primary font-semibold mb-2 address-form-contact flex items-center"><a href="tel:1300 163 694">1300 163 694</a></p>
                <div class="mb-4 flex items-center justify-start gap-6">
                    <p class="">Monday to Friday: <br> 8:00 AM - 6:00 PM</p>
                    <p class="">Saturday: <br> 8:00 AM - 2:00 PM</p>
                </div>

                <div class="flex items-center justify-start space-x-2 border-t pt-4 mt-4">
                    <div class="flex flex-col items-start space-x-1">
                        <span class="text-yellow-500 text-lg">★★★★★ </span>
                        <div class="flex items-center space-x-1">
                            <span class="text-black font-semibold">4.8</span>
                            <img src="../../assets/images/allImages/Google.webp" alt="Google" class="h-8">
                        </div>
                    </div>

                    <div class="flex flex-col items-start space-x-1">
                        <span class="text-yellow-500 text-lg">★★★★☆ </span>
                        <div class="flex items-center space-x-1">
                            <span class="text-black font-semibold">4.8</span>
                            <span>ProductReview</span>
                        </div>
                    </div>

                </div>

                <ul class="mt-4 space-y-0 text-sm text-black">
                    <li class="form-description-list"> Blanket & Shrink Wrap</li>
                    <li class="form-description-list">Competitive Insurance</li>
                    <li class="form-description-list">Convenient Payment Methods</li>
                    <li class="form-description-list">5-Star Customer Service</li>
                    <li class="form-description-list">Optional Storage</li>
                    <li class="form-description-list">Packing Services</li>
                    <li class="form-description-list">Unpacking Services</li>
                    <li class="form-description-list">Small to Extra Large Trucks</li>
                    <li class="form-description-list">Fast & Efficient</li>
                    <li class="form-description-list">Professional and Friendly Service</li>
                    <li class="form-description-list">Fixed & Hourly Quotes</li>
                    <li class="form-description-list">Trained Removalists</li>
                </ul>

                <div class="flex space-x-2 mt-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa" class="h-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" alt="MasterCard" class="h-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Amex_logo.svg" alt="Amex" class="h-6">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')


</script>

@endsection