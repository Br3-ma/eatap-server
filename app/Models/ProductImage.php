<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'product_id',
        'is_main',
        'image',
    ];

    public function products(){
        $this->belongsTo(Product::class);
    }
}
