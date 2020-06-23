<?php

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
//Route::apiResource('movies', 'MoviesController');

//Route::apiResource('Products','ProductsController');

Route::apiResource('products','Api\ProductsController');
Route::get('/products/{search}','Api\ProductsController@search')->name('products.search');
Route::apiResource('catagory','Api\CatagoryController');
