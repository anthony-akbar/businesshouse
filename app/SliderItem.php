<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SliderItem extends Model
{
    protected $fillable = [
        'image'
    ];
}
