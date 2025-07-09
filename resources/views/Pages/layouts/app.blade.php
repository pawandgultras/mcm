<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logos/footer-logo.png') }}" class="favicon-logo">
  
  @yield('metadata')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('styles')
</head>

<body class="!font-poppins antialiased bg-white text-gray-900">
  @include('Pages.layouts.header')
  @yield('homepage')
  @yield('content')
  @include('Pages.layouts.footer')



  <!-- javaScript for all pages -->
  <script type="module">
    $(document).ready(function() {
      $('.mobile-menu-button').click(function() {
        $('#mobileNav').removeClass('-translate-x-full').addClass('translate-x-0');
      });

      $('.close-mobile-menu, #mobileNav a').click(function() {
        $('#mobileNav').removeClass('translate-x-0').addClass('-translate-x-full');
      });
    });


    // Toggle Level 1
    document.querySelector('.toggle-l1').addEventListener('click', function() {
      this.nextElementSibling.classList.toggle('hidden');
      this.querySelector('svg').classList.toggle('rotate-180');
    });

    // Toggle Level 2
    document.querySelectorAll('.toggle-l2').forEach(btn => {
      btn.addEventListener('click', function() {
        this.nextElementSibling.classList.toggle('hidden');
        this.querySelector('svg').classList.toggle('rotate-180');
      });
    });
  </script>


  @yield('scripts')
</body>

</html>