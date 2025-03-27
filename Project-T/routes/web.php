<?php

use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;






Route::get('/teachers', [TeacherController::class, 'index']);


Route::get('/teachers/{id}', [TeacherController::class, 'show']);