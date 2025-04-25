<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    // Relaties toekenen
    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}
