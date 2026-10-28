<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/awareness', [PageController::class, 'awareness'])->name('awareness');
Route::get('/navigator', [PageController::class, 'navigator'])->name('navigator');
Route::get('/medical-support', [PageController::class, 'medicalSupport'])->name('medical-support');
Route::get('/children', [PageController::class, 'children'])->name('children');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/partnerships', [PageController::class, 'partnerships'])->name('partnerships');
Route::get('/donate', [PageController::class, 'donate'])->name('donate');
Route::get('/impact', [PageController::class, 'impact'])->name('impact');
Route::get('/get-involved', [PageController::class, 'getInvolved'])->name('get-involved');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::post('/volunteer', [PageController::class, 'submitVolunteer'])->name('volunteer.submit');
