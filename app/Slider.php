<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'title_en',
      'title_ru',
      'title_kg',
      'subtitle_en',
      'subtitle_ru',
      'subtitle_kg'
    ];
}
