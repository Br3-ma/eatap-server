<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'video',
    ];

    public function product(){
        $this->belongsTo(Product::class);
    }

}
