<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::namespace('Api')->group(function() {
    Route::get('brand', 'BrandController@index');
    Route::get('brand/{id}', 'BrandController@show')->where('id', '[0-9]+');
    Route::get('brand/{id}/search', 'BrandController@search')->where('id', '[0-9]+');

    Route::get('product', 'ProductController@index');
    Route::get('product/{id}', 'ProductController@show')->where('id', '[0-9]+');
    Route::get('product/search', 'ProductController@search');

});
