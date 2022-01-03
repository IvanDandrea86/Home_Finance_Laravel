<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\Types\String_;

class ThemeController extends Controller
{
    function theme(Request $request)
    {
        $request->validate([
            'theme' => ['required', Rule::in(['darkly', 'minty'])]
         ]);
         session()->put("theme", $request->theme);
         return redirect('/');    }
}
