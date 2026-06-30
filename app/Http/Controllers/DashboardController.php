<?php

namespace App\Http\Controllers;

use App\Models\Semester;

class DashboardController extends Controller
{
    public function index()
    {
        $semester = Semester::where('is_active', true)
                            ->with('courses.tasks')
                            ->first();

        return view('dashboard.index', compact('semester'));
    }
}