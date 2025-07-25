@extends('Pages.layouts.app')
@section('metadata')
<title>Furniture Removalists Melbourne | Furniture Removal | MCM</title>
<meta name="description" content="Hire Furniture Removalists Melbourne, We offer best Cheap Furniture Removal Services. Contact us and get a Free Quote now.">


<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
<style>
    .hover-red-rise {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
    }

    .hover-red-rise::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2%;
        background-color: #78be3c;
        /* Tailwind red-500 with opacity */
        transition: height 0.4s ease-in-out;
        z-index: 0;
        border-radius: 0 0 0.75rem 0.75rem;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.25);
    }

    .hover-red-rise:hover::before {
        height: 100%;
    }

    .hover-red-rise:hover .content {
        color: white;
        position: relative;
        z-index: 10;
    }
</style>


@endsection

@section('content')

<section class="bg-gray text-white py-8 md:py-16 hidden md:block">
    <div class="md:max-w-[1380px]  mx-auto px-4 sm:px-6 ">
        <div class="grid grid-cols-1 lg:grid-cols-2 sm:gap-8 md:gap-12 lg:gap-16 items-start ">

            <!-- Left Content -->
            <div class="space-y-6 sm:space-y-8 order-2 lg:order-1">

                <!-- Main Heading -->
                <div>
                    <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-white md:mb-4 mb-6 leading-tight">
                        Furniture Removalists in Melbourne
                    </h1>
                    <p class="text-base md:text-md text-gray-300 leading-relaxed">
                        Searching for reliable furniture removalists in Melbourne? At Melbourne Central Movers, we specialise in safe and efficient furniture relocation services tailored for homes, offices, and commercial spaces. Our expert team is trained to handle everything from heavy wardrobes to delicate antiques, ensuring each piece reaches its destination in perfect condition.
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
                    <img src="{{ asset('assets/images/allImages/mcm-banner (4).webp') }}" alt="MCM Melbourne Central Movers Truck" class="w-full md:min-h-[420px] rounded-lg object-cover">
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
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 text-black">Our Furniture Moving Services</h2>
            <p class="text-sm sm:text-base md:text-lg text-gray mb-6 sm:mb-8 max-w-4xl mx-auto leading-relaxed">
              We offer a comprehensive range of furniture moving solutions designed to protect your belongings and provide peace of mind. Whether it’s a single-item delivery or a full household relocation, we handle it all with care and professionalism.
            </p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Home Furniture Removals</h3>
                        <p class="clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">
                           Moving heavy furniture within or between homes can be challenging. Our team carefully lifts, transports, and reassembles items like beds, sofas, and dining sets, ensuring no scratches or damage along the way. We use protective padding and specialised tools to make the process safe and efficient.
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Office Furniture Removals</h3>
                        <p class="clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">We understand the importance of keeping office operations running smoothly during a move. From modular workstations to large conference tables, our professionals dismantle, pack, transport, and set up your furniture quickly, helping your business get back on track without unnecessary downtime.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Antique & Delicate Furniture Handling</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Delicate and valuable pieces require extra attention. Our movers use high-grade wraps, custom crating, and gentle handling techniques to ensure antiques, heirlooms, and designer furniture remain in pristine condition from start to finish.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Single Item & Small Moves</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Need to move just one or two pieces? Our single-item furniture moving service is perfect for quick, affordable relocations within Melbourne. Ideal for students, renters, or small households, we offer the same level of care for every move, no matter the size.

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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Furniture Disassembly & Reassembly</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">To ensure safe and easy transport, we offer full disassembly and reassembly services. Whether it’s a complex bed frame, dining table, or office workstation, our team carefully takes it apart, protects each piece, and rebuilds it at your new location—saving you time and effort.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Protective Packaging & Equipment</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">We use high-quality materials like heavy-duty blankets, shrink wrap, corner protectors, and straps to safeguard your furniture during the move. Our vehicles are equipped with tail lifts, trolleys, and secure tie-downs to keep your items stable and protected in transit.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Interstate Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">In-Home Furniture Rearrangement</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Want to reorganise your space without moving homes? Our team can assist with shifting furniture within your home or office—ideal for renovations, staging, or seasonal redecoration. We move heavy items safely without damaging your floors or walls.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Interstate Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Same-Day & Emergency Moves</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Need urgent help with furniture moving? We offer fast-response services for same-day or last-minute moves. Whether it’s due to a sudden relocation, delivery issue, or time-sensitive need, our team is ready to assist on short notice with speed and reliability.
                        </p>
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
                Why Choose Us for Furniture Removals in Melbourne?
            </h2>
            <p class="md:text-lg text-base text-primary font-medium max-w-3xl mx-auto">
                At Melbourne Central Movers, we take pride in being one of the most trusted and recommended moving companies in Melbourne. Here’s what sets us apart:
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Trained & Experienced Furniture Movers</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 block">
                  Our team is specially trained to handle all types of furniture with care, from bulky sofas to fragile glass cabinets. With years of experience, we ensure safe lifting, loading, and transport every time.


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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Protective Measures for Every Move</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                   We use high-quality blankets, straps, and padding to secure your furniture during transit. Fragile or high-value items receive special attention with customised packing solutions.
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Affordable & Transparent Pricing</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                  Clear, upfront quotes mean no surprises. We offer flexible options to suit different budgets and requirements, making professional furniture moving accessible to everyone.


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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Flexible Scheduling for Your Convenience</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                   To fit around your lifestyle or business hours, we provide after-hours and weekend moving services. This helps reduce stress and avoids disruption to your daily routine.
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Local Melbourne Expertise</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                   Our in-depth knowledge of Melbourne’s streets and building access points allows us to plan routes efficiently and avoid delays.


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
                <h3 class="text-xl font-bold text-black mb-3 text-center">End-to-End Support & Setup</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                   From dismantling furniture at your old place to reassembling it in your new location, we manage the process entirely. Our goal is to make sure your space is ready to use right away.
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Commitment to Customer Satisfaction</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                 We pride ourselves on clear communication and friendly service. Our team stays in touch at every stage to ensure your move goes exactly as planned.
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


<!-- Section 1 -->
<section class="w-full flex flex-col lg:flex-row items-stretch mt-8">
    <!-- Left Content -->
    <div class="w-full lg:w-1/2 bg-primary text-white px-6 py-16 flex flex-col justify-center items-center text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">What to Think Before Hiring a House Moving Company</h2>
        <p class="text-base md:text-lg max-w-3xl mb-6">
            Choosing the right house removalists in Melbourne is key to a smooth move. Here’s what you should consider before making your decision: </p>
        <ul class="list-disc list-outside text-left mb-6 max-w-[80%] mx-auto space-y-3">
            <li><strong>Experience and Expertise:</strong> Check how long the company has been operating in Melbourne and whether they specialise in house moves similar to yours.</li>
            <li><strong>Transparent Pricing:</strong> Ask for a clear, written quote that details the costs involved, including potential extra charges for stairs, heavy items, or longer travel distances.</li>
            <li><strong>Insurance Options:</strong> Ensure the company offers transit insurance and enquire about comprehensive coverage options for valuable or fragile items.</li>
            <li><strong>Customer Reviews:</strong> Read online reviews and testimonials to understand the experiences of other customers with the removalists.</li>
            <li><strong>Range of Services:</strong> Consider whether the company offers additional services like packing, unpacking, furniture assembly, and provision of packing materials for a complete moving solution.</li>
            <li><strong>Local Knowledge:</strong> A removalist with experience navigating Melbourne’s roads and building access requirements will be able to plan your move efficiently, avoiding delays.</li>
            <li><strong>Communication and Customer Support:</strong> Choose a company that communicates clearly, responds promptly to your queries, and provides support throughout the moving process.</li>
        </ul>

        <!-- CTA Button -->
        <a href="#" class="relative group inline-block mt-4">
            <span class="relative z-10 block px-8 py-3 text-white font-semibold bg-black transition-colors duration-300 ease-in-out group-hover:text-white">
                GET DISCOUNTED QUOTE NOW
            </span>
            <span class="absolute inset-0 bg-red-600 transform scale-y-0 origin-bottom group-hover:scale-y-100 transition-transform duration-500 ease-in-out z-0"></span>
        </a>
    </div>

    <!-- Right Image -->
    <div class="w-full lg:w-1/2">
        <img src="{{ asset('assets/images/allImages/furniture-2.webp') }}" alt="Movers Trucks" class="w-full h-full object-cover" />
    </div>
</section>

<!-- Section 2 -->
<section class="w-full flex flex-col lg:flex-row items-stretch">
    <!-- Left Content -->
    <div class="w-full lg:w-1/2 bg-primary text-white px-6 py-16 flex flex-col justify-center items-center text-center order-1 lg:order-2">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">We Care for Your Valuables!</h2>
        <p class="text-base md:text-lg max-w-3xl mb-6">
            Our team handles your belongings with extreme care and professionalism. Whether you're
            moving across the street or across the city, we ensure each item arrives in perfect condition.
        </p>

        <!-- CTA Button -->
        <a href="#" class="relative group inline-block mt-4">
            <span class="relative z-10 block px-8 py-3 text-white font-semibold bg-black transition-colors duration-300 ease-in-out group-hover:text-white">
                BOOK YOUR MOVE TODAY
            </span>
            <span class="absolute inset-0 bg-red-600 transform scale-y-0 origin-bottom group-hover:scale-y-100 transition-transform duration-500 ease-in-out z-0"></span>
        </a>
    </div>

    <!-- Right Image -->
    <div class="w-full lg:w-1/2 order-1 lg:order-0">
        <img src="{{ asset('assets/images/allImages/furniture-1.webp') }}" alt="Safe Moving" class="w-full h-full object-cover" />
    </div>
</section>




<section class="bg-white py-12 px-4 md:px-10">
    <div class="mx-auto md:px-8 max-w-6xl lg:max-w-7xl xl:max-w-8xl">
        <h2 class="text-2xl md:text-4xl font-bold text-black mb-4 text-center">Tips for a Smooth House Move in Melbourne</h2>
        <p class="md:text-lg text-base text-primary font-medium max-w-3xl mx-auto text-center mb-10">Planning your house move properly can save you time, money, and stress. Here’s how to ensure a seamless relocation in Melbourne:</p>

        <!-- Roadmap line -->
        <div class="relative">
            <div class="absolute top-0 left-0 w-full h-1 border-t-4 border-dashed border-primary/30 z-0 transition-all duration-300 mb-10" id="road-line"></div>

            <!-- Step boxes -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 md:gap-6 gap-4 relative z-10 justify-between justify-items-stretch items-stretch">

                <!-- Step Template -->
                <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="1">
                    <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">1</div>
                    <div class="box bg-white border rounded-xl shadow-md p-5 transition-all duration-300 group-hover:shadow-lg md:min-h-[300px] min-h-[140px]">
                        <img src="{{ asset('assets/images/icons/footer-location.webp') }}" alt="Step 1" class="w-8 h-8 mb-1 ">
                        <h3 class="font-semibold md:text-[18px] text-[14px] mb-1 tracking-tight">Start Early and Declutter:</h3>
                        <p class="md:text-[14px] text-[10px] text-gray-600">
                            Begin preparing for your move at least 2–3 weeks in advance. Sort your belongings and decide what to keep, donate, or dispose of. This reduces moving costs and makes unpacking easier.
                        </p>
                    </div>
                </div>

                <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="2">
                    <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">2</div>
                    <div class="box bg-white border rounded-xl shadow-md p-5 transition-all duration-300 group-hover:shadow-lg md:min-h-[300px] min-h-[140px]">
                        <img src="{{ asset('assets/images/icons/moving-home.webp') }}" alt="Step 2" class="w-8 h-8 mb-1 ">
                        <h3 class="font-semibold md:text-[18px] text-[14px] mb-1 tracking-tight">Create a Moving Checklist:</h3>
                        <p class="md:text-[14px] text-[10px] text-gray-600">
                            List every task you need to complete before moving day, including notifying your utility providers, updating your address, and arranging parking permits for the moving truck in your Melbourne suburb.
                        </p>
                    </div>
                </div>

                <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="3">
                    <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">3</div>
                    <div class="box bg-white border rounded-xl shadow-md p-5 transition-all duration-300 group-hover:shadow-lg md:min-h-[300px] min-h-[140px]">
                        <img src="{{ asset('assets/images/icons/packing.webp') }}" alt="Step 3" class="w-8 h-8 mb-1 ">
                        <h3 class="font-semibold md:text-[18px] text-[14px] mb-1 tracking-tight">Use High-Quality Packing Materials:</h3>
                        <p class="md:text-[14px] text-[10px] text-gray-600">
                            Invest in sturdy boxes, bubble wrap, and packing tape to protect your belongings. Label each box with its contents and the room it belongs to in your new home for easy unpacking.
                        </p>
                    </div>
                </div>

                <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="4">
                    <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">4</div>
                    <div class="box bg-white border rounded-xl shadow-md p-5 transition-all duration-300 group-hover:shadow-lg md:min-h-[300px] min-h-[140px]">
                        <img src="{{ asset('assets/images/icons/How it works in 4 steps-2.webp') }}" alt="Step 4" class="w-8 h-8 mb-1 ">
                        <h3 class="font-semibold md:text-[18px] text-[14px] mb-1 tracking-tight">Prepare an Essentials Box:</h3>
                        <p class="md:text-[14px] text-[10px] text-gray-600">
                            Pack a separate box with items you’ll need on your first day, such as toiletries, chargers, snacks, important documents, and a change of clothes.
                        </p>
                    </div>
                </div>

                <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="5">
                    <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">5</div>
                    <div class="box bg-white border rounded-xl shadow-md p-5 transition-all duration-300 group-hover:shadow-lg md:min-h-[300px] min-h-[140px]">
                        <img src="{{ asset('assets/images/icons/How it works in 4 steps-3.webp') }}" alt="Step 5" class="w-8 h-8 mb-1 ">
                        <h3 class="font-semibold md:text-[18px] text-[14px] mb-1 tracking-tight">Plan for Access and Timing:</h3>
                        <p class="md:text-[14px] text-[10px] text-gray-600">
                            Check if your building requires booking elevators or has restrictions for moving times. Avoid peak Melbourne traffic hours to save time on moving day.
                        </p>
                    </div>
                </div>

                <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300 md:hidden block" data-step="6">
                    <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">6</div>
                    <div class="box bg-white border rounded-xl shadow-md p-5 transition-all duration-300 group-hover:shadow-lg md:min-h-[300px] min-h-[140px]">
                        <img src="{{ asset('assets/images/icons/How it works in 4 steps-3.webp') }}" alt="Step 5" class="w-8 h-8 mb-1 ">
                        <h3 class="font-semibold md:text-[18px] text-[14px] mb-1 tracking-tight">Communicate with Your Movers:</h3>
                        <p class="md:text-[14px] text-[10px] text-gray-600">
                            Share your moving plan with your removalists, including any fragile or heavy items, access details, and special instructions. Good communication helps your movers prepare the right equipment and team for your relocation.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="py-10 bg-gray-50">
    <div class="mx-auto px-4  md:px-8 md:max-w-6xl  lg:max-w-7xl xl:max-w-8xl">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-4xl font-bold text-black mb-4">
                What We Can Move
            </h2>
            <p class="md:text-lg text-base text-primary font-medium max-w-3xl mx-auto">
                At Melbourne Central Movers, we handle a wide range of household items with care and expertise, ensuring your belongings arrive safely at your new home.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-4">

            <!-- Card -->
            <div class="relative rounded-xl  md:min-h-[350px] min-h-[150px] p-6 overflow-hidden group hover-red-rise transition-all duration-300 cursor-pointer">
                <div class="relative z-10 content text-center flex flex-col items-center">
                    <div class="bg-red-100 rounded-full p-2 mb-3">
                        <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Chair Icon" class="md:h-16 md:w-16 w-12 h-12">
                    </div>
                    <h3 class="md:text-[22px] text-[16px] font-bold mb-2 transition-colors duration-300">Furniture of All Sizes</h3>
                    <p class="md:text-[16px] text-[12px]">
                        Beds, sofas, wardrobes, dining tables, and office furniture, including dismantling and reassembly where needed.
                    </p>
                </div>
            </div>

            <!-- Repeat the same structure for other cards -->
            <div class="relative rounded-xl  md:min-h-[350px] min-h-[150px] p-6 overflow-hidden group hover-red-rise transition-all duration-300 cursor-pointer">
                <div class="relative z-10 content text-center flex flex-col items-center">
                    <div class="bg-red-100 rounded-full p-2 mb-3">
                        <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Chair Icon" class="md:h-16 md:w-16 w-12 h-12">
                    </div>
                    <h3 class="md:text-[22px] text-[16px] font-bold mb-2 transition-colors duration-300">Appliances</h3>
                    <p class="md:text-[16px] text-[12px]">
                        Fridges, washing machines, dishwashers, and ovens, securely packed and transported using protective wraps and trolleys.
                    </p>
                </div>
            </div>

            <div class="relative rounded-xl  md:min-h-[350px] min-h-[150px] p-6 overflow-hidden group hover-red-rise transition-all duration-300 cursor-pointer">
                <div class="relative z-10 content text-center flex flex-col items-center">
                    <div class="bg-red-100 rounded-full p-2 mb-3">
                        <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Chair Icon" class="md:h-16 md:w-16 w-12 h-12">
                    </div>
                    <h3 class="md:text-[22px] text-[16px] font-bold mb-2 transition-colors duration-300">Fragile and Delicate Items</h3>
                    <p class="md:text-[16px] text-[12px]">
                        Glassware, artwork, mirrors, and lamps, carefully packed with premium materials to prevent damage.
                    </p>
                </div>
            </div>

            <div class="relative rounded-xl  md:min-h-[350px] min-h-[150px] p-6 overflow-hidden group hover-red-rise transition-all duration-300 cursor-pointer">
                <div class="relative z-10 content text-center flex flex-col items-center">
                    <div class="bg-red-100 rounded-full p-2 mb-3">
                        <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Chair Icon" class="md:h-16 md:w-16 w-12 h-12">
                    </div>
                    <h3 class="md:text-[22px] text-[16px] font-bold mb-2 transition-colors duration-300">Electronics</h3>
                    <p class="md:text-[16px] text-[12px]">
                        TVs, computers, and entertainment systems packed securely for safe transport.
                    </p>
                </div>
            </div>

            <div class="relative rounded-xl  md:min-h-[350px] min-h-[150px] p-6 overflow-hidden group hover-red-rise transition-all duration-300 cursor-pointer">
                <div class="relative z-10 content text-center flex flex-col items-center">
                    <div class="bg-red-100 rounded-full p-2 mb-3">
                        <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Chair Icon" class="md:h-16 md:w-16 w-12 h-12">
                    </div>
                    <h3 class="md:text-[22px] text-[16px] font-bold mb-2 transition-colors duration-300">Specialty Items</h3>
                    <p class="md:text-[16px] text-[12px]">
                        Pianos, antiques, and large mirrors moved using specialised equipment and techniques.
                    </p>
                </div>
            </div>
            <div class="relative rounded-xl  md:min-h-[350px] min-h-[150px] p-6 overflow-hidden group hover-red-rise transition-all duration-300 cursor-pointer">
                <div class="relative z-10 content text-center flex flex-col items-center">
                    <div class="bg-red-100 rounded-full p-2 mb-3">
                        <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Chair Icon" class="md:h-16 md:w-16 w-12 h-12">
                    </div>
                    <h3 class="md:text-[22px] text-[16px] font-bold mb-2 transition-colors duration-300">Outdoor Items</h3>
                    <p class="md:text-[16px] text-[12px]">
                        Barbecues, garden furniture, and potted plants moved with care.
                    </p>
                </div>
            </div>
            <div class="relative rounded-xl  md:min-h-[350px] min-h-[150px] p-6 overflow-hidden group hover-red-rise transition-all duration-300 cursor-pointer">
                <div class="relative z-10 content text-center flex flex-col items-center">
                    <div class="bg-red-100 rounded-full p-2 mb-3">
                        <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Chair Icon" class="md:h-16 md:w-16 w-12 h-12">
                    </div>
                    <h3 class="md:text-[22px] text-[16px] font-bold mb-2 transition-colors duration-300">Garage and Shed Contents</h3>
                    <p class="md:text-[16px] text-[12px]">
                        Tools, bicycles, and equipment, securely packed and organised during transport.
                    </p>
                </div>
            </div>
            <div class="relative rounded-xl  md:min-h-[350px] min-h-[150px] p-6 overflow-hidden group hover-red-rise transition-all duration-300 cursor-pointer">
                <div class="relative z-10 content text-center flex flex-col items-center">
                    <div class="bg-red-100 rounded-full p-2 mb-3">
                        <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Chair Icon" class="md:h-16 md:w-16 w-12 h-12">
                    </div>
                    <h3 class="md:text-[22px] text-[16px] font-bold mb-2 transition-colors duration-300">Clothing and Personal Belongings</h3>
                    <p class="md:text-[16px] text-[12px]">
                        Wardrobe boxes provided for garments, with personal items neatly packed, labelled, and transported to ensure easy unpacking and access.
                    </p>
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
          How Our Furniture Moving Process Works
            </h2>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-primary font-medium">
                At Melbourne Central Movers (MCM), we follow a clear and structured moving process to ensure every relocation is smooth, secure, and stress-free. Here’s how we make your move simple from start to finish:
            </p>
        </div>

        <!-- Process Container -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-10 items-start">

            <!-- Left Side - Process Steps -->
            <div class="lg:col-span-2 space-y-0 sm:space-y-0">

                <!-- Step 1: Contact us & Quotation -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="contact">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Initial Consultation & Quote</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Planning & Preparation</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Secure Packing & Loading</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Careful Transportation</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Unloading & Reassembly</h3>
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
                <!-- Step 6: After the move -->
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="final">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Final Inspection & Sign-Off</h3>
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                            <div class="activeshow">
                                <img src="{{ asset('assets/images/servicesImages/Contact us & Quotation.webp') }}" alt="final the move Icon" class="w-full h-full object-contain">
                            </div>
                            <div class="inactiveshow hidden">
                                <img src="{{ asset('assets/images/servicesImages/Booking.webp') }}" alt="final the move Icon" class="w-full h-full object-contain">
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
                         We discuss your furniture moving needs, assess access points, and provide a detailed quote tailored to your situation. Every detail is considered to avoid surprises later.
                       </p>
                    </ul>
                </div>

                <!-- Content for Booking -->
                <div class="process-content hidden" data-content="booking">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                      <p> Our team develops a plan for dismantling, packing, and transportation. We confirm timings and a guide to help you prepare for moving day.</p>
                    </ul>
                </div>

                <!-- Content for Before Moving Day -->
                <div class="process-content hidden" data-content="before">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                      We use premium materials and advanced techniques to pack furniture safely. Items are then loaded using trolleys and straps to prevent damage.
                        </p>
                    </ul>
                </div>

                <!-- Content for Moving Day -->
                <div class="process-content hidden" data-content="moving">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                     <p> Our modern trucks are equipped with protective linings and suspension systems to keep furniture stable and secure during transit.

</p>
                    </ul>
                </div>

                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="after">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                     At your new location, we unload everything with precision and reassemble furniture as required. Placement is done according to your instructions for a seamless setup.
                        </p>
                    </ul>
                </div>
                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="final">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                          We walk you through the completed move, ensuring every piece is in place and perfect condition before concluding.
                        </p>
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
              <p class="font-semibold text-sm">- jhon Leo</p>
              <p class="text-xs text-gray-500">Melbourne City</p>
            </div>
          </div>
          <p class="text-sm text-gray-800 leading-relaxed mb-3">
            I am happy to say that MCM Vanlines are one of the best house removalists I've ever made use of. They were very professional, got the job done in a timely manner, and did not leave any mess! I had no complaints, so you should hire them
            if you need removalist services.I would highly recommend MCM Vanlines for moving.
          </p>
          <!-- <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a> -->
        </div>
      </div>
      <div class="px-3">
        <div class="bg-white rounded-md shadow-md py-5 px-6">
          <div class="flex items-center justify-between text-sm text-gray-500 mb-2">
            <div class="text-yellow-500 text-sm">★★★★★</div>
            <span>few days ago</span>
          </div>
          <div class="flex items-center gap-3 mb-4">
            <img src="{{ asset('assets/images/logos/images.jpeg') }}" alt="Reviewer" class="rounded-full w-10 h-10 object-cover" />

            <div>
              <p class="font-semibold text-sm">- Kaser Portgas</p>
              <p class="text-xs text-gray-500">Melbourne City</p>
            </div>
          </div>
          <p class="text-sm text-gray-800 leading-relaxed mb-3">
            MCM Vanlines does a fantastic job. I tried hiring some other removalists but the prices were way too expensive for the work. MCM is more reasonably priced than most of their rivals and they are always willing to work with you on your budget.
            I would highly recommend MCM for someone who knows how to get the job done well and quickly!

          </p>
          <!-- <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a> -->
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
              <p class="font-semibold text-sm">- jack davies</p>
              <p class="text-xs text-gray-500">Melbourne City</p>
            </div>
          </div>
          <p class="text-sm text-gray-800 leading-relaxed mb-3">

            I hired MCM Vanlines to move from my old home to a new one and I can tell you that they were amazing. They did the entire job by themselves in just three hours! Not only did they handle everything quickly but they also made sure I didn't have to lift a finger.
            I would highly recommend MCM Vanlines for any removal services in Melbourne
          </p>
          <!-- <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a> -->
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
              <p class="font-semibold text-sm">- Carloman Bert</p>
              <p class="text-xs text-gray-500">Melbourne City</p>
            </div>
          </div>
          <p class="text-sm text-gray-800 leading-relaxed mb-3">
            I've never had a job so easy and simple as working with MCM Vanlines. They are the best house removalists in Melbourne. I was able to organize my move from Melbourne to Sydney in just a few hours,
            which is impossible when you're moving within the same city.They were really fast and professional and I will definitely be using them again in future.
          </p>
          <!-- <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a> -->
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
              <p class="font-semibold text-sm">- Devin Pham </p>
              <p class="text-xs text-gray-500">Melbourne City</p>
            </div>
          </div>
          <p class="text-sm text-gray-800 leading-relaxed mb-3">
            MCM Vanlines did a fantastic job of removals. It was a simple move from home to office but the process was very smooth. They took my furniture, bedding, and other things into consideration in the quote, so I could be completely sure that they would
            take care of everything with no extra costs or hassles. Contact MCM Vanlines for best moving.
          </p>
          <!-- <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a> -->
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
              <p class="font-semibold text-sm">- Kaser Portgas </p>
              <p class="text-xs text-gray-500">Melbourne City</p>
            </div>
          </div>
          <p class="text-sm text-gray-800 leading-relaxed mb-3">
            They offer an affordable price and the staff is very professional. I had one service with them before and they were great .I was a bit apprehensive when I called MCM Vanlines because they are cheaper than some of the other removalists in Melbourne.
            But luckily, I ended up with a great company who treated me well and charged me less!
          </p>
          <!-- <a href="#" class="text-primary text-sm font-medium hover:underline">Read More</a> -->
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
              FAQs – Furniture Removalists in Melbourne
            </h2>
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
                            <span class="flex-1 md:text-xl text-md font-semibold text-black pr-4">Do you move large furniture items like wardrobes and pool tables?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, we specialise in moving bulky and heavy items safely. Our team has the tools and expertise to handle challenging pieces without causing damage.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-xl text-md font-semibold text-black pr-4">Are my furniture items insured during the move?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                We provide basic transit insurance for all moves and offer comprehensive insurance options for added peace of mind.


                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you dismantle and reassemble furniture?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                  Absolutely. Our movers can dismantle furniture for easier transport and reassemble it at your new home or office.

                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Can you move delicate or antique furniture?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                 Yes, we have experience moving antiques and fragile items. We use customised packing and careful handling techniques to protect them.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you offer furniture moving services after hours?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                 Yes, we provide flexible scheduling, including evenings and weekends, to suit your convenience.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">How is the cost of furniture moving calculated?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                               Pricing is based on item size, distance, complexity, and any additional services. All quotes are upfront and transparent.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you provide single-item furniture moving?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                 Yes, our single-item service is ideal for moving one or two pieces quickly and affordably within Melbourne.
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
 $(document).ready(function() {
        $('.step-box').hover(
            function() {
                $(this).find('.step-circle')
                    .removeClass('bg-yellow-400')
                    .addClass('bg-primary scale-110');

                $(this).addClass('transform -translate-y-2');
                $('#road-line').removeClass('border-primary/30').addClass('border-primary');

                $(this).find('.box')
                    .removeClass('border')
                    .addClass('border-2')
                    .addClass('border-primary');
            },
            function() {
                $(this).find('.step-circle')
                    .removeClass('bg-primary scale-110')
                    .addClass('bg-yellow-400');

                $(this).removeClass('transform -translate-y-2');
                $('#road-line').removeClass('border-primary').addClass('border-primary/30');

                $(this).find('.box')
                    .removeClass('border-2')
                    .addClass('border')
                    .removeClass('border-primary');
            }
        );
    });
</script>
<script type="module" src="{{ asset('assets/js/services.js') }}"></script>

@endsection