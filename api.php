<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('test', function(){
	return response([1,2,3,4,5], 200);
});

/*
Route::get('/products', 'ProductsController@index');
Route::get('look_asin/{uid}','ProductsController@look_asin' );
Route::delete('delete_asin/{uid}/{id_tovar}', 'ProductsController@delete_asin');
Route::post('add_asin', 'ProductsController@add_asin');
*/
Route::get('/products', 'TovaryController@index');
Route::post('look_asin','TovaryController@look_asin' );
Route::post('delete_asin', 'TovaryController@delete_asin');
Route::post('add_asin', 'TovaryController@add_asin');


Route::get('/clients', 'ClientsController@get_clients');
Route::get('/client/{id}', 'ClientsController@get_clientbyid');

Route::post('/plan_name/{uid}', 'ClientsController@get_planname');





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
