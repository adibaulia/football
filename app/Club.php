<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'club';
    public $timestamps = false;
    protected $guarded = ['id'];
}
