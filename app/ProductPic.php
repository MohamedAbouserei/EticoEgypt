<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPic extends Model
{
    public $table='product_pics';

    public function Child()
  {
  return $this->belongsTo('App\Child');
  }
}
