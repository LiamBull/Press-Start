<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    public function preorder()
	{
		return $this->hasMany('App\Preorder', 'customerID');
	}
}
