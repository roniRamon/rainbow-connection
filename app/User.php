<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  public function connections()
  {
      return $this->hasMany('App\Connection','usera');
  }
}
