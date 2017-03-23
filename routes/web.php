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

Route::get('/', 'HomeController@home');

Route::get('/adminView', function() {
    //
    return view('admin.product-list');
});

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/home', 'HomeController@home');
Route::get('/addProduct', function() {
    //
    return view('admin/add-product');
});
Route::post('/addProduct', 'ProductController@add');