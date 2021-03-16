<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlidersHome extends Model
{
    public $timestamps = false;
    protected $fillable = ['img', 'url', 'lrc'];
}
