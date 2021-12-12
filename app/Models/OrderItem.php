<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo('App\Models\Inventory','item_id');
    }    

    public function order()
    {
        return $this->belongsTo('App\Models\Order','order_id');
    }    
}
