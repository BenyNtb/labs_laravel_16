<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Carousel;
use App\Models\Categorie;
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
        $contacts = Contact::all();

        return view('home', compact('logo', 'services3', 'services9', 'discovers', 'testimonials', 'team', 'videos', 'teamC', 'ceo', 'centre', 'photos', 'readies', 'contacts', 'titres', 'carousel'));
    }
    public function services(){
        $services3 = Service::InRandomOrder()->limit(3)->get();
        $articles = Article::all();
        $services = Service::paginate(3)->fragment('servicePaginate');
        // $titreDiscover = Titre::where('id', 1)->get();
        // $titreService = Titre::where('id', 2)->get();
        $titres = Titre::all();
        return view('services', compact( 'services3', 'articles', 'services', 'titres'));
    }
    public function contact(){
        $contacts = Contact::all();
        $sujets = ContactSujet::all();
        return view('contact', compact('contacts', 'sujets'));
    }
    public function blog(){
        $blogs = Blog::all();
        $blogs3 = Service::paginate(3)->fragment('servicePaginate');
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('blog', compact('blogs', 'blogs3', 'categories', 'tags'));
    }
    public function blogpost(){
        $categories = Categorie::all();
        $articles = Article::all();
        $tags = Tag::all();
        return view('blog-post',  compact('categories', 'articles', 'tags'));
    }
    public function search(Request $request){ 
        if($request->has('x')){
            $x = $request->x; 
            $route = "search"; 
            $cats  = Categorie::all();
            $tags = Tag::all(); 
            $results = Blog::where('titre', 'LIKE', "%" . $x . "%")->get();
            return view('blogshow', compact('route', 'results', 'cats', 'tags','x'));
        }
    }
    // public function dashboard(){
    //     $users =  User::all();
    //     return view('dashboard', compact('profiles'));
    // }
}
