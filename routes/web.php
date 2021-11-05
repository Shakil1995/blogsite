<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('layouts.app');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/check',function(){
echo "check done";
})->name('check')->middleware(('verified'));
