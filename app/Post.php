<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Po default imeto na modela se svarzva s imeto na tablicata v mnojestveno 4islo
    // Post = posts
    // Ako imeto na tablicata e razli4no ot imeto na model se pravi slednoto:
    protected $table = 'poststwo';

    // Change primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps =true;

}
