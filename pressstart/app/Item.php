<?php

namespace App;

/* Add Rating Pending (RP) */

class Item extends Model
{
    public $timestamps = false;

    protected $attributes = [
    	'image' => 'default'
    ];

    public function preorder()
    {
    	return $this->belongsTo(Preorder::class);
    }

    public function invoice()
    {
    	return $this->belongsTo(Invoice::class);
    }
}
