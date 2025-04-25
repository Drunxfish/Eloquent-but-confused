<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    // docenten overzicht weergave
    public function index()
    {
        return view('teachers')->with(['teachers' => Teacher::with('subjects')->orderBy('name', 'asc')->get()]);
    }

    

    // Desbetreffende docent en vakken ophalen
    public function show(string $teacherId)
    {
        $teacherTable = Teacher::with('subjects')->where('id', $teacherId)->first();
        return view('/subjects', ['teacherOverview' => $teacherTable]);
    }



    // Rauwe data voor testing
    public function getTeachers()
    {
        return Teacher::with('subjects')->get();
    }
}
