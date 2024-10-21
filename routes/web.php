<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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
function set_active($route)
{

    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active show' : '';
    }

    return Request::path() == $route ? 'active show' : '';
}

Route::fallback(function()
{
    return view('error_page.error');

});


 


Route::get('/', [\App\Http\Controllers\StaticController::class, 'home2'])->name('home');
Route::get('/single', [\App\Http\Controllers\StaticController::class, 'singleNews'])->name('single-news');
Route::get('/single/{slug}', [\App\Http\Controllers\StaticController::class, 'singleNews2'])->name('news-single');
Route::get('/contact', [\App\Http\Controllers\StaticController::class, 'contact'])->name('contact');


Route::get('/login', [\App\Http\Controllers\AuthendicationController::class, 'login'])->name('login');
Route::get('/dashboard', [\App\Http\Controllers\AuthendicationController::class, 'index'])->name('dashboard');
Route::get('/admin_login', [\App\Http\Controllers\AuthendicationController::class, 'admin_login'])->name('admin_login');
Route::get('/admin_logout', [\App\Http\Controllers\AuthendicationController::class, 'admin_logout'])->name('admin_logout');
 

//  category routing
Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::post('/category_store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category_store');
Route::get('/category_show', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category_show');
Route::get('category_edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category_edit');
Route::post('category_update', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category_update');
Route::delete('/category_delete', [\App\Http\Controllers\CategoryController::class, 'delete'])->name('category_delete');

//  user routing
Route::get('/user', [\App\Http\Controllers\UsersController::class, 'index'])->name('user');
Route::post('/user_store', [\App\Http\Controllers\UsersController::class, 'store'])->name('user_store');
Route::get('/user_show', [\App\Http\Controllers\UsersController::class, 'show'])->name('user_show');
Route::get('user_edit', [\App\Http\Controllers\UsersController::class, 'edit'])->name('user_edit');
Route::post('user_update', [\App\Http\Controllers\UsersController::class, 'update'])->name('user_update');
Route::delete('/user_delete', [\App\Http\Controllers\UsersController::class, 'delete'])->name('user_delete');

//  event routing
Route::post('/store-news', [\App\Http\Controllers\EventController::class, 'storeNews'])->name('storeNews');
Route::get('/event', [\App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/event-create', [\App\Http\Controllers\EventController::class, 'createNews'])->name('createNews');
Route::post('/event_store', [\App\Http\Controllers\EventController::class, 'store'])->name('event_store');
Route::get('/event_show', [\App\Http\Controllers\EventController::class, 'show'])->name('event_show');
Route::get('event_edit', [\App\Http\Controllers\EventController::class, 'edit'])->name('event_edit');
Route::post('/event_update', [\App\Http\Controllers\EventController::class, 'update'])->name('event_update');
Route::delete('/event_delete', [\App\Http\Controllers\EventController::class, 'delete'])->name('event_delete');
