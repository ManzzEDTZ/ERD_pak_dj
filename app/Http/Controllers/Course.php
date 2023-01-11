<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Course extends Controller
{
    public function index()
    {
        $courses = \App\Models\Cource::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        \App\Models\Cource::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('course.index');
    }

    public function edit($id)
    {
        $course = \App\Models\Cource::find($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $course = \App\Models\Cource::find($id);
        $course->name = $request->name;
        $course->image = $imageName;
        $course->save();

        return redirect()->route('course.index');
    }

    public function destroy($id)
    {
        $course = \App\Models\Cource::find($id);
        $course->delete();

        return redirect()->route('course.index');
    }
}
