@extends('layouts.app')

@section('content')

    <h1 class="text-2xl font-bold mb-6">Edit Skill</h1>

    <div class="bg-white p-6 rounded shadow max-w-lg">

        <form method="POST" action="{{ route('skill.update', $skill->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ $skill->name }}" class="w-full border p-3 rounded mb-4" />

            <input type="text" name="level" value="{{ $skill->level }}" class="w-full border p-3 rounded mb-4" />

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Update Skill
            </button>

        </form>

    </div>

@endsection