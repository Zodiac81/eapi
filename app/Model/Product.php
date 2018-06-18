<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ["name", "detail", "price", "in_stock", "discount"];

    public function reviews()
    {
       return $this->hasMany('App\Model\Review');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
