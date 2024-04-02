<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'icon_name',
        'bg-color',
    ];

    public function products(){
        $this->hasMany(Product::class);
    }
}
