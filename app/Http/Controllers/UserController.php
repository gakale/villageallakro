<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public  function create()
    {
        return view('acteur.view',
            [
            'User' => User::all()
        ]);

    }
}
