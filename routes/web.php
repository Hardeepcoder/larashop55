<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test',function(){
  return App\cats::with('childs')
  ->where('p_id',0)
  ->get();
});


Route::view('/', 'front.index');
Auth::routes();

//products
Route::view('products','front.products',['data'=> App\products::all(),
'catByUser' => 'All Products']);
Route::get('products/{cat}','ProductsController@proCat');
Route::get('search','ProductsController@search');

//pro by ajax with cat id
Route::get('productsCat','ProductsController@productsCat');

//user middleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('dashboard','HomeController@index');
});

//admin middleware start
Route::group(['prefix' => 'admin', 'middleware'=> ['auth' => 'admin']], function () {
    Route::get('/','AdminController@index');
    Route::get('profile','AdminController@profile');
    Route::get('/addProduct','AdminController@addProduct');
    Route::post('saveProduct', 'AdminController@saveProduct');
    // new route method by laravel 5.5
    Route::view('products', 'admin.products', [
      'data' => App\products::with('cats')->get()
    ]);

    //edit product
    Route::get('editProduct/{id}', function($id){
      return view('admin.editProduct',[
        'data' => App\products::where('id',$id)->get()
      ]);
    });

    Route::post('/uploadPP', 'AdminController@uploadPP');
    //change image
    Route::view('/changeImage/{id}','admin.changeImage');
    Route::post('/uploadPP','AdminController@uploadPP');

    Route::view('addCategory','admin.addCategory');
    Route::view('cats','admin.cats',[
      'data' => App\cats::all()
    ]);

    Route::post('saveCategory','AdminController@saveCategory');


  });
