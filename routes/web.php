<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
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

Route::get('/login', fn () => redirect()->route('admin.login'))->name('login');

/*
|--------------------------------------------------------------------------
| Admin CMS Routes (/admin on top of domain)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        
        // Facility Directory CMS
        Route::get('/facilities', [AdminController::class, 'facilities'])->name('facilities');
        Route::post('/facilities', [AdminController::class, 'storeFacility'])->name('facilities.store');
        Route::delete('/facilities/{facility}', [AdminController::class, 'deleteFacility'])->name('facilities.delete');

        // Events & Campaigns CMS
        Route::get('/events', [AdminController::class, 'events'])->name('events');
        Route::post('/events', [AdminController::class, 'storeEvent'])->name('events.store');

        // Enquiries & Outreach
        Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('enquiries');
        Route::post('/enquiries/{enquiry}/respond', [AdminController::class, 'markEnquiryResponded'])->name('enquiries.respond');

        // Volunteers Registry
        Route::get('/volunteers', [AdminController::class, 'volunteers'])->name('volunteers');
        Route::post('/volunteers/{volunteer}/contacted', [AdminController::class, 'markVolunteerContacted'])->name('volunteers.contacted');

        // Settings & Domain
        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    });
});
