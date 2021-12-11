<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function facility()
    {
        return $this->hasMany('App\Models\Facility','type_id');
    } 
}
