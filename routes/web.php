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


Route::group(['middleware' => ['web', 'auth']], function(){ //middleware diakses sebelum ke controller 
    Route::resource('course', 'CourseController');    
    Route::post('course/add', 'CourseController@addCourse')->name('course.add');
    Route::post('course/delete', 'CourseController@deleteCourse');
    // Route::get('course/payment', 'CourseController@payment')->name('course.payment');
    Route::get('payment', 'CourseController@payment')->name('course.payment');
    Route::group(['namespace' => 'User'], function(){ //namespace untuk lokasi folder controller yang handle
        Route::resource('user',  'UserController');
        Route::group(
            [                   
                'prefix' => 'user', //prefix untuk link yang dihasilkan
                'as' => 'user.'  //name untuk akses route   
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
    Route::get('/province/{id}/city/{city}', 'IndonesiaController@getCityByProvince');
    Route::get('/cities', 'IndonesiaController@allCities');
    Route::get('/city/{id}', 'IndonesiaController@getCity');
    //...more fore district
});