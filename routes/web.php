<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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
//fornt-end
Route::get('/', function () {
    return view('welcome');
});

Route::get('Product','product@show')->name('product');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login','login@index')->name('login');
Route::post('xacnhan','login@postLogin')->name('auth');
Route::post('register','login@register')->name('register');

//back-end
Route::get('admin','AdminController@index')->name('admin');

//category-product
Route::get('AddCategoryProduct','backend\CategoryProduct@add_category_product')->name('add-category-product');
Route::post('AddCategoryProduct','backend\CategoryProduct@post_add_category_product')->name('post-add-category-product');
Route::get('AllCategoryProduct','backend\CategoryProduct@all_category_product')->name('all-category-products');

////////////////////////////////
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });