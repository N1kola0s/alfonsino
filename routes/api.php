<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Restaurant;
use App\Models\Product;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//rotta API restaurants

/* Route::get('/restaurants', 'Api\RestaurantController@index')->name('restaurants'); */
Route::resource('/restaurants', 'Api\RestaurantController');

//rotta API products
Route::resource('/products', 'Api\ProductController');