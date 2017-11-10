<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table='user_table';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
         'username', 'email', 'phone_number', 'address', 'gender', 'password', 'age', 'fullname', 'active'
     ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
