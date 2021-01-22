<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index () {
        return view('auth.login');
    }

    
    public function store(Request $request) {
        //validatei input
        // dd($request->only('email','password'));
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
            if ( !auth()->attempt($request->only('email', 'password')) ) {
    return back()->with('status','invalid credentals');                
            }
            return redirect() ->route('dashboard');
    
        

       

    }
}
