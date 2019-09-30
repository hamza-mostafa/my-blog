<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', function () {
    return TCG\Voyager\Models\Post::all();
});

Route::get('articles/{slug}', function ($slug) {
    return TCG\Voyager\Models\Post::where('slug', $slug)->first();
});
