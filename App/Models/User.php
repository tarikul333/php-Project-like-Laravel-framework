<?php

namespace App\Models;

use Core\Model;

class User extends Model
{
    protected $fillable = ['email', 'password'];
     protected $table = 'users';
}