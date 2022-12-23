<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return redirect()->route('login');
//     return view('fe.index');
// });

Route::controller(App\Http\Controllers\FrontendController::class)->prefix('')->name('fe.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/news', 'news')->name('news');
    Route::get('/detail_news', 'detail_news')->name('detail_news');
    Route::get('/contact', 'contact')->name('contact');
});

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => true,
    'reset'    => true,   // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::controller(App\Http\Controllers\Admin\RoleController::class)->prefix('roles')->name('roles.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/list', 'list')->name('list');
        Route::post('/show', 'show')->name('show');
        Route::post('/store', 'store')->name('created');
        Route::post('/update', 'update')->name('updated');
        Route::post('/delete', 'destroy')->name('deleted');
    });

    Route::controller(App\Http\Controllers\Admin\PermissionController::class)->prefix('permissions')->name('permissions.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/list', 'list')->name('list');
        Route::post('/show', 'show')->name('show');
        Route::post('/store', 'store')->name('created');
        Route::post('/update', 'update')->name('updated');
        Route::post('/delete', 'destroy')->name('deleted');
    });

    Route::controller(App\Http\Controllers\Admin\UserController::class)->prefix('users')->name('users.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/list', 'list')->name('list');
        Route::post('/show', 'show')->name('show');
        Route::post('/store', 'store')->name('created');
        Route::post('/update', 'update')->name('updated');
        Route::post('/delete', 'destroy')->name('deleted');
    });

    Route::prefix('setting')->name('setting.')->group(function() {
        Route::resource('website', App\Http\Controllers\Admin\WebController::class);
        Route::resource('terms-of-service', App\Http\Controllers\Admin\TermsOfServiceController::class);
        Route::resource('privacy-policy', App\Http\Controllers\Admin\PrivacyPolicyController::class);
    });
});

Route::get('switch_language/{language}', function ($lang) {
    if (! in_array($lang, config('app.available_locales'))) {
        abort(400);
    }
    // Save locale to session.
    request()->session()->put('lang', $lang);
    return redirect()->back();
})->name('switch_language');
