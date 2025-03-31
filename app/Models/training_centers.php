<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training_centers extends Model
{
    use HasFactory;
    public function teacher(){
        return $this->hasMany('App\Models\teacher');
    }
    public function course(){
        return $this->hasMany('App\Models\course');
    }
    
}
