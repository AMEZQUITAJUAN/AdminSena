<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    use HasFactory;
    public function area(){
        return $this->belongsTo('App\Models\area');
    }
    public function training_center(){
        return $this->belongsTo('App\Models\training_center');
    }
    public function course_teacher(){
        return $this->hasMany('App\Models\course_teacher');
    }
}
