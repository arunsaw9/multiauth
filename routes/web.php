<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
});

use App\Http\Controllers\GoogleV3CaptchaController;
 
// Route::get('google-v3-recaptcha', [GoogleV3CaptchaController::class, 'index']);
// Route::post('validate-g-recaptcha', [GoogleV3CaptchaController::class, 'validateGCaptch']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/login','Admin\Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Admin\Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::post('admin/logout', 'Admin\Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
    // Admin Dashboard
    Route::get('dashboard','Admin\AdminController@dashboard')->name('dashboard'); 
});