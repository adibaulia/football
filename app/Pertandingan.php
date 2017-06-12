<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
  protected $table = 'pertandingan';
  public $timestamps = false;
  protected $guarded = ['id'];
}
