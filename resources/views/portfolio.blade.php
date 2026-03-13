@extends('layouts.app')

@section('content')

    <h1 class="text-3xl font-bold text-center mb-10">
        My Projects
    </h1>

    <div class="grid md:grid-cols-3 gap-8">

        @foreach($projects as $project)

            <div class="bg-white rounded-xl shadow hover:shadow-xl transition duration-300 overflow-hidden">

                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-48 object-cover">
                @endif

                <div class="p-6">

                    <h2 class="text-xl font-semibold mb-2">
                        {{ $project->title }}
                    </h2>

                    <p class="text-gray-600 text-sm mb-4">
                        {{ $project->description }}
                    </p>

                    @if($project->link)
                        <a href="{{ $project->link }}" target="_blank"
                            class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            View Project
                        </a>
                    @endif

                </div>

            </div>

        @endforeach

    </div>

@endsection