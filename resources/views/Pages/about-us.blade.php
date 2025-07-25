@extends('Pages.layouts.app')
@section('metadata')
<title> MCM - About Us</title>

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
<section class="relative w-full md:h-[40vh] h-[30vh] bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('{{ asset('assets/images/allImages/How it works in 4 steps BG.webp') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class=" z-10 text-left w-full max-w-6xl px-4">
        <h1 class="md:text-6xl text-3xl font-bold text-primary">About Us</h1>
        <p class="mt-4 text-lg">Learn more about our packing services and how we can assist you.</p>
    </div>

</section>

<section class="mx-auto px-4  md:px-8 md:max-w-6xl  lg:max-w-7xl xl:max-w-8xl">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-10 items-start py-12 px-6 bg-white">
        <!-- Left Image -->
        <div>
            <img src="{{ asset('assets/images/allImages/When You Need Us Most.webp') }}" alt="Delivery Guy" class="w-full h-auto rounded-md shadow-lg" />
        </div>

        <!-- Right Content -->
        <div class="">
            <p class="text-primary font-semibold uppercase text-sm mb-2">About Us</p>
            <h2 class="text-3xl md:text-4xl font-bold  leading-tight mb-4">
              Melbourne’s Reliable Moving Experts – Homes, Offices & More
            </h2>

            <p class="text-sm md:text-lg mb-6">
               At Melbourne Central Movers, we understand that every move is more than just relocating items, it’s about moving lives. We take the time to understand your needs, budget, and what matters most, ensuring a smooth, stress-free moving experience tailored just for you.
            </p>

            <!-- Progress Bars -->
            <div class="flex items-center space-x-4">
                <div class="space-y-4 flex-1">
                    <div>
                        <div class="flex justify-between text-sm font-medium text-gray-800 mb-1">
                            <span>House removal</span>

                        </div>
                        <div class="w-full bg-gray-200 h-2 rounded flex items-center justify-between gap-3">
                            <div class="bg-primary h-2 rounded" style="width: 100%"></div>
                            <span>100%</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm font-medium text-gray-800 mb-1">
                            <span>vFurniture removal</span>

                        </div>
                        <div class="w-full bg-gray-200 h-2 rounded flex items-center justify-between gap-3">
                            <div class="bg-primary h-2 rounded" style="width: 100%"></div>
                            <span>100%</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm font-medium text-gray-800 mb-1">
                            <span>Furniture removal</span>

                        </div>
                        <div class="w-full bg-gray-200 h-2 rounded flex items-center justify-between gap-3">
                            <div class="bg-primary h-2 rounded" style="width: 90%"></div>
                            <span>90%</span>
                        </div>
                    </div>
                </div>

                <!-- Feature List -->
                <ul class="mt-6 space-y-2 text-sm text-gray-700 flex-1">
                    <li class="flex items-center gap-2">
                        <span class="text-primary text-sm md:text-lg">✔</span> Expertise and Experience
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-primary text-sm md:text-lg">✔</span> Customer-Centric Approach
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-primary text-sm md:text-lg">✔</span> Always Work With Energetic Team
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-primary text-sm md:text-lg">✔</span> We are Award Winning Company
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>
<section class="py-10 bg-gray-50">
    <div class="mx-auto px-4  md:px-8 md:max-w-6xl  lg:max-w-7xl xl:max-w-8xl">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <p class="md:text-base text-sm text-primary font-medium max-w-3xl mx-auto">
                Why Choose Us?
            </p>
            <h2 class="text-2xl md:text-4xl font-bold text-black mb-4 mt-2">
                We create opportunity to reach potential
            </h2>
            <p class="md:text-lg text-base text-black font-medium max-w-3xl mx-auto">
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

<section class="bg-white py-12 px-4 md:px-10">
    <div class="mx-auto md:px-8 max-w-6xl lg:max-w-7xl xl:max-w-8xl">

        <p class="md:text-base text-sm text-primary font-medium max-w-3xl mx-auto text-center">
           Our Services
        </p>
        <h2 class="text-2xl md:text-4xl font-bold text-black mb-4 text-center">We are helping you to get moving solution</h2>
        <p class="md:text-md text-sm text-black font-medium max-w-3xl mx-auto text-center mb-10">Planning your house move properly can save you time, money, and stress. Here’s how to ensure a seamless relocation in Melbourne:</p>

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


<section class="bg-primary py-8 sm:py-10 lg:py-12 px-4 text-black mb-16">
    <div class="max-w-7xl mx-auto md:px-4 px-8 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-4xl font-bold mb-4 text-white">What Our Customers Say</h2>
            <p class="text-lg md:text-xl text-gray-200 text-white">We value our customers' feedback and strive to provide the best service possible.</p>
        </div>
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