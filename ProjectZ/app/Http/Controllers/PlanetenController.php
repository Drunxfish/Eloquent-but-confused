<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Planeten;
use Illuminate\Support\Facades\View;



class PlanetenController extends Controller
{
    // klas eigenschap met array van planeten 
    private $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];



    // alle planeten weergeven met index 
    public function index()
    {
        return view('planeten')->with(['planeten' => $this->planets]);
    }

    
    // individueel planeet weergeven
    public function show(string $planeet)
    {
        # gekozen planeet ophalen van de lijst
        $voorkeur = collect($this->planets)->where('name', ucfirst($planeet));

        # is het planeet wel gevonden ? zo niet dan error mee geven en doorverwijzen
        if (count($voorkeur) == 0) {
            return redirect('/planeten')->with('error', 'planet not found'); # met een error op de sessie
        }

        # infromatie weergeven van indivuduele planeet
        return view('/planet', ['planeten' => $voorkeur]);
    }
}
