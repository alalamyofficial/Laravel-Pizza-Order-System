<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function items()
    {
        return 
        $this->belongsToMany(
            
            Menu::class, 'order_items', 'order_id', 'menu_id'
        )
        ->withPivot('quantity', 'price');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menu(){
        return $this->hasMany(Menu::class);
    }
}
