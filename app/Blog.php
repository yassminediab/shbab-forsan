<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $casts = [
        'created_at' => 'date',
    ];

    protected $guarded = ['id'];
}
