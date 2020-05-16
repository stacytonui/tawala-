<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/','ProductController@index');


Route::get('/category/{category}','CategoryController@getCategory');

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin', function (){
        return view('admin.dashboard');
    });
});


Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

Route::get('/checkout','CheckoutController@checkout');
Route::post('order', 'CheckoutController@placeOrder');

Route::get('/orders', function ()
{
    return view('admin.orders');
});
