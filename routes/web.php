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

Route::group(['middleware' => ['web']], function () 
{
	Route::group(['domain' => env('WORLD_WIDE_WEB') . env('DOMAIN_PREFIX') . env('APP_DOMAIN')], function()
	{
		Route::group(array('prefix' => 'dashboard'), function ()
		{
			Route::get('/', function () {
    			return view('HarapanJaya/front/pages/main');
			});

			Route::group(array('prefix' => 'pasien'), function ()
			{
				Route::get('/', 'HarapanJaya\Front\Pages\MainController@index')->name('IndexPasien');
				Route::get('data', 'HarapanJaya\Front\Pages\MainController@getData')->name('GetDataPasien');
			});
		});
	});
});
