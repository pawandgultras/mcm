<!-- MAIN HEADER -->
<header class="w-full bg-black text-white shadow sticky top-0 z-50">
  <div class="max-w-6xl mx-auto px-2 flex flex-wrap items-center justify-between py-1">

    <!-- Logo and Mobile Toggle -->
    <div class="flex items-center justify-between w-full md:w-auto">
      <a href="/" class="flex items-center">
        <img src="{{ asset('assets/images/logos/header-logo.webp') }}" alt="Logo" class="h-16 md:h-20 w-auto">
      </a>
      <button class="md:hidden block text-white focus:outline-none" id="mobile-menu-toggle">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Main Menu -->
    <div class="w-full md:w-auto" id="header-links">

      <!-- Top Row -->
      <div class="bg-black text-white text-sm font-medium">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row md:justify-end md:items-center space-y-2 md:space-y-0 md:space-x-4 py-2">
          <a href="/about" class="hover:text-primary">About Us</a>
          <span class="text-primary hidden md:inline">|</span>
          <a href="/contact" class="hover:text-primary">Contact Us</a>
          <span class="text-primary hidden md:inline">|</span>
          <div class="flex items-center text-primary font-bold space-x-1">
            <img src="{{ asset('assets/images/icons/Call- green.webp') }}" alt="Phone Icon" class="h-6 w-6 md:h-10 md:w-10">
            <span>1300 163 694</span>
          </div>
          <!-- <div class="flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-3">
            <a href="/request-call" class="border border-primary text-white px-4 py-1 rounded hover:bg-primary hover:text-black text-sm transition">Request call back</a>
            <a href="/get-quote" class="bg-primary text-white px-4 py-1 rounded hover:bg-primary/90 text-sm transition">Get a Quote</a>
          </div> -->
        </div>
      </div>

      <!-- Navigation -->
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <nav class="flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-4 font-semibold text-sm">

          <!-- Moving Home -->
          <div class="relative group">
            <div class="flex items-center gap-1 hover:text-primary cursor-pointer">
              <a href="/moving-home" class="py-3">Moving Home</a>
              <svg class="w-4 h-4 text-white group-hover:text-primary transition" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.108l3.71-3.877a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0l-4.25-4.44a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="absolute hidden group-hover:block bg-white text-black rounded shadow-lg pt-2 w-60 z-50">
              <a href="/moving-home/house-removals" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">House Removals</a>
              <a href="/moving-home/flat-removals" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Flat Removals</a>
              <a href="/moving-home/packing-service" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Packing Service</a>
              <a href="/moving-home/retirement-moving" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Retirement Moving</a>
              <a href="/moving-home/antiques-removals" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Antiques Removals</a>
              <a href="/moving-home/piano-removals" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Piano Removals</a>
              <a href="/moving-home/video-survey" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Get a Video Survey</a>
              <a href="/moving-home/areas-we-cover" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Areas We Cover</a>
              <a href="/moving-home/insurance" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Insurance</a>
              <a href="/moving-home/stamp-duty-calculator" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Stamp Duty Calculator</a>
            </div>
          </div>

          <!-- Moving Office -->
          <div class="relative group">
            <div class="flex items-center gap-1 hover:text-primary cursor-pointer">
              <a href="/moving-office" class="py-3">Moving Office</a>
             
            </div>
           
          </div>

          <!-- Moving an Organisation -->
          <div class="relative group">
            <div class="flex items-center gap-1 hover:text-primary cursor-pointer">
              <a href="/moving-organisation" class="py-3">Moving an Organisation</a>
              <svg class="w-4 h-4 text-white group-hover:text-primary transition" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.108l3.71-3.877a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0l-4.25-4.44a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="absolute hidden group-hover:block bg-white text-black rounded shadow-lg pt-2 w-64 z-50">
              <a href="/moving-organisation/commercial-removals" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Commercial Removals</a>
              <a href="/moving-organisation/school-removals" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">School Removals</a>
              <a href="/moving-organisation/hotel-removals" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Hotel Removals</a>
              <a href="/moving-organisation/embassy-removals" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Embassy Removals</a>
              <a href="/moving-organisation/it-relocation" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">IT Relocation</a>
              <a href="/moving-organisation/case-studies" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Case Studies</a>
              <a href="/moving-organisation/areas-we-cover" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Areas We Cover</a>
            </div>
          </div>

          <!-- Moving Overseas -->
          <div class="relative group">
            <div class="flex items-center gap-1 hover:text-primary cursor-pointer">
              <a href="/moving-overseas" class="py-3">Moving Overseas</a>
             
            </div>
          
          </div>

          <!-- Storage -->
          <div class="relative group">
            <div class="flex items-center gap-1 hover:text-primary cursor-pointer">
              <a href="/storage" class="py-3">Storage</a>
              <svg class="w-4 h-4 text-white group-hover:text-primary transition" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.108l3.71-3.877a.75.75 0 111.08 1.04l-4.25 4.44a.75.75 0 01-1.08 0l-4.25-4.44a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="absolute hidden group-hover:block bg-white text-black rounded shadow-lg pt-2 w-64 z-50">
              <a href="/storage/self-storage" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Self Storage</a>
              <a href="/storage/container-storage" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Container Storage</a>
              <a href="/storage/long-term-storage" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Long Term Storage</a>
              <a href="/storage/commercial-storage" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Commercial Storage</a>
              <a href="/storage/interior-design-storage" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Interior Design Storage</a>
              <a href="/storage/life-event-storage" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Life Event Storage</a>
              <a href="/storage/size-calculator" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Storage Size Calculator</a>
              <a href="/storage/switch-save" class="block px-4 py-2 hover:bg-primary/10 hover:text-primary">Switch & Save</a>
            </div>
          </div>

        </nav>

        <!-- Buttons -->
        <div class="flex flex-row justify-start gap-2 items-center space-y-2 md:space-y-0 md:space-x-3">
          <a href="/request-call" class="border border-primary text-white px-4 py-1 rounded hover:bg-primary hover:text-black text-sm transition">Request Call Back</a>
          <a href="/get-quote" class="bg-primary text-white px-4 py-1 rounded hover:bg-primary/90 text-sm transition">Get a Quote</a>
        </div>

      </div>
    </div>
  </div>
</header>
