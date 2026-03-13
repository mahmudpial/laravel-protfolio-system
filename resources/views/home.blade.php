@extends('layouts.app')

@section('content')

    <div class="text-center py-20">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            Hi, I'm a Web Developer 👋
        </h1>

        <p class="text-gray-600 text-lg mb-8">
            Welcome to my portfolio website. Here you can explore my skills and projects.
        </p>

        <div class="space-x-4">
            <a href="/skills" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">
                View Skills
            </a>

            <a href="/portfolio" class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-900">
                View Projects
            </a>
        </div>
    </div>

@endsection