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

Route::get('/','AboutController@AboutControllerViiw');

//Route::get('teacher',function(){
//    echo "<h1>MOHAMMAD -ALMAMOON</h1>";
//});

Route::get('contact_page','ContactController@ContactView');

Route::get('myinformation','MyInformationController@InformationView');

Route::get('roommate','RoomateController@RoomMateView');
