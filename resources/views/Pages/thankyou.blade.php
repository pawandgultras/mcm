@extends('Pages.layouts.app')

@section('metadata')
<title>MCM - Thank You</title>
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
<style>
  .contact-remove {
    display: none;
  }
</style>
@endsection

@section('content')
<section class="min-h-[50vh] flex items-center justify-center bg-[#f9fafb] px-4 py-8">
  <div class="bg-white max-w-2xl w-full text-center rounded-xl shadow-md px-6 py-10 border-t-4 border-[#78be3c]">
    <div class="flex justify-center mb-4">
      {{-- Replace with your custom image --}}
    </div>

    <h1 class="text-3xl md:text-4xl font-semibold text-[#78be3c] mb-3">Thank You for Getting in Touch!</h1>
    <p class="text-gray-700 text-base md:text-lg mb-6">
      We’ve received your inquiry and a team member will be in touch shortly. <br>
      In the meantime, feel free to explore more about our services and how we can assist you with your moving needs.
    </p>

    <a href="{{ url('/') }}"
       class="inline-block px-6 py-3 text-white bg- hover:bg-[#78be3c] font-medium rounded transition duration-300">
      Back to Homepage
    </a>
  </div>
</section>

<!-- Additional Section: Trust & Services -->
<section class="bg-white px-4 py-10 border-t">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4">Why Choose MCM?</h2>
    <p class="text-gray-600 mb-10 max-w-2xl mx-auto">
      MCM has been a trusted name in moving and storage for over a decade, delivering safe, on-time, and secure relocation services across Australia.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
      <div>
        <h3 class="text-[#78be3c] font-semibold text-lg mb-2">Fully Insured</h3>
        <p class="text-gray-600 text-sm">We partner with top insurers to ensure your belongings are covered throughout your move.</p>
      </div>
      <div>
        <h3 class="text-[#78be3c] font-semibold text-lg mb-2">rofessional Movers</h3>
        <p class="text-gray-600 text-sm">Our experienced and trained staff handle your items with care and precision.</p>
      </div>
      <div>
        <h3 class="text-[#78be3c] font-semibold text-lg mb-2">End-to-End Support</h3>
        <p class="text-gray-600 text-sm">From packing to delivery, we handle every step of the process seamlessly.</p>
      </div>
    </div>
  </div>
</section>
@endsection
