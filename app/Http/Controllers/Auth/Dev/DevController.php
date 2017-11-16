<?php

namespace App\Http\Controllers\Auth\Dev;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\Dev\LoginController;

class DevController extends Controller
{
    private $loginController;

    public function __construct(LoginController $loginController){
      $this->loginController = $loginController;
    }

    public function login(){
      return $this->loginController->index();
    }
}
