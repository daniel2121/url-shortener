<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
  public function short_url()
  {
      return $this->belongsTo('App\Short_Url');
  }
}
