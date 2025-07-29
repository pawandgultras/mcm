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

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRwtGvywDWGOX4ULNCXZNxFiW-Qutu9Bc&libraries=places"></script>
  <script>
    function initAutocomplete() {
      const inputs = document.querySelectorAll(".autocomplete"); // target all inputs with class="autocomplete"

      const options = {
        componentRestrictions: {
          country: "AU"
        },
        types: ["geocode"],
      };

      inputs.forEach(input => {
        const autocompleteInstance = new google.maps.places.Autocomplete(input, options);

        autocompleteInstance.addListener("place_changed", function() {
          formatAndSetPlace(autocompleteInstance, input);
        });
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
            if (
              component.types.includes("locality") ||
              component.types.includes("administrative_area_level_1")
            ) {
              city = component.long_name.toUpperCase();
            }
          });

          if (postcode && city) {
            inputElement.value = `${postcode} ${city}`;
          } else {
            inputElement.value = place.formatted_address;
          }
        }
      }
    }

    window.onload = initAutocomplete;
  </script>

</head>

<body class="font-poppins antialiased bg-white text-gray-900 w-full max-w-full overflow-x-hidden">
  @include('Pages.layouts.header')
  @yield('homepage')
  @yield('content')
  @yield('form')
  @include('Pages.layouts.footer')

  <div id="singleModalForm" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-[#3a3a3a] p-6 rounded border border-[#78be3c] w-full max-w-2xl relative">
      <!-- Close Button -->
      <button type="button" onclick="closeModal()" class="absolute top-2 right-3 text-white text-2xl leading-none hover:text-[#78be3c]">&times;</button>

      <h2 id="modalTitle" class="text-lg font-bold text-[#78be3c] italic mb-1">Contact Us !</h2>
      <p class="text-white mb-5">Fill out the form below to contact our team.</p>

      <form id="dynamicForm" method="POST" action="/submit-form">
        @csrf
        <input type="hidden" name="form_type" id="formType">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="text-white text-sm mb-1 block">Your full Name</label>
            <input type="text" name="name"
              class="w-full p-2 border border-[#78be3c] rounded bg-[#2e2e2e] text-white"
              required>
          </div>
          <div>
            <label class="text-white text-sm mb-1 block">Phone Number</label>
            <input type="tel" name="phone"
              class="w-full p-2 border border-[#78be3c] rounded bg-[#2e2e2e] text-white"
              required>
          </div>

          <div>
            <label class="text-white text-sm mb-1 block">Your Email</label>
            <input type="email" name="email"
              class="w-full p-2 border border-[#78be3c] rounded bg-[#2e2e2e] text-white"
              required>
          </div>
          <div>
            <label class="text-white text-sm mb-1 block">Date</label>
            <input type="date" name="move_date"
              class="w-full p-2 border border-[#78be3c] rounded bg-[#2e2e2e] text-white"
              required>
          </div>

          <div>
            <label class="text-white text-sm mb-1 block">Moving from?</label>
            <input type="text" name="move_from"
              class="w-full p-2 border border-[#78be3c] rounded bg-[#2e2e2e] text-white autocomplete"
              required>
          </div>
          <div>
            <label class="text-white text-sm mb-1 block">Moving to?</label>
            <input type="text" name="move_to"
              class="w-full p-2 border border-[#78be3c] rounded bg-[#2e2e2e] text-white autocomplete"
              required>
          </div>
        </div>

        <div class="mt-4">
          <label class="text-white text-sm mb-1 block">Your Message</label>
          <textarea name="message" rows="4"
            class="w-full p-2 border border-[#78be3c] rounded bg-[#2e2e2e] text-white"
            required></textarea>
        </div>

        <div class="flex justify-center mt-6">
          <button type="submit"
            class="bg-[#78be3c] hover:bg-lime-400 text-black font-semibold px-6 py-2 rounded w-full md:w-1/2 transition">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>

  <div id="thankYouModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-md text-center">
      <h2 class="text-xl font-bold text-[#78be3c] mb-4">Thank You!</h2>
      <p class="text-gray-700">We have received your request. Our team will get in touch with you shortly.</p>
      <button onclick="closeThankYouModal()" class="mt-6 px-6 py-2 bg-[#78be3c] text-white rounded hover:bg-green-700">
        Close
      </button>
    </div>
  </div>


  <!-- javaScript for all pages -->
  <script>
    function closeThankYouModal() {
      $('#thankYouModal').addClass('hidden');
    }

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

  <script>
    function openForm(formTitle) {
      document.getElementById("modalTitle").textContent = formTitle;
      document.getElementById("formType").value = formTitle;
      document.getElementById("singleModalForm").classList.remove("hidden");
    }

    function closeModal() {
      document.getElementById("singleModalForm").classList.add("hidden");
    }
  </script>

  <script type="module">
    $(document).ready(function() {
      $('#dynamicForm').on('submit', function(e) {
        e.preventDefault();

        let formbtn = $('#dynamicForm button[type="submit"]');
        formbtn.text('Submitting...').prop('disabled', true);

        const form = $(this);
        const formData = new FormData(this);

        $.ajax({
          url: "{{ route('contact.submit') }}",
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
          },
          success: function(response) {
            form[0].reset();
            closeModal();
            showThankYouModal();
            setTimeout(function() {
              window.location.href = "{{route('thankyou')}}"; // change this to your actual thank-you route
            }, 1000);
          },
          error: function(xhr) {
            console.error(xhr.responseText);
            alert('Something went wrong. Please try again.');
          }
        });
      });
    });

    function closeModal() {
      $('#singleModalForm').addClass('hidden');
    }

    function showThankYouModal() {
      $('#thankYouModal').removeClass('hidden');
    }
  </script>


  @yield('scripts')

</body>

</html>