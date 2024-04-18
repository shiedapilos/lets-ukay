<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionRecord extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'src',
        'product_id',
        'status',
        'user_id',
        'price',
        'created_at',
        'order_pin',
    ];
}
