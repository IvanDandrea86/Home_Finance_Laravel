<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function register(Request $req){
        $validation=$req->validate([
            "username"=>'required',
            "email"=>'required',
            "password"=>'required',
            "confirm_password"=>'required'
        ]);
    

        $user = User::create(request(['username', 'email', 'password']));
        $user->password=Hash::make($user->password);
        $user->save();
        return redirect()->to('/');
    }
}
