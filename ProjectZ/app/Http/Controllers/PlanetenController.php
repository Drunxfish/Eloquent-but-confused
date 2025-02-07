<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Planeten;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;



class PlanetenController extends Controller
{
    //-----------------------------------|
    // Opdracht: schrijf je eerste query |
    //-----------------------------------|
    // alle planeten weergeven met index 
    public function index()
    {
        $planeten = DB::table('planets')->get();
        return view('planeten')->with(['planeten' => $planeten]);
    }


    // individueel planeet weergeven
    public function show(string $planeet)
    {
        $voorkeur = DB::table('planets')->where('name', $planeet)->first();

        # als planeet niet bestaat geef error terug (extra)
        if (!$voorkeur) {
            return redirect('/planeten')->with('error', 'planeet niet gevonden');
        }


        # opgehaalde infromatie van planeet doorgeven aan view
        return view('/planet', ['planeet' => $voorkeur]);
    }



    // planeten selecteren (voor seeders overzicht)
    public function getPlanets()
    {
        $planeten = DB::table('planets')->get();
        return $planeten;
    }
}
