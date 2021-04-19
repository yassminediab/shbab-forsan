<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $guarded = ['id'];
     protected $casts = [
        'photo' => 'array'
    ];
}
