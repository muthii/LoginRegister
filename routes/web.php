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

    Route::get('/demo', function () {
       return view('demo');
    });

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/admin', 'HomeController@categories')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin/categories', 'CategoriesController@index')->name('categories-list');

Route::get('/admin/news', 'NewsController@test')->name('news');


Route::get('/admin/categories', function () {
       return view('admin.categories.index');
    });





Route::get('/testhome', 'HomeController@test')-> name('testHome');


Route::get('my-home', 'HomeController@myHome');
Route::get('my-users', 'HomeController@myUsers');

Route::get('users', 'UsersController@index');

Route::get('users-list', 'UsersController@usersList'); 