<?php

use App\Contracts\OrderContract;
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

Route::get('/about',function ()
{
    return view('pages.about');
});
Route::get('/contact',function ()
{
    return view('pages.contact');
});
Route::get('/shop', 'ProductController@showProducts');
Route::get('/product/{id}', 'ProductController@showProduct')->name('products.show');


Route::get('/category/{category}','CategoryController@getCategory');

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin', function (){
        $users =\App\User::all();
        $userCount = $users->count();

        $orders =\App\Order::all();
        $ordersCount = $orders->count();

        $sales =\App\OrderItem::all();
        $salesCount = $sales->count();

        $pending =\App\Order::where('status', 'pending');
        $pendingCount = $pending->count();

        $completed =\App\Order::where('status', 'completed');
        $completedCount = $completed->count();


        return view('admin.dashboard')->with('userCount', $userCount)->with('ordersCount', $ordersCount)->with('salesCount', $salesCount)
            ->with('pendingCount', $pendingCount)->with('completedCount', $completedCount);
    });
});


Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

Route::get('/checkout','CheckoutController@checkout');
Route::post('order', 'CheckoutController@placeOrder');

Route::get('/orders', 'OrderController@index');
Route::get('/pendingorders', 'OrderController@pending');
Route::get('/completedorders', 'OrderController@complete');
Route::get('/orders/{order}', 'OrderController@show');

Route::patch('/orders/{order}/completed', 'OrderController@completed');

Route::post('/search', 'ProductController@search');
Route::post('/farmer_registration', 'RegisterController@farmerStore');
Route::post('/vendor_registration', 'RegisterController@vendorStore');
Route::get('/register_farmer', 'RegisterController@farmer');
Route::get('/register_vendor', 'RegisterController@vendr');



