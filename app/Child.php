<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Child extends Model
{
    public $table='children';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function Group()
{
  return $this->belongsTo('App\Group','category','id');
}
public function ProductPic()
{
return $this->hasMany('App\ProductPic','product_id','id');
}
public function Comment()
{
return $this->hasMany('App\Comment');
}
}
