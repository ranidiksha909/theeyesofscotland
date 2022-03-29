<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/details', 'App\Http\Controllers\WebSettingsController@itemDetails');
Route::get('/privacy-policy', function () {
    return view('privacy');
});
Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/search', function () {
    return view('search');
});

Route::post('search-results','App\Http\Controllers\WebSettingsController@search');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
          if (Auth::check() && Auth::user()->is_admin==1) {
                return view('admin/index');
            }
                else {
                return redirect('/');
            }
    });

// USER ACCESS ROUTES AFTER LOGIN
Route::get('/wishlist', 'App\Http\Controllers\Backend\WhishlistController@index');

});


// ADMIN ACCESS ROUTES AFTER LOGIN
Route::middleware(['web', 'is_admin'])->group(function () {

Route::get('/admin/index', 'App\Http\Controllers\Backend\WebSettingsController@index');

Route::get('/admin/category/index', 'App\Http\Controllers\Backend\CategoryController@index');
Route::get('/admin/category/create', 'App\Http\Controllers\Backend\CategoryController@create');
Route::post('/admin/category/store', 'App\Http\Controllers\Backend\CategoryController@store');
Route::get('/admin/category/edit/', 'App\Http\Controllers\Backend\CategoryController@edit');
Route::post('/admin/category/update', 'App\Http\Controllers\Backend\CategoryController@update');


Route::get('/admin/location/index', 'App\Http\Controllers\Backend\LocationController@index');
Route::get('/admin/location/create', 'App\Http\Controllers\Backend\LocationController@create');
Route::post('/admin/location/store', 'App\Http\Controllers\Backend\LocationController@store');
Route::get('/admin/location/edit/', 'App\Http\Controllers\Backend\LocationController@edit');
Route::post('/admin/location/update', 'App\Http\Controllers\Backend\LocationController@update');


Route::get('/admin/product/index', 'App\Http\Controllers\Backend\ProductController@index');
Route::get('/admin/product/create', 'App\Http\Controllers\Backend\ProductController@create');
Route::post('/admin/product/store', 'App\Http\Controllers\Backend\ProductController@store');
Route::get('/admin/product/edit/', 'App\Http\Controllers\Backend\ProductController@edit');
Route::post('/admin/product/update', 'App\Http\Controllers\Backend\ProductController@update');

});
