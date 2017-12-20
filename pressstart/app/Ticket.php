<?php

namespace App;

class Ticket extends Model
{
    public $timestamps = false;

    public function customer()
	{
		return $this->belongsTo(Customer::class);
	}
}
