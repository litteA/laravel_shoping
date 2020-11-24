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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test/queryUsers/{id}',['uses' => 'TestController@queryUsers']);

RESTful风格
    Route::resource('users','UsersController');

    Route::get('/users', 'UsersController@index')->name('users.index');
    Route::get('/users/{user}', 'UsersController@show')->name('users.show');
    Route::get('/users/create', 'UsersController@create')->name('users.create');
    Route::post('/users', 'UsersController@store')->name('users.store');
    Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
    Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
*/

Route::get('/goods', 'ShopingController@index')->name('goods.index');
Route::get('/goods/{id}','ShopingController@show')->name('goods.show');
Route::post('/goods','ShopingController@create')->name('goods.create');
Route::delete('/goods/{id}','ShopingController@delete')->name('goods.delete');
Route::patch('/goods/{id}','ShopingController@update')->name('goods.update');