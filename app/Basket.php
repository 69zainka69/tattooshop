<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public $timestamps = false;
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'adress_1', 'adress_2', 'sclad_id', 'user_id', 'status', 'ttn'];
 
    public static function createWithItems($basketData, $items) {
        $currency = $_COOKIE['currency'] ?? 'UAH';
        $basket = new Basket(array(
            'first_name' => $basketData['first_name'],
            'last_name' => $basketData['last_name'],
            'phone' => $basketData['phone'],
            'email' => $basketData['email'],
            'adress_1' => $basketData['adress_1'],
            'adress_2' => $basketData['adress_2'],
            'sclad_id' => $basketData['sclad_id'],
            'user_id' => $basketData['user_id'],
        ));
        $basket->save();
        foreach($items as $item) {
            $price = Prices::getLatest($item->id, $currency);
            $basket_item = new Basket_products(array(
                'basket_id' => $basket->id,
                'product_id' => $item->id,
                'count' => $item->quantity,
                'total_price' => (double) $item->quantity * (double) $price->price_shop,
                'currency' => $currency
            ));
            $basket_item->save();
        }
        return $basket;
    }

    public function items() {
        return $this->hasMany(Basket_products::class, 'basket_id');
    }

    public function fullName() {
        return $this->first_name.' '.$this->last_name;
    }
}
