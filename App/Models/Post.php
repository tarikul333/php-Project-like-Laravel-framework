<?php

namespace App\Models;

use Core\Model;

class Post extends Model
{
    protected $fillable = ['user_name', 'title', 'body'];
}
