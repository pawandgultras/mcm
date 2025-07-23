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
            <li><span class=" text-black">2. Address</span></li>
            <li><span class=" text-black">›</span></li>
            @if(isset($moving_from))
            <li><span class="text-black font-semibold">3. Property</span></li>
            @else
            return view('Pages.form.address', [
            'moving_from' => '{{ $moving_from }}',
            'moving_to' => '{{ $moving_to }}'
            ]);
            @endif
            <li><span class="text-black">›</span></li>
            <li><span>4. Date</span></li>
            <li><span class="text-black">›</span></li>
            <li><span>5. Details</span></li>
        </ol>
    </nav>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <form action="{{ route('date.form') }}" method="GET" class="md:col-span-2 rounded-md shadow-[0_0_20px_rgba(0,0,0,0.20)] p-6 w-full  mx-auto">

            <input type="hidden" name="moving_from" value="{{ $moving_from ?? '' }}">
            <input type="hidden" name="moving_to" value="{{ $moving_to ?? '' }}">
            <!-- Property Type Selection -->
            <div class="mb-6">
                <h2 class="text-base md:text-lg font-semibold text-black mb-3">What type of property are you moving from?</h2>
                <div class="grid grid-cols-3 md:grid-cols-5 gap-3" id="property-options">
                    @php
                    $propertyTypes = ['Apartment', 'House', 'Office', 'Storage', 'Other'];
                    @endphp
                    @foreach($propertyTypes as $type)
                    <label class="cursor-pointer group">
                        <input type="radio" name="property_type" value="{{ $type }}" class="hidden peer" required onchange="updatePropertyImages()">
                        <div class="flex flex-col items-center border border-gray-300 rounded-md py-2 px-1 text-sm text-black group-hover:bg-primary group-hover:text-white peer-checked:bg-primary peer-checked:text-white transition font-medium">
                            <img src="{{ asset('assets/images/property-icons/' . strtolower($type) . '.webp') }}"
                                data-default="{{ asset('assets/images/property-icons/' . strtolower($type) . '.webp') }}"
                                data-selected="{{ asset('assets/images/property-icons/' . strtolower($type) . '.webp') }}"
                                alt="{{ $type }}" class="h-20 mb-2 icon-image transition">
                            {{ $type }}
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>

            <!-- Room Size Selection -->
            <div class="mb-6">
                <h2 class="text-base md:text-lg font-semibold text-black mb-3" id="room-label">How much stuff are you moving?</h2>
                <div class="grid grid-cols-3 md:grid-cols-6 gap-3" id="room-options">
                    @php
                    $roomOptions = [
                    'Apartment' => ['A Few Items', 'Studio', '1 Bedroom', '2 Bedrooms', '3+ Bedrooms'],
                    'House' => ['A Few Items', '1 Bedroom', '2 Bedrooms', '3 Bedrooms', '4 Bedrooms', '5+ Bedrooms'],
                    'Office' => ['A Few Items', '5-10 Staff', '11-50 Staff', '50+ Staff'],
                    'Storage' => ['A Few Items', 'Contents of a Few Bedrooms', 'Contents of the Entire Home'],
                    'Other' => ['Please provide more details']
                    ];
                    @endphp
                    <!-- JS will populate options based on selection -->
                </div>
            </div>

            <!-- For 'Other' textarea -->
            <div id="otherDetails" class="hidden mb-6">
                <label class="block text-sm font-medium mb-1 text-black">Please provide more details</label>
                <textarea id="otherDetailsInput" name="other_details" rows="4" class="w-full border border-gray-300 rounded-md p-2"></textarea>
            </div>

            <!-- Continue Button -->
            <div class="text-right mt-6">
                <button type="submit" class="bg-primary hover:bg-primary text-white font-semibold text-sm md:text-base px-6 py-2 rounded-md transition">
                    Continue
                </button>
            </div>
        </form>


        <!-- Right Summary and Contact Panel -->
        <div class="space-y-6 md:col-span-1">
            <!-- Summary Box -->
            <div class="bg-white rounded-md shadow-[0_0_20px_rgba(0,0,0,0.20)] p-6">
                <h3 class="md:text-[16px] text-[12px] font-semibold text-black mb-2">Summary</h3>
                <div class="flex justify-between text-sm text-black">
                    <div>Pickup</div>
                    <div class="font-bold md:text-[16px] text-[12px] min-w-[100px] text-left">{{ $moving_from }}<br><span class="font-normal">870</span></div>
                </div>
                <div class="flex justify-between mt-2  md:text-[16px] text-[12px] text-black">
                    <div>Delivery</div>
                    <div class="font-bold md:text-[16px] text-[12px]  mb-2 min-w-[100px] text-left deliveryLocation">{{ $moving_to ?? '' }}<br><span class="font-normal">3260</span></div>
                </div>

                <!-- Dynamic selected type & room -->
                <div class="mt-2">
                    <div class="text-[12px] md:text-[14px] font-normal text-black">
                        <hr>
                        <div class="flex items-start justify-between mt-2">
                            <span class="font-semibold">Moving:</span>
                            <div>
                                <span id="selectedPropertyType" class="block md:text-[16px] text-[12px] font-semibold min-w-[100px]"></span>
                                <span id="selectedRoomSize" class="block md:text-[16px] text-[12px] font-normal min-w-[100px]"></span>
                            </div>
                        </div>
                    </div>
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

<script>
    const roomOptionsMap = {
        'Apartment': ['A Few Items', 'Studio', '1 Bedroom', '2 Bedrooms', '3+ Bedrooms'],
        'House': ['A Few Items', '1 Bedroom', '2 Bedrooms', '3 Bedrooms', '4 Bedrooms', '5+ Bedrooms'],
        'Office': ['A Few Items', '5-10 Staff', '11-50 Staff', '50+ Staff'],
        'Storage': ['A Few Items', 'Contents of a Few Bedrooms', 'Contents of the Entire Home'],
        'Other': ['Please provide more details']
    };

    function updatePropertyImages() {
        const radios = document.querySelectorAll('input[name="property_type"]');
        radios.forEach(radio => {
            const img = radio.closest('label').querySelector('img');
            img.src = radio.checked ? img.dataset.selected : img.dataset.default;
        });

        const selected = document.querySelector('input[name="property_type"]:checked');
        const selectedType = selected ? selected.value : '';
        const roomDiv = document.getElementById('room-options');
        const otherBox = document.getElementById('otherDetails');
        const label = document.getElementById('room-label');

        roomDiv.innerHTML = '';

        const selectedPropertyTypeSpan = document.getElementById('selectedPropertyType');
        const selectedRoomSizeSpan = document.getElementById('selectedRoomSize');

        if (selectedType === 'Other') {
            otherBox.classList.remove('hidden');
            label.classList.add('hidden');
            selectedPropertyTypeSpan.textContent = 'Other';
            let otherDetailsInput = document.getElementById('otherDetailsInput');
            otherDetailsInput.addEventListener('input', function() {
                selectedRoomSizeSpan.textContent = otherDetailsInput.value;
            });
        } else {
            otherBox.classList.add('hidden');
            label.classList.remove('hidden');
            selectedPropertyTypeSpan.textContent = selectedType;

            // Add room options
            (roomOptionsMap[selectedType] || []).forEach(option => {
                const id = 'room_' + option.replace(/\s+/g, '_');
                roomDiv.innerHTML += `
                <label class="cursor-pointer group">
                    <input type="radio" name="room_size" value="${option}" class="hidden peer" required onchange="updateSelectedRoom('${option}')">
                    <div class="border border-gray-300 rounded-md text-center py-2 px-1 text-xs md:text-sm text-black group-hover:bg-primary group-hover:text-white peer-checked:bg-primary peer-checked:text-white transition font-medium">
                        ${option}
                    </div>
                </label>
            `;
            });

            // Reset room size display
            selectedRoomSizeSpan.textContent = '';
        }
    }

    function updateSelectedRoom(value) {
        document.getElementById('selectedRoomSize').textContent = value;
    }
    // Call once on page load if needed
    document.addEventListener('DOMContentLoaded', updatePropertyImages);
</script>

</script>

@endsection