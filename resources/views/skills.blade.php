@extends('layouts.app')

@section('content')

    <h1 class="text-3xl font-bold text-center mb-10">
        My Skills
    </h1>

    <div class="max-w-3xl mx-auto space-y-6">

        @foreach($skills as $skill)

            <div class="bg-white shadow rounded-lg p-6">

                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">
                        {{ $skill->name }}
                    </span>

                    <span class="text-sm text-gray-500">
                        {{ $skill->level ?? '80%' }}
                    </span>
                </div>

                <div class="w-full bg-gray-200 rounded-full h-3">
                    <div class="bg-blue-500 h-3 rounded-full" style="width: {{ $skill->level ?? '80%' }}">
                    </div>
                </div>

            </div>

        @endforeach

    </div>

@endsection