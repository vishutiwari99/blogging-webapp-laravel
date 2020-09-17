<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
        
//     dd(\DB::table('test')->get());
// });

Route::get('/','App\Http\Controllers\PageController@index');
Route::get("/about","App\Http\Controllers\PageController@about");
Route::get("/services","App\Http\Controllers\PageController@services");



Route::resource('posts','App\Http\Controllers\PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');