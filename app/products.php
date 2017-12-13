<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
  //
  public function cats(){
    return $this->belongsTo('App\cats', 'cat_id');
  }

}
