<?php

namespace App;

class Customer extends Model
{
    public $timestamps = false;

    public function preorder()
	{
		return $this->hasMany(Preorder::class);
	}

	public function invoices()
	{
		return $this->hasMany(Invoice::class);
	}

	public function tickets()
	{
		return $this->hasMany(Ticket::class);
	}
}
