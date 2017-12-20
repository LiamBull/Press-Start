<?php

namespace App;

class Invoice extends Model
{
	public $timestamps = false;

    public function customer()
   	{
   		$this->belongsTo(Customer::class);
   	}

   	public function item()
   	{
   		$this->hasOne(Item::class);
   	}
}
