<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    public $timestamps = false;

    protected $table = 'myusers';
}
