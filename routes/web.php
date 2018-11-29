<?php
Route::get('test', function(){
return App\orders::with('orders_products')->get();
});
Route::view('/', 'front.index');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

//products functions
Route::view('products','front.products',
 ['data'=> App\products::all(),'catByUser' => 'All Products']);
Route::get('products/{cat}','ProductsController@proCat');
Route::get('search','ProductsController@search');
Route::get('productsCat','ProductsController@productsCat');
Route::get('details/{id}', 'ProductsController@details');
// products functions end

//Cart functions
Route::get('cart', 'cartController@index');
Route::get('cart/add/{id}', 'cartController@addItem');
Route::get('cart/remove/{id}', 'cartController@removeItem');
Route::get('cart/update/','cartController@update');
//Cart functions end

//user middleware
Route::group(['middleware' => 'auth'], function () {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('dashboard','HomeController@index');
  Route::view('myaccount', 'myaccount.index');
  Route::get('myaccount/{link}',function($link){
      return view('myaccount.index', ['link' => $link]);
  });
  Route::get('checkout', 'checkoutController@index');
  //start inbox
  Route::view('inbox', 'myaccount.inbox', [
     'data' => App\inbox::all()
  ]);
  //update inbox
  Route::get('updateInbox', 'profileController@updateInbox');
  Route::post('saveAddress','profileController@saveAddress');

//coupons 
Route::get('checkCoupon','checkoutController@checkCoupon');

Route::post('placeOrder','checkoutController@placeOrder');
Route::get('thankyou',function(){
  return view('thankyou');
});

// users - orders details

Route::get('orderDetails/{id}',function($id){
  return view('myaccount.order');
});

Route::get('trackOrder/{id}',function($id){
  $orderData = App\orders::where('id',$id)->get();
  return view('myaccount.track',['data' => $orderData]);
});


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
    Route::get('editCategory/{id}', function($id){
      return view('admin.editCategory',[
        'data' => App\cats::where('id',$id)->get()
      ]);
    });
    Route::post('saveCategory','AdminController@saveCategory');

    Route::view('users', 'admin.users', [
      'data' => App\user::all()
    ]);
    Route::get('banUser', 'AdminController@banUser');
    Route::get('/orders','AdminController@orders');
    Route::get('orderStatusUpdate','AdminController@orderStatusUpdate');
});
