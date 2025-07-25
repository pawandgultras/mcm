<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logos/footer-logo.png') }}" class="favicon-logo">
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

  @yield('metadata')
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @yield('styles')
  <style>
    .clamp-2-lines {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
</head>

<body class="font-poppins antialiased bg-white text-gray-900 w-full max-w-full overflow-x-hidden">
  @include('Pages.layouts.header')
  @yield('homepage')
  @yield('content')
  @yield('form')
  @include('Pages.layouts.footer')



  <!-- javaScript for all pages -->
  <script>
    function toggleFAQ(button) {
      const content = button.nextElementSibling;
      button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
      content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
    }
  </script>
  <script type="module">
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('header-links');

    toggleBtn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

    // Optional: hide on load for mobile
    if (window.innerWidth < 768) {
      menu.classList.add('hidden');
    }
  </script>
  @yield('scripts')

</body>

</html>