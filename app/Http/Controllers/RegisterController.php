<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', ["data_user" => User::all()]); 
    }
    public function create()
    {
        return view('register.create', ["data_user" => User::all()]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

         $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('succes', 'Registrasi Berhasil !');
    }

    
}
