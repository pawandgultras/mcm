@extends('Pages.layouts.app')
@section('metadata')
<title> MCM - House Removalists in Melbourne</title>

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
        <div class="grid grid-cols-1 lg:grid-cols-2 sm:gap-8 md:gap-12 lg:gap-16 items-center">

            <!-- Left Content -->
            <div class="space-y-6 sm:space-y-8 order-2 lg:order-1">

                <!-- Main Heading -->
                <div>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                        House Removalists in Melbourne
                    </h1>
                    <p class="text-base sm:text-md md:text-md text-gray-300 leading-relaxed max-w-lg">
                        Looking for reliable house removalists in Melbourne? At Melbourne Central Movers, we make moving easy with professional, safe, and affordable house relocation services. Whether you’re shifting from a compact apartment or a spacious family home, our experienced team ensures a smooth and worry-free move across Melbourne and surrounding suburbs. With local expertise and modern equipment, we handle every step of your move with precision.
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
                    <img src="{{ asset('assets/images/allImages/9.webp') }}" alt="MCM Melbourne Central Movers Truck" class="w-full h-[520px] rounded-lg object-cover">
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
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 text-black">Our House Moving Services</h2>
            <p class="text-sm sm:text-base md:text-lg text-gray mb-6 sm:mb-8 max-w-4xl mx-auto leading-relaxed">
                We offer a complete range of house moving solutions tailored to make your relocation simple and stress-free. From careful packing to secure transport, we take care of everything so you can focus on your new beginning.
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Full House Removals</h3>
                        <p class="clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">
                            Our team handles moves of all sizes with precision. We pack, load, transport, and set up your belongings, ensuring everything arrives safely and on time. Every detail is planned so your transition is as seamless as possible.
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Furniture Removals</h3>
                        <p class="clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Moving bulky or fragile furniture? We use trolleys, straps, and padding to transport beds, wardrobes, and delicate items without damage. Our team even helps with dismantling and reassembling furniture at your new home.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Packing & Unpacking Services</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">With our professional packing service, every item from fragile glassware to bulky appliances is secured using premium materials. Once at your destination, we unpack and place everything where it belongs to save you time and effort.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Special Item Handling</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Got delicate or valuable items like pianos or antiques? Our trained removalists use the right equipment and proven techniques to move them safely, giving you peace of mind throughout the process.

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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Interstate House Moves</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Relocating beyond Melbourne? We offer reliable and efficient interstate moving services. Our experienced team coordinates every step of your long-distance move—ensuring timely pickup, safe transport, and smooth delivery, no matter the destination.</p>
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
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Temporary Storage Solutions</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Need a place to keep your belongings during a move? We provide short- and long-term secure storage options. Whether you’re downsizing or waiting for your new home to be ready, your items stay safe, clean, and accessible.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Interstate Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Eco-Friendly Moving Options</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">We care about the environment just as much as your belongings. Our eco-conscious options include reusable moving boxes, recyclable packing materials, and fuel-efficient transport practices to reduce the environmental impact of your move.</p>
                        <a href="#" class="text-primary font-semibold text-lg md:text-base italic underline hover:text-white transition-colors duration-200">Learn more...</a>
                    </div>
                </div>
            </div>
            <div class="px-2 sm:px-3">
                <div class="relative rounded-lg sm:rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 h-64 sm:h-72 md:h-80">
                    <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Interstate Moving" class="w-full h-full object-cover" />

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-3 sm:p-4 md:p-5 flex flex-col justify-end">
                        <h3 class="text-white text-2xl sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2 italic">Last-Minute & Urgent Moves</h3>
                        <p class=" clamp-2-lines text-white text-base sm:text-sm md:text-base mb-2 sm:mb-3 leading-relaxed">Need to move quickly? We specialise in fast-turnaround house removals. Our responsive team is ready to step in with prompt service and careful planning—getting you moved, even on tight deadlines, without compromising safety or quality.

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
                Why Choose Us for House Removals in Melbourne?
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Experienced & Professional Team</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 block">
                    With years of experience, our skilled movers understand the challenges of house relocations. Whether it’s navigating narrow hallways or multi-story buildings, we handle your move with care and expertise.
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Affordable Rates with No Surprises</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We provide competitive, transparent pricing that fits your budget. There are no hidden charges, so you know exactly what to expect before moving day.


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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Complete Moving Solutions Under One Roof</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    From providing packing materials to loading, transport, and setup, we manage your entire move for a stress-free experience.


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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Reliable & On-Time Service</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Punctuality is key for us. We arrive as scheduled and work efficiently to ensure your move stays on track, even during peak times.
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Safe Handling of Belongings</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    We treat every item, big or small, with care. Protective wraps, lifting gear, and careful handling ensure your belongings stay damage-free.


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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Local Melbourne Expertise</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    Knowing Melbourne’s roads, traffic, and local regulations helps us plan your move efficiently and avoid unnecessary delays.
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
                <h3 class="text-xl font-bold text-black mb-3 text-center">Dedicated Customer Support</h3>
                <p class="card-content text-gray-600 text-sm leading-relaxed mb-4 hidden">
                    From your first inquiry to post-move support, our team is always ready to help. We keep you informed and address any concerns promptly.
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
        <img src="{{ asset('assets/images/allImages/15.webp') }}" alt="Movers Trucks" class="w-full h-full object-cover" />
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
        <img src="{{ asset('assets/images/allImages/25.webp') }}" alt="Safe Moving" class="w-full h-full object-cover" />
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
                How Our House Moving Process Works
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Free Quote & Consultation</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Planning & Scheduling</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Professional Packing Services</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Safe Loading & Transport</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Unloading & Placement</h3>
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
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-black pr-4">Final Walkthrough & Satisfaction Check</h3>
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
                            We start by understanding your moving needs in detail. Our team assesses the size of your move, special requirements, and timeline to provide a transparent, no-obligation quote tailored to your situation.
                        </p>
                    </ul>
                </div>

                <!-- Content for Booking -->
                <div class="process-content hidden" data-content="booking">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p> Once you confirm, we create a detailed moving plan. We coordinate truck sizes, team allocation, and required equipment, ensuring everything runs like clockwork on your chosen date.</p>
                    </ul>
                </div>

                <!-- Content for Before Moving Day -->
                <div class="process-content hidden" data-content="before">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            If you opt for packing, our team arrives with premium materials and packs your belongings securely. Fragile items, furniture, and appliances are all carefully wrapped and labelled for easy unpacking later.
                        </p>
                    </ul>
                </div>

                <!-- Content for Moving Day -->
                <div class="process-content hidden" data-content="moving">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p> On moving day, we load your belongings with precision using trolleys, blankets, and straps to prevent any shifting or damage. Our drivers choose the best routes to deliver your items on time. </p>
                    </ul>
                </div>

                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="after">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            At your new home, we unload each item carefully and place it in your desired rooms. We can also assist with furniture assembly or unpacking if required.
                        </p>
                    </ul>
                </div>
                <!-- Content for After the move -->
                <div class="process-content hidden" data-content="final">
                    <ul class="space-y-3 sm:space-y-4 text-gray-700">
                        <p>
                            Before we leave, we do a walkthrough with you to ensure nothing was missed. Your feedback is important to us, and we don’t leave until you’re completely satisfied.
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
                FAQs – House Removalists in Melbourne
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
                            <span class="flex-1 md:text-xl text-md font-semibold text-black pr-4">How far in advance should I book?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    We suggest booking 1–2 weeks before your planned move, especially during busy seasons. However, we can also accommodate last-minute moves depending on availability.


                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-xl text-md font-semibold text-black pr-4">Do you offer packing services?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, we offer complete packing and unpacking services using premium boxes and materials. If you prefer, you can also purchase packing supplies from us for a DIY pack.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Are my belongings insured?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Every move includes basic transit insurance. For added peace of mind, we also offer optional comprehensive coverage to protect your valuables.


                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you move fragile or speciality items like pianos?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Absolutely. Our team is trained to handle fragile, large, and valuable items. We use the right tools and techniques to ensure safe transport.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Which areas do you cover?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    We service all Melbourne suburbs and surrounding regions. Interstate moves can also be arranged on request.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">How is the moving cost calculated?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Costs depend on factors like the size of your move, distance, and any extra services. We provide clear, upfront quotes without hidden charges.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">Do you offer “2 men and a truck” service?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    Yes, this is ideal for smaller house moves, single-item deliveries, or when you only need a minimal workforce for your move.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="border-b-2 border-gray">
                        <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
                            <span class="flex-1  md:text-lg text-md font-semibold text-black pr-4">What happens if there’s a delay on moving day?</span>
                            <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
                            <div class="pb-5 pr-12">
                                <p class="text-gray-600 md:text-base text-xs leading-relaxed">
                                    We plan carefully to avoid delays, but if unforeseen issues like traffic arise, our team will keep you updated and adjust as needed to complete your move smoothly.
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