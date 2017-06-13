<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formasi extends Model
{
  protected $table = 'formasi';
  public $timestamps = false;
  protected $guarded = ['id'];
}
