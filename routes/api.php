<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource('/products','Api\ProductController');


Route::group(['prefix' => 'products','namespace' => 'api'],function (){
    Route::apiResource('{products}/review','ReviewController');
});