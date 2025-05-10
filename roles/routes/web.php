<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRoleController;



// Display User/Roles
Route::get('/user/{id}/roles', [UserRoleController::class, 'showUserRoles']);
