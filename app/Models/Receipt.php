<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'receipt_num',
        'status',
        'approver',
    ];

    public function transaction(){
        $this->belongsTo(Transaction::class);
    }

}
