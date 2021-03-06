<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class SessionController extends Controller
{
    function login(Request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $user = User::where(['email' => $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
           return"Email or password not match."; 
        }
        else {
            $req->session()->put('user',$user);
            return redirect('/dashboard');
    }
    }
    function logout(Request $req)
    {
       $req->session()->forget('user');
       return redirect('/');
    }

}
