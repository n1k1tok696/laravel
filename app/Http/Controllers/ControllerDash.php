<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthLar;

class ControllerDash extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function getData() {
      var_dump(Auth::check());
      return view('dashboard', ['data' => AuthLar::all()]);
    }
}