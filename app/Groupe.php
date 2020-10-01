<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public $timestamps = false;

    protected $fillable = ['description'];
    protected $table = 'groupes';
    protected $primaryKey = 'groupe_id';
}
