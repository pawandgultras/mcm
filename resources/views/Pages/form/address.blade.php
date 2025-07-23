@extends('Pages.layouts.app')
@section('metadata')
<title> MCM - Address Form</title>
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
    <!-- Breadcrumb Navigation (No Links) -->
    <nav class="bg-gray-100 px-4 py-6 ">
        <ol class="flex items-center space-x-2 md:text-[16px] text-[12px] text-black">
            <li><span>1. Removals</span></li>
            <li><span class="text-black">›</span></li>
            @if(isset($moving_from) && isset($moving_to))
            <li><span class="font-semibold text-black">2. Address</span></li>
            @else
            return view('Pages.form.address', [
            'moving_from' => '{{ $moving_from }}',
            'moving_to' => '{{ $moving_to }}'
            ]);
            @endif
            <li><span class="text-black">›</span></li>
            <li><span>3. Property</span></li>
            <li><span class="text-black">›</span></li>
            <li><span>4. Date</span></li>
            <li><span class="text-black">›</span></li>
            <li><span>5. Details</span></li>
        </ol>
    </nav>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <!-- Left Form Section -->
        <form action="{{ route('property.form') }}" method="get" class="md:col-span-2 rounded-md h-[350px] max-h-auto shadow-[0_0_20px_rgba(0,0,0,0.20)] p-6">
            <div class="mb-6">
                <label class="block text-[12px] md:text-[16px] font-medium text-black mb-1">Moving From (Pickup)</label>
                <input type="text" name="moving_from" class="w-full font-medium border md:text-[16px] text-12px border-black/60 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:border-none focus:ring-primary" value="{{ old('moving_from', $moving_from ?? '') }}">
            </div>

            <div class="mb-6">
                <label class="block text-[12px] md:text-[16px] font-medium text-black mb-1">Moving To (Delivery)</label>
                <input type="text" name="moving_to" class="w-full font-medium border md:text-[16px] text-12px border-black/60 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:border-none focus:ring-primary" value="{{ old('moving_to', $moving_to ?? '') }}">
            </div>

            <div class="flex items-center mb-6">
                <input type="checkbox" id="not-sure" name="not-sure" class="mr-2">
                <label for="not-sure" class="md:text-[20px] text-[14px] text-black">I'm not sure</label>
            </div>
            <!-- Continue Button -->
            <div class="text-right mt-6">
                <button type="submit" class="bg-primary hover:bg-primary text-white font-semibold text-sm md:text-base px-6 py-2 rounded-md transition">
                    Continue
                </button>
            </div>
        </form>

        <!-- Right Summary and Contact Panel -->
        <div class="space-y-6">
            <!-- Summary Box -->
            <div class="bg-white rounded-md shadow-[0_0_20px_rgba(0,0,0,0.20)] p-6">
                <h3 class="md:text-[16px] text-[12px] font-semibold text-black mb-2">Summary</h3>
                <div class="flex justify-between text-sm text-black">
                    <div>Pickup</div>
                    <div class="font-bold md:text-[16px] text-[12px] min-w-[100px] text-left deliveryLocationFrom">{{ $moving_from }}<br><span class="font-normal">870</span></div>
                </div>
                <div class="flex justify-between mt-2  md:text-[16px] text-[12px] text-black">
                    <div>Delivery</div>
                    <div class="font-bold md:text-[16px] text-[12px]  mb-2 min-w-[100px] text-left deliveryLocationTo ">{{ $moving_to ?? '' }}<br><span class="font-normal">3260</span></div>
                </div>
            </div>

            <!-- Contact Box -->
            <div class="bg-white rounded-md shadow-[0_0_20px_rgba(0,0,0,0.20)] p-6 text-sm text-black">
                <h3 class="font-semibold mb-2">Don't want to fill out a form?</h3>
                <p class="text-primary font-semibold mb-2 address-form-contact"> 1300 465 569</p>
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
<script type="module">
    const notSureCheckbox = $('#not-sure');
    const deliveryLocationFrom = $('.deliveryLocationFrom');
    const deliveryLocationTo = $('.deliveryLocationTo');
    const movingFrom = $('input[name="moving_from"]');
    const movingTo = $('input[name="moving_to"]');

    // Store initial values from server-side Blade
    const initialFrom = "{{ $moving_from ?? '' }}";
    const initialTo = "{{ $moving_to ?? '' }}";

    // Update delivery location on input
    movingFrom.on('input', function() {
        deliveryLocationFrom.text($(this).val());
    });
    movingTo.on('input', function() {
        deliveryLocationTo.text($(this).val());
    });


    notSureCheckbox.on('change', function() {
        const isChecked = this.checked;

        if (isChecked) {
            movingTo
                .val('unsure')
                .attr('disabled', true)
                .addClass('bg-black/5');

            deliveryLocationTo.text('...');
        } else {
            movingFrom.val(initialFrom);
            movingTo
                .val(initialTo)
                .attr('disabled', false)
                .removeClass('bg-black/5');

            deliveryLocationTo.text(initialTo);
        }
    });
</script>

</script>

@endsection