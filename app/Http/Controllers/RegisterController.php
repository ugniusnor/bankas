<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index() {
        $this->middleware(['guest']);
        return view('auth.register');
    }

    public function store(Request $request) {
        //validation:
        $this->validate($request, [
            'name'=>'required|max:50',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed|min:5',
        ]);

        //storing to data base if validation is ok

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        //login in after sign up

        auth()->attempt($request->only('email', 'password'));
        return redirect('dashboard');

    }
}
