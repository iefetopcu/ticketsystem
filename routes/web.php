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




Route::get('/','homeController@index');
Route::get('/','homeController@login_form')->name('login.form');
Route::post('/','homeController@login');
Route::post('/','homeController@login');
Route::get('/userhome','userhomeController@index')->name('userhome');
Route::get('/newticket','newticketController@index')->name('newticket'); //  For Users > New Ticket Page
Route::get('/showtickets/{task_id}','showticketsController@index')->name('showtickets'); // For Users > Show Tickets Page
Route::get('/showadmintickets/{task_id}','showadminticketsController@index')->name('showadmintickets');
Route::get('/admintickets','adminticketsController@index')->name('admintickets');// For Admin > Show All Tickets Page
Route::get('/usersettings/{idapp_user}','usersettingsController@index')->name('usersettings'); // For Admin > Users Settings Page
Route::get('/users','usersController@index')->name('users');
Route::post('/search','adminticketsController@search')->name('search_ticket');
Route::get('/newuser','newuserController@index')->name('show_new_user_form');
Route::group(['prefix'=>'newuser'] , function() {
    Route::get('/newuser', 'newuserController@saveuser_form')->name('save.new.user');
    Route::post('/newuser', 'newuserController@saveuser')->name('saveuser');
});
    Route::group(['prefix'=>'newticket'] , function() {
        Route::get('/newticket', 'newticketController@saveticket_form')->name('save.new.ticket');
        Route::post('/newticket', 'newticketController@saveticket')->name('saveticket');
});



Route::get('/logout','homeController@logout')->name('logout');

