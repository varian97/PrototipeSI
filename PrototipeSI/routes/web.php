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

Route::get('/addFoods', function () {
    return view('addFood');
});

Route::get('/addDrinks', function () {
    return view('addDrinks');
});

Route::get('/customerStatus', function () {
    return view('customerStatus');
});

Route::get('/check', function(){
	return view('user/checkorder');
});

Route::post('/order', function(){
	$id = Input::get('orderid');
	$array = array('orderid' => $id);
	return view('user/order', $array);
});
