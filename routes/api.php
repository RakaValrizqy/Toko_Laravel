<?php

use Illuminate\Http\Request;

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

Route::group(['middleware' => ['jwt.verify']], function(){
    Route::get('/customers', 'CustomersController@show');
    Route::get('/customers/{id}', 'CustomersController@detail');
    Route::put('/customers/{id}', 'CustomersController@update');
    Route::post('/customers', 'CustomersController@store'); 
    Route::delete('/customers/{id}', 'CustomersController@destroy');
    
    Route::get('/officer', 'OfficerController@show');
    Route::get('/officer/{id}', 'OfficerController@detail');
    Route::put('/officer/{id}', 'OfficerController@update');
    Route::post('/officer', 'OfficerController@store'); 
    Route::delete('/officer/{id}', 'OfficerController@destroy');
    
    Route::get('/product', 'ProductController@show'); 
    Route::get('/product/{id}', 'ProductController@detail'); 
    Route::put('/product/{id}', 'ProductController@update'); 
    Route::post('/product', 'ProductController@store'); 
    Route::delete('/product/{id}', 'ProductController@destroy'); 
    
    Route::get('/orders', 'OrdersController@show'); 
    Route::get('/orders/{id}', 'OrdersController@detail'); 
    Route::put('/orders/{id}', 'OrdersController@update'); 
    Route::post('/orders', 'OrdersController@store'); 
    Route::delete('/orders/{id}', 'OrdersController@destroy'); 
    
    Route::get('/detailOrder', 'DetailOrdersController@show'); 
    Route::get('/detailOrder/{id}', 'DetailOrdersController@detail');
    Route::put('/detailOrder/{id}', 'DetailOrdersController@update'); 
    Route::post('/detailOrder', 'DetailOrdersController@store'); 
    Route::delete('/detailOrder/{id}', 'DetailOrdersController@destroy');
});

 