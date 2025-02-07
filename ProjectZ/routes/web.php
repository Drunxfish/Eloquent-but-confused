<?php

use App\Http\Controllers\PlanetenController;
use Faker\Test\Provider\Collection;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\isEmpty;


//-----------------------------------------------|
//  # opdracht - 5: Controller maken met Artisan |
//-----------------------------------------------| 
Route::get('/planeten', [PlanetenController::class, 'index']);  
Route::get('/planeten/{planeet}', [PlanetenController::class, 'show']);










// planeten tabel overzicht 
Route::get('/', [PlanetenController::class, 'getPlanets']);