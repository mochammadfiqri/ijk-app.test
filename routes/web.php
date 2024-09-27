<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    // Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');
    
    Route::get('/settings/users', [UsersController::class, 'index'])->name('users');
    // Route::get('/settings/users', function () {
    //     return view('pages/settings/account');
    // })->name('account');

    Route::get('/messages', function () {
        return view('pages/messages');
    })->name('messages');  
    
    Route::get('/home', function () {
        return view('pages/homepage');
    })->name('homepage');
    
    Route::get('/utility/roadmap', function () {
        return view('pages/utility/roadmap');
    })->name('roadmap');  
    Route::get('/utility/faqs', function () {
        return view('pages/utility/faqs');
    })->name('faqs');  
    Route::get('/utility/empty-state', function () {
        return view('pages/utility/empty-state');
    })->name('empty-state');  
    Route::get('/utility/404', function () {
        return view('pages/utility/404');
    })->name('404');
    Route::get('/utility/knowledge-base', function () {
        return view('pages/utility/knowledge-base');
    })->name('knowledge-base');
    
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});
