<?php

namespace App\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Model\User;

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
}
