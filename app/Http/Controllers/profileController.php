<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class profileController extends Controller
{
    //

    public function updateInbox(Request $request){
      $mId = $request->msgId;

      $update = DB::table('inbox')
      ->where('id',$mId)
      ->update([
        'status' => 0
      ]);
      if($update){
        echo "Status Update successfully";
      }
    }
}
