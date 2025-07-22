@extends('Pages.layouts.app')
@section('metadata')
<title> MCM - Flat Removalists in Melbourne</title>

<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

@endsection

@section('content')

<section class="bg-gray text-white py-8 md:py-16 hidden md:block">
    <div class="md:max-w-[1380px]  mx-auto px-4 sm:px-6 ">
        <div class="grid grid-cols-1 lg:grid-cols-2 sm:gap-8 md:gap-12 lg:gap-16 items-start">

            <!-- Left Content -->
            <div class="space-y-6 sm:space-y-8 order-2 lg:order-1">

                <!-- Main Heading -->
                <div>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                        Flat Removalists in Melbourne
                    </h1>
                    <p class="text-base sm:text-md md:text-md text-gray-300 leading-relaxed max-w-lg">
                        Moving out of your flat can feel stressful, but it doesn’t have to be. At Melbourne Central Movers, we make your flat move smooth, simple, and quick. Whether you are moving from a small studio or a large apartment, our friendly team is ready to help you every step of the way.
                        We understand the challenges of moving in Melbourne, from tight staircases to busy streets and parking issues. 
                    </p>
                </div>

                <!-- Quote Form -->
                <div class="bg-primary rounded-full px-10 sm:px-8 py-3 sm:py-5 max-w-3xl">
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch sm:items-end">
                        <!-- Moving From -->
                        <div class="flex-1 min-w-0">
                            <label class="block text-xs sm:text-sm font-medium text-black mb-1 ml-2 sm:mb-2">Moving from</label>
                            <input type="text" placeholder="Enter Location" class="w-full md:py-2 py-1.5 px-3 sm:px-4 text-sm sm:text-base rounded-md outline-none text-black placeholder-gray-500 focus:ring-2 focus:ring-black/20 border-0">
                        </div>

                        <!-- Moving To -->
                        <div class="flex-1 min-w-0">
                            <label class="block text-xs sm:text-sm font-medium text-black mb-1 ml-2 sm:mb-2">Moving to</label>
                            <input type="text" placeholder="Enter Location" class="w-full md:py-2 py-1.5 px-3 sm:px-4 text-sm sm:text-base rounded-md outline-none text-black placeholder-gray-500 focus:ring-2 focus:ring-black/20 border-0">
                        </div>

                        <!-- Quote Button -->
                        <div class="flex-shrink-0 w-full sm:w-auto">
                            <button class="w-full sm:w-auto bg-black text-white px-4 sm:px-6 py-1 hover:bg-white hover:text-black hover:outline-black outline-2 sm:py-2 text-sm sm:text-base rounded-md hover:bg-gray-800 transition font-medium whitespace-nowrap">
                                Get a Free Quote
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service Links -->
                <div class="flex flex-wrap gap-4 sm:gap-6 lg:gap-8 justify-center sm:justify-start">
                    <a href="#" class="text-white font-semibold text-base sm:text-lg border-b-2 border-white pb-1 hover:text-primary hover:border-primary transition">
                        Interstate
                    </a>
                    <a href="#" class="text-white font-semibold text-base sm:text-lg border-b-2 border-white pb-1 hover:text-primary hover:border-primary transition">
                        Business
                    </a>
                    <a href="#" class="text-white font-semibold text-base sm:text-lg border-b-2 border-white pb-1 hover:text-primary hover:border-primary transition">
                        Storage
                    </a>
                </div>

                <!-- Ratings Section -->
                <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-start gap-4 sm:gap-6 lg:gap-8 text-center sm:text-left">
                    <!-- Experience -->
                    <div class="text-center sm:text-left">
                        <p class="text-primary font-bold text-lg sm:text-xl">10 Years</p>
                        <p class="text-white font-medium text-sm sm:text-base">Experience</p>
                    </div>

                    <!-- Divider - Hidden on mobile -->
                    <div class="hidden sm:block border-l-2 border-primary h-10 lg:h-12"></div>

                    <!-- Google Rating -->
                    <div class="flex items-center gap-3">
                        <div class="flex flex-col items-center">
                            <div class="flex text-yellow-400 text-sm sm:text-base">
                                <span>★★★★★</span>
                            </div>
                            <span class="text-white text-sm sm:text-base">(4.2) 166</span>
                        </div>
                        <img src="{{ asset('assets/images/allImages/Google.webp') }}" alt="Google" class="h-8 sm:h-10 lg:h-12 w-auto">
                    </div>

                    <!-- Divider - Hidden on mobile -->
                    <div class="hidden sm:block border-l-2 border-primary h-8 lg:h-10"></div>

                    <!-- Trustpilot -->
                    <div class="flex items-center">
                        <img src="{{ asset('assets/images/allImages/Trustpilot.webp') }}" alt="Trustpilot" class="h-8 sm:h-10 lg:h-16 w-24 sm:w-28 lg:w-32 object-contain ">
                    </div>
                </div>
            </div>

            <!-- Right Content - Truck Image -->
            <div class="order-1 lg:order-2 relative">
                <div class="relative">
                    <img src="{{ asset('assets/images/allImages/truck4.png') }}" alt="MCM Melbourne Central Movers Truck" class="w-full h-[440px] rounded-lg object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="block md:hidden bg-white text-black ">
    <!-- Background Image Section -->
    <div class="relative w-full">
        <img src="{{ asset('assets/images/servicesImages/Local Removalists.webp') }}"
            alt="Moving Team"
            class="w-full h-64 object-cover " />
        <div class="absolute inset-0 bg-black/40 rounded-lg"></div>

        <!-- Text Overlay -->
        <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white">
            <h2 class="text-3xl font-bold mb-2">Stress-Free Moves Start Here</h2>
            <p class="text-md">Trusted Removalists for Home, Office & Storage</p>
            <p class="text-md mt-1">Over 13 years of experience with 4.8★ ratings</p>
        </div>
    </div>

    <!-- Quote Form -->
    <div class="bg-primary p-6 mx-4 rounded-xl shadow-lg -mt-10 z-10 relative">
        <input type="text" placeholder="From suburb"
            class="w-full mb-3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
        <input type="text" placeholder="To suburb"
            class="w-full mb-3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
        <button class="w-full bg-black hover:bg-white text-white hover:text-black py-2 font-semibold rounded-md transition">
            Get a Quote
        </button>
    </div>

    <!-- Ratings Section -->
    <div class="flex flex-col items-center mt-6">
        <div class="flex gap-1 text-yellow-400 text-xl">
            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
        </div>
        <p class="text-sm mt-1 text-gray-700">4.8 from 3755+ reviews</p>

        <!-- Social icons (if needed) -->
        <div class="flex gap-4 mt-2">
            <img src="{{ asset('assets/images/allImages/Google.webp') }}" class="h-12" alt="Google" />
            <img src="{{ asset('assets/images/allImages/Trustpilot.webp') }}" class="h-12" alt="Trustpilot" />
        </div>
    </div>
</section>



<section class="py-4 sm:py-6 md:py-8 lg:py-6 bg-white text-center">
    <div class="md:max-w-7xl w-full mx-auto md:px-4 px-10 lg:px-8">
        <!-- Section Header -->
        <div class="mb-6 sm:mb-8 md:mb-10">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 text-black">Our Flat Removal Services in Melbourne</h2>
            <p class="text-sm sm:text-base md:text-lg text-gray mb-6 sm:mb-8 max-w-4xl mx-auto leading-relaxed">
                At Melbourne Central Movers, we offer a complete range of flat removal services to make your move stress-free and smooth. Whether you are moving across the street or to a new suburb, we handle every step with care and efficiency. </p>
        </div>

        <!-- Progress Bar -->
        <div class="h-1.5 sm:h-2 w-full bg-black relative mb-6 sm:mb-8 rounded-full">
            <div id="slick-progress" class="absolute top-0 left-0 h-full bg-primary transition-all duration-300 rounded-full" style="width: 0%"></div>
        </div>

        <!-- Slick Slider -->
        <div class="slick-moving-services relative">
            <!-- Slide 1 -->
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="House Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Pre-Move Planning and Free Quote</h3>
                        <p class="clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">
                            We begin with a clear discussion about your flat removal needs. Our team will assess the size of your move, access points (stairs, lifts, parking), and any special requirements to provide you with an accurate, no-obligation free quote.
                        </p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 2.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Packing and Unpacking Services</h3>
                        <p class="clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">We offer full and partial packing services using high-quality boxes, bubble wrap, and protective covers to keep your belongings safe. Our team can also unpack your items at your new place to help you settle in faster.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 3.webp') }}" alt="Storage Solutions" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Furniture Disassembly and Assembly</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Flat removals often require careful handling of furniture in tight spaces. We professionally disassemble beds, wardrobes, and large furniture and reassemble them at your new flat to save you time and effort.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 4.webp') }}" alt="Business Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">4Secure Loading and Unloading</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Our trained removalists carefully load your belongings onto our clean, well-equipped trucks using trolleys, blankets, and straps for added protection. We ensure safe unloading and place your items in your new flat as per your directions.
                        </p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Interstate Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Local and Suburb-to-Suburb Moves</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Whether you’re moving within the same building, to a nearby street, or across Melbourne suburbs, our team ensures a smooth, on-time move without hidden charges.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>
            <!-- Slide 5 -->
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Interstate Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Small and Large Flat Moves</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">From single-bedroom apartments to large penthouses, we handle all sizes of flat removals efficiently, providing the right truck size and team for your specific move.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>
            <!-- Slide 5 -->
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Interstate Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Storage Solutions</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">If you need short-term or long-term storage between moves, we can organise secure and affordable storage options to keep your items safe until you are ready to move in.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>
            <!-- Slide 5 -->
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Interstate Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Insurance for Peace of Minds</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">We handle your items with care, but for extra peace of mind, we offer transit insurance options to protect your belongings during the move.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- What Makes Us the Best Removalists Section -->
<section class="bg-white py-4 mb-8">
    <div class="mx-auto px-4 sm:px-6 md:px-8 ms:max-w-6xl sm:max-w-5xl lg:max-w-7xl xl:max-w-8xl">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-4xl font-bold text-black mb-4">
                Why Choose Melbourne Central Movers for Flat Removals in Melbourne </h2>
            <p class="md:text-lg text-base text-primary font-medium max-w-3xl mx-auto">
                Choosing the right removalist can make all the difference when moving out of your flat. At Melbourne Central Movers, we focus on providing a stress-free, efficient, and affordable moving experience tailored to your needs. </p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Experienced Flat Removal Specialists</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 block">
                    Our team has years of experience handling flat and apartment moves across Melbourne. We understand the unique challenges that come with moving in and out of buildings, including dealing with stairs, lifts, narrow hallways, and parking restrictions. This means your move is handled with care and efficiency from start to finish.
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Affordable and Transparent Pricing</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We offer competitive pricing with no hidden costs. Before the move, we provide a clear, detailed quote based on your flat size, location, and specific needs, ensuring you know exactly what to expect.</p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Careful Handling of Your Belongings</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We treat your belongings with the same care as we would our own. From wrapping furniture in protective blankets to using trolleys and straps for safe handling, we ensure your items are protected throughout the move. </p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Flexible Service Options</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Whether you need a full packing and unpacking service, furniture disassembly, or just transport, we provide flexible options that suit your schedule and budget. We can adjust our services to match your requirements, ensuring a personalised moving experience. </p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Reliable and On-Time Service</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We understand the importance of time when moving out of a flat, especially when coordinating with building managers or lease end dates. Our team arrives on time and works efficiently to complete your move within the planned timeframe.
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Clean and Well-Maintained Trucks</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Our fleet of trucks is regularly cleaned and maintained to ensure your belongings are transported safely. We have various truck sizes to accommodate everything from small studio apartments to large multi-bedroom flats. </p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Local Knowledge of Melbourne</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Being a local Melbourne removalist, we know the city’s suburbs, streets, and building layouts well. This allows us to plan the best routes, manage parking, and ensure a smooth move even during peak traffic hours. </p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Friendly and Professional Team</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Our removalists are trained, courteous, and committed to providing a positive moving experience. We believe in clear communication, answering your questions promptly, and keeping you informed at every step of the move.</p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Optional Storage Solutions</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    If you need to store your belongings between moves, we can arrange secure and affordable storage options, providing a complete solution for your flat move. </p>
                <div class="text-center absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-[50%]">
                    <button class="toggle-btn bg-primary md:text-sm text-xs text-white px-4 py-1 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition font-medium">
                        See more
                    </button>
                </div>
            </div>




        </div>
    </div>
</section>

<section class="py-4 sm:py-6 md:py-8 bg-gray">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex md:flex-row items-center justify-between md:gap-4 gap-2">

            <!-- Call Section -->
            <div class="flex flex-col md:flex-row items-center md:gap-3 gap-1 text-center md:text-left">
                <div class="flex-shrink-0">
                    <img src="{{ asset('assets/images/servicesImages/Need Help to Moving.webp') }}" alt="Phone Icon" class="md:w-12 md:h-12 w-10 h-10 object-cover rounded-full" />
                </div>
                <div class="text-white">
                    <p class="text-[8px] md:text-base font-medium">Need Help to Moving?</p>
                    <p class="font-bold text-[10px] md:text-xl">Call - 1300 163 694</p>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="flex flex-col md:flex-row items-center md:gap-3 gap-1 text-center md:text-left">
                <div class="flex-shrink-0">
                    <img src="{{ asset('assets/images/servicesImages/MCM Removalists.webp') }}" alt="Truck Icon" class="md:w-12 md:h-12 w-10 h-10 object-cover rounded-full" />
                </div>
                <div class="text-white">
                    <p class="text-[8px] md:text-sm font-medium">MCM Removalists</p>
                    <p class="font-bold text-[10px] md:text-xl">Contact Us Now!</p>
                </div>
            </div>

            <!-- Quote Section -->
            <div class="flex flex-col md:flex-row items-center md:gap-3 gap-1 text-center md:text-left">
                <div class="flex-shrink-0">
                    <img src="{{ asset('assets/images/servicesImages/Request Online Quote.webp') }}" alt="Quote Icon" class="md:w-12 md:h-12 w-10 h-10 object-cover rounded-full" />
                </div>
                <div class="text-white">
                    <p class="text-[8px] md:text-sm font-medium">Click Here!</p>
                    <p class="font-bold text-[10px] md:text-xl">Request Online Quote</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Moving Process Section -->
<section class="bg-white py-8 sm:py-8 md:py-8 lg:py-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-8 sm:mb-10 md:mb-12 lg:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-black mb-3 sm:mb-4 md:mb-6">
                Our Flat Removal Process</h2>
            <p class="md:text-lg text-base text-primary font-medium max-w-3xl mx-auto">
                At Melbourne Central Movers, we follow a simple and organised process to ensure your flat removal in Melbourne is smooth and stress-free. Here’s how we work: </p>
        </div>

        <!-- Process Container -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-10 items-start">

            <div class="lg:col-span-2 space-y-0 sm:space-y-0">
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="contact">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Initial Consultation and Free Quote</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Contact us & Quotation Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Contact us & Quotation Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-primary rounded w-full transition-all duration-300"></div>
                    </div>
                </div>

                <!-- Step 2: Booking -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="booking">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Pre-Move Planning</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Booking Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Booking Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>

                <!-- Step 3: Before Moving Day -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="before">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Packing Services (If Required)</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Before Moving Day Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Before Moving Day Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>

                <!-- Step 4: Moving Day -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="moving">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Packing Services (If Required)</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="Moving Day Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="Moving Day Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>

                <!-- Step 5: After the move -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="after">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Loading Your Belongings</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>
                <!-- Step 5: After the move -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="final">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Safe Transportation</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>
                <!-- Step 5: After the move -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="Unloading">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Unloading and Placement</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>
                <!-- Step 5: After the move -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="Reassembly">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Furniture Reassembly</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>
                <!-- Step 5: After the move -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="unpacking">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Unpacking Services (Optional)</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>
                <!-- Step 5: After the move -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="final">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Final Check</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="After the move Icon" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-3 h-1 bg-gray-200 rounded">
                        <div class="h-full bg-gray-400 rounded w-0 transition-all duration-300"></div>
                    </div>
                </div>

            </div>

            <!-- Right Side - Content Display -->
            <div class="lg:col-span-3 bg-gray-50 rounded-lg p-4 sm:p-6 lg:p-8 min-h-[300px] sm:min-h-[300px] md:min-h-[300px] relative shadow-[0_4px_30px_rgba(0,0,0,0.25)]">
                <!-- Decorative Box Icons -->
                <div class="absolute top-3 sm:top-4 left-3 sm:left-4">
                    <div class="w-6 h-6 sm:w-8 sm:h-8 bg-orange-400 rounded transform rotate-12 opacity-80"></div>
                </div>
                <div class="absolute bottom-3 sm:bottom-4 right-3 sm:right-4">
                    <div class="w-4 h-4 sm:w-6 sm:h-6 bg-orange-400 rounded transform -rotate-12 opacity-60"></div>
                </div>

                <!-- Content for Contact us & Quotation -->
                <div class="process-content active" data-content="contact">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            We assess your business’s relocation needs, including inventory size, access points, and timelines, then provide a clear and detailed quote. </p>
                    </ul>
                </div>

                <!-- Content for Booking -->
                <div class="process-content hidden" data-content="booking">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>Our specialists coordinate logistics, crew schedules, and packing requirements to design a tailored plan for a hassle-free move.</p>
                    </ul>
                </div>

                <!-- Content for Before Moving Day -->
                <div class="process-content hidden" data-content="before">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            We pack all items securely using premium materials, label boxes for easy identification, and prepare your workspace for dismantling and moving.
                    </ul>
                </div>

                <!-- Content for Moving Day -->
                <div class="process-content hidden" data-content="moving">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>Using forklifts, trolleys, and protective equipment, we load assets safely and transport them efficiently, ensuring nothing is damaged.
                        </p>
                    </ul>
                </div>

                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="after">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            On arrival, we unload carefully, place furniture, connect IT systems, and set up your office or facility according to your layout plan. </p>
                    </ul>
                </div>
                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="final">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            A final inspection with your team ensures all assets are accounted for and everything is in place for your operations to resume.</p>
                    </ul>
                </div>
                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="Unloading">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            Once we reach your new home, we carefully unload your belongings and place them in the rooms you request, helping you settle in quickly.</p>
                    </ul>
                </div>
                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="Reassembly">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            If we have disassembled your furniture, we reassemble it at your new flat, ensuring everything is set up correctly and ready for use.</p>
                    </ul>
                </div>
                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="unpacking">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            If you have opted for our unpacking service, we will unpack your boxes, place your items where you need them, and remove the packing materials, leaving your new flat clean and organised.</p>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>


<section
    class="text-center text-black py-6 md:py-12 px-4 bg-cover bg-center bg-no-repeat md:my-10 my-0"
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
    <div class="flex flex-row justify-center items-center gap-4 md:mb-12 mb-6">
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
        <h3 class="text-2xl md:text-4xl font-bold text-black mb-2">What our clients say</h3>
        <div class="flex flex-row items-center justify-center gap-2">
            <span class="text-2xl md:text-4xl font-bold text-black">4.2</span>
            <span class="text-sm">Out of <br> 5 Star</span>
            <div class="flex md:flex-row flex-col items-center md:gap-2">
                <div class="flex gap-1 text-yellow-400 md:text-3xl text-xl">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span class="text-gray-300">★</span>
                </div>
                <div class="flex items-start flex-col gap-0">
                    <img src="{{ asset('assets/images/allImages/Google.webp') }}" alt="Google" class="md:h-20 h-10 w-auto ml-2" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary py-8 sm:py-10 lg:py-12 px-4 text-black">
    <div class="max-w-7xl mx-auto md:px-4 px-8 lg:px-8">
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

<section class="bg-white md:py-16 py-12">

    <h2 class="text-2xl md:text-4xl font-bold text-center text-black mb-2">MCM Blogs</h2>

    <div
        class="py-16 px-4 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/images/allImages/MCM Blogs BG.webp') }}'); ">


        <div class="max-w-7xl mx-auto md:px-4 px-6 lg:px-8">
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

<section class="bg-white md:py-12 pb-10 sm:py-0 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-4xl font-bold text-black mb-2">
                FAQs – Flat Removalists in Melbourne </h2>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-primary font-medium">
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
                            <span class="flex-1 md:text-xl text-md font-semibold text-black pr-4">How much does flat removal in Melbourne cost?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    The cost depends on factors like the size of your flat, the distance between locations, access conditions (stairs, lifts), and any extra services like packing or storage. We offer free, no-obligation quotes to give you a clear idea before you book.</p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-xl text-md font-semibold text-black pr-4">Do you provide packing materials for flat removals?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, we can provide high-quality boxes, bubble wrap, and protective covers if you choose our packing service. You can also purchase packing materials from us if you prefer to pack your belongings yourself.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Can you move items from flats with stairs and no lift access?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, our team is experienced in moving furniture and boxes in buildings with stairs and no lift access. We take extra care to protect your items and the building during the move. </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you offer small flat removals in Melbourne?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, whether you have a single-room studio or a large apartment, we handle flat removals of all sizes with the same care and attention. </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Are my belongings insured during the move?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    We handle your items carefully, but for extra peace of mind, we offer transit insurance options to protect your belongings during the move. Let us know if you would like to add insurance to your booking.</p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">How much notice do you need for booking a flat removal?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    We recommend booking as early as possible to secure your preferred date, especially during weekends or the end of the month. However, we also accommodate last-minute moves whenever possible.</p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you help with furniture disassembly and reassembly?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, we can disassemble and reassemble beds, wardrobes, and other large furniture to ensure they are moved safely and fit into your new flat.</p>
                            </div>
                        </div>
                    </li>
                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Can you provide storage if my new flat is not ready?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, we offer secure, flexible storage solutions if you need to store your items temporarily before moving into your new flat.</p>
                            </div>
                        </div>
                    </li>
                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">How long will my flat move take?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    The time depends on the size of your flat, the number of items, the distance, and access conditions. During your quote discussion, we will give you a clear time estimate for your specific move.</p>
                            </div>
                        </div>
                    </li>
                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">How can I get a quote for my flat removal?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    You can call us, fill out our online enquiry form, or send us a message to get a free, quick quote for your flat removal in Melbourne.</p>
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