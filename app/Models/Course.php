<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function department(){
        return $this->belongsTo('App\department');
    }
    public function students(){
        return $this->hasMany('App\Student');
    }
}
