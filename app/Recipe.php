<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Recipe extends Model
{
    public $table='recipes';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
