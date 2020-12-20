<?php

namespace App;

use App\Size;
use App\Color;
use App\Category;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image', 'cat_id', 'id','stock'];

    public function category()
    {
        return $this->belongsTo('\App\Category', 'cat_id', 'id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color__products');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'size__products');
    }
}
