<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['id', 'title','name', 'info', 'phone', 'adress', 'doc', 'sclad_id', 'rdpo'];
    
    
}
