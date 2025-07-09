<!-- TOP HEADER BAR -->


<!-- MAIN HEADER -->
<header class="w-full bg-black text-white shadow sticky top-0 z-50">
  <div class="max-w-6xl mx-auto px-2 flex flex-wrap items-center justify-between py-1">

    <!-- Logo -->
    <div class="flex items-center">
      <a href="{{asset('/')}}" class="flex items-center">
        <img src="{{ asset('assets/images/logos/header-logo.webp') }}" alt="Logo" class="h-24 w-auto">
      </a>
    </div>

    <div>

      <div class="bg-black text-white text-sm font-medium">
        <div class="max-w-7xl mx-auto px-4 flex justify-end items-center space-x-4 py-1">
          <a href="/about" class="hover:text-primary">About Us</a>
          <span class="text-primary">|</span>
          <a href="/contact" class="hover:text-primary">Contact Us</a>
          <span class="text-primary">|</span>
          <div class="flex items-center text-primary font-bold space-x-1">
            <img src="{{ asset('assets/images/icons/Call- green.webp') }}" alt="Phone Icon" class="h-10 w-10">
            <span>1300 163 694</span>
          </div>
        </div>
      </div>

      <div class="flex items-center justify-between py-3 gap-4">
        <!-- Navigation Menu -->
        <nav class="hidden md:flex items-center space-x-6 font-semibold text-sm">
          <a href="/" class="hover:text-primary">Home</a>
          <a href="/moving-home" class="hover:text-primary">Moving Home</a>
          <a href="/moving-office" class="hover:text-primary">Moving Office</a>
          <a href="/moving-organisation" class="hover:text-primary">Moving an Organisation</a>
          <a href="/moving-overseas" class="hover:text-primary">Moving Overseas</a>
          <a href="/storage" class="hover:text-primary">Storage</a>
        </nav>

        <!-- Right Side: Phone + Buttons -->
        <div>
          <!-- Buttons -->
          <a href="/request-call" class="border border-primary text-white px-4 py-1 rounded hover:bg-primary hover:text-black text-sm transition">Request call back</a>
          <a href="/get-quote" class="bg-primary text-white px-4 py-1 rounded hover:bg-primary/90 text-sm transition">Get a Quote</a>

          <!-- Mobile Menu Button -->
          <button class="md:hidden block text-white focus:outline-none mobile-menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>
