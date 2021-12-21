<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function register(Request $req){
        $validation=$req->validate([
            "username"=>'required | unique:users |min 8 ',
            "email"=>'required|unique:users',
            "password"=>'required | confirmed | 
                        regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/
                        min:8
            ',
            "password_confirmation"=>'required | 
                        regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/ |
                        <min:8></min:8>
            '
        ]);
        $user = User::create(request(['username', 'email', 'password']));
        $user->password=Hash::make($user->password);
        $user->save();
        return redirect()->to('/');
    }
}
