<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_v1 extends Model
{
    protected $fillable =  ['name', 'surname', 'second_surname'];

    protected $table = 'users_v1';
}