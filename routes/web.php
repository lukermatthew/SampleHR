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



Route::get('/', 'HomeController@index')->name('home');







Route::post('subscriber','SubscriberController@store')->name('subscriber.store');




Auth::routes();


//Admin Route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){

    
    Route::get('dashboard','DashboardController@index')->name('dashboard');
   
    Route::resource('client','ClientController');
    Route::resource('package','PackageController');
    Route::resource('subscription','SubscriptionController');
    Route::resource('clientemployees','ClientEmployeeController');

  

    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');
   

});

//Author Route
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('post','PostController');

});