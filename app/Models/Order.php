<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\API\ResponseFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public static function generateKode()
    {
        $lastCode = Order::orderBy('order_code', 'desc')->first();
        
        if (isset($lastCode)) {
            return 'ORD'.sprintf("%04d", intval(str_replace('ORD', '', $lastCode->order_code)) + 1);
        }else{
            return 'ORD'.sprintf("%04d", 1);
        }
    }
}
