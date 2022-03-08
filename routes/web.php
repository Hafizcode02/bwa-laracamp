<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserRole;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
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
    return view('welcome');
})->name('index');

// Socialite Routes
Route::get('sign-in-google', [UserController::class, 'google'])
    ->name('user.login.google');

Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])
    ->name('user.google.callback');

// User Routes
Route::middleware(['auth'])->group(function () {
    //Dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::middleware('ensureUserRole:user')->group(function () {
        // Checkout Routes
        Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
        Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
        Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store');

        // User Dashboard Routes
        Route::prefix('user/dashboard')->namespace('User')->name('user.')->group(function () {
            Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
        });
    });

    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function () {
        Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');

        // Admin Checkout
        Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
