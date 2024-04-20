<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'picker_id',
        'type',
        'status',
        'state',
        'service_total',
        'total'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

}
