<?php

namespace App\Http\Controllers\Dev;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\Dev\LoginController;
use App\Repository\UserRepo;

class DevController extends Controller
{
    private $loginController;
    private $userRepo;

    public function __construct(LoginController $loginController, UserRepo $userRepo){
      $this->loginController = $loginController;
      $this->userRepo = $userRepo;
    }

    public function index(){
      return view('dev.index');
    }

    public function login(){
      return $this->loginController->index();
    }

    public function userList(){
      $users = $this->userRepo->get();
      return view('dev.contents.user-list', compact('users'));
    }

    public function activityLogs(){
      return view('dev.contents.activity-logs');
    }

    public function apiList(){
      return view('dev.contents.api-list');
    }
}
