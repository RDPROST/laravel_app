<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\NewsController as NewsController;
use App\Http\Controllers\LoginController as LoginController;
use App\Http\Controllers\CategoryController as CategoryController;
use App\Http\Controllers\AdminController as AdminController;

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
/**
 * Page: Home page
 */
Route::get('/', [HomeController::class,'index'])
    ->name('home::index');

/**
 * Pages: News page
 */
Route::group([
    'prefix' => '/news/',
    'as' => 'news::'
],function (){
    Route::get('',[NewsController::class,'index'])
        ->name('index');

    Route::get('{id}',[NewsController::class,'show'])
        ->name('show');
});

/**
 * Page: Category page
 */
Route::group([
    'prefix' => '/category/',
    'as' => 'category::'
],function (){
    Route::get('',[CategoryController::class,'index'])
        ->name('index');
    Route::get('{id}',[CategoryController::class,'show'])
        ->name('show');
});

/**
 * Page: Category page
 */
Route::group([
    'prefix' => '/admin/',
    'as' => 'admin::'
],function (){
    Route::get('',[AdminController::class,'index'])
        ->name('index');

    Route::get('category',[AdminController::class,'category'])
        ->name('category');

    Route::post('category/create',[AdminController::class,'categoryCreate'])
        ->name('category::create');

    Route::get('news',[AdminController::class,'news'])
        ->name('news');

    Route::post('news/create',[AdminController::class,'newsCreate'])
        ->name('news::create');

});

/**
 * Page: Login page
 */
//Route::get('/login',[LoginController::class,'index'])
//    ->name('login::index');


