<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preorder extends Model
{
	public $timestamps = false;

	public function customer()
	{
		return $this->belongsTo('App\Customer', 'customerID');
	}
}
