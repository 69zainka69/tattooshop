<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','weight', 'size', 'supplier', 'description', 'url', 'zakaz_salona','shelf_life', 'category_id', 'metadesc', 'purchase', 'price_in_salon', 'price_usd', 'price_pln', 'price_eur', 'price', 'sclad_id'];

    public function images(){
        return $this->hasMany('App\ProductImage');
    }
    public function supplier(){
        return $this->hasMany('App\Supplier');
    }

    public function sclad_id(){
        return $this->hasMany('App\Sclad');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function price($currency) {
        return Prices::getLatest($this['id'], $currency);
    }

    public function amount() {
        return Amounts::getForProduct($this['id']);
    }

    public function firstImage() {
        $images = $this->images;
        if (count($images)) return $images[0]['img'];
        return '/img/no_image.png';
    }

    //protected $table = 'products';

}