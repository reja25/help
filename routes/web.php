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
    return view('auth.login');
});
//authentication
	Auth::routes();

Route::group(['middleware'=>'auth'],function(){
	Route::get('/renter','RinfoController@index');
	Route::get('add','RinfoController@add')->name('add');
	Route::post('store','RinfoController@store')->name('store');
	Route::get('show', 'RinfoController@show')->name('show');
	//for single view
	Route::get('show-details/{id}', 'RinfoController@show_details')->name('show-details');

	Route::get('renter/{id}/edit', 'RinfoController@edit')->name('edit');
	Route::post('renter/{id}/update', 'RinfoController@update')->name('update');

	Route::get('renter/{id}/delete', 'RinfoController@delete')->name('delete');


	//house number
	Route::get('him','HinfoController@index');
	Route::get('addh','HinfoController@add')->name('addh');
	Route::post('storeh','HinfoController@store')->name('storeh');


	
	Route::get('him/{id}/edit-rent', 'HinfoController@edit_rent')->name('edit-rent');
	Route::put('him/{id}/update-rent', 'HinfoController@update_rent')->name('update-rent');
	Route::get('him/{id}/delete', 'HinfoController@delete')->name('delete');

    //ajax for renter
	Route::get('hrent','RinfoController@get_hrent');

	//monthly payment
    Route::get('mrp','MrpController@index');
    Route::get('add_mrp','MrpController@add')->name('add_mrp');
	Route::post('store_pay','MrpController@store')->name('store_pay');

   /* //for single view
    Route::get('pay-details/{id}', 'MrpController@pay_details')->name('pay-details');*/

	Route::get('mrp/{id}/edit-payment', 'MrpController@edit_payment')->name('edit-payment');
	Route::post('mrp/{id}/update-payment', 'MrpController@update_payment')->name('update-payment');
	Route::get('mrp/{id}/delete', 'MrpController@delete')->name('delete');

    //ajax for monthly payment
    Route::get('get_houserent','MrpController@get_houserent')->name('get_houserent');
	//ajax for monthly payment
	
	});
	
	
