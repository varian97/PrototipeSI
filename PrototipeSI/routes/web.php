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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/addFoods', function () {
    return view('addFood');
});

Route::post('/addFoods', 'FoodController@addMenu');

Route::get('/addDrinks', function () {
    return view('addDrinks');
});

Route::post('/addDrinks', 'DrinkController@addMenu');

Route::get('/customerStatus', function () {
    return view('customerStatus');
});

Route::get('/checkorder', function(){
	return view('user/checkorder.blade.php');
});

Route::post('/order', function(){
	return view('user/'.$id);
});

Route::get('/order', function(){
	return view('user.order');
});
