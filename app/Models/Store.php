<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'store_id',
        'store_code',
        'name',
        'type',
        'industry',
        'about',
        'slogan',
        'address',
        'phone1',
        'phone2',
        'phone3',
        'long',
        'lat',
        'days',
        'hours',
        'cover',
        'logo',
        'theme1',
        'theme2',
        'layout', // Classic, Premuim, Gold, Guru,
        'level', // Public, Approved Yellow, Approved Gold,
        'master_key',
        'qr_code',
        'fb_link',
        'instagram_link',
        'x_link',
        'linkedIn_link',
    ];

    public function product_variant(){
        $this->belongsTo(ProductVariant::class);
    }
}
