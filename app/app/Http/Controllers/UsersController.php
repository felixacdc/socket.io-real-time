<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

use App\Events\UserRegistered;

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

    public function saveUser(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();
        event(new UserRegistered($user));

        return redirect('/new_user')->with('success', 'El usuario fue registrado exitosamente.');
    }
}
