<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|https://powerofterritory.ru/calendar/
*/

Route::get('/', [\App\Http\Controllers\Web\IndexController::class, 'index'])->name('home');

Route::get('/tour', [\App\Http\Controllers\Web\TourController::class, 'index'])->name('tour');
Route::get('/tour/{slug}', [\App\Http\Controllers\Web\TourController::class, 'get'])->name('get_tour');

Route::get('/page/{id}', [\App\Http\Controllers\Web\PageController::class, 'index'])->name('get_page');

Route::get('/post', [\App\Http\Controllers\Web\PostController::class, 'index'])->name('post');
Route::get('/post/{category}', [\App\Http\Controllers\Web\PostController::class, 'category'])->name('get_category');
Route::get('/post/{category}/{slug}', [\App\Http\Controllers\Web\PostController::class, 'get'])->name('get_post');

Route::get('/order_tour/{id}', [\App\Http\Controllers\Web\OrderTourController::class, 'index'])->name('order_tour');
Route::post('/order_tour_form', [\App\Http\Controllers\Web\OrderTourController::class, 'orderTourForm'])->name('order_tour_form');

Route::post('/comment_form', [\App\Http\Controllers\Web\CommentController::class, 'commentForm'])->name('comment_form');

Route::get('/gallery', [\App\Http\Controllers\Web\GalleryController::class, 'index'])->name('gallery');

Route::get('/news', [\App\Http\Controllers\Web\NewsController::class, 'index'])->name('news');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

