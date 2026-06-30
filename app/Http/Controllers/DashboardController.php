<?php

namespace App\Http\Controllers;

use App\Models\Semester;

class DashboardController extends Controller
{
    public function index()
    {
        $semester = Semester::with('courses.tasks')
            ->where('is_active', true)
            ->first();

        return view('dashboard.index', compact('semester'));
    }
}