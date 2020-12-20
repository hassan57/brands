<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['quainty', 'product_color', 'product_size', 'price', 'order_id', 'product_id'];



    public  function product()
    {
        return $this->belongsTo(Product::class);
    }
}
