<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Dom\Comment;
// use Illuminate\Http\Request;
use App\Models\Planet;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\DB;



class PlanetenController extends Controller
{
    //-----------------------------------|
    // Opdracht: schrijf je eerste query |
    //-----------------------------------|
    // Haalt en geeft alle planeten door van de DB
    public function index()
    {
        // Retourneert planeet en solar system gegevens
        return view('planeten')->with(['planeten' => Planet::with('solarSystem')->get()]);
    }


    // Haalt gegevens op en geeft het door aan een view voor één planeet
    public function show(string $planeet)
    {

        // Haalt gegevens van planeet/solarSysteem
        $voorkeur = Planet::with('solarSystem')->where("name", $planeet)->first();

        # Als planeet niet bestaat geef error terug (extra)
        if (!$voorkeur) {
            return redirect('/planeten')->with('error', 'planeet niet gevonden');
        }


        # Opgehaalde infromatie van planeet doorgeven aan view
        return view('/planet', ['planeet' => $voorkeur]);

    }










    // Planeten selecteren (voor seeders overzicht)
    public function getPlanets()
    {
        // retourneert alle planeten die relatie hebben met solar systeeem
        $planeten = Planet::with("solarSystem")->get();
        return $planeten;
    }
}
