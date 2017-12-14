<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* Add Rating Pending (RP) */

class Item extends Model
{
    public $timestamps = false;

    protected $attributes = [
    	'gameImageID' => 'value'
    ];

    public function preorder()
    {
    	return $this->hasOne('App\Preorder', 'id');
    }
}
