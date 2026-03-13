<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('skills', compact('skills'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'nullable|string|max:50',
        ]);

        Skill::create($validated);

        return back()->with('success', 'Skill added successfully!');
    }

    public function delete($id)
    {
        $skill = Skill::find($id);
        if ($skill) {
            $skill->delete();
            return back()->with('success', 'Skill deleted successfully!');
        }
        return back()->with('error', 'Skill not found.');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.edit-skill', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);

        $skill->update([
            'name' => $request->name,
            'level' => $request->level
        ]);

        return redirect('/dashboard')->with('success', 'Skill updated successfully');
    }
}