<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactSujetController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\MailContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicehomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\VideoController;
use App\Models\Discover;
use App\Models\Icone;
use App\Models\Logo;
use App\Models\Role;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\Titre;
use App\Models\User;
use App\Models\Video;
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
Route::get('/services', [AllController::class, 'services'])->name('services');
Route::get('/blog', [AllController::class, 'blog'])->name('blog');
Route::get('/blog-post', [AllController::class, 'blogp'])->name('blog-post');
// Route::get('/blog/post/{id}', [AllController::class, 'showpost'])->name('blog.show');
Route::get('/contact', [AllController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactSujetController::class, 'store'])->name('objet');
// Search
Route::get('/blog/search/', [AllController::class, 'search'])->name('blog.search');

// Mail 
Route::post('/mail', [MailcontactController::class, 'store'])->name('mail');
Route::post('/mail/newsletter', [NewsletterController::class, 'store'])->name('newsletter');


// b A C K E N D 
Route::middleware(['auth'])->group(function () {
    Route::middleware(['webmaster'])->group(function () {
        // Titres
        Route::get('/admin/index/titre', [DiscoverController::class, 'index'])->name('titre.index');
        Route::get('/admin/index/titre', [DiscoverController::class, 'indexTitre'])->name('titre.index');
        Route::get('/admin/edit/discover/titre/{id}', [DiscoverController::class, 'edittitre'])->name('homediscovertitre.edit');
        Route::put('/admin/update/discover/titre/{id}', [DiscoverController::class, 'updatetitre'])->name('homediscovertitre.update');
        // CRUD PAGE HOME
        Route::get('home/card', function () {
            $cards = Service::paginate(3);
            $icones = Logo::all();
            return view('admin/pages/home/card', compact('cards', 'icones'));
        })->name('homecard.index');
        Route::get('home/card/edit/{id}', [ServicehomeController::class, 'edit'])->name('homecard.edit');
        Route::put('/admin/update/card/{id}', [ServicehomeController::class, 'update'])->name('homecard.update');
        // Discover
        // Route::resource('/admin/discover', DiscoverController::class);
        Route::get('/admin/index/discover', [DiscoverController::class, 'index'])->name('homediscover.index');
        Route::get('/admin/edit/discover/{id}', [DiscoverController::class, 'edit'])->name('homediscover.edit');
        Route::put('/admin/update/discover/{id}', [DiscoverController::class, 'update'])->name('homediscover.update');


        // Video
        Route::get('/admin/index/video', [VideoController::class, 'index'])->name('video.index');
        Route::get('/admin/edit/video/{video}', [VideoController::class, 'edit'])->name('video.edit');
        Route::put('/admin/update/video/{video}', [VideoController::class, 'update'])->name('video.update');

        // Services 
        Route::resource('/admin/service', ServiceController::class);

        // Testimonials: 
        Route::get('/admin/index/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');
        Route::delete('/admin/edit/testimonials/{testimonials}', [TestimonialsController::class, 'destroy'])->name('testimonials.destroy');


        // Newsletter 
        // Route::resource('/admin/newsletter', NewsletterController::class);
        Route::get('/admin/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
        Route::post('homes/newsletter', [NewsletterController::class, "store"])->name('newsletter');

        // Ready
        Route::get('/admin/ready', [ReadyController::class, 'index'])->name('ready.index');
        Route::get('/admin/ready/edit/{ready}', [ReadyController::class, 'edit'])->name('ready.edit');
        Route::put('/admin/ready/update/{ready}', [ReadyController::class, 'update'])->name('ready.update');

        //Role
        Route::get('/admin/role', [RoleController::class, 'index'])->name('role.index');
        Route::get('/admin/role/{role}/edit', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('/admin/role/{role}/update', [RoleController::class, 'update'])->name('role.update');

        // Contact
        Route::get('/admin/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::get('/admin/contact/edit/{contact}', [ContactController::class, 'edit'])->name('contact.edit');
        Route::put('/admin/contact/update/{contact}', [ContactController::class, 'update'])->name('contact.update');

        // Blog
        // Route::resource('/admin/blog', BlogController::class);
        Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blog.store');
        // Route::get('/admin/blog', [BlogController::class, 'index'])->name('blog.index');
        // Route::get('/admin/blog/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
        // Route::put('/admin/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('/admin/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.destroy');

        // Validate
        Route::get('/admin/validate', [ValidateController::class, 'index'])->name('validate.index');
        // Valider un membre
        Route::put('/admin/validation/member/update/{id}', [ValidateController::class, 'updateUser'])->name('validateUserUpdate');
        // Supprimer un membre non-validé
        Route::delete('/admin/validate/user/{id}/delete', [ValidateController::class,'deleteUser'])->name('validateDeleteUser');

        // Article
        Route::put('/admin/validate/update/{id}', [ValidateController::class, 'updateArticle'])->name('validateUpdateArticle');
        // Article corbeille
        Route::put('/admin/trash/article/{id}/', [TrashController::class,'trashArticle'])->name('trashArticle');
        // Recup article corbeille
        Route::put('/admin/recup/article/{id}/', [TrashController::class,'recupArticle'])->name('recupArticle');

        // Commentaires
        Route::post('/blog/article/{id}/comment', [CommentaireController::class, "store"])->name('commentStore');
        // Validation  commentaire
        Route::put('/admin/validation/update/{id}', [CommentaireController::class, 'update'])->name('commentUpdate');
        // Supprimer un commentaire non-validé
        Route::delete('/admin/validate/comment/{id}/delete', [ValidateController::class,'deleteComment'])->name('validateDeleteComment');

    });
    // Route::resource('/admin/user', UserController::class)->middleware('admin');
    Route::get('/admin/user', [UserController::class, 'index'])->name('user.index')->middleware('admin');
    Route::get('/admin/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit')->middleware('admin');
    Route::put('/admin/user/update/{user}', [UserController::class, 'update'])->name('user.update')->middleware('admin');
    Route::delete('/admin/user/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');
});
// Route::get('admin/user/{user}/edit', [UserController::class, 'edit'])->name('membre.edit');
Route::put('admin/user/update/{user}', [UserController::class, 'updateMembre'])->name('membre.update');

// Admin - TRASH
Route::get('/admin/trash', [TrashController::class, 'index'])->middleware(['webmaster'])->name('trash.index');
// Supprimer un article de la corbeille définitivement
Route::delete('/admin/trash/article/{id}/delete', [TrashController::class,'deleteArticle'])->name('deleteArticle');

// CRUD Blog Redacteur
// Route::middleware(['redacteur'])->group(function () {
    Route::get('/admin/blog/index', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/admin/blog/{blog}/show', [BlogController::class, 'show'])->name('blog.show'); 
    Route::get('/admin/blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit'); 
    Route::put('/admin/blog/{blog}/update', [BlogController::class,'update'])->name('blog.update');
// }); 


// Auth
Route::get('/back', function () {
    $user = User::all();
    return view('/admin/dashboard', compact('user'));
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
