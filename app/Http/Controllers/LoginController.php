<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store()
    {
        
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (! FacadesAuth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                'email' => 'credentials do not match'
            ]);
        }
        // regenrate the session token
        request()->session()->regenerate();

        // redirect
        return redirect("/");
    }

    public function destroy()
    {
        FacadesAuth::logout();
        return redirect("/");
    }
}
