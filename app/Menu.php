<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
