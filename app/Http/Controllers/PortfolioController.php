<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Portfolio::all();
        return view('portfolio', compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('portfolio', 'public');
        }

        Portfolio::create($validated);

        return back()->with('success', 'Project added successfully!');
    }

    public function delete($id)
    {
        $project = Portfolio::find($id);
        if ($project) {
            $project->delete();
            return back()->with('success', 'Project deleted successfully!');
        }
        return back()->with('error', 'Project not found.');
    }

    public function edit($id)
    {
        $project = Portfolio::findOrFail($id);
        return view('admin.edit-project', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Portfolio::findOrFail($id);

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link
        ]);

        return redirect('/dashboard')->with('success', 'Project updated');
    }
}