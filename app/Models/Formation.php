<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function cours()
    {
        return $this->hasMany('App\Cours');

    }
    public function user()
    {
        return $this->belongsTo('App\User');

    }
}
