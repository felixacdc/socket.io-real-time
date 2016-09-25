<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    public function welcome()
    {
        return view("welcome");
    }

    public function getUsers()
    {
        return \Response::json(User::orderBy('id', 'desc')->get(), 200);        
    }

    public function newUser()
    {
        return view('register');
    }
}
