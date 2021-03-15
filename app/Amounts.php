<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Amounts extends Model
{
    public $timestamps = false;
    protected $fillable = ['value', 'product_id', 'timestamp', 'reference'];
    public static function getForProduct($product_id) {
        return floatval(DB::select('SELECT SUM(value) as amount FROM qwert_amounts WHERE product_id = ?;', [$product_id])[0]->amount);
    }

    public function formatDate() {
        $datetime = new \DateTime($this->timestamp);
        return $datetime->format('d.m.Y');
    }

    public static function getLogForProduct($product_id) {
        return Amounts::where('product_id', $product_id)->orderBy('timestamp', 'DESC')->get();
    }
}
