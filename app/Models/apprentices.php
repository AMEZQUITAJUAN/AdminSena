<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentices extends Model
{
    use HasFactory;
    public function computer(){
        return $this->belongsTo('App\Models\computer');
    }

    public function course(){
        return $this->belongsTo('App\Models\course');
    }
}
