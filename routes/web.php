<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminVenueController;
use App\Http\Controllers\AdminOrganizerController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminIngoEventController;
use App\Http\Controllers\AdminCouponController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BuntingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'HomeController@index');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.home');



// Venues
Route::resource('/admin/venue', AdminVenueController::class);

// Organizer
Route::resource('/admin/organizer', AdminOrganizerController::class);

// category
Route::resource('/admin/category', AdminCategoryController::class);

// events
Route::resource('/admin/ingoevent', AdminIngoEventController::class);

// coupon
Route::resource('/admin/coupon', AdminCouponController::class);
// bunting
Route::resource('/admin/bunting', BuntingController::class);

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
