@extends('Pages.layouts.app')

@section('metadata')
<title>Melbourne Central Movers - Best Removalists Melbourne</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endsection

@section('homepage')
<!-- HERO SECTION -->
<section class="relative w-full h-[70vh] bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('{{ asset('assets/images/allImages/hero-banner.webp') }}');">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>

  <div class="relative z-10 text-center px-4 max-w-4xl">
    <h1 class="text-4xl md:text-5xl font-bold mb-6">Best Removalists Melbourne</h1>
    <p class="text-sm md:text-2xl leading-relaxed">

      <span class="mt-4 block">
        Are You Looking for Removalists Melbourne? Move with <br>
        Melbourne Central Movers, Australia’s Biggest Trusted <br>
        Moving Company helping you move for over 10 years. <br>
        Hire Movers Melbourne Now.
      </span>
    </p>
  </div>

  <!-- Quote Form Box -->
  <div class="absolute bottom-[-48px] left-1/2 transform -translate-x-1/2 z-20 w-full max-w-3xl px-4">
    <div class="bg-primary rounded-full flex flex-col md:flex-row items-end justify-center py-6 px-10 space-y-4 md:space-y-0 md:space-x-2">

      <div class="flex flex-col !md:flex-row md:items-start md:space-x-2 gap-2 w-full">
        <div class="text-sm font-medium text-black mb-1 md:mb-0 md:w-28 ml-5">Moving from</div>
        <input type="text" placeholder="Enter Location" class="w-full md:w-60 py-2 rounded-md outline-none text-black">
      </div>

      <div class="flex flex-col !md:flex-row md:items-start md:space-x-2 gap-2 w-full ">
        <div class="text-sm font-medium text-black mb-1 md:mb-0 md:w-28 ml-5">Moving to</div>
        <input type="text" placeholder="Enter Location" class="w-full md:w-60 py-2 rounded-md outline-none text-black">
      </div>

      <a href="#" class="bg-black text-white text-base font-medium px-6 py-2 rounded-md hover:bg-gray-800 transition whitespace-nowrap">Get a Free Quote</a>

    </div>
  </div>
</section>

<!-- TRUSTED LOCAL COMPANY SECTION -->
<section class="bg-white text-black py-12 mt-10">
  <div class="max-w-6xl mx-auto px-4 text-center">

    <!-- Top Ratings -->
    <div class="flex flex-wrap items-center justify-center gap-6 mb-6 text-sm">
      <!-- Experience -->
      <div class="text-center">
        <p class="text-primary font-semibold">10 Years</p>
        <p class="text-black font-medium">Experience</p>
      </div>
      <div class="border-l border-primary h-6"></div>

      <!-- Google Rating -->
      <div class="flex items-center gap-2">
        <div class="flex flex-col items-center gap-0">
          <span class="text-yellow-500">★★★★★</span>
          <span class="text-black">(4.2) 166</span>
        </div>
        <img src="{{ asset('assets/images/allImages/Google.webp') }}" alt="Google" class="h-12">
      </div>
      <div class="border-l border-primary h-6"></div>

      <!-- Trustpilot -->
      <div class="flex items-center gap-2">
        <img src="{{ asset('assets/images/allImages/Trustpilot.webp') }}" alt="Trustpilot" class="h-14">

      </div>
    </div>

    <!-- Title -->
    <h2 class="text-2xl md:text-3xl mt-12 font-bold mb-12">Your Trusted Local Moving Company</h2>

    <section class="bg-primary py-6 px-4 max-w-4xl mx-auto rounded-lg shadow-lg">

      <div class="flex items-center relative">
        <div class="absolute inset-0 w-[85px] h-[80px] bg-primary left-[-55px] top-[45%] mt-[-5px] transform rotate-[-48deg]"></div>

      </div>


      <!-- Services Row -->
      <div class="flex flex-wrap justify-between w-full ml-6">
        <!-- Item -->
        <div class="flex flex-col items-center text-white w-1/7 min-w-[100px] mt-[-70px]">
          <div class="">
            <img src="{{ asset('assets/images/icons/moving-home.webp') }}" alt="Moving Home" class="h-24 w-24" />
          </div>
          <p class="mt-1 text-md text-center leading-5">Moving <br> Home</p>
        </div>

        <div class="flex flex-col items-center text-white w-1/7 min-w-[100px] mt-[-70px]">
          <div class="">
            <img src="{{ asset('assets/images/icons/packing.webp') }}" alt="Packing" class="h-24 w-24" />
          </div>
          <p class="mt-1 text-md text-center leading-5">Packing</p>
        </div>

        <div class="flex flex-col items-center text-white w-1/7 min-w-[100px] mt-[-70px]">
          <div>
            <img src="{{ asset('assets/images/icons/interisland.webp') }}" alt="Moving Interisland" class="h-24 w-24" />
          </div>
          <p class="mt-1 text-md text-center leading-5">Moving <br> Intersland</p>
        </div>

        <div class="flex flex-col items-center text-white w-1/7 min-w-[100px] mt-[-70px]">
          <div>
            <img src="{{ asset('assets/images/icons/small-moves.webp') }}" alt="Small Moves" class="h-24 w-24" />
          </div>
          <p class="mt-1 text-md text-center leading-5">Small <br> Moves</p>
        </div>

        <div class="flex flex-col items-center text-white w-1/7 min-w-[100px] mt-[-70px]">
          <div>
            <img src="{{ asset('assets/images/icons/storage.webp') }}" alt="Storage" class="h-24 w-24" />
          </div>
          <p class="mt-1 text-md text-center leading-5">Storage</p>
        </div>

        <div class="flex flex-col items-center text-white w-1/7 min-w-[100px] mt-[-70px]">
          <div>
            <img src="{{ asset('assets/images/icons/moving-office.webp') }}" alt="Moving Office" class="h-24 w-24" />
          </div>
          <p class="mt-1 text-md text-center leading-5">Moving <br> Office</p>
        </div>

        <div class="flex flex-col items-center text-white w-1/7 min-w-[100px] mt-[-70px]">
          <div>
            <img src="{{ asset('assets/images/icons/supplies.webp') }}" alt="Moving Supplies" class="h-24 w-24" />
          </div>
          <p class="mt-1 text-md text-center leading-5">Moving <br> Supplies</p>
        </div>
      </div>
  </div>
</section>

</div>
</section>

<!-- MCM Services Section -->
<section class="bg-white text-black pb-10 pt-2">
  <div class="max-w-4xl mx-auto px-4 flex flex-col md:flex-row !gap-10 items-center">

    <!-- Text Content -->
    <div class="flex-1">
      <h3 class="text-xl md:text-3xl font-bold mb-2">MCM Moving Services – Here When You Need Us Most</h3>
      <p class="text-primary font-bold text-md mb-4">We Provide Emergency Moving Assistance</p>
      <p class="text-md mb-4">Stuck in a moving emergency? Our team is ready to act fast and help you with urgent relocation needs. <br>
        With years of experience, we deliver quick, reliable, and efficient moving solutions.</p>
      <p class="text-md mb-6">If we can’t assist immediately, we’ll connect you with someone who can — because your peace of mind matters.</p>
      <a href="#" class="bg-primary text-white text-xl px-10 py-3 rounded-md hover:bg-primary/90 transition">Get a Quote</a>
    </div>

    <!-- Image -->
    <div class="w-[300px]">
      <img src="{{ asset('assets/images/allImages/When You Need Us Most.webp') }}" alt="Moving Boxes" class="rounded-lg shadow-lg">
    </div>

  </div>
</section>

<!-- Reassurance Section -->
<section class="bg-gray text-white py-10 mt-6 rounded-3xl px-20 max-w-5xl mx-auto">
  <div class=" px-4 flex flex-col md:flex-row items-center justify-between gap-6">

    <!-- Text -->
    <div class="flex-1 text-center md:text-left">
      <h4 class="text-3xl font-bold mb-1">Reassuring & Professional</h4>
      <p class="text-lg">Your Trusted Moving Partner</p>
      <p class="text-lg mt-1">Whether it’s planned or last-minute, MCM is here to help. Fully insured, experienced, and always on time.</p>
    </div>

    <!-- Button -->
    <a href="#" class="bg-primary text-white text-lg font-semibold px-10 py-3 rounded-md hover:bg-primary/90 transition">Get a Free Quote</a>

  </div>
</section>


<section class="px-6 md:px-16 py-10">
  <div class="grid md:grid-cols-2 gap-12 items-start mx-auto max-w-5xl">
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
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 text-black text-[16px]">
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
        <h2 class="text-3xl font-bold text-black mb-3">Business Hours</h2>
        <p class="text-[16px] text-black leading-relaxed">
          MCM will work closely with customer success team to ensure your move is completed seamlessly and
          according to schedule. As well as standard business hours, our team is available around the clock
          to ensure your move is a success.
        </p>
      </div>
    </div>

    <!-- Right: Image Boxes (without images) -->
    <div class="relative min-h-[500px]">
      <div class="absolute top-0 right-0 w-2/4 rounded-lg overflow-hidden z-20 shadow-lg bg-gray-200 ">

        <img src="{{ asset('assets/images/allImages/What Can We Move- Back.webp') }}" alt="..." class="w-full h-auto object-cover">
      </div>

      <!-- Green Background Box -->
      <div class="absolute top-24 right-16 w-2/4 h-72 bg-primary rounded-md z-10"></div>

      <!-- Bottom Image Placeholder -->
      <div class="absolute top-40 left-16 rounded-lg overflow-hidden z-30 shadow-lg bg-gray-200 w-[260px] h-auto">
        <img src="{{ asset('assets/images/allImages/What Can We Move- Front.webp') }}" alt="..." class="w-full h-auto object-cover">
      </div>
    </div>
  </div>
</section>

<section class="py-10 bg-white text-center">
  <div class="max-w-4xl mx-auto px-4">
    <h2 class="text-3xl font-bold mb-3">Our Moving Services</h2>
    <p class="text-sm text-gray-700 mb-6">
      Our team’s goal is to deliver a standard of excellence that surpasses customer expectations
      and delivers on service, quality and value. You can place your trust in our professional
      team to remove the stress and make your move easy.
    </p>

    <!-- Progress Bar -->
    <div class="h-2 w-full bg-black relative mb-6">
      <div id="slick-progress" class="absolute top-0 left-0 h-2 bg-primary transition-all duration-300" style="width: 0%"></div>
    </div>

    <!-- Slick Slider -->
    <div class="slick-moving-services">
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

    <!-- Button -->
    <button class="mt-6 px-6 py-3 bg-primary text-black font-medium rounded-md hover:bg-primary">
      Get a Free Quote
    </button>
  </div>
</section>

<h2 class="text-3xl font-bold text-black mb-3 text-center">How it works in 4 steps</h2>
<section class="relative py-16 bg-black text-white">
  <!-- Background Image -->
  <div class="py-12">
    <div class="absolute inset-0 z-0">
      <img src="{{ asset('assets/images/allImages/How it works in 4 steps BG.webp') }}" alt="How it works" class="w-full h-full object-cover opacity-80">
    </div>

    <!-- Overlay Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">

      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center text-white">
        <!-- Step 1 -->
        <div>
          <div class="flex justify-center mb-4">
            <div>
              <img src="{{ asset('assets/images/icons/How it works in 4 steps-1.webp') }}" alt="Step 1" class="w-24 h-24">
            </div>
          </div>
          <h3 class="font-bold text-lg mb-2">First Contact</h3>
          <p class="text-sm">When you decide to reach out to us, you will speak live to a highly trained removalist who knows the entire moving process.</p>
        </div>

        <!-- Step 2 -->
        <div>
          <div class="flex justify-center mb-4">
            <div>
              <img src="{{ asset('assets/images/icons/How it works in 4 steps-2.webp') }}" alt="Step 2" class="w-24 h-24">
            </div>
          </div>
          <h3 class="font-bold text-lg mb-2">Before Your Move</h3>
          <p class="text-sm">We have a special team of MCM called move coordinators who are 100% dedicated to the careful planning of your move.</p>
        </div>

        <!-- Step 3 -->
        <div>
          <div class="flex justify-center mb-4">
            <div>
              <img src="{{ asset('assets/images/icons/How it works in 4 steps-3.webp') }}" alt="Step 3" class="w-24 h-24">
            </div>
          </div>
          <h3 class="font-bold text-lg mb-2">Moving Day</h3>
          <p class="text-sm">You will be greeted by on-time, friendly, professional movers ready to work. Our movers are carefully screened and trained.</p>
        </div>

        <!-- Step 4 -->
        <div>
          <div class="flex justify-center mb-4">
            <div>
              <img src="{{ asset('assets/images/icons/How it works in 4 steps-4.webp') }}" alt="Step 4" class="w-24 h-24">
            </div>
          </div>
          <h3 class="font-bold text-lg mb-2">After The Move</h3>
          <p class="text-sm">Even after the bill is signed and the crew has left, you are never on your own with questions or extra help.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="relative py-16 bg-white">
  <!-- Background -->
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('assets/images/allImages/Benefits of choosing - MCM BG.webp') }}" alt="Benefits Background" class="w-full h-full object-cover opacity-100">
  </div>

  <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-3xl font-bold mb-12">Benefits of choosing – MCM</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-center text-left">

      <!-- Left Benefits -->
      <div class="space-y-8">
        <!-- Cost Effective -->
        <div class="flex items-start">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Cost Effective.webp') }}" alt="Cost Effective" class="w-32 h-auto object-contain">
          </div>
          <div>
            <h3 class="font-bold text-lg">Cost Effective</h3>
            <p class="text-sm text-gray-800">We offer highly affordable moving services with fast and transparent quotes.</p>
          </div>
        </div>

        <!-- Courteous Service -->
        <div class="flex items-start">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Courteous Service.webp') }}" alt="Courteous Service" class="w-32 h-auto object-contain">
          </div>
          <div>
            <h3 class="font-bold text-lg">Courteous Service</h3>
            <p class="text-sm text-gray-800">Helping people is what we do. We’re happy to assist you with all your queries.</p>
          </div>
        </div>

        <!-- Peace of Mind -->
        <div class="flex items-start">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Peace Of Mind.webp') }}" alt="Peace of Mind" class="w-32 h-auto object-contain">
          </div>
          <div>
            <h3 class="font-bold text-lg">Peace Of Mind</h3>
            <p class="text-sm text-gray-800">We plan your move and make sure you have the right tools and tech for the job.</p>
          </div>
        </div>
      </div>

      <!-- Center Image -->
      <div class="flex justify-center">
        <div class="relative">
          <img src="{{ asset('assets/images/allImages/Benefits of choosing - MCM.webp') }}" alt="MCM Team" class="rounded-lg h-96 shadow-md">
          <!-- Optional call icon (just for visual) -->
          <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-primary text-white p-3 rounded-full shadow-lg">
            <img src="{{ asset('assets/images/allImages/Call- Icon.webp') }}" alt="" class="w-10 h-10">
          </div>
        </div>
      </div>

      <!-- Right Benefits -->
      <div class="space-y-8">
        <!-- Personalised Service -->
        <div class="flex items-start">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Personalised Service" class="w-32 h-auto object-contain">
          </div>
          <div>
            <h3 class="font-bold text-lg">Personalised Service</h3>
            <p class="text-sm text-gray-800">We customize your move with packing, disassembling, reinstalling, and more.</p>
          </div>
        </div>

        <!-- Satisfaction -->
        <div class="flex items-start">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Satisfaction.webp') }}" alt="Satisfaction" class="w-32 h-auto object-contain">
          </div>
          <div>
            <h3 class="font-bold text-lg">Satisfaction</h3>
            <p class="text-sm text-gray-800">We keep our word and do it better than the rest – with honesty and integrity.</p>
          </div>
        </div>

        <!-- Free Up More Time -->
        <div class="flex items-start">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Free Up More Time.webp') }}" alt="Free Up More Time" class="w-32 h-auto object-contain">
          </div>
          <div>
            <h3 class="font-bold text-lg">Free Up More Time</h3>
            <p class="text-sm text-gray-800">We handle everything efficiently so you can focus on what matters most.</p>
          </div>
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
    <button class="flex items-center gap-2 px-6 py-3 text-primary font-semibold border border-primary rounded-md bg-white hover:bg-green-50 transition">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path
          d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1.003 1.003 0 011.11-.21c1.12.45 2.33.69 3.48.69a1 1 0 011 1v3.5a1 1 0 01-1 1C10.02 21.97 2 13.95 2 4.5a1 1 0 011-1H6.5a1 1 0 011 1c0 1.15.24 2.36.69 3.48a1 1 0 01-.21 1.11l-2.2 2.2z" />
      </svg>
      1300 163 694
    </button>
    <button class="px-6 py-3 bg-primary text-white rounded-md hover:bg-primary-dark transition">
      Get a Quote
    </button>
  </div>

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



<section class="bg-primary py-12 px-4 text-black">
  <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
    <!-- Testimonial Card -->
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

  <!-- View More Button -->
  <div class="text-center">
    <button class="bg-white text-green-700 border border-primary px-6 py-2 rounded-md text-lg font-medium hover:bg-green-50 transition">
      View More
    </button>
  </div>
</section>










@endsection

@section('scripts')
<!-- Include Slick JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script>
  $(document).ready(function() {
    const $slider = $('.slick-moving-services');

    $slider.slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      arrows: true,
      dots: false,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

    // Progress bar logic
    function updateProgressBar(currentSlide, totalSlides) {
      const percent = ((currentSlide + 1) / totalSlides) * 100;
      $('#slick-progress').css('width', percent + '%');
    }

    // On init
    $slider.on('init', function(event, slick) {
      updateProgressBar(0, slick.slideCount);
    });

    // After change
    $slider.on('afterChange', function(event, slick, currentSlide) {
      updateProgressBar(currentSlide, slick.slideCount);
    });

    // Re-init for progress bar after slick is initialized
    $slider.slick('setPosition');
  });
</script>


@endsection