<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_teachers extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo('App\Models\course');
    }

    public function teacher(){
        return $this->belongsTo('App\Models\teacher');
    }
}
