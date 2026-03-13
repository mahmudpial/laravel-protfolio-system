@extends('layouts.app')

@section('content')

    <div class="max-w-7xl mx-auto">

        <h1 class="text-3xl font-bold mb-8">
            Admin Dashboard
        </h1>


        <!-- ADD FORMS -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">

            <!-- Add Skill -->
            <div class="bg-white p-6 rounded-lg shadow">

                <h2 class="text-xl font-semibold mb-4">
                    Add Skill
                </h2>

                <form method="POST" action="{{ route('skill.store') }}" class="space-y-4">
                    @csrf

                    <input type="text" name="name" placeholder="Skill Name" required class="w-full border p-3 rounded" />

                    <input type="text" name="level" placeholder="Skill Level (ex: 90%)" class="w-full border p-3 rounded" />

                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Add Skill
                    </button>

                </form>

            </div>


            <!-- Add Project -->
            <div class="bg-white p-6 rounded-lg shadow">

                <h2 class="text-xl font-semibold mb-4">
                    Add Project
                </h2>

                <form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data" class="space-y-4">

                    @csrf

                    <input type="text" name="title" placeholder="Project Title" required
                        class="w-full border p-3 rounded" />

                    <textarea name="description" placeholder="Project Description"
                        class="w-full border p-3 rounded"></textarea>

                    <input type="text" name="link" placeholder="Project Link" class="w-full border p-3 rounded" />

                    <input type="file" name="image" class="w-full" />

                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        Add Project
                    </button>

                </form>

            </div>

        </div>


        <!-- SKILLS TABLE -->
        <h2 class="text-xl font-bold mb-4">
            All Skills
        </h2>

        <div class="bg-white shadow rounded-lg overflow-hidden mb-12">

            <table class="w-full">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Skill</th>
                        <th class="p-3 text-left">Level</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($skills as $skill)

                        <tr class="border-t">

                            <td class="p-3">
                                {{ $skill->name }}
                            </td>

                            <td class="p-3">
                                {{ $skill->level }}
                            </td>

                            <td class="p-3 flex gap-2">

                                <!-- Edit -->
                                <a href="{{ route('skill.edit', $skill->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                    Edit
                                </a>

                                <!-- Delete -->
                                <form method="POST" action="{{ route('skill.delete', $skill->id) }}">

                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="p-4 text-center text-gray-500">
                                No skills added yet
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>



        <!-- PROJECT TABLE -->
        <h2 class="text-xl font-bold mb-4">
            All Projects
        </h2>

        <div class="bg-white shadow rounded-lg overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Title</th>
                        <th class="p-3 text-left">Link</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($projects as $project)

                        <tr class="border-t">

                            <td class="p-3">
                                {{ $project->title }}
                            </td>

                            <td class="p-3">
                                <a href="{{ $project->link }}" target="_blank" class="text-blue-500 hover:underline">
                                    Visit
                                </a>
                            </td>

                            <td class="p-3 flex gap-2">

                                <!-- Edit -->
                                <a href="{{ route('portfolio.edit', $project->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                    Edit
                                </a>

                                <!-- Delete -->
                                <form method="POST" action="{{ route('portfolio.delete', $project->id) }}">

                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="p-4 text-center text-gray-500">
                                No projects added yet
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

@endsection