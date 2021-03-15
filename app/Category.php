<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description', 'url_cat', 'parent_id'];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
  
    public function products(){
        return $this->hasMany('App\Product');
    }

    public static function root() {
        return Category::where('parent_id', null);
    }
   
}
