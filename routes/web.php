<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post(
    '/contact/all/{id}/update',
    'ContactController@updateMessageSubmit'
)->name('contact-update-submit');

Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage')->name('contact-delete');
Route::get('/contact/all/{id}/update', 'ContactController@updateMessage')->name('contact-update');
Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::get('/contact/all/{id}', 'ContactController@ShowOneMessage')->name('contact-data-one');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

