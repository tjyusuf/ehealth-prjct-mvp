<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    } 

    public function type()
    {
        return $this->belongsTo('App\Models\FacilityType','type_id');
    }    
 
    public function openings()
    {
        return $this->hasMany('App\Models\Opening','facility_id');
    }    
}
