<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['id', 'img', 'product_id'];

    public function products(){
        return $this->hasMany('App\Product');
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
