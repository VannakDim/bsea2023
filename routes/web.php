<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Models\About;


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

Route::redirect('/','/en/home');

Auth::routes();

Route::get('/{lang}', function ($lang){
    App::setLocale($lang);
    // dd($lang);
    // return view('index');
});

Route::group(['prefix'=>'{language}'],function(){
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
});


Route::group(['prefix'=>'admin','middleware'=>['auth','isAdmin']], function (){
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('adminhome');
    Route::resource('/user', UserController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/page/about', AboutController::class);
});
