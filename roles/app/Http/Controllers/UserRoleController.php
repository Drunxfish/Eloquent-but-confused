<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserRoleController extends Controller
{
    // Display user/roles
    public function showUserRoles($id)
    {
        $user = User::with('roles')->findOrFail($id);


        return response()->json([
            'user' => $user->name,
            'email' => $user->email,
            'roles' => $user->roles->pluck('name')
        ]);
    }
}
