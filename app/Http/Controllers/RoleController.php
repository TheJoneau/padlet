<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //get all entries
    public function index() : JsonResponse {
        $roles = Role::all();
        return response()->json($roles, 200);
    }
}
