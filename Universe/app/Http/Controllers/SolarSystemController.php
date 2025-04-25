<?php

namespace App\Http\Controllers;
use App\Models\SolarSystem;
use Illuminate\Http\Request;

class SolarSystemController extends Controller
{
    //
    public function getSolarSystem()
    {
        $planeten = SolarSystem::with("planets")->get();
        return $planeten;
    }
}
