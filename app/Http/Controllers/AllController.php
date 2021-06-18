<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Carousel;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Contact;
use App\Models\ContactSujet;
use App\Models\Discover;
use App\Models\Logo;
use App\Models\Photo;
use App\Models\Ready;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\Titre;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        $logo = asset("img/big-logo.png"); 
        $videos = Video::all();
        $carousel = Carousel::all();
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $services9 = Service::InRandomOrder()->limit(9)->get();
        $videos = Video::all();
        $discovers = Discover::all();
        $testimonials = Testimonials::all();
        $team = Team::all();
        $team = Team::where('poste_id', '>', 1)->get();
        $teamC = $team->random(2);
        $ceo = Team::where('poste_id', 1)->get();
        $centre = $ceo->random(1);
        $photos = Photo::all();
        $readies = Ready::all();
        $titres = Titre::all();
        $carousel = Carousel::all();
        // dd($titres);
        // $titreDiscover = Titre::where('id', 1)->get();
        // $titreService = Titre::where('id', 2)->get();
        // $titreTeam = Titre::where('id', 3)->get();
        $titreDiscover = Titre::find(1);
        $titreService = Titre::find(2);
        $titreTeam = Titre::find(3);
        $contacts = Contact::all();
        $sujets = ContactSujet::all();

        return view('home', compact('logo', 'services3', 'services9', 'discovers', 'testimonials', 'team', 'videos', 'teamC', 'ceo', 'centre', 'photos', 'readies', 'contacts', 'titres', 'carousel', 'sujets'));
    }
    public function services(){
        $services3 = Service::InRandomOrder()->limit(3)->get();
        $articles = Article::all();
        $services = Service::paginate(3)->fragment('servicePaginate');
        // $titreDiscover = Titre::where('id', 1)->get();
        // $titreService = Titre::where('id', 2)->get();
        $titres = Titre::all();
        $sujets = ContactSujet::all();
        return view('services', compact( 'services3', 'articles', 'services', 'titres', 'sujets'));
    }
    public function contact(){
        $contacts = Contact::all();
        $sujets = ContactSujet::all();
        return view('contact', compact('contacts', 'sujets'));
    }
    public function blog(){
        $posts = blog::orderByDesc('id')->where('validate',1)->paginate(3);
        $categories = Categorie::all();
        $tags = Tag::all();
        $sujets = ContactSujet::all();
        return view('blog', compact('categories', 'tags', 'posts', 'sujets'));
    }
    public function blogpost(Blog $id){
        $categories = Categorie::all();
        $blog = $id;
        $tags = Tag::all();
        return view('blog-post',  compact('categories', 'blog', 'tags'));
    }
    public function search(Request $request)
    {
        request()->validate([
            "article" => "required",
        ]);

        $q = $request->article;
        $articles = Article::where('titre', 'LIKE', "%{$q}%")->get();
        // return dd($articles[0]->categorie->nom);

        //sidebar
        $categories = Categorie::all();
        $tags = Tag::all();

        $logo = Logo::all();
        //header page
        $url =  url()->current();

        return view('partials.blog.selection', compact('articles', 'categories', 'tags','logo','url'));
    }
    public function categorie(Categorie $id)
    {
        // headerpage
        $url =  url()->current();
        //tags
        $tags = Tag::all();
        //categories
        $categories = Categorie::all();

        $ref = $id;
        //selection categorie
        $posts = Blog::where('categorie_id', $ref->id)->get();

        //logo
        $logo = Logo::all();

        return view('partials.blog.section', compact('url','posts', 'categories', 'tags','logo') );
    }
    public function tag(Tag $id)
    {
        // headerpage
        $url =  url()->current();
        //tags
        $tags = Tag::all();
        //categories
        $categories = Categorie::all();

        $ref = $id;

        //logo
        $logo = Logo::all();

        return view('pages.blog.section', compact('ref','url', 'urlCurrent', 'categories', 'tags', 'logo') );
    }
    // public function dashboard(){
    //     $users =  User::all();
    //     return view('dashboard', compact('profiles'));
    // }
}
