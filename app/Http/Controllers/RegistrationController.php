<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function register(Request $req){
        $validation=$req->validate([
            "username"=>'required',
            "email"=>'required',
            "password"=>'required',
            "confirmation_password"=>'required'
        ]);
        if (!$validation){
            echo($validation);
            $errors=array_push($errors, $validation);

        }

        $user = User::create(request(['username', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('/dashboard');
    }
}
