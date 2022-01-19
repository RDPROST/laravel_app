<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\NewsController as NewsController;
use App\Http\Controllers\NewsCategoriesController as NewsCategoriesController;
use App\Http\Controllers\LoginController as LoginController;

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

    Route::get('post/{id}',[NewsController::class,'show'])
        ->name('show');

    Route::get('add/',[NewsController::class,'create'])
        ->name('create');
});

/**
 * Pages: Categories page
 */
Route::group([
    'prefix' => '/news/categories/',
    'as' => 'news::categories::'
],function (){
    Route::get('',[NewsCategoriesController::class,'index'])
        ->name('index');

    Route::get('{name}',[NewsCategoriesController::class,'category'])
        ->name('category');
});

/**
 * Page: Login page
 */
Route::get('/login',[LoginController::class,'index'])
    ->name('login::index');
