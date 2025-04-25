<?php

use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;






// User verwijzen naar docenten overzicht
Route::get('/', function () {
    return redirect('/teachers'); });

// Haal docenten gegevens op
Route::get('/teachers', [TeacherController::class, 'index']);

// Haal desbetreffende docent op met zijn vakken
Route::get('/teachers/{id}', [TeacherController::class, 'show']);