<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
  protected $table = 'statistik';
  public $timestamps = false;
  protected $guarded = ['id'];
}