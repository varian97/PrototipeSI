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

/* admin mw edit menu*/
Route::put('/adminmenu/{id}/update', 'MenuController@editMenu');
Route::get('/adminmenu/{id}', 'MenuController@showEditForm');

/*admin delete*/
Route::delete('/adminmenu/{id}', 'MenuController@deleteMenu');

/* admin liat menu */
Route::get('/adminmenu', 'MenuController@showMenu');

/*customer status*/
Route::get('/customerStatus', function () {
    return view('customerStatus');
});

Route::get('/check', function(){
	return view('user/checkorder');
});

Route::post('/orderstatus', 'CheckOrderController@checkOrder');

Route::post('/cancelorder', 'CheckOrderController@Cancelorder');

Route::get('/order', function(){
	return view('user.order');
});

Route::get('/confirm', function(){
	return view('user.confirmorder');
});

Route::post('/confirm', function(){
	return view('user.confirmorder');
});

Route::get('/confirmed', function(){
	return view('user.confirmed');
});

Route::post('/confirmed', function(){
	return view('user.confirmed');
});
