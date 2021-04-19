<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'main_links' => 'array',
        'we_do' => 'array',
        'phone' => 'array'
    ];
}
