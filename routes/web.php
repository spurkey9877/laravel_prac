<?php

use Illuminate\Support\Facades\Route;

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
    return view('fronted.welcome',['name'=>'Frank']);
});

// Route::get('/{name?}', function ($name="Frank") {
//     return view('fronted.welcome',['name'=>$name]);
// });

Route::get('/index',function(){
    return view('fronted.index');  
})->name('home');

Route::get('/about',function(){
    return view('fronted.about');
})->name('about');

Route::get('/products',function(){
    return view('fronted.products');
})->name('products');

Route::get('/store',function(){
    return view('fronted.store');
})->name('store');
