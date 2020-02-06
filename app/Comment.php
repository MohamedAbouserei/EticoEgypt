<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{

    public $table='comments';
    protected $fillable = ['name','child_id', 'email','message'];

    public function Child()
    {
    return $this->belongsTo('App\Child');
    }
}
