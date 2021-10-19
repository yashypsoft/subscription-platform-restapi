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
Route::apiResource('users', 'UserController');

/*Website Routes */
Route::apiResource('websites', 'WebsiteController');

/* Post Routes */
Route::apiResource('posts', 'PostController');

/* Subscribe */
Route::Post('websites/subscribes', 'WebsiteController@subscribe');
