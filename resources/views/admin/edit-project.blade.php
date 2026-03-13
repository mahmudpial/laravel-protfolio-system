@extends('layouts.app')

@section('content')

    <h1 class="text-2xl font-bold mb-6">Edit Project</h1>

    <div class="bg-white p-6 rounded shadow max-w-lg">

        <form method="POST" action="{{ route('portfolio.update', $project->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{ $project->title }}" class="w-full border p-3 rounded mb-4" />

            <textarea name="description" class="w-full border p-3 rounded mb-4">{{ $project->description }}</textarea>

            <input type="text" name="link" value="{{ $project->link }}" class="w-full border p-3 rounded mb-4" />

            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Update Project
            </button>

        </form>

    </div>

@endsection