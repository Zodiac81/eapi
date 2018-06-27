<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "reviews";
    protected $fillable = ["product_id", "user_id", "review", "star"];

    public function product()
    {
        return $this->belongsTo("App\Model\Product", "product_id");
    }

    public function user()
    {
        return $this->belongsTo("App\User", "user_id");
    }
}
