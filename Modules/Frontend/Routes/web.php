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

Route::prefix('')->group(function() {
    Route::get('/', 'FrontendController@index');
    Route::get('/about', 'FrontendController@about');
    Route::get('/article', 'FrontendController@article');
    Route::get('/article-detail', 'FrontendController@articleDetail');
    Route::get('/contact', 'FrontendController@contact');
    Route::get('/podcast-detail', 'FrontendController@podcastDetail');
    Route::get('/podcast', 'FrontendController@podcast');
    Route::get('/wonewith-detail', 'FrontendController@wonewithDetail');
    Route::get('/wonewith', 'FrontendController@wonewith');
    Route::get('/event-detail', 'FrontendController@eventDetail');
    Route::get('/event', 'FrontendController@event');
    Route::get('/policy', 'FrontendController@policy');
});
