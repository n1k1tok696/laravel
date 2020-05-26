<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\AuthLar;

class ControllerUser extends Controller
{
    //
    public function login() {
        return view('login');
    }

    public function signin(Request $req) {

        var_dump(Auth::check());
        
        $validation = $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $req->email,
            'password' => $req->password
        ])) {
            $req->session()->save();
            return redirect()->route('getdata');
            // return view('dashboard', ['data' => AuthLar::all()]);
            // return response('pochti Pizdec', 302)->header('Location: /dashboard', true, 302);
        } else {
            return redirect()->back()->with('danger', 'Incorrect login or password');
            // return response('Pizdec', 401);
        }
    }
}
