<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prices extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id', 'created_at', 'currency', 'price_shop', 'price_purchase', 'price_provided', 'price_parlor', 'domain'];


    public function formatDate() {
        $datetime = new \DateTime($this->created_at);
        return $datetime->format('d.m.Y');
    }

    public static function getLatest($product_id, $currency) {
        $domain = $_SERVER['SERVER_NAME'];
        $result = DB::select('select price_purchase, price_provided, price_parlor, price_shop
            from qwert_prices prc1
            where prc1.created_at = (
            select max(created_at) from qwert_prices prc2 
            where prc1.currency = prc2.currency AND prc1.product_id = prc2.product_id
            ) AND product_id = ? AND currency = ? AND domain = ?;', [$product_id, $currency, $domain]);
        if (count($result) > 0) return $result[0];
        return DB::select('select 0.0 as price_purchase, 0.0 as price_provided, 0.0 as price_parlor, 0.0 as price_shop')[0];
    }

    public static function getProductPrices($product_id) {
        $result = DB::select('select domain, currency, price_purchase, price_provided, price_parlor, price_shop
            from qwert_prices prc1
            where prc1.created_at = (
            select max(created_at) from qwert_prices prc2 
            where prc1.currency = prc2.currency AND prc1.product_id = prc2.product_id AND prc1.domain = prc2.domain
            ) AND product_id = ?;', [$product_id]);
        return $result;
    }

    public static function getMoneyAnalytics($currency, $product_id) {
        $domain = $_SERVER['SERVER_NAME'];
        return Prices::where('product_id', $product_id)->where('currency', $currency)->where('domain', $domain)->orderBy('created_at', 'DESC')->get();
        // return DB::select(
        //     'SELECT * FROM qwert_prices WHERE product_id = ? AND currency = ? AND domain = ? ORDER BY created_at DESC;', 
        //     [$product_id, $currency, $domain]
        // );
    }
}
