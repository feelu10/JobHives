<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\LockScreen;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ListingController;



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




// ----------------------------- home  ------------------------------//

Route::get('/', [MainController::class, 'toHome']);

Route::get('/about-us', [MainController::class, 'toAbout']);

Route::get('/contact-us', [MainController::class, 'toContact']);

// Route::group(['middleware'=>'auth'],function()
// {
//     Route::get('home',function()
//     {
//         return view('home');
//     });
//     Route::get('home',function()
//     {
//         return view('home');
//     });
// });

Auth::routes();

// ----------------------------- home dashboard ------------------------------//
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/view/detail/{id}', [App\Http\Controllers\Auth\LoginController::class, 'showDetailView'])->name('detail');


// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login');


// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

// ----------------------------- user profile ------------------------------//
Route::get('profile_user', [App\Http\Controllers\UserManagementController::class, 'profile'])->name('profile_user');
Route::post('profile_user/store', [App\Http\Controllers\UserManagementController::class, 'profileStore'])->name('profile_user/store');

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [App\Http\Controllers\UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [App\Http\Controllers\UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [App\Http\Controllers\UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [App\Http\Controllers\UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [App\Http\Controllers\UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [App\Http\Controllers\UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

Route::get('change/password', [App\Http\Controllers\UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [App\Http\Controllers\UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

// ----------------------------- form staff ------------------------------//
Route::get('form/staff/new', [App\Http\Controllers\FormController::class, 'index'])->middleware('auth')->name('form/staff/new');
Route::post('form/save', [App\Http\Controllers\FormController::class, 'saveRecord'])->name('form/save');
Route::get('form/view/detail', [App\Http\Controllers\FormController::class, 'viewRecord'])->middleware('auth')->name('form/view/detail');
Route::get('form/view/detail/{id}', [App\Http\Controllers\FormController::class, 'viewDetail'])->middleware('auth');
Route::post('form/view/update', [App\Http\Controllers\FormController::class, 'viewUpdate'])->name('form/view/update');
Route::get('delete/{id}', [App\Http\Controllers\FormController::class, 'viewDelete'])->middleware('auth');

// ----------------------------- listing  ------------------------------//
Route::get('/joblists', [App\Http\Controllers\ListingController::class, 'index'])
    ->name('listings.index');

Route::get('/createjob', [App\Http\Controllers\ListingController::class, 'create'])
    ->name('listings.create');

Route::post('/createjob', [App\Http\Controllers\ListingController::class, 'store'])
    ->name('listings.store');

Route::get('/{listing}', [App\Http\Controllers\ListingController::class, 'show'])
    ->name('listings.show');

Route::get('/{listing}/apply', [App\Http\Controllers\ListingController::class, 'apply'])
    ->name('listings.apply');

Route::get('joblists/mylist/{id}', function (\Illuminate\Http\Request $request) {
        $listings = $request->user()->listings;
        return view('mylist', ['listings' => $listings]);
    })->middleware(['auth'])->name('mylist');
    
Route::post('/send-email', 'App\Http\Controllers\ContactController@submitForm')->name('send-email');
