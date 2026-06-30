<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'semester_id' => 'required|exists:semesters,id',
            'code' => 'required|max:20',
            'name' => 'required|max:255',
            'day' => 'required'
        ]);

        Course::create([
            'semester_id' => $request->semester_id,
            'code' => $request->code,
            'name' => $request->name,
            'day' => $request->day
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return back()->with('success', 'Mata kuliah berhasil dihapus.');
    }
}