<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrlShortener extends Model
{
    protected $table = 'url_shorteners';
    public $timestamps = false;
}
