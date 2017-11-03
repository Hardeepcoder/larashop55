<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function addProduct(){
      return view('admin.addProduct');
    }

    public function saveProduct(Request $request){
      $pro_name = $request->pro_name;
      $pro_code = $request->pro_code;
      $pro_price = $request->pro_code;

      $add_product = DB::table("products")->insert([
        'pro_name' => $pro_name,
        'pro_code' => $pro_code,
        'pro_price' => $pro_price,
        'pro_img' => "img.jpg",
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      if($add_product){
        echo "done";
      }else{
        echo "Error";
      }
    }
}
