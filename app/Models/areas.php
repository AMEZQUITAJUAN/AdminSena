<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    use HasFactory;
    public function course(){
        return $this->hasMany('App\Models\course');
    }
    public function teacher(){
        return $this->hasMany('App\Models\teacher');
    }
 
}
