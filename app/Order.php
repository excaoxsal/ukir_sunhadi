<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'consument_id', 'product_id', 'status', 'price','weight'
    ];
}
