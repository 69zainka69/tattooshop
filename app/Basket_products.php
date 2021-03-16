<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Basket_products extends Model
{
    protected $fillable = ['basket_id', 'product_id', 'count', 'total_price', 'currency'];
    public $timestamps = false;

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public static function getTotlaSumSale($sclad_ids) {
        try {
            $ids = join(",",$sclad_ids);
            return DB::select('select SUM(total_price) as total_price from qwert_basket_products where basket_id IN (SELECT id FROM qwert_baskets WHERE status=400 AND sclad_id IN ('.$ids.'));')[0]->total_price;
        } catch (Exception $e) {
            return 0;
        }
    }
}
