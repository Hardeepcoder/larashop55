<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cats extends Model
{

    //
    public function childs(){
      return $this->hasMany('App\cats','p_id');
    }
}
