@extends('Pages.layouts.app')
@section('metadata')
<title> MCM - Contact Us</title>

<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

<style>
    .contact-remove {
        display: none;
    }
</style>
@endsection

@section('content')
<section class="relative w-full md:h-[40vh] h-[30vh] bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('{{ asset('assets/images/allImages/How it works in 4 steps BG.webp') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class=" z-10 text-left w-full max-w-6xl px-4">
        <h1 class="md:text-6xl text-3xl font-bold text-primary">Contact Us</h1>
        <p class="mt-4 text-lg">
            We are here to assist you with all your moving needs.
        </p>
    </div>

</section>


<div class="mx-auto px-4 py-10 md:px-8 md:max-w-6xl  lg:max-w-7xl xl:max-w-8xl">
    <div class="grid md:grid-cols-3 gap-10 text-center ">
        <!-- Address -->
        <div>
            <img src="{{ asset('assets/images/allImages/location-bg.jpg') }}" alt="Address" class="w-full h-68 object-cover rounded-md shadow" />
            <div class="flex justify-center -mt-6">
                <div class="bg-primary p-4 rounded">
                    <svg class="text-white w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                    </svg>
                </div>
            </div>
            <h4 class="font-semibold text-lg mt-4">Our Address</h4>
            <p class="text-gray-600">12 Queen Lane,
                Melbourne VIC 3004</p>
        </div>

        <!-- Phone -->
        <div>
            <img src="{{ asset('assets/images/allImages/call-bg.jpg') }}" alt="Phone" class="w-full h-68 object-cover rounded-md shadow" />
            <div class="flex justify-center -mt-6">
                <div class="bg-primary p-4 rounded">
                    <svg class="text-white w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.093 15.093 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21c1.21.49 2.53.76 3.89.76a1 1 0 011 1v3.5a1 1 0 01-1 1C10.03 22 2 13.97 2 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.36.27 2.68.76 3.89a1 1 0 01-.21 1.11l-2.2 2.2z" />
                    </svg>
                </div>
            </div>
            <h4 class="font-semibold text-lg mt-4">Phone Number</h4>
            <p class="text-gray-600">1300 163 694</p>
        </div>

        <!-- Email -->
        <div>
            <img src="{{ asset('assets/images/allImages/mail-bg.jpg') }}" alt="Email" class="w-full h-68 object-cover rounded-md shadow" />
            <div class="flex justify-center -mt-6">
                <div class="bg-primary p-4 rounded">
                    <svg class="text-white w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                </div>
            </div>
            <h4 class="font-semibold text-lg mt-4">Email Address</h4>
            <p class="text-gray-600">info@melbournemovers.com.au</p>
        </div>
    </div>
</div>



<section class="mx-auto px-4 py-10 md:px-8 md:max-w-6xl  lg:max-w-7xl xl:max-w-8xl">
    <div class="grid md:grid-cols-3 gap-10  bg-white items-start">
        <!-- Google Map -->
        <div class="w-full h-[500px] col-span-1 md:col-span-1">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d499568.700223161!2d144.72350301079575!3d-37.971565220015385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e1!3m2!1sen!2sin!4v1753212058028!5m2!1sen!2sin"
                width="100%"
                height="100%"
                allowfullscreen=""
                loading="lazy"
                class="rounded-lg shadow"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Contact Form -->
        <div class="md:col-span-2">
            <p class="text-primary font-semibold uppercase text-sm mb-2">Contact Us</p>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Drop Us a Line !</h2>
            <div class="message">
                @if (session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
                @endif

                @if ($errors->any())
                <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <form class="space-y-4" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Your Name" class="w-full p-3 bg-gray-100 border border-gray-200 rounded outline-none focus:border-none focus:ring-2 focus:ring-primary" />
                    <input type="email" name="email" placeholder="Your Email" class="w-full p-3 bg-gray-100 border border-gray-200 rounded outline-none focus:border-none focus:ring-2 focus:ring-primary" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="tel" name="phone" placeholder="Your Phone number" class="w-full p-3 bg-gray-100 border border-gray-200 rounded outline-none focus:border-none focus:ring-2 focus:ring-primary" />

                    <input type="date" name="move_date" class="w-full p-3 bg-gray-100 border border-gray-200 rounded outline-none focus:border-none focus:ring-2 focus:ring-primary" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="move_from" placeholder="Moving From" class="w-full p-3 bg-gray-100 border border-gray-200 rounded outline-none focus:border-none focus:ring-2 focus:ring-primary" />
                    <input type="text" name="move_to" placeholder="Moving To" class="w-full p-3 bg-gray-100 border border-gray-200 rounded outline-none focus:border-none focus:ring-2 focus:ring-primary" />
                </div>

                <textarea rows="4" name="message" placeholder="Message" class="w-full p-3 bg-gray-100 border border-gray-200 rounded outline-none focus:border-none focus:ring-2 focus:ring-primary"></textarea>

                <button type="submit" class="bg-primary text-white px-6 py-3 rounded font-semibold hover:bg-white hover:text-primary border hover:border-primary transition">
                    SEND MESSAGE
                </button>
            </form>
        </div>
    </div>

</section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/services.js') }}"></script>
@endsection