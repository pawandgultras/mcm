@extends('Pages.layouts.app')
@section('metadata')
<title> MCM - Details Form</title>
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
            <li><span class="text-black ">Date</span></li>
            <li><span class="text-black">›</span></li>
            @if(isset($moving_from) && isset($moving_to) && isset($moving_date))
            <li><span class="font-semibold text-black">Details</span></li>
            @else
            return view('Pages.form.date', [
            'moving_from' => '{{ $moving_from }}',
            'moving_to' => '{{ $moving_to }}',
            'moving_date' => '{{ $moving_date }}',
            ]);
            @endif
        </ol>
    </nav>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">


        <form action="{{ route('submit.details') }}" method="post" class="col-span-2 mx-auto bg-white shadow-[0_0_20px_rgba(0,0,0,0.20)] rounded-md p-6">
            @csrf
            <input type="hidden" name="moving_from" value="{{ $moving_from ?? '' }}">
            <input type="hidden" name="moving_to" value="{{ $moving_to ?? '' }}">
            <input type="hidden" name="property_type" value="{{ $property_type ?? '' }}">
            <input type="hidden" name="moving_date" value="{{ $moving_date ?? '' }}">
            <input type="hidden" name="specific_date" value="{{ $specific_date ?? '' }}">
            <input type="hidden" name="other_details" value="{{ $other_details ?? '' }}">
            <!-- 1. Enquiry Details -->
            <div>
                <h2 class="md:text-[20px] text-[15px] font-semibold mb-6">1. Enquiry Details</h2>

                <div x-data="{ enquiry: 'I\'m Ready to Book' }" class="space-y-2">

                    <!-- Enquiry Radio Buttons -->
                    <div class="flex flex-wrap gap-4">
                        <label class="flex items-center gap-2 px-3 py-1 border rounded-full cursor-pointer"
                            :class="enquiry === 'I\'m Ready to Book' ? 'border-blue-500 text-blue-600 bg-blue-50' : 'border-gray-300'">
                            <input type="radio" name="enquiry" value="I'm Ready to Book" class="sr-only" x-model="enquiry">
                            <span>I'm Ready to Book</span>
                        </label>

                        <label class="flex items-center gap-2 px-3 py-1 border rounded-full cursor-pointer"
                            :class="enquiry === 'Looking for Quotes' ? 'border-blue-500 text-blue-600 bg-blue-50' : 'border-gray-300'">
                            <input type="radio" name="enquiry" value="Looking for Quotes" class="sr-only" x-model="enquiry">
                            <span>Looking for Quotes</span>
                        </label>

                        <label class="flex items-center gap-2 px-3 py-1 border rounded-full cursor-pointer"
                            :class="enquiry === 'I Need Assistance' ? 'border-blue-500 text-blue-600 bg-blue-50' : 'border-gray-300'">
                            <input type="radio" name="enquiry" value="I Need Assistance" class="sr-only" x-model="enquiry">
                            <span>I Need Assistance</span>
                        </label>
                    </div>

                    <!-- Conditionally Shown Section -->
                    <div x-show="enquiry === 'Looking for Quotes'" x-transition>
                        <h2 class="text-md font-semibold">What Quote Do You Prefer?</h2>
                        <div class="flex flex-wrap gap-4 mt-2">
                            <label class="flex items-center gap-2 px-3 py-1 border rounded-full cursor-pointer">
                                <input type="radio" name="quote_type" value="Hourly Quote" class="form-radio text-blue-500">
                                <span>Hourly Quote</span>
                            </label>
                            <label class="flex items-center gap-2 px-3 py-1 border rounded-full cursor-pointer">
                                <input type="radio" name="quote_type" value="Fixed Quote" class="form-radio text-blue-500">
                                <span>Fixed Quote</span>
                            </label>
                            <label class="flex items-center gap-2 px-3 py-1 border rounded-full cursor-pointer">
                                <input type="radio" name="quote_type" value="Unsure" class="form-radio text-blue-500">
                                <span>Unsure</span>
                            </label>
                        </div>
                    </div>
                </div>

                <p class="md:text-[16px] text-[12px] font-semibold mb-2 mt-6">Have You Made A Booking With Us Before?</p>
                <div class="flex gap-6">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="previous_booking" class="form-radio text-primary">
                        <span>Yes</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="previous_booking" class="form-radio text-primary" checked>
                        <span>No</span>
                    </label>
                </div>
            </div>

            <!-- 2. Contact Details -->
            <div>
                <h2 class="md:text-[20px] text-[15px] font-semibold mb-4 mt-6">2. Contact Details</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="first_name" placeholder="First Name" class="border rounded-md p-2 w-full" value="">
                    <input type="text" name="last_name" placeholder="Last Name" class="border rounded-md p-2 w-full" value="">
                    <input type="email" name="email" placeholder="Email" class="border rounded-md p-2 w-full md:col-span-1" value="">
                    <div class="flex gap-2 md:col-span-1">
                        <span class="border rounded-md p-2 bg-gray-100">AU</span>
                        <input type="tel" name="mobile_number" placeholder="Mobile Number" class="border rounded-md p-2 w-full" value="">
                    </div>
                </div>
            </div>

            <div class="">
                <h2 class="md:text-[20px] text-[12px] font-semibold mb-1 mt-6">
                    3. Is There Anything Else We Can Do To Make Your Move Stress-Free?
                </h2>
                <p class=" text-sm text-gray-500">
                    Make your move smoother with add-ons like packing, insurance, and storage tailored to your needs.
                </p>

                <div class="flex flex-col gap-4 mt-4">
                    <!-- Packing -->
                    <div>
                        <input type="checkbox" id="addon_packing" name="addons[]" value="packing" class="sr-only peer">
                        <label for="addon_packing"
                            class="flex items-start gap-3 border rounded-md p-4 cursor-pointer transition-all duration-200 peer-checked:border-primary peer-checked:bg-primary/10 hover:shadow-sm">

                            <!-- Content -->
                            <div>
                                <p class="font-semibold">Packing</p>
                                <p class="text-sm text-gray-600">Save time with expert packing and unpacking to protect your items during the
                                    move.</p>
                            </div>
                        </label>
                    </div>

                    <!-- Insurance -->
                    <div>
                        <input type="checkbox" id="addon_insurance" name="addons[]" value="insurance" class="sr-only peer">
                        <label for="addon_insurance"
                            class="flex items-start gap-3 border rounded-md p-4 cursor-pointer transition-all duration-200 peer-checked:border-primary peer-checked:bg-primary/10 hover:shadow-sm">

                            <div>
                                <p class="font-semibold flex items-center gap-2">
                                    Insurance
                                   
                                </p>
                                <p class="text-sm text-gray-600">Get peace of mind with coverage for your belongings during transit and
                                    storage.</p>
                            </div>
                        </label>
                    </div>

                    <!-- Storage -->
                    <div>
                        <input type="checkbox" id="addon_storage" name="addons[]" value="storage" class="sr-only peer hidden">
                        <label for="addon_storage"
                            class="flex items-start gap-3 border rounded-md p-4 cursor-pointer transition-all duration-200 peer-checked:border-primary peer-checked:bg-primary/10 hover:shadow-sm">
                            <div>
                                <p class="font-semibold">Storage</p>
                                <p class="text-sm text-gray-600">Secure storage options for items before, during, or after your move.</p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>



            <!-- 4. Preferred Contact Window -->
            <div>
                <h2 class="md:text-[20px] text-[12px] font-semibold mb-2 mt-6">4. Preferred Contact Window</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                    <!-- Morning -->
                    <input type="radio" name="contact_time" id="contact_morning" value="morning" class="peer/morning hidden" />
                    <label for="contact_morning"
                        class="peer-checked/morning:border-primary peer-checked/morning:bg-primary/10 border rounded-md p-4 text-center cursor-pointer transition-all duration-200">
                        <div class="space-y-2">
                            <div class="text-2xl">🌤️</div>
                            <p class="font-semibold">Morning</p>
                            <p class="text-sm text-gray-600">From 8am–12pm</p>
                        </div>
                    </label>

                    <!-- Afternoon -->
                    <input type="radio" name="contact_time" id="contact_afternoon" value="afternoon" class="peer/afternoon hidden" />
                    <label for="contact_afternoon"
                        class="peer-checked/afternoon:border-primary peer-checked/afternoon:bg-primary/10 border rounded-md p-4 text-center cursor-pointer transition-all duration-200">
                        <div class="space-y-2">
                            <div class="text-2xl">☀️</div>
                            <p class="font-semibold">Afternoon</p>
                            <p class="text-sm text-gray-600">From 12pm–5pm</p>
                        </div>
                    </label>

                    <!-- Evening -->
                    <input type="radio" name="contact_time" id="contact_evening" value="evening" class="peer/evening hidden" />
                    <label for="contact_evening"
                        class="peer-checked/evening:border-primary peer-checked/evening:bg-primary/10 border rounded-md p-4 text-center cursor-pointer transition-all duration-200">
                        <div class="space-y-2">
                            <div class="text-2xl">🌙</div>
                            <p class="font-semibold">Evening</p>
                            <p class="text-sm text-gray-600">After 5pm</p>
                        </div>
                    </label>

                </div>
            </div>


            <!-- Submit -->
            <div class="text-right mt-6">
                <button class="bg-primary hover:bg-white text-white hover:text-primary hover:border-primary hover:border px-6 py-2 rounded-md font-medium">
                    Get My Quote
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
                                <span id="selectedDate" class="block md:text-[16px] text-[12px] font-semibold min-w-[100px]">{{ $moving_date != 'Specific Date' ? $moving_date : '' }}</span>
                                <span id="specificDate" class="block md:text-[16px] text-[12px] font-normal min-w-[100px]">{{ $specific_date ?? '' }}</span>

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
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')


</script>

@endsection