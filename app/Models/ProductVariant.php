<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'variant_id',
        'type',
        'value',
    ];

    public function product(){
        $this->belongsTo(Product::class);
    }

    public function variant(){
        $this->belongsTo(Variant::class);
    }

}
