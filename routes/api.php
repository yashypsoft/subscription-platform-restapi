<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/* User Routes */
Route::resource('users', 'UserController', ['only' => ['index', 'store']]);
Route::get('user/{id}', 'UserController@findOne');


/*Website Routes */
Route::resource('websites', 'WebsiteController', ['only' => ['index', 'store',]]);
Route::get('website/{id}', 'WebsiteController@findOne');

/* Post Routes */
Route::resource('posts', 'PostController', ['only' => ['index', 'store']]);
Route::get('post/{id}', 'PostController@findOne');


/* Subscribe */
Route::Post('websites/subscribes', 'WebsiteController@subscribe');
