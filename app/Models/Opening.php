<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    use HasFactory;

    public function for()
    {
        return $this->belongsTo('App\Models\SpecialistType','for');
    } 

    public function facility()
    {
        return $this->belongsTo('App\Models\Facility','facility_id');
    } 
}
