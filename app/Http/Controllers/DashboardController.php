<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'classrooms' => Classroom::count(),
            'teachers' => Teacher::count(),
            'students' => Student::count(),
        ];

        return view('dashboard', compact('stats'));
    }
}
