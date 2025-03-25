<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required','confirmed']
            //confirmed is for the confirm password but the id needs to be password_confirmation for it to work
        ]);

        $user = User::create($validatedAttributes);

        FacadesAuth::login($user);

        return redirect("/jobs");
        //if the form doesnt work it could be the fillables from the user model that is already madde by laravel
    }
}
