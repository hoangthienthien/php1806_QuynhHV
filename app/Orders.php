<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
	protected $fillable = [
		'id','user_id', 'total_price', 'description',
	];
	public function User() {

		return $this->belongsTo('App\User');
	}

	public function Products() {

		return $this->belongsToMany('App\Products');
	}
    
    public function Orders_detail() {

    	return $this->hasMany('App\Orders_detail');
    }
}
