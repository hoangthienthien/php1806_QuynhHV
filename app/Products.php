<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
    	'id',
    	'category_id',
    	'product_name',
    	'price',
    	'image',
    	'quanity',
    	'avg_rating',
    	'description',
    ];

    public function Orders() {

    	return $this->belongToMany('App\Orders');
    }

    public function Order_Detail() {

    	return $this->hasMany('App\Order_Detail');
    }
}
