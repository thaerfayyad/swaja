<?php

use App\Http\Controllers\Dashboard\AchievementController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard\AdminstrativeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



Route::get('/foo', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    Artisan::call('optimize');
    Artisan::call('event:clear');
    Artisan::call('clear-compiled');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('storage:link');
    return 'good';
});

/*******************************Start FrontEnd Routes********************************************* */
Route::get('/', [FrontController::class, 'index'])->name('home');



/*******************************End FrontEnd Routes********************************************* */

/*******************************Start dashboard Routes********************************************* */

Route::prefix('dashboard')->middleware('guest:web')->group(function () {

    Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login-show');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('register', [AuthController::class, 'store'])->name('user.store');
});
Route::prefix('dashboard')->middleware('auth:web')->group(function () {


    Route::get('/',[DashboardController::class,'index'] )->name('dashboard.home');


    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);


    Route::resource('changes', AuthController::class );
    Route::get('resetPassword', [AuthController::class, 'changePassword'])->name('auth.changePassword');




    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});
/*******************************End dashboard Routes********************************************* */
