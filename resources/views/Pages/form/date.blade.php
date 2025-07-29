@extends('Pages.layouts.app')
@section('metadata')
<title> MCM - Date Form</title>
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
            <li><span>Removals</span></li>
            <li><span class="text-black">›</span></li>
            <li><span class=" text-black">Address</span></li>
            <li><span class=" text-black">›</span></li>
            <li><span class="text-black">Property</span></li>
            <li><span class="text-black">›</span></li>
            @if(isset($moving_from) && isset($moving_to) )
            <li><span class="text-black font-semibold">Date</span></li>
            @else
            return view('Pages.form.property', [
            'moving_from' => '{{ $moving_from }}',
            'moving_to' => '{{ $moving_to }}',
            ]);
            @endif
            <li><span class="text-black">›</span></li>
            <li><span>Details</span></li>
        </ol>
    </nav>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <form action="{{ route('details.form') }}" method="GET" class="md:col-span-2 rounded-md shadow-[0_0_20px_rgba(0,0,0,0.20)] p-6 w-full mx-auto">
            <input type="hidden" name="moving_from" value="{{ $moving_from ?? '' }}">
            <input type="hidden" name="moving_to" value="{{ $moving_to ?? '' }}">
            <input type="hidden" name="property_type" value="{{ $property_type ?? '' }}">
            <input type="hidden" name="property_size" value="{{ $property_size ?? '' }}">
            <input type="hidden" name="other_details" value="{{ $other_details ?? '' }}">
            <input type="hidden" name="final_moving_date" id="final_moving_date" value="">

            <!-- Date Type Selection -->
            <div class="mb-6">
                <h2 class="text-base md:text-lg font-semibold text-black mb-3">When are you planning to move?</h2>
                <div class="grid grid-cols-3 md:grid-cols-4 gap-4" id="property-options">
                    @php
                    $propertyTypes = ['Specific Date'];
                    @endphp
                    @foreach($propertyTypes as $type)
                    <label class="cursor-pointer group">
                        <input type="radio" name="moving_date" value="{{ $type }}" class="hidden peer" required>
                        <div class="flex flex-col items-center border border-gray-300 rounded-md py-6 px-1 text-sm text-black group-hover:bg-primary group-hover:text-white peer-checked:bg-primary peer-checked:text-white transition font-medium">
                            <img src="{{ asset('assets/images/property-icons/' . $type . '.png') }}"
                                data-default="{{ asset('assets/images/property-icons/' . $type . '.png') }}"
                                data-selected="{{ asset('assets/images/property-icons/' . $type . ' white' . '.png') }}"
                                alt="{{ $type }}" class="h-12 mb-2 icon-image transition">
                            {{ $type }}
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>

            <div id="datePickerContainer" class="mt-4 hidden">
                <label for="specific_date" class="block text-sm font-medium text-black mb-1">
                    Select a specific date:
                </label>
                <input
                    type="date"
                    id="specific_date"
                    name="specific_date"
                    class="w-full border border-gray-300 max-w-[300px] rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary"
                    placeholder="DD-MM-YYYY"
                    onfocus="this.showPicker && this.showPicker()">
            </div>


            <!-- Submit Button -->
            <div class="text-right mt-10">
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
                                <span id="selectedPropertyType" class="block md:text-[16px] text-[12px] font-semibold min-w-[100px]">{{ $property_type ?? '' }}</span>
                                <span id="selectedRoomSize" class="block md:text-[16px] text-[12px] font-normal min-w-[100px]">{{ $property_size ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- date selected type & room -->
                <div class="mt-2">
                    <div class="text-[12px] md:text-[14px] font-normal text-black">
                        <hr>
                        <div class="flex items-start justify-between mt-2">
                            <span class="font-semibold">Date:</span>
                            <div>
                                <span id="selectedDate" class="block md:text-[16px] text-[12px] font-semibold min-w-[100px]">{{ $date ?? '' }}</span>
                                <span id="specificDate" class="block md:text-[16px] text-[12px] font-normal min-w-[100px]">{{ $specificDate ?? '' }}</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dateInput = document.getElementById("specific_date");
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');

        const minDate = `${yyyy}-${mm}-${dd}`;
        dateInput.setAttribute("min", minDate);

        // Optional: Trigger native calendar popup on page load or focus
        dateInput.addEventListener('focus', () => {
            if (dateInput.showPicker) {
                dateInput.showPicker();
            }
        });
    });
</script>
<script type="module">
    document.addEventListener('DOMContentLoaded', function () {
    const radios = document.querySelectorAll('input[name="moving_date"]');
    const dateOutput = document.getElementById('selectedDate');
    const specificDate2 = document.getElementById('specificDate');
    const finalDateInput = document.getElementById('final_moving_date');

    function updateDateSelection() {
        radios.forEach(radio => {
            const img = radio.closest('label').querySelector('img');
            if (radio.checked) {
                img.src = img.dataset.selected;

                if (radio.value !== 'Specific Date') {
                    dateOutput.textContent = radio.value;
                    document.getElementById('datePickerContainer').classList.add('hidden');
                    const specificDate = document.getElementById('specific_date');
                    specificDate.required = false;
                    specificDate.value = '';
                    specificDate2.textContent = '';
                    finalDateInput.value = radio.value; // Send this to webhook
                } else {
                    document.getElementById('datePickerContainer').classList.remove('hidden');
                    const specificDate = document.getElementById('specific_date');
                    dateOutput.textContent = '';
                    specificDate.required = true;

                    specificDate.addEventListener('change', function () {
                        const date = new Date(this.value);
                        const options = { day: 'numeric', month: 'long', year: 'numeric' };
                        const formattedDate = date.toLocaleDateString('en-US', options);
                        specificDate2.textContent = formattedDate;
                        finalDateInput.value = this.value; // YYYY-MM-DD format
                    });
                }
            } else {
                img.src = img.dataset.default;
            }
        });
    }

    radios.forEach(radio => {
        radio.addEventListener('change', updateDateSelection);
    });

    updateDateSelection();
});
</script>

@endsection