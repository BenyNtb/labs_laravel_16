<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\MailContactController;
use App\Http\Controllers\NewsletterController;
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

Route::get('/',[AllController::class,'home'])->name('home');
Route::get('/services',[Allcontroller::class,'services'])->name('services');
Route::get('/contact',[Allcontroller::class,'contact'])->name('contact');
Route::get('/blog',[Allcontroller::class,'blog'])->name('blog');
Route::get('/blog-post',[Allcontroller::class,'blogpost'])->name('blog-post');

//B A C K E N D

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
})->middleware(['auth'])->name('dashboard');

// C A R O U S E L 

//Read
// Route::get()
//Edit || Update
// Route::get('/admin')

//Mail
Route::post('/mail', [MailContactController::class, 'store'])->name('mail');
Route::post('/mail/newsletter', [NewsletterController::class, 'store'])->name('newsletter');

require __DIR__.'/auth.php';
