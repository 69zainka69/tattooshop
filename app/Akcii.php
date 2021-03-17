<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akcii extends Model
{
  
    public $timestamps = false;
    protected $fillable = ['title', 'description', 'url', 'content', 'img', 'id'];


}
