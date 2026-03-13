@extends('layouts.app')

@section('content')

    <h1 class="text-3xl font-bold text-center mb-10">
        Contact Me
    </h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-6 text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-8">

        <form method="POST" action="/contact" class="space-y-4">
            @csrf

            <input type="text" name="name" placeholder="Your Name" required class="w-full border p-3 rounded" />

            <input type="email" name="email" placeholder="Your Email" required class="w-full border p-3 rounded" />

            <textarea name="message" placeholder="Your Message" rows="5" required
                class="w-full border p-3 rounded"></textarea>

            <button class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600 w-full">
                Send Message
            </button>

        </form>

    </div>

@endsection