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

Route::get('/', function () {
    return view('user/userdashboard');
});

Route::get('/admin', function () {
    return view('admin');
});


/* admin makanan dan minuman */
Route::get('/addFoods', function () {
    return view('addFood');
});

Route::post('/addFoods', 'FoodController@addMenu');

Route::get('/addDrinks', function () {
    return view('addDrinks');
});

Route::post('/addDrinks', 'DrinkController@addMenu');

/* admin liat menu */
Route::get('/adminmenu', 'MenuController@showMenu');

/*customer status*/
Route::get('/customerStatus', function () {
    return view('customerStatus');
});

Route::get('/check', function(){
	return view('user/checkorder');
});

Route::post('/orderstatus', function(Request $request){

	//$id = $request->orderid;
	//$array = array('orderid' => $id);
	return view('user/orderstatus');
});

Route::get('/order', function(){
	return view('user.order');
});
