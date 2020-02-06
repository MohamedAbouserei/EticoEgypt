<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Group extends Model
{
    public $table='groups';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function Child()
  {
  return $this->hasMany('App\Child','category','id');
  }

  public function User()
  {
  return $this->belongsTo('App\User');
  }
}
