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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect()->route('index');
    //return view('welcome');
});

Route::get('inicio', 'Site\VagasController@vagasPublished')->name('index');

Route::get('teste', function () {
    
    return view('testes.index-testes');
    //return view('welcome');
    //return view('site.layouts.floriano-layout');
});








