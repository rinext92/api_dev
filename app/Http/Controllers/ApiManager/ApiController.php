<?php

namespace App\Http\Controllers\ApiManager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\UserRepo;

class ApiController extends Controller
{
  private $users;

  public function __construct(UserRepo $users){
    $this->users = $users;
  }

  public function list_of_user(){
    return $this->users->get();
  }
}
