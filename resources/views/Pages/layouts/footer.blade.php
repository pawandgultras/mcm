

<!-- Contact Section -->
<section class="bg-gray py-6 sm:py-8 px-4">
  <div class="max-w-5xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      <!-- Left Side - Contact Info -->
      <div class="text-white">
        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">
          Contact The Melbourne Central Movers
        </h2>

        <h3 class="text-xl font-bold mb-4">Have you got a moving question?</h3>

        <p class="text-gray-300 leading-relaxed mb-8">
          The Moving Company - NZ Best Movers are here to help with any queries you might have about relocating within New Zealand or international moving. Get in touch with our friendly team using the form and we will get back to you as soon as we can. We'd love to help you get moving!
        </p>

        <a href="tel:1300163694" class="">
          <div class="inline-flex items-center gap-4 bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-lg shadow-lg transition-colors duration-200">
            <img src="{{ asset('assets/images/icons/Call- white.webp') }}" alt="Phone Icon" class="w-6 h-6">
            <span class="text-lg font-semibold">1300 163 694</span>
          </div>
        </a>
      </div>

      <!-- Right Side - Contact Form -->
      <div class="bg-gray-600 p-6 rounded-lg border-2 border-primary">
        <div class="mb-3">
          <h3 class="text-primary text-2xl font-bold italic mb-2">Contact Us !</h3>
          <p class="text-white font-semibold text-sm">Fill out the form below to contact our team.</p>
        </div>

        <form class="space-y-1">
          <!-- Name and Phone Row -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div>
              <label class="block text-white text-sm font-medium mb-1">Your full Name</label>
              <input type="text" class="w-full px-4 py-2 rounded-lg bg-transparent border-2 border-primary text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20">
            </div>
            <div>
              <label class="block text-white text-sm font-medium mb-1">Phone Number</label>
              <input type="tel" class="w-full px-4 py-2 rounded-lg bg-transparent border-2 border-primary text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20">
            </div>
          </div>

          <!-- Email and Date Row -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-white text-sm font-medium mb-1">Your Email</label>
              <input type="email" class="w-full px-4 py-2 rounded-lg bg-transparent border-2 border-primary text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20">
            </div>
            <div>
              <label class="block text-white text-sm font-medium mb-1">Date</label>
              <input type="date" class="w-full px-4 py-2 rounded-lg bg-transparent border-2 border-primary text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20">
            </div>
          </div>

          <!-- Moving From and Moving To Row -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-white text-sm font-medium mb-1">Moving from?</label>
              <input type="text" class="w-full px-4 py-2 rounded-lg bg-transparent border-2 border-primary text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20">
            </div>
            <div>
              <label class="block text-white text-sm font-medium mb-1">Moving to?</label>
              <input type="text" class="w-full px-4 py-2 rounded-lg bg-transparent border-2 border-primary text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20">
            </div>
          </div>

          <!-- Message -->
          <div>
            <label class="block text-white text-sm font-medium mb-1">Your Message</label>
            <textarea rows="4" class="w-full px-4 py-2 rounded-lg bg-transparent border-2 border-primary text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 resize-none"></textarea>
          </div>

          <!-- Submit Button -->
          <div class="pt-4">
            <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Business Information Section -->
<section class="py-8 sm:py-10 lg:py-12 bg-white">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Header with Business Info -->
    <div class="text-center mb-6 sm:mb-8">
      <h2 class="text-2xl sm:text-3xl font-bold text-black mb-6 sm:mb-8">Melbourne Central Movers</h2>

      <!-- Top Info Bar -->
      <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6 md:gap-8 lg:gap-12 text-xs sm:text-sm text-gray-700 mb-6 sm:mb-8">
        <!-- Business Hours -->
        <div class="flex items-center justify-start gap-2 text-center">
          <img src="{{ asset('assets/images/icons/Map- timing.webp') }}" alt="Business Hours" class="w-6 h-6 sm:w-8 sm:h-8 flex-shrink-0">
          <span class="font-medium">Mon - Fri: 8am - 5pm, <br class="sm:hidden"> Sat: 9am - 2pm, Sun: Closed</span>
        </div>

        <!-- Address -->
        <div class="flex items-center gap-2">
          <img src="{{ asset('assets/images/icons/map-address.webp') }}" alt="Address" class="w-6 h-6 sm:w-8 sm:h-8 flex-shrink-0">
          <span class="font-medium">12 Queen Lane, Melbourne VIC 3004</span>
        </div>

        <!-- Phone -->
        <div class="flex items-center gap-2">
          <img src="{{ asset('assets/images/icons/map-call.webp') }}" alt="Phone" class="w-6 h-6 sm:w-8 sm:h-8 flex-shrink-0">
          <span class="font-medium">1300 163 694</span>
        </div>

        <!-- Email -->
        <div class="flex items-center gap-2 w-full sm:w-auto justify-center">
          <img src="{{ asset('assets/images/icons/map-mail.webp') }}" alt="Email" class="w-6 h-6 sm:w-8 sm:h-8 flex-shrink-0">
          <span class="font-medium break-all sm:break-normal">info@melbournecentralmovers.com.au</span>
        </div>
      </div>
    </div>

    <!-- Map Section -->
    <div class="w-full">
      <div class="h-64 sm:h-80 lg:h-96 w-full bg-gray-200 rounded-lg overflow-hidden">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.4953716850043!2d144.9729947!3d-37.8206398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df7a8b5d7%3A0x5045675218ce7e33!2s12%20Queen%20Ln%2C%20Melbourne%20VIC%203004%2C%20Australia!5e0!3m2!1sen!2sus!4v1635000000000!5m2!1sen!2sus"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</section>


<footer class="bg-black mt-10 text-white text-sm">
    <!-- Top Green Bar -->
    <div class="bg-primary flex flex-wrap justify-center text-center text-white py-8 px-6">
        <div class="flex items-center space-x-3 px-6 py-2">
            <div class="bg-white rounded-full p-2">
                <img src="{{ asset('assets/images/icons/Call- green.webp') }}" alt="Phone Icon" class="h-10 w-10" />
            </div>
            <div class="text-left">
                <p class="font-semibold text-lg">Need Help to Moving?</p>
                <p class="font-bold text-lg">Call - 1300 163 694</p>
            </div>
        </div>

        <div class="flex items-center space-x-3 px-6 py-2">
            <div class="bg-white rounded-full p-0">
                <img src="{{ asset('assets/images/icons/MCM Removalists.webp') }}" alt="Email Icon" class="h-16 w-16" />
            </div>
            <div class="text-left">
                <p class="font-semibold text-lg">MCM Removalists</p>
                <p class="font-bold text-2xl">Contact Us Now!</p>
            </div>
        </div>

        <div class="flex items-center space-x-3 px-6 py-2">
            <div class="bg-white rounded-full p-0">
                <img src="{{ asset('assets/images/icons/Request Online Quote.webp') }}" alt="Phone Icon" class="h-16 w-16" />
            </div>
            <div class="text-left">
                <p class="font-semibold text-lg">Click Here!</p>
                <p class="font-bold text-lg">Request Online Quote</p>
            </div>
        </div>

    </div>

    <!-- Bottom Dark Section -->
    <div class="px-6  pt-8 pb-4 text-">
        <div class="grid md:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <!-- Logo & Contact -->
            <div class="flex flex-col items-start space-y-4 border-r border-gray-700 pr-4">
                <img src="{{ asset('assets/images/logos/header-logo.webp') }}" alt="MCM Logo" class="h-20 mb-3" />
               <div class="flex flex-row items-center space-y-2 mb-4">
                 <p class=" font-semibold">Follow Us:</p>
                <div class="flex gap-0 items-center space-x-1 mb-2">
                    <a href="#"><img src="{{ asset('assets/images/icons/facebook.webp') }}" alt="Facebook" class="h-8 w-8" /></a>
                    <a href="#"><img src="{{ asset('assets/images/icons/instagram.webp') }}" alt="Instagram" class="h-8 w-8" /></a>
                </div>
               </div>
                <div class="flex items-start space-x-2 mb-2">
                    <img src="{{ asset('assets/images/icons/footer-location.webp') }}" alt=""  class="h-10 w-10">
                    <p>12 Queen Lane,<br> Melbourne VIC 3004</p>
                </div>
                <div class="flex items-center space-x-2 mb-2">
                    <img src="{{ asset('assets/images/icons/footer-call.webp') }}" alt="" class="h-10 w-10">
                    <p>1300 163 694</p>
                </div>
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/images/icons/Footer-mail.webp') }}" alt="" class="h-10 w-10">
                    <p class="whitespace-wrap max-w-full">info@melbournecentralmovers. <br> com.au</p>
                </div>
            </div>

        

            <!-- Quick Links -->
            <div class=" pl-4">
                <h4 class="text-primary underline underline-offset-8  decoration-2 text-lg font-semibold mb-3">Quick Links</h4>
                <ul class="space-y-1">
                    <li><a href="" class="text-white hover:text-primary">Home</a></li>
                    <li><a href="" class="text-white hover:text-primary">About Us</a></li>
                    <li><a href="" class="text-white hover:text-primary">Client Reviews</a></li>
                    <li><a href="" class="text-white hover:text-primary">Work With Us</a></li>
                    <li><a href="" class="text-white hover:text-primary">Partners</a></li>
                    <li><a href="" class="text-white hover:text-primary">Reach Us</a></li>
                    <li><a href="" class="text-white hover:text-primary">Video Reviews</a></li>
                    <li><a href="" class="text-white hover:text-primary">Blog</a></li>
                    <li><a href="" class="text-white hover:text-primary">News</a></li>
                    <li><a href="" class="text-white hover:text-primary">FAQ's</a></li>
                    <li><a href="" class="text-white hover:text-primary">Sitemap</a></li>
                    <li><a href="" class="text-white hover:text-primary">Premium Services</a></li>
                    <li><a href="" class="text-white hover:text-primary">Storage Service</a></li>
                    <li><a href="" class="text-white hover:text-primary">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Local Removals -->
            <div>
                <h4 class="text-primary underline underline-offset-8  decoration-2 text-lg font-semibold mb-3">Local Removals</h4>
                <ul class="space-y-1">
                    <li><a href="" class="text-white hover:text-primary">Adelaide Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Brisbane Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Ballarat Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Canberra Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Geelong Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Gold Coast Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Melbourne Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Sydney Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Parramatta Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Perth Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Our Prices</a></li>
                </ul>
            </div>

            <!-- Moving Local -->
            <div>
                <h4 class="text-primary underline underline-offset-8  decoration-2 text-lg font-semibold mb-3">Moving Local</h4>
                <ul class="space-y-1">
                    <li><a href="" class="text-white hover:text-primary">House Removalists</a></li>
                    <li><a href="" class="text-white hover:text-primary">Furniture Removals</a></li>
                    <li><a href="" class="text-white hover:text-primary">Office Relocation</a></li>
                    <li><a href="" class="text-white hover:text-primary">Two Men and a Truck</a></li>
                    <li><a href="" class="text-white hover:text-primary">Movers and Packers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Loading and Unloading</a></li>
                    <li><a href="" class="text-white hover:text-primary">Piano Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Pool Table Movers</a></li>
                    <li><a href="" class="text-white hover:text-primary">Safe Removalists</a></li>
                    <li><a href="" class="text-white hover:text-primary">Labour Hire</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Line -->
        <div class="border-t border-gray-700 mt-8 pt-4 text-center text-xs">
            Design & Developed By : <a href="https://digitalultras.com" class="text-primary">Digital Ultra</a>
        </div>
    </div>
</footer>