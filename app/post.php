<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';
    public $primarykey = 'id';
    public $timestamps = true;
}
