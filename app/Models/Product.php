<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name',
        'product_desc',
        'src',
        'seller_name',
        'status',
        'buyer_id',
        'category',
        'order_pin',
        'order_date',
    ];
}
