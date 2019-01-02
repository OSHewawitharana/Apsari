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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',function(){
    return view('produts');
});
Route::get('/services',function(){
    return view('services');
});
Route::get('/contacts',function(){
    return view('contacts');
});
Route::get('/home',function (){
 return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('admin');
//Route::match(['get','post'],'/usersave', 'AdminregController@index')->name('usersave');

//Route::resource('registeroperator','AdminregisterController');
Route::resource('complains','ComplainsController');
Route::resource('customercomplain','CustomercomplainController');
Route::resource('customerprofile','CustomerprofileController');
Route::resource('customerregister','UsersregisterController');
//Route::post('/complains/get_zones','ComplainsController@get_zones');
Route::resource('addproducts','AddproductController');
Route::resource('products','ProductController');
<<<<<<< HEAD
Route::resource('technicians','TechnicianController');
Route::resource('technicianjobs','TechnicianjobController');

Route::post('complains/fetch','ComplainsController@fetch')->name('complains.fetch');

Route::resource('view','ViewtaskController');

Route::resource('rate','RateController');

//Route::get('posts', 'RatingController@posts')->name('posts');
//Route::post('posts', 'RatingController@postPost')->name('posts.post');
//Route::get('posts/{id}', 'RatingController@show')->name('posts.show');



=======
Route::resource('technicians','TechnicianregisterController');
//Route::get('registeroperator/create','AdminregisterController@create');
//Route::post('registeroperator','AdminregisterController@store');
>>>>>>> parent of 786cd82... first commit


Route::group(['middleware' => 'disablepreventback'],function(){
	Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::match(['get','post'],'/regoperator', 'AdminregController@usersave')->name('regoperator');
    Route::resource('complains','ComplainsController');
    Route::resource('addproducts','AddproductController');
    Route::resource('products','ProductController');
    
    
});
 