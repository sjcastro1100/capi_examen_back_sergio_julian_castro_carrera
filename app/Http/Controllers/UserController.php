<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Obtiene la lista de usuarios con su dirección
     */
    public function index(){
        $data = User::all();
        return UserResource::collection($data);
    }
}
