<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index () {
        $users = User::with('domicilio')->get();
        return response()->json(['data'=> $users],200);
    }
}
