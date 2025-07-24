@extends('Pages.layouts.app')

@section('metadata')
<title>Melbourne Central Movers - Best Removalists Melbourne</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="{{asset('assets/css/mobile.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
<style>
  input {
    width: 100%;
    max-width: 400px;
    padding: 12px;
    font-size: 16px;
    margin-bottom: 20px;
  }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRwtGvywDWGOX4ULNCXZNxFiW-Qutu9Bc&libraries=places"></script>
<script>
  function initAutocomplete() {
    const fromInput = document.getElementById("autocomplete");
    const toInput = document.getElementById("autocomplete2");

    const options = {
      componentRestrictions: {
        country: "AU"
      },
      types: ["geocode"],

    };

    const autocompleteFrom = new google.maps.places.Autocomplete(fromInput, options);
    autocompleteFrom.addListener("place_changed", function() {
      formatAndSetPlace(autocompleteFrom, fromInput);
    });

    const autocompleteTo = new google.maps.places.Autocomplete(toInput, options);
    autocompleteTo.addListener("place_changed", function() {
      formatAndSetPlace(autocompleteTo, toInput);
    });

    function formatAndSetPlace(autocompleteInstance, inputElement) {
      const place = autocompleteInstance.getPlace();

      let postcode = "";
      let city = "";

      if (place.address_components) {
        console.log(place.address_components);

        place.address_components.forEach(component => {
          if (component.types.includes("postal_code")) {
            postcode = component.long_name;
          }
          if (component.types.includes("locality") || component.types.includes("administrative_area_level_1")) {
            city = component.long_name.toUpperCase();
          }
        });

        // Set the formatted value only if all parts are present
        if (postcode && city) {
          inputElement.value = `${postcode} ${city}`;
        } else {
          inputElement.value = place.formatted_address; // fallback
        }
      }
    }
  }

  window.onload = initAutocomplete;
</script>

@endsection



@section('homepage')
<!-- HERO SECTION -->
<section class="relative max-w-full md:h-[70vh] h-[50vh] bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('{{ asset('assets/images/allImages/hero-banner.webp') }}');">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>

  <x-heading-subheading
    mainClass="home-banner_heading_main_div"
    headingClass="home-banner_heading"
    subheadingClass="home-banner_subheading"
    heading="Welcome to Melbourne Central Movers "
    subheading="Are You Looking for Removalists Melbourne? Move with Melbourne Central Movers, Australia’s Biggest Trusted Moving Company helping you move for over 10 years. Hire Movers Melbourne Now." />


  <!-- Quote Form Box -->
  <div class="absolute md:bottom-[-48px] bottom-[-30%] left-1/2 transform -translate-x-1/2 z-20 w-full max-w-5xl px-4">
    <form action="{{ route('enquiry') }}" method="GET" class="bg-primary rounded-2xl lg:rounded-full flex flex-col lg:flex-row items-center md:items-end justify-between md:py-6 py-3 md:px-12 px-4 md:space-y-2 md:space-x-4">

      <!-- Moving From -->
      <div class="flex flex-col w-full ">
        <div class="text-sm font-medium text-black md:mb-2 mb-1 text-center lg:text-left">Moving from</div>
        <input type="text" id="autocomplete" name="moving_from" placeholder="Enter Location" class="w-full md:py-3 py-2 px-4 rounded-lg lg:rounded-md outline-none text-black text-center lg:text-left placeholder-gray-500 focus:ring-2 focus:ring-black/20" required>
      </div>

      <!-- Moving To -->
      <div class="flex flex-col w-full mt-3">
        <div class="text-sm font-medium text-black mb-2 text-center lg:text-left lg:mb-1">Moving to</div>
        <input type="text" id="autocomplete2" name="moving_to" placeholder="Enter Location" class="w-full md:py-3 py-2 px-4 rounded-lg lg:rounded-md outline-none text-black text-center lg:text-left placeholder-gray-500 focus:ring-2 focus:ring-black/20" required>
      </div>

      <!-- Get Quote Button -->
      <div class="w-full lg:w-auto pt-2 mt-5 lg:pt-0">
        <button type="submit" class="bg-black text-white text-base font-medium px-8 py-3 rounded-lg hover:bg-white hover:text-black border border-transparent hover:border-primary transition whitespace-nowrap w-full lg:w-auto block text-center shadow-lg">Get a Free Quote</button>
      </div>
    </form>
  </div>
</section>

<section class="bg-white text-black md:py-12 pb-4 pt-12 md:mt-10 mt-28">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

    <!-- Top Ratings -->
    <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 lg:gap-8 mb-6 text-sm">
      <!-- Experience -->
      <div class="text-center">
        <p class="text-primary font-semibold text-sm sm:text-base">10 Years</p>
        <p class="text-black font-medium text-xs sm:text-sm">Experience</p>
      </div>
      <div class="border-l border-primary h-6"></div>

      <!-- Google Rating -->
      <div class="flex items-center gap-2">
        <div class="flex flex-col items-center gap-0">
          <span class="text-yellow-500 text-sm sm:text-base">★★★★★</span>
          <span class="text-black text-xs sm:text-sm">(4.2) 166</span>
        </div>
        <img src="{{ asset('assets/images/allImages/Google.webp') }}" alt="Google" class="h-8 sm:h-10 lg:h-12">
      </div>
      <div class="border-l border-primary h-6"></div>

      <!-- Trustpilot -->
      <div class="flex items-center gap-2">
        <img src="{{ asset('assets/images/allImages/Trustpilot.webp') }}" alt="Trustpilot" class="h-12 md:h-14">
      </div>
    </div>

    <!-- Title -->
    <h2 class="text-xl md:text-3xl mt-4 md:mt-12 font-bold mb-4 md:mb-12">Your Trusted Local Moving Company</h2>

    <section class="bg-primary py-4 md:py-6 md:px-8 md:max-w-6xl mx-auto rounded-lg shadow-lg relative">

      <div class="flex items-center ">
        <div class="absolute inset-0 md:w-[80px] md:h-[85px] md:bg-primary md:left-[-35px] top-[21%] mt-[-7px] transform rotate-[-42deg]"></div>
      </div>

      <!-- Services Row -->
      <div class="flex flex-wrap justify-center md:justify-between w-full ml-2 md:ml-6 md:gap-2 gap-x-6 gap-y-2">
        <!-- Item -->
        <div class="flex flex-col items-center text-white md:w-[100px] w-1/7 md:min-w-[80px] min-w-[100px] md:mt-[-65px] ">
          <div class="">
            <img src="{{ asset('assets/images/icons/moving-home.webp') }}" alt="Moving Home" class="md:h-24 md:w-24 h-20 w-20 " />
          </div>
          <p class="mt-1 text-xs sm:text-sm lg:text-md text-center leading-4 sm:leading-5">Moving <br> Home</p>
        </div>

        <div class="flex flex-col items-center text-white md:w-[100px] w-1/7 md:min-w-[80px] min-w-[100px] md:mt-[-65px] ">
          <div class="">
            <img src="{{ asset('assets/images/icons/packing.webp') }}" alt="Packing" class="md:h-24 md:w-24 h-20 w-20 " />
          </div>
          <p class="mt-1 text-xs sm:text-sm lg:text-md text-center leading-4 sm:leading-5">Packing</p>
        </div>

        <div class="flex flex-col items-center text-white md:w-[100px] w-1/7 md:min-w-[80px] min-w-[100px] md:mt-[-65px] ">
          <div>
            <img src="{{ asset('assets/images/icons/interisland.webp') }}" alt="Moving Interisland" class="md:h-24 md:w-24 h-20 w-20 " />
          </div>
          <p class="mt-1 text-xs sm:text-sm lg:text-md text-center leading-4 sm:leading-5">Moving <br> Intersland</p>
        </div>

        <div class="flex flex-col items-center text-white md:w-[100px] w-1/7 md:min-w-[80px] min-w-[100px] md:mt-[-65px] ">
          <div>
            <img src="{{ asset('assets/images/icons/small-moves.webp') }}" alt="Small Moves" class="md:h-24 md:w-24 h-20 w-20 " />
          </div>
          <p class="mt-1 text-xs sm:text-sm lg:text-md text-center leading-4 sm:leading-5">Small <br> Moves</p>
        </div>

        <div class="flex flex-col items-center text-white md:w-[100px] w-1/7 md:min-w-[80px] min-w-[100px] md:mt-[-65px] ">
          <div>
            <img src="{{ asset('assets/images/icons/storage.webp') }}" alt="Storage" class="md:h-24 md:w-24 h-20 w-20 " />
          </div>
          <p class="mt-1 text-xs sm:text-sm lg:text-md text-center leading-4 sm:leading-5">Storage</p>
        </div>

        <div class="flex flex-col items-center text-white md:w-[100px] w-1/7 md:min-w-[80px] min-w-[100px] md:mt-[-65px] ">
          <div>
            <img src="{{ asset('assets/images/icons/moving-office.webp') }}" alt="Moving Office" class="md:h-24 md:w-24 h-20 w-20 " />
          </div>
          <p class="mt-1 text-xs sm:text-sm lg:text-md text-center leading-4 sm:leading-5">Moving <br> Office</p>
        </div>

        <div class="flex flex-col items-center text-white md:w-[100px] w-1/7 md:min-w-[80px] min-w-[100px] md:mt-[-65px] ">
          <div>
            <img src="{{ asset('assets/images/icons/supplies.webp') }}" alt="Moving Supplies" class="md:h-24 md:w-24 h-20 w-20 " />
          </div>
          <p class="mt-1 text-xs sm:text-sm lg:text-md text-center leading-4 sm:leading-5">Moving <br> Supplies</p>
        </div>
      </div>
    </section>
  </div>
</section>

</div>
</section>

<section class="bg-white text-black md:pt-2 px-4">
  <div class="max-w-6xl  pt-4 pb-10 mx-auto px-6 md:px-8 flex flex-col lg:flex-row gap-8 md:gap-10 items-center md:shadow-none shadow-[0_0px_20px_rgba(0,0,0,0.25)] rounded-lg md:rounded-3xl">

    <!-- Text Content -->
    <div class="flex-1 md:text-start text-center">
      <h3 class="text-lg md:text-3xl font-bold mb-2">MCM Moving Services – Here When You Need Us Most</h3>
      <p class="text-primary font-medium md:text-[16px] text-[12px] md:mb-4 mb-2">We Provide Emergency Moving Assistance</p>
      <p class="font-medium md:text-[16px] text-[12px] mb-4">At Melbourne Central Movers, we’re ready when you need us. Our team ensures your move is smooth, safe, and stress-free, whether you’re shifting a single room or an entire office. Let us handle the heavy lifting so you can focus on settling into your new space with ease. We’re here to make your moving day simpler, faster, and worry-free.</p>
      <a href="#" class="bg-primary text-white md:text-[16px] text-[12px] px-8 inline-flex  py-2 md:px-10 md:py-3 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition">Get a Quote</a>
    </div>

    <!-- Image -->
    <div class="w-[300px]">
      <img src="{{ asset('assets/images/allImages/When You Need Us Most.webp') }}" alt="Moving Boxes" class="rounded-lg shadow-lg">
    </div>

  </div>
</section>

<section class="bg-gray text-white md:py-10 mt-6 rounded-3xl md:px-20 max-w-6xl mx-4 md:mx-auto py-6 shadow-[2_5px_20px_rgba(0,0,0,0.25)]">
  <div class=" px-4 flex flex-col md:flex-row items-center justify-between gap-6">

    <!-- Text -->
    <div class="flex-1 text-center md:text-left">
      <h4 class="text-xl md:text-3xl font-bold mb-2">Reassuring & Professional</h4>
      <p class="font-medium md:text-[18px] text-[15px] md:mb-4 mb-2">Your Trusted Moving Partner</p>
      <p class="font-medium md:text-[16px] text-[12px] md:mb-4 mb-2">Whether it’s planned or last-minute, MCM is here to help. Fully insured, experienced, and always on time.</p>
    </div>

    <!-- Button -->
    <a href="#" class="bg-primary font-semibold text-white md:text-[16px] text-[12px] px-8 inline-flex  py-2 md:px-10 md:py-3 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition">Get a Free Quote</a>

  </div>
</section>

<section class="px-6 md:px-10 py-6 md:py-8 ">
  <div class="grid md:grid-cols-2 gap-8 md:gap-10 items-start mx-auto max-w-6xl">
    <!-- Left: Text Content -->
    <div class="text-center md:text-left">
      <!-- Heading -->
      <h2 class="text-xl md:text-3xl font-bold text-black mb-3">What Can We Move?</h2>
      <p class="text-primary md:text-[18px] text-[14px] font-medium">
        MCM can handle all your removalist requirements.
      </p>
      <p class="text-primary md:text-[18px] text-[13px] font-medium mb-4">
        Here are just some of the items we can move for you.
      </p>

      <!-- Checklist (text only, no icons) -->
      <div class="grid grid-cols-2 md:gap-x-8 md:gap-y-3 text-black md:text-[16px] text-[13px] whatCanWeMove place-items-start justify-center">
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
        <h2 class="text-xl md:text-3xl font-bold text-black mb-3">Business Hours</h2>
        <p class="md:text-[18px] text-[14px] font-medium text-black leading-relaxed">
          MCM will work closely with customer success team to ensure your move is completed seamlessly and
          according to schedule. As well as standard business hours, our team is available around the clock
          to ensure your move is a success.
        </p>
      </div>
    </div>

    <!-- Right: Image Boxes (without images) -->
    <div class="relative min-h-[500px]">
      <div class="absolute top-0 right-0 md:w-2/4 rounded-lg overflow-hidden z-20 shadow-lg bg-gray-200 ">

        <img src="{{ asset('assets/images/allImages/What Can We Move- Back.webp') }}" alt="..." class="md:w-full md:h-auto h-[320px] !w-[260px] bg-cover object-cover rounded-md md:object-cover">
      </div>

      <!-- Green Background Box -->
      <div class="absolute md:top-24 top-12 left-10 md:left-28 md:w-2/4 md:h-72 h-[370px] w-[280px] bg-primary rounded-md z-10"></div>

      <!-- Bottom Image Placeholder -->
      <div class="absolute top-40 md:left-16 rounded-lg overflow-hidden z-30 shadow-lg bg-gray-200 w-[260px] h-auto">
        <img src="{{ asset('assets/images/allImages/What Can We Move- Front.webp') }}" alt="..." class="md:w-full md:h-auto object-cover">
      </div>
    </div>
  </div>
</section>


<section class="bg-white md:py-12 md:mt-0 -mt-10 px-4 md:px-10">
  <div class="mx-auto md:px-8 w-full md:max-w-6xl">
    <h2 class="text-xl md:text-3xl font-bold mb-2 text-center">Tips for a Smooth House Move in Melbourne</h2>
    <p class="md:text-[16px] text-[12px]  text-primary font-medium max-w-3xl mx-auto text-center mb-4 md:mb-6">Planning your house move properly can save you time, money, and stress. Here’s how to ensure a seamless relocation in Melbourne:</p>

    <!-- Roadmap line -->
    <div class="relative">
      <div class="absolute top-0 left-0 w-full h-1 border-t-4 border-dashed border-primary/30 z-0 transition-all duration-300 mb-10" id="road-line"></div>

      <!-- Step boxes -->
      <div class="grid grid-cols-2 md:grid-cols-5 gap-3 md:gap-6 relative z-10 justify-between justify-items-stretch items-stretch">

        <!-- Step Template -->
        <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="1">
          <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">1</div>
          <div class="box bg-white border rounded-xl shadow-md px-4 py-2 transition-all duration-300 group-hover:shadow-lg md:min-h-[280px] md:w-auto min-w-[150px]">
            <img src="{{ asset('assets/images/icons/footer-location.webp') }}" alt="Step 1" class="md:w-16 md:h-16 mb-1 h-10 w-10">
            <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Start Early and Declutter:</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">
              Begin preparing for your move at least 2–3 weeks in advance. Sort your belongings and decide what to keep, donate, or dispose of. This reduces moving costs and makes unpacking easier.
            </p>
          </div>
        </div>

        <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="2">
          <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">2</div>
          <div class="box bg-white border rounded-xl shadow-md px-4 py-2 transition-all duration-300 group-hover:shadow-lg md:min-h-[280px] md:w-auto min-w-[150px]">
            <img src="{{ asset('assets/images/icons/moving-home.webp') }}" alt="Step 2" class="md:w-16 md:h-16 mb-1 h-10 w-10 ">
            <h3 class="font-semibold text-base mb-1">Create a Moving Checklist:</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">
              List every task you need to complete before moving day, including notifying your utility providers, updating your address, and arranging parking permits for the moving truck in your Melbourne suburb.
            </p>
          </div>
        </div>

        <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="3">
          <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">3</div>
          <div class="box bg-white border rounded-xl shadow-md px-4 py-2 transition-all duration-300 group-hover:shadow-lg md:min-h-[280px] md:w-auto min-w-[150px]">
            <img src="{{ asset('assets/images/icons/packing.webp') }}" alt="Step 3" class="md:w-16 md:h-16 mb-1 h-10 w-10 ">
            <h3 class="font-semibold text-base mb-1">Use High-Quality Packing Materials:</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">
              Invest in sturdy boxes, bubble wrap, . Label each box with its contents and the room it belongs to in your new home for easy unpacking.
            </p>
          </div>
        </div>

        <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="4">
          <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">4</div>
          <div class="box bg-white border rounded-xl shadow-md px-4 py-2 transition-all duration-300 group-hover:shadow-lg md:min-h-[280px] md:w-auto min-w-[150px]">
            <img src="{{ asset('assets/images/icons/How it works in 4 steps-2.webp') }}" alt="Step 4" class="md:w-16 md:h-16 mb-1 h-10 w-10 ">
            <h3 class="font-semibold text-base mb-1">Prepare an Essentials Box:</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">
              Pack a separate box with items you’ll need on your first day, such as toiletries, chargers, snacks, important documents, and a change of clothes.
            </p>
          </div>
        </div>

        <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300" data-step="5">
          <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">5</div>
          <div class="box bg-white border rounded-xl shadow-md px-4 py-2 transition-all duration-300 group-hover:shadow-lg md:min-h-[280px] md:w-auto min-w-[150px]">
            <img src="{{ asset('assets/images/icons/How it works in 4 steps-3.webp') }}" alt="Step 5" class="md:w-16 md:h-16 mb-1 h-10 w-10 ">
            <h3 class="font-semibold text-base mb-1">Plan for Access and Timing:</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">
              Check if your building requires booking elevators or has restrictions for moving times. Avoid peak Melbourne traffic hours to save time on moving day.
            </p>
          </div>
        </div>

        <div class="step-box group text-left max-w-xs mx-auto cursor-pointer transition-all duration-300 md:hidden block" data-step="6">
          <div class="step-circle bg-yellow-400 text-white text-xl font-bold rounded-full w-10 h-10  items-center justify-center mx-auto mb-8 mt-[-20px] transition-all duration-300 md:flex hidden">5</div>
          <div class="box bg-white border rounded-xl shadow-md px-4 py-2 transition-all duration-300 group-hover:shadow-lg md:min-h-[280px] md:w-auto min-w-[150px]">
            <img src="{{ asset('assets/images/icons/How it works in 4 steps-3.webp') }}" alt="Step 5" class="md:w-16 md:h-16 mb-1 h-10 w-10 ">
            <h3 class="font-semibold text-base mb-1">Plan for Access and Timing:</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">
              Check if your building requires booking elevators or has restrictions for moving times. Avoid peak Melbourne traffic hours to save time on moving day.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="md:py-0 py-10 bg-white text-center ">
  <div class="md:max-w-6xl mx-auto md:px-0 px-4">
    <h2 class="text-xl md:text-3xl font-bold mb-2 text-center">Our Moving Services</h2>
    <p class="md:text-[16px] text-[12px]  text-primary font-medium md:max-w-3xl mx-auto text-center mb-4 md:mb-6">
      Our team’s goal is to deliver a standard of excellence that surpasses customer expectations
      and delivers on service, quality and value. You can place your trust in our professional
      team to remove the stress and make your move easy.
    </p>

    <!-- Progress Bar -->
    <div class="h-2 w-full bg-black relative mb-6 px-4">
      <div id="slick-progress" class="absolute top-0 left-0 h-2 bg-primary transition-all duration-300" style="width: 0%"></div>
    </div>

    <!-- Slick Slider -->
    <div class="slick-moving-services md:px-0">
      <!-- Slide 1 -->
      <div class="px-2">
        <div class="relative rounded-md overflow-hidden shadow-md h-72">
          <img src="{{ asset('assets/images/allImages/Our Moving Services 2.webp') }}" alt="House Moving" class="w-full h-full object-cover" />

          <!-- Overlay -->
          <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
            <h3 class="text-white md:text-[16px] text-[14px] font-semibold mb-1 italic">House Moving</h3>
            <p class="text-white md:text-[12px] text-[10px] font-normal mb-1">Safe and efficient moving for homes of all sizes.</p>
            <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
          </div>
        </div>

      </div>

      <div class="px-2">
        <div class="relative rounded-md overflow-hidden shadow-md h-72">
          <img src="{{ asset('assets/images/allImages/Our Moving Services 2.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

          <!-- Overlay -->
          <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
            <h3 class="text-white md:text-[16px] text-[14px] font-semibold mb-1 italic">Packing Services</h3>
            <p class="text-white md:text-[12px] text-[10px] font-normal mb-1">Full or partial packing with quality materials and care.</p>
            <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
          </div>
        </div>

      </div>

      <div class="px-2">
        <div class="relative rounded-md overflow-hidden shadow-md h-72">
          <img src="{{ asset('assets/images/allImages/Our Moving Services 3.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

          <!-- Overlay -->
          <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
            <h3 class="text-white md:text-[16px] text-[14px] font-semibold mb-1 italic">Packing Services</h3>
            <p class="text-white md:text-[12px] text-[10px] font-normal mb-1">Full or partial packing with quality materials and care.</p>
            <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
          </div>
        </div>

      </div>

      <div class="px-2">
        <div class="relative rounded-md overflow-hidden shadow-md h-72">
          <img src="{{ asset('assets/images/allImages/Our Moving Services 4.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

          <!-- Overlay -->
          <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
            <h3 class="text-white md:text-[16px] text-[14px] font-semibold mb-1 italic">Packing Services</h3>
            <p class="text-white md:text-[12px] text-[10px] font-normal mb-1">Full or partial packing with quality materials and care.</p>
            <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
          </div>
        </div>

      </div>

      <div class="px-2">
        <div class="relative rounded-md overflow-hidden shadow-md h-72">
          <img src="{{ asset('assets/images/allImages/Our Moving Services 1.webp') }}" alt="Packing Services" class="w-full h-full object-cover" />

          <!-- Overlay -->
          <div class="text-start absolute inset-0 bg-gradient-to-t from-black/10 via-black/10 to-transparent p-4 flex flex-col justify-end">
            <h3 class="text-white md:text-[16px] text-[14px] font-semibold mb-1 italic">Packing Services</h3>
            <p class="text-white md:text-[12px] text-[10px] font-normal mb-1">Full or partial packing with quality materials and care.</p>
            <a href="#" class="text-primary font-semibold text-sm italic underline">Learn more...</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Button -->
    <button class="mt-6 px-6 md:py-3 py-2 bg-primary text-black font-medium rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition">
      Get a Free Quote
    </button>
  </div>
</section>

<h2 class="text-xl md:text-3xl font-bold mb-2 md:mt-8 text-center">How it works in 4 steps</h2>
<section class="relative md:py-10 bg-black text-white">
  <!-- Background Image -->
  <div class=" py-10">
    <div class="absolute inset-0 z-0">
      <img src="{{ asset('assets/images/allImages/How it works in 4 steps BG.webp') }}" alt="How it works" class="w-full h-full object-cover opacity-80">
    </div>

    <!-- Overlay Content -->
    <div class="relative z-10 md:max-w-6xl mx-auto px-6 text-center">

      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
        <!-- Step 1 -->
        <div>
          <div class="flex justify-center md:mb-4 mb-1">
            <div>
              <img src="{{ asset('assets/images/icons/How it works in 4 steps-1.webp') }}" alt="Step 1" class="md:w-24 md:h-24 w-16 h-16">
            </div>
          </div>
          <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">First Contact</h3>
          <p class="md:text-[12px] text-[10px] font-normal mb-1">When you decide to reach out to us, you will speak live to a highly trained removalist who knows the entire moving process.</p>
        </div>

        <!-- Step 2 -->
        <div>
          <div class="flex justify-center md:mb-4 mb-1">
            <div>
              <img src="{{ asset('assets/images/icons/How it works in 4 steps-2.webp') }}" alt="Step 2" class="md:w-24 md:h-24 w-16 h-16">
            </div>
          </div>
          <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Before Your Move</h3>
          <p class="md:text-[12px] text-[10px] font-normal mb-1">We have a special team of MCM called move coordinators who are 100% dedicated to the careful planning of your move.</p>
        </div>

        <!-- Step 3 -->
        <div>
          <div class="flex justify-center md:mb-4 mb-1">
            <div>
              <img src="{{ asset('assets/images/icons/How it works in 4 steps-3.webp') }}" alt="Step 3" class="md:w-24 md:h-24 w-16 h-16">
            </div>
          </div>
          <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Moving Day</h3>
          <p class="md:text-[12px] text-[10px] font-normal mb-1">You will be greeted by on-time, friendly, professional movers ready to work. Our movers are carefully screened and trained.</p>
        </div>

        <!-- Step 4 -->
        <div>
          <div class="flex justify-center md:mb-4 mb-1">
            <div>
              <img src="{{ asset('assets/images/icons/How it works in 4 steps-4.webp') }}" alt="Step 4" class="md:w-24 md:h-24 w-16 h-16">
            </div>
          </div>
          <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">After The Move</h3>
          <p class="md:text-[12px] text-[10px] font-normal mb-1">Even after the bill is signed and the crew has left, you are never on your own with questions or extra help.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="relative md:py-16 py-8 bg-white">
  <!-- Background -->
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('assets/images/allImages/Benefits of choosing - MCM BG.webp') }}" alt="Benefits Background" class="w-full h-full object-cover opacity-100">
  </div>

  <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
    <h2 class="text-xl md:text-3xl font-bold mb-2 md:mt-8 text-center">Benefits of choosing – MCM</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-center text-left justify-center place-items-center place-content-center">

      <!-- Left Benefits -->
      <div class="md:space-y-8 space-y-6">
        <!-- Cost Effective -->
        <div class="flex md:items-start items-center md:px-0 px-4">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Cost Effective.webp') }}" alt="Cost Effective" class="md:w-32 w-16 h-auto object-contain">
          </div>
          <div>
            <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Cost Effective</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">We offer highly affordable moving services with fast and transparent quotes.</p>
          </div>
        </div>

        <!-- Courteous Service -->
        <div class="flex md:items-start items-center md:px-0 px-4">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Courteous Service.webp') }}" alt="Courteous Service" class="md:w-32 w-16 h-auto object-contain">
          </div>
          <div>
            <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Courteous Service</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">Helping people is what we do. We’re happy to assist you with all your queries.</p>
          </div>
        </div>

        <!-- Peace of Mind -->
        <div class="flex md:items-start items-center md:px-0 px-4">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Peace Of Mind.webp') }}" alt="Peace of Mind" class="md:w-32 w-16 h-auto object-contain">
          </div>
          <div>
            <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Peace Of Mind</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">We plan your move and make sure you have the right tools and tech for the job.</p>
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
        <div class="flex md:items-start items-center md:px-0 px-4">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Personalised Service.webp') }}" alt="Personalised Service" class="md:w-32 w-16 h-auto object-contain">
          </div>
          <div>
            <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Personalised Service</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">We customize your move with packing, disassembling, reinstalling, and more.</p>
          </div>
        </div>

        <!-- Satisfaction -->
        <div class="flex md:items-start items-center md:px-0 px-4">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Satisfaction.webp') }}" alt="Satisfaction" class="md:w-32 w-16 h-auto object-contain">
          </div>
          <div>
            <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Satisfaction</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">We keep our word and do it better than the rest – with honesty and integrity.</p>
          </div>
        </div>

        <!-- Free Up More Time -->
        <div class="flex md:items-start items-center md:px-0 px-4">
          <div class="mr-2">
            <img src="{{ asset('assets/images/icons/Free Up More Time.webp') }}" alt="Free Up More Time" class="md:w-32 w-16 h-auto object-contain">
          </div>
          <div>
            <h3 class="md:text-[16px] text-[14px] font-semibold mb-1">Free Up More Time</h3>
            <p class="md:text-[12px] text-[10px] font-normal mb-1">We handle everything efficiently so you can focus on what matters most.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section
  class="text-center text-black md:py-12 px-4 bg-cover bg-center bg-no-repeat md:my-10 my-5"
  style="background-image: url('{{ asset('assets/images/allImages/Since opening in Melbourne in 2004.webp') }}');">
  <h2 class="text-xl md:text-3xl font-bold text-center md:mb-10">
    Since opening in Melbourne in 2004
  </h2>

  <div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-3 md:gap-6 gap-4 md:mb-12 mb-6 mt-4 place-content-center place-items-center justify-items-center items-center">
    <!-- Local Moves -->
    <div>
      <p class="md:text-[16px] text-[14px] font-semibold mb-1">10,000+</p>
      <p class="md:text-[12px] text-[10px] font-normal mb-1 mt-2">Local Melbourne Home Moves</p>
    </div>
    <!-- Business Relocations -->
    <div>
      <p class="md:text-[16px] text-[14px] font-semibold mb-1">1,000+</p>
      <p class="md:text-[12px] text-[10px] font-normal mb-1 mt-2">Melbourne Business Relocations</p>
    </div>
    <!-- Interstate Moves -->
    <div>
      <p class="md:text-[16px] text-[14px] font-semibold mb-1">5,000+</p>
      <p class="md:text-[12px] text-[10px] font-normal mb-1 mt-2">Interstate Moves to Melbourne</p>
    </div>
  </div>

  <!-- CTA Buttons -->
  <div class="flex flex-row md:flex-row justify-center items-center gap-4 mb-12">
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
    <h3 class="text-xl md:text-3xl font-bold text-center mb-3">What our clients say</h3>
    <div class="flex flex-col items-center justify-center gap-2">
     <div>
       <span class="text-xl md:text-3xl font-bold text-center ">4.2</span>
      <span class="md:text-[16px] text-[14px] font-semibold mb-1">Out of 5 Star</span>
     </div>
      <div class="flex gap-1 text-yellow-400 md:text-[16px] text-[14px]">
        <span>★</span><span>★</span><span>★</span><span>★</span><span class="text-gray-300">★</span>
      </div>
      <div class="flex items-start flex-col gap-0">
        <img src="{{ asset('assets/images/allImages/Google.webp') }}" alt="Google" class="md:h-20 h-12 w-auto ml-2" />
      </div>
    </div>
  </div>
</section>

<section class="bg-primary md:py-8 py-5  px-4 text-black">
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

<section class="bg-white md:py-10 py-6">

  <h2 class="text-xl md:text-3xl font-bold text-center mb-4 md:mb-6">MCM Blogs</h2>

  <div
    class="py-16 px-4 bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('assets/images/allImages/MCM Blogs BG.webp') }}'); ">


    <div class="max-w-5xl mx-auto">
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
    <a href="#" class="bg-primary text-black text-lg px-8 py-2 md:py-3 rounded-md hover:bg-white hover:text-black border border-transparent hover:border-primary transition">See All Blogs</a>
  </div>


</section>

<section class="bg-white py-6 md:py-6 md:px-0 px-4">
  <div class="max-w-6xl mx-auto">
    <!-- Section Header -->
    <div class="text-center md:mb-12">
      <h2 class="text-xl md:text-3xl font-bold text-center mb-4 md:mb-6">
        Frequently Asked Questions.
      </h2>
      <p class="md:text-[16px] text-[10px] font-normal mb-1">
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
              <span class="flex-1 md:text-[20px] text-[16px] font-semibold text-black pr-4">What factors affect the cost of hiring removalists?</span>
              <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
              </div>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
              <div class="pb-5 pr-12">
                <p class="md:text-[16px] text-[12px] font-normal mb-1">
                  Several factors influence the cost of hiring removalists, including the distance of your move, the size and weight of your belongings, the time of year, additional services required (like packing or storage), and accessibility at both locations. We provide transparent pricing with no hidden fees.
                </p>
              </div>
            </div>
          </li>

          <li class="border-b-2 border-gray">
            <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
              <span class="flex-1 md:text-[20px] text-[16px] font-semibold text-black pr-4">Are there any hidden fees with Melbourne Central Movers?</span>
              <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
              </div>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
              <div class="pb-5 pr-12">
                <p class="md:text-[16px] text-[12px] font-normal mb-1">
                  No, we pride ourselves on transparent pricing. All costs are clearly outlined in your quote, and we don't charge any hidden fees. What you see in your estimate is what you pay, with no surprise charges.
                </p>
              </div>
            </div>
          </li>

          <li class="border-b-2 border-gray">
            <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
              <span class="flex-1 md:text-[20px] text-[16px] font-semibold text-black pr-4">Are your removalists experienced and insured?</span>
              <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
              </div>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
              <div class="pb-5 pr-12">
                <p class="md:text-[16px] text-[12px] font-normal mb-1">
                  Yes, all our removalists are highly experienced professionals with years of training in safe moving practices. We are fully licensed and insured, providing you with peace of mind knowing your belongings are protected throughout the moving process.
                </p>
              </div>
            </div>
          </li>

          <li class="border-b-2 border-gray">
            <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
              <span class="flex-1 md:text-[20px] text-[16px] font-semibold text-black pr-4">Can I book a moving service for a specific time?</span>
              <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
              </div>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
              <div class="pb-5 pr-12">
                <p class="md:text-[16px] text-[12px] font-normal mb-1">
                  Yes, we offer flexible scheduling to accommodate your preferred moving time. We recommend booking in advance to secure your preferred date and time slot, especially during peak moving seasons.
                </p>
              </div>
            </div>
          </li>

          <li class="border-b-2 border-gray">
            <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
              <span class="flex-1 md:text-[20px] text-[16px] font-semibold text-black pr-4">What should I do if I need to reschedule my move?</span>
              <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
              </div>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
              <div class="pb-5 pr-12">
                <p class="md:text-[16px] text-[12px] font-normal mb-1">
                  We understand that plans can change. Please contact us as soon as possible if you need to reschedule. We'll do our best to accommodate your new preferred date and time, subject to availability.
                </p>
              </div>
            </div>
          </li>

          <li class="border-b-2 border-gray">
            <button class="relative flex gap-2 items-center w-full py-3 text-left group" aria-expanded="false" onclick="toggleFAQ(this)">
              <span class="flex-1 md:text-[20px] text-[16px] font-semibold text-black pr-4">How do I get started with Melbourne Central Movers?</span>
              <div class=" flex items-center justify-center transition-transform duration-200 group-aria-expanded:rotate-45">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
              </div>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden">
              <div class="pb-5 pr-12">
                <p class="md:text-[16px] text-[12px] font-normal mb-1">
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
        <button class="bg-primary hover:bg-white hover:text-black border border-transparent hover:border-primary text-white md:px-16 px-10 md:py-4 py-2 rounded-lg font-semibold text-lg transition-colors duration-200 shadow-lg hover:shadow-xl w-full lg:w-auto">
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
          breakpoint: 1280,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3
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

    $('.blog-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      infinite: true,
      autoplay: true,

      // Custom arrows
      prevArrow: `<button type="button" class="slick-prev custom-arrow left-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>`,

      nextArrow: `<button type="button" class="slick-next custom-arrow right-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>`,

      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            dots: false,
            arrows: false
          }
        }
      ]
    });
    $('.testimonial-card').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,

      // Custom arrows
      prevArrow: `<button type="button" class="slick-prev custom-arrow left-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>`,

      nextArrow: `<button type="button" class="slick-next custom-arrow right-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>`,

      responsive: [{
          breakpoint: 1280,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            dots: false,
            arrows: false
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