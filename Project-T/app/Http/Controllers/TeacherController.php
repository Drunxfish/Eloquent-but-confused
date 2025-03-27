<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    // Teacher Overview
    public function index()
    {
        return view('teachers')->with(['teachers' => Teacher::with('subjects')->orderBy('name', 'asc')->get()]);
    }

    

    // Individual Teacher Overview
    public function show(string $teacherId)
    {
        $teacherTable = Teacher::with('subjects')->where('id', $teacherId)->first();
        return view('/subjects', ['teacherOverview' => $teacherTable]);
    }



    // Raw Data overview
    public function getTeachers()
    {
        return Teacher::with('subjects')->get();
    }
}
