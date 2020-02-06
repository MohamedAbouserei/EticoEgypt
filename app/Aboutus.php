<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Aboutus extends Model
{
    public $table='aboutuses';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
