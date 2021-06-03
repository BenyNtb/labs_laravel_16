<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleBlog;
use App\Models\Categorie;
use App\Models\Discover;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        $logo = Logo::find(1);
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $services9 = Service::InRandomOrder()->limit(9)->get();
        $discovers = Discover::all();
        $testimonials = Testimonials::all();
        $team = Team::all();
        return view('home', compact('logo', 'services3', 'services9', 'discovers', 'testimonials', 'team'));
    }
    public function services(){
        $services3 = Service::InRandomOrder()->limit(3)->get();
        $articles = Article::all();
        $services = Service::paginate(3)->fragment('servicePaginate');
        return view('services', compact( 'services3', 'articles', 'services'));
    }
    public function contact(){
        return view('contact');
    }
    public function blog(){
        $blogs = ArticleBlog::all();
        $blogs3 = Service::paginate(3)->fragment('servicePaginate');
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('blog', compact('blogs', 'blogs3', 'categories', 'tags'));
    }
}
