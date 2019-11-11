<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $casts = [
        'links' => 'array'
    ];
}
