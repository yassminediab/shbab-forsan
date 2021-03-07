<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'date' => 'date',
    ];
}
