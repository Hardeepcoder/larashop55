<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\cats;
use App\products;
class ProductsController extends Controller
{
    //
    public function proCat(Request $request){
      $cat = $request->cat;

      $data= DB::table('products')->join('cats','cats.id','products.cat_id')
      ->where('cats.cat_name',$cat)->get();
      return view('front.products',[
        'data' => $data, 'catByUser' => $cat
      ]);
    }

    public function search(Request $request){
      $searchData= $request->searchData;

      //start query for search
      $data = DB::table('products')
      ->join('cats','cats.id','products.cat_id')
      ->where('products.pro_name', 'like', '%' . $searchData . '%')
      ->get();
      return view('front.products',[
        'data' => $data, 'catByUser' => $searchData
      ]);
    }



}
