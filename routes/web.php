<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'WelcomeController@index')->name('Welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// USER

Route::get('/viewUser', 'UserController@index')->name('User');
Route::get('/addUser', 'UserController@create')->name('addUser');
Route::post('/storeUser', 'UserController@store')->name('storeUser');
Route::post('/updateUser/{id}', 'UserController@update')->name('updateUser');
Route::get('/deleteUser/{id}', 'UserController@destroy')->name('deleteUser');


// ROLE

Route::get('/viewRole', 'RoleController@index')->name('Role');
Route::get('/addRole', 'RoleController@create')->name('addRole');
Route::post('/storeRole', 'RoleController@store')->name('storeRole');
Route::post('/updateRole/{id}', 'RoleController@update')->name('updateRole');
Route::get('/deleteRole/{id}', 'RoleController@destroy')->name('deleteRole');

// ARTICLE

Route::get('/viewArticle', 'ArticleController@index')->name('Article');
Route::get('/addArticle', 'ArticleController@create')->name('addArticle');
Route::post('/storeArticle', 'ArticleController@store')->name('storeArticle');
Route::get('/editArticle/{id}', 'ArticleController@edit')->name('editArticle');
Route::post('/updateArticle/{id}', 'ArticleController@update')->name('updateArticle');
Route::get('/deleteArticle/{id}', 'ArticleController@destroy')->name('deleteArticle');
Route::get('/showArticle/{id}', 'ArticleController@show')->name('showArticle');
Route::get('/downloadArticle/{id}', 'ArticleController@download')->name('downloadArticle');

//Mon profil

Route::get('/monProfil', 'UserController@create')->name('MyProfil');