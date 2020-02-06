<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Nutritionfact extends Model
{
    public $table='nutritionfacts';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
