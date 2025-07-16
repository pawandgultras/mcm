@extends('Pages.layouts.app')
@section('metadata')
<title> MCM -Local Removalists in Melbourne</title>

<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">


@endsection

@section('content')
<section class="bg-white text-black py-12 md:mt-10 mt-20">
    <div class="max-w-7xl mx-auto md:px-4 sm:px-6 ">
        <div class="grid grid-rows-1 md:grid-cols-5 gap-10 items-center">

            <!-- Left Content -->
            <div class="space-y-8 col-span-3">


                <x-heading-subheading
                    mainClass="services-heading-main_div"
                    headingClass="services-heading"
                    subheadingClass="services-subheading "
                    heading="Local Removalists"
                    subheading="Our friendly team of local removalists handle the heavy lifting so that you can enjoy making your new house a home." />


                <!-- Quote Form -->
                <div class="bg-primary rounded-full px-10 py-4 max-w-2xl">
                    <div class="flex flex-col md:flex-row gap-4 items-end">
                        <!-- Moving From -->
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-black mb-2">Moving from</label>
                            <input type="text" placeholder="Enter Location" class="w-full py-2 px-4 rounded-md outline-none text-black placeholder-gray-500 focus:ring-2 focus:ring-black/20">
                        </div>

                        <!-- Moving To -->
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-black mb-2">Moving to</label>
                            <input type="text" placeholder="Enter Location" class="w-full py-2 px-4 rounded-md outline-none text-black placeholder-gray-500 focus:ring-2 focus:ring-black/20">
                        </div>

                        <!-- Quote Button -->
                        <div class="flex-shrink-0">
                            <button class="bg-black text-white px-6 py-2 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition whitespace-nowrap font-medium">
                                Get a Free Quote
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service Links -->
                <div class="flex flex-wrap gap-6 pt-2 px-6">
                    <a href="#" class="text-black font-semibold text-xl border-b-2 border-black pb-1 hover:text-primary hover:border-primary transition">
                        Interstate
                    </a>
                    <a href="#" class="text-black font-semibold text-xl border-b-2 border-black pb-1 hover:text-primary hover:border-primary transition">
                        Business
                    </a>
                    <a href="#" class="text-black font-semibold text-xl border-b-2 border-black pb-1 hover:text-primary hover:border-primary transition">
                        Storage
                    </a>
                </div>

                <section class="bg-white text-black md:py-8 ">
                    <div class="max-w-6xl mx-auto m:px-4 sm:px-6 text-start">

                        <!-- Top Ratings -->
                        <div class="flex flex-wrap items-center justify-start md:gap-4 sm:gap-6 mb-6 text-sm">
                            <!-- Experience -->
                            <div class="text-start">
                                <p class="text-primary font-semibold md:text-lg sm:text-base">10 Years</p>
                                <p class="text-black font-medium md:text-lg sm:text-sm">Experience</p>
                            </div>
                            <div class="border-[1.5px] border-primary h-16"></div>

                            <!-- Google Rating -->
                            <div class="flex items-center gap-2">
                                <div class="flex flex-col items-center gap-0">
                                    <span class="text-yellow-500 md:text-xl sm:text-base">★★★★★</span>
                                    <span class="text-black md:text-xl sm:text-sm">(4.2) 166</span>
                                </div>
                                <img src="{{ asset('assets/images/allImages/Google.webp') }}" alt="Google" class="md:h-16 sm:h-10">
                            </div>
                            <div class="border-[1.5px] border-primary h-12"></div>

                            <!-- Trustpilot -->
                            <div class="flex items-center">
                                <img src="{{ asset('assets/images/allImages/Trustpilot.webp') }}" alt="Trustpilot" class="md:h-16 w-32 sm:h-12 ">
                            </div>
                        </div>

                    </div>


                </section>
            </div>



            <!-- Right Content - Truck Image -->
            <div class="col-span-2 ">
                <img src="{{ asset('assets/images/servicesImages/Local Removalists.webp') }}" alt="Melbourne Central Movers Truck" class="w-full h-auto rounded-lg shadow-lg">

                <!-- Optional: Add some decorative elements -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-primary rounded-full opacity-20"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-primary rounded-full opacity-30"></div>
            </div>

        </div>
    </div>
</section>

<section class="py-10 bg-white text-center">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-3">Our Moving Services</h2>
        <p class="text-sm text-gray mb-6">
            Our team’s goal is to deliver a standard of excellence that surpasses customer expectations and delivers on service, quality
            and value. You can place your trust in our professional team to remove the stress and make your move easy.
        </p>

        <!-- Progress Bar -->
        <div class="h-2 w-full bg-black relative mb-6">
            <div id="slick-progress" class="absolute top-0 left-0 h-2 bg-primary transition-all duration-300" style="width: 0%"></div>
        </div>

        <!-- Slick Slider -->
        <div class="slick-moving-services relative">
            <!-- Slide 1 -->
            <div class="px-2">
                <div class="relative rounded-md overflow-hidden shadow-md h-72">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="House Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-white text-lg font-semibold mb-1 italic">House Moving</h3>
                        <p class="text-white text-sm mb-2">Safe and efficient moving for homes of all sizes.</p>
                        <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
                    </div>
                </div>

            </div>

            <div class="px-2">
                <div class="relative rounded-md overflow-hidden shadow-md h-72">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 2.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-white text-lg font-semibold mb-1 italic">Packing Services</h3>
                        <p class="text-white text-sm mb-2">Full or partial packing with quality materials and care.</p>
                        <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
                    </div>
                </div>

            </div>

            <div class="px-2">
                <div class="relative rounded-md overflow-hidden shadow-md h-72">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 3.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-white text-lg font-semibold mb-1 italic">Packing Services</h3>
                        <p class="text-white text-sm mb-2">Full or partial packing with quality materials and care.</p>
                        <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
                    </div>
                </div>

            </div>

            <div class="px-2">
                <div class="relative rounded-md overflow-hidden shadow-md h-72">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 4.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-white text-lg font-semibold mb-1 italic">Packing Services</h3>
                        <p class="text-white text-sm mb-2">Full or partial packing with quality materials and care.</p>
                        <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
                    </div>
                </div>

            </div>

            <div class="px-2">
                <div class="relative rounded-md overflow-hidden shadow-md h-72">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-white text-lg font-semibold mb-1 italic">Packing Services</h3>
                        <p class="text-white text-sm mb-2">Full or partial packing with quality materials and care.</p>
                        <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



</section>

<!-- What Makes Us the Best Removalists Section -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 ">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                What Makes Us the Best Removalists in Melbourne?
            </h2>
            <p class="text-lg text-primary font-medium max-w-3xl mx-auto">
                At MCM, we don't just move furniture — we move lives. Here's why our clients trust us time and again.
            </p>
        </div>

        <!-- Benefits Grid - 3 columns, 2 rows -->
        <div class="grid md:grid-cols-3 md:grid-rows-3 gap-6">

            <!-- Friendly & Professional -->
            <div class="benefit-card bg-white border-2 border-primary rounded-lg p-3 text-center hover:shadow-lg transition-shadow md:col-span-1 md:row-span-2 relative" data-card="friendly">
                <div class="flex justify-center mb-2">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/servicesImages/Friendly & Professional.webp') }}" alt="Friendly & Professional" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 text-center">Friendly & Professional</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 block">
                    Moving can be overwhelming, but not with MCM. We make it feel easy with our friendly team, smart planning, and professional handling. Whether you're moving across the street or across town, we treat every job with care — big or small.
                </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs  text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See less
                    </button>
                </div>
            </div>

            <!-- End-to-End Moving Solutions -->
            <div class="benefit-card bg-white border-2 border-primary rounded-lg p-3 text-center hover:shadow-lg transition-shadow md:col-span-1 md:row-span-1 relative" data-card="solutions">
                <div class="flex justify-center mb-2">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/servicesImages/End-to-End Moving Solutions.webp') }}" alt="End-to-End Moving Solutions" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 text-center">End-to-End Moving Solutions</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    From packing to unpacking, we handle every aspect of your move with precision and care. Our comprehensive service ensures nothing is left to chance.
                </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See more
                    </button>
                </div>
            </div>

            <!-- Local Know-How -->
            <div class="benefit-card bg-white border-2 border-primary rounded-lg p-3 text-center hover:shadow-lg transition-shadow md:col-span-1 md:row-span-1 relative" data-card="knowhow">
                <div class="flex justify-center mb-2">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/servicesImages/Local Know-How.webp') }}" alt="Local Know-How" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 text-center">Local Know-How</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Melbourne experts who know the city inside and out for efficient, stress-free moves. We understand local regulations and the best routes.
                </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See more
                    </button>
                </div>
            </div>

            <!-- People-Focused Approach -->
            <div class="benefit-card bg-white border-2 border-primary rounded-lg p-3 text-center hover:shadow-lg transition-shadow md:col-span-1 md:row-span-1 relative" data-card="people">
                <div class="flex justify-center mb-2">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/servicesImages/People-Focused Approach.webp') }}" alt="People-Focused Approach" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 text-center">People-Focused Approach</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We put people first, treating your belongings and your home with the utmost respect and care. Your satisfaction is our priority.
                </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See more
                    </button>
                </div>
            </div>

            <!-- Flexible & Transparent -->
            <div class="benefit-card bg-white border-2 border-primary rounded-lg p-3 text-center hover:shadow-lg transition-shadow md:col-span-1 md:row-span-1 relative" data-card="flexible">
                <div class="flex justify-center mb-2">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/servicesImages/Flexible & Transparent.webp') }}" alt="Flexible & Transparent" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 text-center">Flexible & Transparent</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    No hidden fees, flexible scheduling, and transparent pricing you can trust. We believe in honest, upfront communication.
                </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See more
                    </button>
                </div>
            </div>

            <!-- Customised for You -->
            <div class="benefit-card bg-white border-2 border-primary rounded-lg p-3 text-center hover:shadow-lg transition-shadow md:col-span-1 md:row-span-1 relative" data-card="customised">
                <div class="flex justify-center mb-2">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/servicesImages/Customised for You.webp') }}" alt="Customised for You" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 text-center">Customised for You</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Tailored moving solutions designed to meet your specific needs and requirements. Every move is unique, and so is our approach.
                </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See more
                    </button>
                </div>
            </div>
            <!-- Customised for You -->
            <div class="benefit-card bg-white border-2 border-primary rounded-lg p-3 text-center hover:shadow-lg transition-shadow md:col-span-1 md:row-span-1 relative" data-card="customised">
                <div class="flex justify-center mb-2">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/servicesImages/Fast. Careful. Affordable..webp') }}" alt="Customised for You" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 text-center">Fast. Careful. Affordable.</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Tailored moving solutions designed to meet your specific needs and requirements. Every move is unique, and so is our approach.
                </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See more
                    </button>
                </div>
            </div>
            <!-- Customised for You -->
            <div class="benefit-card bg-white border-2 border-primary rounded-lg p-3 text-center hover:shadow-lg transition-shadow md:col-span-1 md:row-span-1 relative" data-card="customised">
                <div class="flex justify-center mb-2">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center">
                        <img src="{{ asset('assets/images/servicesImages/Your Move, Our Mission.webp') }}" alt="Your Move, Our Mission" class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 text-center">Your Move, Our Mission</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Tailored moving solutions designed to meet your specific needs and requirements. Every move is unique, and so is our approach.
                </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See more
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-6 bg-gray mb-6">
    <div class="max-w-5xl  mx-auto px-12 py-6 flex flex-col md:flex-row items-center justify-between gap-6 text-center">

        <!-- Call Section -->
        <div class="flex flex-row items-center space-y-1 space-x-2">
            <div class="">
                <img src="{{ asset('assets/images/servicesImages/Need Help to Moving.webp') }}" alt="Phone Icon" class="w-16 h-16 object-cover rounded-full" />
            </div>
            <div class="text-start text-white">
                <p class="text-sm font-medium">Need Help to Moving?</p>
                <p class="font-bold text-lg">Call - 1300 163 694</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="flex flex-row items-center space-y-1 space-x-2">
            <div class="">
                <img src="{{ asset('assets/images/servicesImages/MCM Removalists.webp') }}" alt="Truck Icon" class="w-16 h-16 object-cover rounded-full" />
            </div>
            <div class="text-start text-white">
                <p class="text-sm font-medium">MCM Removalists</p>
                <p class="font-bold text-lg">Contact Us Now!</p>
            </div>
        </div>

        <!-- Quote Section -->
        <div class="flex flex-row items-center space-y-1 space-x-2">
            <div class="">
                <img src="{{ asset('assets/images/servicesImages/Request Online Quote.webp') }}" alt="Quote Icon" class="w-16 h-16 object-cover rounded-full" />
            </div>
            <div class="text-start text-white">
                <p class="text-sm font-medium ">Click Here!</p>
                <p class="font-bold text-lg">Request Online Quote</p>
            </div>

        </div>
    </div>
</section>

<section class="px-4 sm:px-6 md:px-8  py-6 sm:py-8 lg:py-10">
    <div class="grid md:grid-cols-2 gap-8 sm:gap-10  items-start mx-auto max-w-5xl">
        <!-- Left: Text Content -->
        <div>
            <!-- Heading -->
            <h2 class="text-3xl font-bold text-black mb-3">What Can We Move?</h2>
            <p class="text-primary text-[17px] mb-1 font-medium">
                MCM can handle all your removalist requirements.
            </p>
            <p class="text-primary text-[17px] mb-6 font-medium">
                Here are just some of the items we can move for you.
            </p>

            <!-- Checklist (text only, no icons) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 text-black text-[16px] whatCanWeMove">
                <p>Pool tables</p>
                <p>Large screen TVs</p>
                <p>Bulky items</p>
                <p>Antique items</p>
                <p>Fragile items</p>
                <p>Heavy glass tables</p>
                <p>Heavy furniture</p>
                <p>Expensive furniture</p>
                <p>Pianos Heavy</p>
                <p>Pot Plants</p>
                <p>Glass tables</p>
            </div>

            <!-- Business Hours -->
            <div class="mt-10">
                <button class="bg-primary text-black py-3 px-6 rounded-md text-xl font-medium hover:bg-white hover:text-primary hover:border-primary hover:border">Get a Quote</button>
            </div>
        </div>

        <!-- Right: Image Boxes (without images) -->
        <div class="relative min-h-[500px]">
            <div class="absolute top-0 right-0 w-2/4 rounded-lg overflow-hidden z-20 shadow-lg bg-gray-200 ">

                <img src="{{ asset('assets/images/allImages/What Can We Move- Back.webp') }}" alt="..." class="w-full h-auto object-cover">
            </div>

            <!-- Green Background Box -->
            <div class="absolute top-28 right-20 w-2/4 h-80 bg-primary rounded-md z-10"></div>

            <!-- Bottom Image Placeholder -->
            <div class="absolute top-48 left-24 rounded-lg overflow-hidden z-30 shadow-lg bg-gray-200 w-[300px] h-auto">
                <img src="{{ asset('assets/images/allImages/What Can We Move- Front.webp') }}" alt="..." class="w-full h-auto object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Moving Process Section -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">
                Moving Process
            </h2>
            <p class="text-lg text-primary font-medium">
                Effortless Move, Simplify Process
            </p>
        </div>
        <div class="grid md:grid-cols-5 gap-8 items-start">
            <div class="space-y-0 col-span-2">
                <div class="process-item bg-white rounded-lg py-2 px-4 cursor-pointer transition-all" data-step="contact">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-black">Contact us & Quotation</h3>
                        <div class="w-12 h-auto flex items-center justify-center activeshow">
                            <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                        <div class="w-12 h-auto flex items-center justify-center inactiveshow hidden">
                            <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                    </div>
                    <div class="mt-1 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-primary rounded w-full"></div>
                    </div>
                </div>

                <div class="process-item bg-white rounded-lg py-2 px-4 cursor-pointer transition-all" data-step="booking">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-black">Booking</h3>
                        <div class="w-12 h-auto flex items-center justify-center activeshow">
                            <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                        <div class="w-12 h-auto flex items-center justify-center inactiveshow hidden">
                            <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                    </div>
                    <div class="mt-1 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray rounded w-0"></div>
                    </div>
                </div>

                <div class="process-item bg-white rounded-lg py-2 px-4 cursor-pointer transition-all" data-step="before">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-black">Before Moving Day</h3>
                        <div class="w-12 h-auto flex items-center justify-center activeshow">
                            <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                        <div class="w-12 h-auto flex items-center justify-center inactiveshow hidden">
                            <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                    </div>
                    <div class="mt-1 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray rounded w-0"></div>
                    </div>
                </div>

                <!-- Moving Day -->
                <div class="process-item bg-white rounded-lg py-2 px-4 cursor-pointer transition-all" data-step="moving">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-black">Moving Day</h3>
                        <div class="w-12 h-auto flex items-center justify-center activeshow">
                            <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                        <div class="w-12 h-auto flex items-center justify-center inactiveshow hidden">
                            <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                    </div>
                    <div class="mt-1 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray rounded w-0"></div>
                    </div>
                </div>

                <!-- After the move -->
                <div class="process-item bg-white rounded-lg py-2 px-4 cursor-pointer transition-all" data-step="after">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-black">After the move</h3>
                        <div class="w-12 h-auto flex items-center justify-center activeshow">
                            <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                        <div class="w-12 h-auto flex items-center justify-center inactiveshow hidden">
                            <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Contact us & Quotation Icon">
                        </div>
                    </div>
                    <div class="mt-1 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray rounded w-0"></div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Content Display -->
            <div class="bg-gray-50 rounded-lg p-6 min-h-[400px] relative col-span-3 shadow-[0_4px_30px_rgba(0,0,0,0.25)]">
                <!-- Box Icons -->
                <div class="absolute top-4 left-4">
                    <div class="w-8 h-8 bg-orange-400 rounded transform rotate-12 opacity-80"></div>
                </div>
                <div class="absolute bottom-4 right-4">
                    <div class="w-6 h-6 bg-orange-400 rounded transform -rotate-12 opacity-60"></div>
                </div>

                <!-- Content for Contact us & Quotation -->
                <div class="process-content active" data-content="contact">
                    <ul class="space-y-3 text-gray">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Contact us for price by <span class="text-primary font-semibold">filling out the form</span> or call us <span class="text-primary font-semibold">1300 163 694</span> or via <span class="text-primary font-semibold">facebook</span>.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Our sales representative will contact you within 30 minutes to take your requirements and ask questions about your move.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Once we gather enough information, our sales staff will then make the best suggestion regarding the following: truck size, pricing and general suggestions. Our staff will give you enough information to make an informed decision and to make you feel comfortable booking in a move with us on the spot.</span>
                        </li>
                    </ul>
                </div>

                <!-- Content for Booking -->
                <div class="process-content" data-content="booking">
                    <ul class="space-y-3 text-gray">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Once you decide to book with us, we'll secure your preferred moving date and time slot.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>We'll send you a confirmation email with all the details including crew information and contact numbers.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>A deposit may be required to secure your booking, with the balance due on completion of the move.</span>
                        </li>
                    </ul>
                </div>

                <!-- Content for Before Moving Day -->
                <div class="process-content" data-content="before">
                    <ul class="space-y-3 text-gray">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>We'll call you 24-48 hours before your move to confirm all details and answer any questions.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Pack and prepare your belongings, or let us handle the packing for you with our professional packing service.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Ensure parking permits are arranged if required, and clear pathways for easy access.</span>
                        </li>
                    </ul>
                </div>

                <!-- Content for Moving Day -->
                <div class="process-content" data-content="moving">
                    <ul class="space-y-3 text-gray">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Our professional team arrives on time, ready to handle your move with care and efficiency.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>We'll wrap and protect your furniture, load everything safely, and transport to your new location.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Upon arrival, we'll unload and place items in their designated rooms as per your instructions.</span>
                        </li>
                    </ul>
                </div>

                <!-- Content for After the move -->
                <div class="process-content" data-content="after">
                    <ul class="space-y-3 text-gray">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>We'll do a final walkthrough with you to ensure everything is in its right place.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>Payment is collected upon completion, and we'll provide you with a receipt for your records.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span>We'll follow up within a few days to ensure you're completely satisfied with our service.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section
    class="text-center text-black py-12 px-4 bg-cover bg-center bg-no-repeat my-10"
    style="background-image: url('{{ asset('assets/images/allImages/Since opening in Melbourne in 2004.webp') }}');">
    <h2 class="text-2xl md:text-3xl font-bold mb-10">
        Since opening in Melbourne in 2004
    </h2>

    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 mt-4">
        <!-- Local Moves -->
        <div>
            <p class="text-2xl font-bold">10,000+</p>
            <p class="font-semibold text-sm mt-2">Local Melbourne Home Moves</p>
        </div>
        <!-- Business Relocations -->
        <div>
            <p class="text-2xl font-bold">1000+</p>
            <p class="font-semibold text-sm mt-2">Melbourne Business Relocations</p>
        </div>
        <!-- Interstate Moves -->
        <div>
            <p class="text-2xl font-bold">5,000+</p>
            <p class="font-semibold text-sm mt-2">Interstate Moves to Melbourne</p>
        </div>
    </div>

    <!-- CTA Buttons -->
    <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mb-12">
        <button class="flex items-center gap-2 px-6 py-3 text-primary font-semibold border border-primary rounded-md bg-white hover:bg-primary hover:text-white transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1.003 1.003 0 011.11-.21c1.12.45 2.33.69 3.48.69a1 1 0 011 1v3.5a1 1 0 01-1 1C10.02 21.97 2 13.95 2 4.5a1 1 0 011-1H6.5a1 1 0 011 1c0 1.15.24 2.36.69 3.48a1 1 0 01-.21 1.11l-2.2 2.2z" />
            </svg>
            1300 163 694
        </button>
        <button class="px-6 py-3 bg-primary text-white rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition">
            Get a Quote
        </button>
    </div>


</section>

<section class="py-0 m-auto text-center">
    <!-- Client Rating -->
    <div>
        <h3 class="text-3xl font-bold mb-3">What our clients say</h3>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-2">
            <span class="text-3xl font-bold">4.2</span>
            <span class="text-sm">Out of <br> 5 Star</span>
            <div class="flex gap-1 text-yellow-400 text-3xl">
                <span>★</span><span>★</span><span>★</span><span>★</span><span class="text-gray-300">★</span>
            </div>
            <div class="flex items-start flex-col gap-0">
                <img src="{{ asset('assets/images/allImages/Google.webp') }}" alt="Google" class="h-20 w-auto ml-2" />
            </div>
        </div>
    </div>
</section>

<section class="bg-primary py-8 sm:py-10 lg:py-12 px-4 text-black">
    <div class="max-w-6xl mx-auto">
        <!-- Testimonial Card -->
        <div class="testimonial-card">
            <div class="px-3">
                <div class="bg-white rounded-md shadow-md py-5 px-6">
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-2">
                        <div class="text-yellow-500 text-sm">★★★★★</div>
                        <span>a month ago</span>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('assets/images/logos/images.jpeg') }}" alt="Reviewer" class="rounded-full w-10 h-10 object-cover" />
                        <div>
                            <p class="font-semibold text-sm">James T. Richmond</p>
                            <p class="text-xs text-gray-500">Melbourne City</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-800 leading-relaxed mb-3">
                        Moved my entire apartment in just a few hours.* Super professional and affordable. I’ll be using them again for sure.
                    </p>
                    <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a>
                </div>
            </div>
            <div class="px-3">
                <div class="bg-white rounded-md shadow-md py-5 px-6">
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-2">
                        <div class="text-yellow-500 text-sm">★★★★★</div>
                        <span>a month ago</span>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('assets/images/logos/images.jpeg') }}" alt="Reviewer" class="rounded-full w-10 h-10 object-cover" />

                        <div>
                            <p class="font-semibold text-sm">James T. Richmond</p>
                            <p class="text-xs text-gray-500">Melbourne City</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-800 leading-relaxed mb-3">
                        Moved my entire apartment in just a few hours.* Super professional and affordable. I’ll be using them again for sure.
                    </p>
                    <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a>
                </div>
            </div>

            <div class="px-3">
                <div class="bg-white rounded-md shadow-md py-5 px-6">
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-2">
                        <div class="text-yellow-500 text-sm">★★★★★</div>
                        <span>a month ago</span>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('assets/images/logos/images.jpeg') }}" alt="Reviewer" class="rounded-full w-10 h-10 object-cover" />
                        <div>
                            <p class="font-semibold text-sm">James T. Richmond</p>
                            <p class="text-xs text-gray-500">Melbourne City</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-800 leading-relaxed mb-3">
                        Moved my entire apartment in just a few hours.* Super professional and affordable. I’ll be using them again for sure.
                    </p>
                    <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a>
                </div>
            </div>

            <div class="px-3">
                <div class="bg-white rounded-md shadow-md py-5 px-6">
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-2">
                        <div class="text-yellow-500 text-sm">★★★★★</div>
                        <span>a month ago</span>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('assets/images/logos/images.jpeg') }}" alt="Reviewer" class="rounded-full w-10 h-10 object-cover" />
                        <div>
                            <p class="font-semibold text-sm">James T. Richmond</p>
                            <p class="text-xs text-gray-500">Melbourne City</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-800 leading-relaxed mb-3">
                        Moved my entire apartment in just a few hours.* Super professional and affordable. I’ll be using them again for sure.
                    </p>
                    <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a>
                </div>
            </div>

            <div class="px-3">
                <div class="bg-white rounded-md shadow-md py-5 px-6">
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-2">
                        <div class="text-yellow-500 text-sm">★★★★★</div>
                        <span>a month ago</span>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('assets/images/logos/images.jpeg') }}" alt="Reviewer" class="rounded-full w-10 h-10 object-cover" />
                        <div>
                            <p class="font-semibold text-sm">James T. Richmond</p>
                            <p class="text-xs text-gray-500">Melbourne City</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-800 leading-relaxed mb-3">
                        Moved my entire apartment in just a few hours.* Super professional and affordable. I’ll be using them again for sure.
                    </p>
                    <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a>
                </div>
            </div>

        </div>
    </div>

    <!-- View More Button -->
    <div class="text-center mt-8">
        <button class="bg-white text-green-700 border border-primary px-6 py-2 rounded-md text-lg font-medium hover:bg-primary hover:text-white transition">
            View More
        </button>
    </div>
</section>

<section class="bg-white py-16">

    <h2 class="text-3xl font-bold text-center mb-8">MCM Blogs</h2>

    <div
        class="py-16 px-4 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/images/allImages/MCM Blogs BG.webp') }}'); ">


        <div class="max-w-6xl mx-auto">
            <div class="blog-slider">
                <div class="px-3">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden p-4 h-full flex flex-col">
                        <h3 class="font-bold text-base text-black mb-1">
                            Practical Tips for Packing Fragile Items
                        </h3>
                        <p class="text-sm text-gray-500 mb-2">28 June 2025</p>
                        <p class="text-sm text-gray-800 leading-snug mb-3 flex-grow">
                            Moving home is exciting, but it can quickly become stressful when you consider all those precious,
                        </p>
                        <img
                            src="{{ asset('assets/images/allImages/blog.webp') }}"
                            alt="Blog image"
                            class="w-full h-40 object-cover rounded-md mb-3" />
                        <a href="#" class="text-primary font-semibold text-base hover:underline mt-auto">
                            Read more...
                        </a>
                    </div>
                </div>

                <!-- Repeat more blog cards -->
                <div class="px-3">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden p-4 h-full flex flex-col">
                        <h3 class="font-bold text-base text-black mb-1">
                            Practical Tips for Packing Fragile Items
                        </h3>
                        <p class="text-sm text-gray-500 mb-2">28 June 2025</p>
                        <p class="text-sm text-gray-800 leading-snug mb-3 flex-grow">
                            Moving home is exciting, but it can quickly become stressful when you consider all those precious,
                        </p>
                        <img
                            src="{{ asset('assets/images/allImages/blog.webp') }}"
                            alt="Blog image"
                            class="w-full h-40 object-cover rounded-md mb-3" />
                        <a href="#" class="text-primary font-semibold text-base hover:underline mt-auto">
                            Read more...
                        </a>
                    </div>
                </div>
                <!-- Repeat more blog cards -->
                <div class="px-3">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden p-4 h-full flex flex-col">
                        <h3 class="font-bold text-base text-black mb-1">
                            Practical Tips for Packing Fragile Items
                        </h3>
                        <p class="text-sm text-gray-500 mb-2">28 June 2025</p>
                        <p class="text-sm text-gray-800 leading-snug mb-3 flex-grow">
                            Moving home is exciting, but it can quickly become stressful when you consider all those precious,
                        </p>
                        <img
                            src="{{ asset('assets/images/allImages/blog.webp') }}"
                            alt="Blog image"
                            class="w-full h-40 object-cover rounded-md mb-3" />
                        <a href="#" class="text-primary font-semibold text-base hover:underline mt-auto">
                            Read more...
                        </a>
                    </div>
                </div>

                <div class="px-3">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden p-4 h-full flex flex-col">
                        <h3 class="font-bold text-base text-black mb-1">
                            Practical Tips for Packing Fragile Items
                        </h3>
                        <p class="text-sm text-gray-500 mb-2">28 June 2025</p>
                        <p class="text-sm text-gray-800 leading-snug mb-3 flex-grow">
                            Moving home is exciting, but it can quickly become stressful when you consider all those precious,
                        </p>
                        <img
                            src="{{ asset('assets/images/allImages/blog.webp') }}"
                            alt="Blog image"
                            class="w-full h-40 object-cover rounded-md mb-3" />
                        <a href="#" class="text-primary font-semibold text-base hover:underline mt-auto">
                            Read more...
                        </a>
                    </div>
                </div>



                <div class="px-3">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden p-4 h-full flex flex-col">
                        <h3 class="font-bold text-base text-black mb-1">
                            Practical Tips for Packing Fragile Items
                        </h3>
                        <p class="text-sm text-gray-500 mb-2">28 June 2025</p>
                        <p class="text-sm text-gray-800 leading-snug mb-3 flex-grow">
                            Moving home is exciting, but it can quickly become stressful when you consider all those precious,
                        </p>
                        <img
                            src="{{ asset('assets/images/allImages/blog.webp') }}"
                            alt="Blog image"
                            class="w-full h-40 object-cover rounded-md mb-3" />
                        <a href="#" class="text-primary font-semibold text-base hover:underline mt-auto">
                            Read more...
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="text-center mt-8">
        <a href="#" class="bg-primary text-black text-lg px-8 py-3 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition">See All Blogs</a>
    </div>


</section>

<section class="bg-white py-12 sm:py-14 lg:py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-4">
                Frequently Asked Questions.
            </h2>
            <p class="text-gray-600 max-w-4xl mx-auto text-lg">
                Moving soon? Here at The MCM we understand that you might have some moving questions when preparing for your upcoming relocation. Here are some of our most frequently asked questions (FAQ's) by our customers.
            </p>
        </div>

        <!-- FAQ Container -->
        <div class="flex flex-col lg:flex-row items-start gap-12">
            <!-- FAQ List -->
            <div class="flex-1 w-full">
                <ul class="space-y-0">
                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-lg font-semibold text-black pr-4">What factors affect the cost of hiring removalists?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 leading-relaxed">
                                    Several factors influence the cost of hiring removalists, including the distance of your move, the size and weight of your belongings, the time of year, additional services required (like packing or storage), and accessibility at both locations. We provide transparent pricing with no hidden fees.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-lg font-semibold text-black pr-4">Are there any hidden fees with Melbourne Central Movers?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 leading-relaxed">
                                    No, we pride ourselves on transparent pricing. All costs are clearly outlined in your quote, and we don't charge any hidden fees. What you see in your estimate is what you pay, with no surprise charges.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-lg font-semibold text-black pr-4">Are your removalists experienced and insured?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 leading-relaxed">
                                    Yes, all our removalists are highly experienced professionals with years of training in safe moving practices. We are fully licensed and insured, providing you with peace of mind knowing your belongings are protected throughout the moving process.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-lg font-semibold text-black pr-4">Can I book a moving service for a specific time?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 leading-relaxed">
                                    Yes, we offer flexible scheduling to accommodate your preferred moving time. We recommend booking in advance to secure your preferred date and time slot, especially during peak moving seasons.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-lg font-semibold text-black pr-4">What should I do if I need to reschedule my move?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 leading-relaxed">
                                    We understand that plans can change. Please contact us as soon as possible if you need to reschedule. We'll do our best to accommodate your new preferred date and time, subject to availability.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1 text-lg font-semibold text-black pr-4">How do I get started with Melbourne Central Movers?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 leading-relaxed">
                                    Getting started is easy! Simply contact us for a free quote by phone, email, or through our online form. We'll assess your moving needs and provide you with a detailed, transparent estimate. Once you're ready, we'll schedule your move at your convenience.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Ask Question Button - Takes 4 columns on large screens -->
        <div class="m-auto mt-4 flex justify-center lg:justify-center lg:gap-8 lg:w-4/12">
            <div class="mt-8 lg:mt-0">
                <button class="bg-primary hover:bg-white hover:text-black border border-transparent hover:border-primary text-white px-16 py-4 rounded-lg font-semibold text-lg transition-colors duration-200 shadow-lg hover:shadow-xl w-full lg:w-auto">
                    Ask your question
                </button>
            </div>
        </div>
    </div>



</section>

@endsection

@section('scripts')

<script type="module">
 
</script>

<script type="module" src="{{ asset('assets/js/services.js') }}"></script>

@endsection