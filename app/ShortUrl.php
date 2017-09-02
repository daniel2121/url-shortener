<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
  public function clicks ()
  {
    return $this->hasMany('App\Click');
  }
}
