<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_variant_id',
        'in_stock_api',
        'in_stock',
        'is_active', //api or manual
        'status'
    ];

    public function product_variant(){
        $this->belongsTo(ProductVariant::class);
    }
}
