<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
use App\Repository\UserRepo;

class RegisterController extends Controller
{
    private $user;
    private $userRepo;

    public function __construct(User $user, UserRepo $userRepo)
    {
      $this->user = $user;
      $this->userRepo = $userRepo;
    }

    public function index()
    {
        return view('register');
    }

    public function register(Request $request){
      $this->validate($request,
      [
        'username' => 'required',
        'password' => 'required|min:5',
        'email' => 'required|email'
      ]);
      $username = $request->username;
      $pasword = $request->password;
      $email = $request->email;

      return $this->user->store($username,$password,$email);
    }
}
