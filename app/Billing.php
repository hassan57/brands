<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{

    protected $fillable = [
        'name',
        'email',
        'address',
        'city',
        'province',
        'postal',
        'phone',
        'user_id',
    ];

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
