<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PostController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');



Route::get('admin/posts/create', 'App\Http\Controllers\PostController@create')->name('admin.posts.create');

Route::post('admin/posts/store', 'App\Http\Controllers\PostController@store')->name('admin.posts.store');

Route::get('admin/posts/index', 'App\Http\Controllers\PostController@index')->name('admin.posts.index');

Route::get('admin/posts/comment', 'App\Http\Controllers\PostController@comment')->name('admin.posts.comment');

Route::get('admin/posts/commentstore', 'App\Http\Controllers\PostController@commentstore')->name('admin.posts.commentstore');