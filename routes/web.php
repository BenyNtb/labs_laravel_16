<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\MailContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

// F R O N T E N D 

Route::get('/', [AllController::class, 'home'])->name('home');
Route::get('/services', [Allcontroller::class, 'services'])->name('services');
Route::get('/contact', [Allcontroller::class, 'contact'])->name('contact');
Route::get('/blog', [Allcontroller::class, 'blog'])->name('blog');
Route::get('/blog-post', [Allcontroller::class, 'blogpost'])->name('blog-post');


//B A C K E N D 

//Dashboard

// Route::get('/admin', function () {
//     return view('/admin/dashboard');
// })->middleware(['auth'])->name('dashboard');

//User
// Route::resource('/admin/user', UserController::class)->middleware('admin');
Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::delete('/admin/user/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');
//Role
Route::put('/update/role/{id}/edit', [RoleController::class, 'update'])->name('role.update');

//Profile
Route::get('/admin/profil', [UserController::class, 'index'])->name('profil.index');

//Home
Route::get('/admin/home', [UserController::class, 'index'])->name('home.index');
Route::get('/admin/home/{id}/edit', [UserController::class, 'edit'])->name('home.edit');

//Service
Route::get('/admin/services', [UserController::class, 'index'])->name('services.index');
Route::get('/admin/services/{id}/delete', [UserController::class, 'destroy'])->name('services.destroy');
Route::put('/update/services/{id}/edit', [UserController::class, 'update'])->name('services.update');

//Mail
Route::post('/mail', [MailContactController::class, 'store'])->name('mail');
Route::post('/mail/newsletter', [NewsletterController::class, 'store'])->name('newsletter');

// Auth
Route::get('labslogin', function () {
    return view('/admin/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('labsregister', function () {
    return view('/admin/welcome');
})->middleware(['auth'])->name('register');

require __DIR__ . '/auth.php';
