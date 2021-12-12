<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public function facility()
    {
        return $this->belongsTo('App\Models\Facility','facility_id');
    }      

    public function type()
    {
        return $this->belongsTo('App\Models\InventoryType','type_id');
    }      

    public function orders()
    {
        return $this->hasMany('App\Models\OrderItem','item_id');
    }       
}
