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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('search', [
    'as' => 'search',
    'uses' => 'SearchController@search'
]);


Route::group(['middleware' => ['web', 'auth']], function(){ 
    Route::resource('course', 'CourseController');    
    Route::post('course/add', 'CourseController@addCourse')->name('course.add');
    
    Route::group(['namespace' => 'User'], function(){ 
        Route::resource('user',  'UserController');
        Route::group(
            [                   
                'prefix' => 'user', 
                'as' => 'user.'     
            ], function(){
                Route::resource('profile', 'ProfileController');
                
                Route::resource('identity', 'IdentityController');
        });
    });        
});


/*INDONESIA PROVINCE AND CITY*/
Route::prefix('indonesia')->group(function(){
    Route::get('/provincies', 'IndonesiaController@allProvincies');
    Route::get('/province/{id}', 'IndonesiaController@getProvince');
    Route::get('/province/{id}/cities', 'IndonesiaController@getCitiesByProvince');
    Route::get('/province/{id}/city/{id}', 'IndonesiaController@getCityByProvince');
    Route::get('/cities', 'IndonesiaController@allCities');
    Route::get('/city/{id}', 'IndonesiaController@getCity');
    //...more fore district
});