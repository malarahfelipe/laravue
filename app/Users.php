<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  protected $table = "users";
  public $timestamps = true;

  protected $fillable = [
    'name', 'email', 'uid'
  ];
}
