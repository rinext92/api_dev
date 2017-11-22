<?php

namespace App\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Model\User;
use JWTAuth;
use JWTAuthException;

class UserRepo extends Repository
{
  private $user;

  public function model(){
    return 'App\User';
  }

  public function __construct(User $user){
    $this->user = $user;
  }

  public function get($column = array('*')){
    return $this->user->get($column);
  }

  // public function store($username, $password, $email){
  //   $users =  $this->user([
  //     'username' => $username,
  //     'password' => bcrypt($password),
  //     'email' => $email
  //   ]);
  //
  //   if ($users->save()){
  //
  //   }
  // }
}
