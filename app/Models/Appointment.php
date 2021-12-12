<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }    

    public function ratings()
    {
        return $this->morphMany('App\Models\Rating', 'ratable');
    }    

    public function appointable()
    {
        return $this->morphTo();
    }         
}
