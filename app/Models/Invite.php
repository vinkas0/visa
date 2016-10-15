<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{

  public function user()
  {
      return $this->hasOne('App\User');
  }

}