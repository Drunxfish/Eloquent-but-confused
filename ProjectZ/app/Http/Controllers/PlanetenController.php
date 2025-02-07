<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Planeten;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;



class PlanetenController extends Controller
{

    // alle planeten weergeven met index 
    public function index()
    {
        $planeten = DB::table('planets')->get();
        return view('planeten')->with(['planeten' => $planeten]);
    }



    //-----------------------------------|
    // Opdracht: schrijf je eerste query |
    //-----------------------------------|
    // individueel planeet weergeven
    public function show(string $planeet)
    {
        $voorkeur = DB::table('planets')->where('name', $planeet)->first();

        # infromatie weergeven van indivuduele planeet
        return view('/planet', ['planeet' => $voorkeur]);
    }


    // planeten selecteren
    public function getPlanets()
    {
        $planeten = DB::table('planets')->get();
        return $planeten;
    }
}
