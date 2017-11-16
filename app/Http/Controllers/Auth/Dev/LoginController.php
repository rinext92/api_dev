<?php

namespace App\Http\Controllers\Auth\Dev;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
      return view('dev.auth.login');
    }

}
