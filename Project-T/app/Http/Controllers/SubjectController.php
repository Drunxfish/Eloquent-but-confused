<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    
    // Geeft alle vakken terug
    public function index()
    {
        return Subject::all();
    }
    public function show()
    {
        //
    }
}
