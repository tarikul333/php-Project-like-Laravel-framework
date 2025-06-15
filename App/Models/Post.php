<?php

namespace App\Models;

use Core\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'body'];

    protected $relations = [
        'user' => [
            'table' => 'users',
            'foreignKey' => 'user_id',
            'ownerKey' => 'id',
            'select' => 'email',
            'as' => 'user_email'
        ]
    ];
}
