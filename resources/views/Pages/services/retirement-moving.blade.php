@extends('Pages.layouts.app')
@section('metadata')
<title>Retirement Moving Specialists | Hassle-Free Senior Relocation</title>
<meta name="description" content="Trust Melbourne Central Movers for compassionate, dependable retirement moving services. Our caring team assists with downsizing, packing, transport, and unpacking—so seniors can settle comfortably into their new home.">


<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MXC2V2D');</script>
<!-- End Google Tag Manager -->

@endsection

@section('content')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXC2V2D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<section class="bg-gray text-white py-8 md:py-16 hidden md:block">
    <div class="md:max-w-[1380px]  mx-auto px-4 sm:px-6 ">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-start">

            <!-- Left Content -->
            <div class="space-y-6 sm:space-y-8 order-2 lg:order-1">

                <!-- Main Heading -->
                <div>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                        Retirement Moving Services in Melbourne </h1>
                    <p class="text-base md:text-md text-gray-300 leading-relaxed">
                        Moving during retirement is a significant life step — one that should be smooth, respectful, and free from stress. At Melbourne Central Movers, we specialise in retirement relocation services tailored for older adults and their families. Whether you're downsizing, moving into a retirement village, or relocating closer to loved ones, our experienced team is here to support you every step of the way.
                    </p>
                </div>

                <!-- Quote Form -->
                <div class="bg-primary rounded-full px-10 sm:px-8 py-3 sm:py-5 max-w-3xl">
                    <form action="{{ route('enquiry') }}" method="GET" class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch sm:items-end">

                        <!-- Moving From -->
                        <div class="flex-1 min-w-0">
                            <label class="block text-xs sm:text-sm font-medium text-black mb-1 ml-2 sm:mb-2">Moving from</label>
                            <input type="text" name="moving_from" placeholder="Enter Location" class="autocomplete w-full md:py-2 py-1.5 px-3 sm:px-4 text-sm sm:text-base rounded-md outline-none text-black placeholder-gray-500 focus:ring-2 focus:ring-black/20 border-0">
                        </div>

                        <!-- Moving To -->
                        <div class="flex-1 min-w-0">
                            <label class="block text-xs sm:text-sm font-medium text-black mb-1 ml-2 sm:mb-2">Moving to</label>
                            <input type="text" name="moving_to" placeholder="Enter Location" class="autocomplete w-full md:py-2 py-1.5 px-3 sm:px-4 text-sm sm:text-base rounded-md outline-none text-black placeholder-gray-500 focus:ring-2 focus:ring-black/20 border-0">
                        </div>

                        <!-- Quote Button -->
                        <div class="flex-shrink-0 w-full sm:w-auto">
                            <button class="w-full sm:w-auto bg-black text-white px-4 sm:px-6 py-1 hover:bg-white hover:text-black hover:outline-black outline-2 sm:py-2 text-sm sm:text-base rounded-md hover:bg-gray-800 transition font-medium whitespace-nowrap">
                                Get a Free Quote
                            </button>
                        </div>
                    </form>
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
        <form action="{{ route('enquiry') }}" method="GET">
            <input type="text" placeholder="From suburb" name="moving_from"
                class="autocomplete w-full mb-3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
            <input type="text" placeholder="To suburb" name="moving_to"
                class="autocomplete w-full mb-3 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" />
            <button class="w-full bg-black hover:bg-white text-white hover:text-black py-2 font-semibold rounded-md transition">
                Get a Quote
            </button>
        </form>
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
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 text-black">Our Retirement Moving Services in Melbourne</h2>
            <p class="text-sm sm:text-base md:text-lg text-gray mb-6 sm:mb-8 max-w-4xl mx-auto leading-relaxed">
                Our retirement moving services are designed to provide complete peace of mind. From initial planning to final placement, we manage the entire relocation process with professionalism and care.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Pre-Move Consultation and Free Quote</h3>
                        <p class="clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">
                            We begin with a thoughtful consultation to understand your moving needs. Our team assesses your current home, the volume of items, access points, and your timeline. Based on this, we offer a clear, obligation-free quote with no hidden fees. </p>
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
                        <p class="clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">We provide both full and partial packing services using high-quality materials to protect your belongings. For seniors who prefer extra support, we also offer unpacking at the destination to help make the new space feel like home from day one.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Furniture Disassembly and Reassembly</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Large or bulky furniture can be difficult to move — especially in smaller or shared living spaces. We safely dismantle beds, tables, wardrobes, and reassemble them in your new home, saving time and reducing physical strain.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Safe Loading and Transport</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Our trained removalists use protective padding, trolleys, and straps to secure your items during loading. Your belongings are transported in clean, well-maintained trucks and unloaded carefully as per your instructions.
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Downsizing and Item Sorting Assistance
                        </h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">If you’re transitioning to a smaller space, we can assist with sorting and organising what to keep, donate, or store. We handle this process with sensitivity, helping make decisions easier and less overwhelming.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Local and Regional Moves</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Whether you're moving within Melbourne or to a nearby town, our team ensures on-time, safe, and efficient relocation services suited to the needs of older adults.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Secure Storage Solutions</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">If your new home isn't ready yet or you’re still deciding what to bring, we offer secure short-term and long-term storage options to keep your items safe and accessible.</p>
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
                Why Seniors and Families Trust Melbourne Central Movers</h2>
            <p class="md:text-lg text-base text-primary font-medium max-w-3xl mx-auto">
                Choosing a removalist for a retirement move requires more than just moving boxes. You need a team that’s experienced, reliable, and respectful. Here's why Melbourne Central Movers is a trusted choice for retirement moves in Melbourne:</p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Extensive Experience with Senior Relocations</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 block">
                    We’ve helped hundreds of retirees transition into new homes with minimal disruption. Our team understands the unique challenges and emotional aspects of retirement moves, and we adapt our approach to suit every individual.</p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Clear and Honest Pricing</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We provide upfront, transparent quotes tailored to your exact moving requirements. No hidden charges. No last-minute surprises. Just honest, competitive rates for quality service.</p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Gentle and Respectful Handling</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    From family heirlooms to everyday furniture, we treat every item with the utmost respect. We pack, move, and place belongings as if they were our own — carefully and thoughtfully.</p>
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
                    Not all retirement moves are the same. That’s why we offer flexible solutions — from full-service packing and furniture setup to simple transport services. You choose what you need, and we take care of the rest.</p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Punctual and Dependable Team</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We understand how important timing is when coordinating with retirement communities or lease agreements. Our removalists arrive on time, work efficiently, and stick to your schedule. </p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Local Knowledge Across Melbourne</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    As a Melbourne-based moving company, we’re familiar with local roads, building access, and retirement village layouts. This allows us to plan ahead, avoid delays, and ensure a smooth relocation.</p>
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Friendly and Compassionate Staff</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We believe that every move deserves a personal touch. Our team is polite, supportive, and always ready to help — answering your questions, easing your concerns, and making your move a pleasant experience.</p>
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
                Our Step-by-Step Retirement Moving Process</h2>
            <p class="md:text-lg text-base text-primary font-medium max-w-3xl mx-auto">
                At Melbourne Central Movers, we follow a clear and organised process designed to make senior relocations easy and stress-free:</p>
        </div>

        <!-- Process Container -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-10 items-start">

            <div class="lg:col-span-2 space-y-0 sm:space-y-0">
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="contact">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Initial Discussion and Quote</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Packing (Optional)</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Furniture Preparation</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Safe Loading</h3>
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
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="smoothtransport">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Smooth Transport</h3>
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
                <div class="process-item bg-white rounded-lg py-1 sm:py-2 md:px-4 sm:px-4 cursor-pointer transition-all duration-300 hover:shadow-md" data-step="unloading">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Unloading and Setup</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Unpacking and Finishing Touches (Optional)</h3>
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
                            We speak with you or your family to learn about your move — including location, access, timelines, and special requirements. You receive a clear, written quote. </p>
                    </ul>
                </div>

                <!-- Content for Booking -->
                <div class="process-content hidden" data-content="booking">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>We help you prepare by discussing packing needs, furniture layout at your new home, and any logistics that might affect the move.</p>
                    </ul>
                </div>

                <!-- Content for Before Moving Day -->
                <div class="process-content hidden" data-content="before">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            If chosen, our team arrives with high-quality packing materials and safely packs all belongings, clearly labelling everything for easy setup later.</p>
                    </ul>
                </div>

                <!-- Content for Moving Day -->
                <div class="process-content hidden" data-content="moving">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>We dismantle beds, dining tables, and other large items carefully — storing hardware safely for accurate reassembly at the destination.
                        </p>
                    </ul>
                </div>

                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="after">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            We load your belongings into clean, well-equipped trucks, using protective padding and trolleys to ensure safe handling.</p>
                    </ul>
                </div>
                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="final">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            Your belongings are transported securely using the most efficient route, with care taken at every stage of the journey.</p>
                    </ul>
                </div>
                <div class="process-content hidden" data-content="smoothtransport">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            At your new residence, we unload and place items where requested. Furniture is reassembled, and rooms are set up to your comfort.</p>
                    </ul>
                </div>

                <div class="process-content hidden" data-content="smoothtransport">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            If unpacking is included, we unpack boxes, place your belongings neatly, and remove all packing waste — leaving your new home ready to enjoy.</p>
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
      <a href="#" onclick="openForm('Get a Quote')" class="px-6 py-3 bg-primary text-white rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition">
            Get a Quote
</a>
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
                Frequently Asked Questions</h2>
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
                            <span class="flex-1 md:text-xl text-md font-semibold text-black pr-4">How much does a retirement move cost in Melbourne?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Costs vary based on the move size, distance, packing needs, and access conditions. We provide free, no-obligation quotes based on your specific requirements.</p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-xl text-md font-semibold text-black pr-4">Do you provide interstate piano moving?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Can you help with downsizing during a retirement move?
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Will my piano need tuning after the move?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, we assist with sorting and organising items for downsizing. We can also recommend local donation services if needed.</p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you offer support for retirement village or aged care moves?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Absolutely. We’re experienced with moves into retirement villages, independent living units, and aged care residences, and can coordinate with staff for smooth access.</p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Is it possible to book packing only or transport only?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes. Our services are flexible — you can book just packing, just transport, or a full-service move depending on what you need.</p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Are your movers trained to assist seniors?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, our team is trained to work respectfully with elderly clients. We’re patient, understanding, and happy to accommodate additional needs.</p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">How soon should I book a retirement move?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    We recommend booking at least 1–2 weeks in advance, especially for weekends or end-of-month dates. However, we do our best to accommodate last-minute moves when available.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Can I store some items temporarily?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes. We provide secure storage options if your new home isn’t ready or you’re still deciding what to keep.
                                </p>
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
                                    We offer optional transit insurance for extra peace of mind. Let us know if you’d like to include insurance in your quote.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you work with families or carers helping seniors move?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes. We regularly coordinate with family members, carers, and retirement village staff to ensure a smooth experience for everyone involved.
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
                <a href="#" onclick="openForm('Ask your question')" class="inline-block bg-primary hover:bg-white hover:text-black border border-transparent hover:border-primary text-white px-16 py-4 rounded-lg font-semibold text-lg transition-colors duration-200 shadow-lg hover:shadow-xl w-full lg:w-auto">
                    Ask your question
                </a>
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