<?php

namespace App;

class Preorder extends Model
{
	public $timestamps = false;

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function item()
	{
		return $this->hasOne();
	}
}
