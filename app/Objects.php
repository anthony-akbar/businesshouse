<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objects extends Model
{
    use SoftDeletes;
    protected $table='objects';
    protected $guarded =[];
}
