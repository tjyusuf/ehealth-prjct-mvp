<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialistType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function specialists()
    {
        return $this->hasMany('App\Models\Specialist','type_id');
    }  

    public function openings()
    {
        return $this->hasMany('App\Models\Opening','for');
    }         
}
