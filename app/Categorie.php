<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $timestamps = false;

    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    protected $fillable = ['description'];

}
