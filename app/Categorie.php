<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
<<<<<<< HEAD
    public $timestamps = false;
=======
    public $timestamp = false;
>>>>>>> leopold

    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    protected $fillable = ['description'];
<<<<<<< HEAD

=======
>>>>>>> leopold
}
