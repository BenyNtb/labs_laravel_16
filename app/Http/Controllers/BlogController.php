<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Blog::paginate(3); 
        return view('admin.blog.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Blog::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('admin.blog.create', compact('posts', 'categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "image" => ["required"],
            "categorie_id" => ["required"],
        ]);

        $blog = new Blog();
        $request->file('image')->storePublicly('img/', 'public');
        $blog->image = $request->file('image')->hashName();

        $blog->titre = $request->titre;
        $blog->description = $request->description;
        $blog->user_id = Auth::User()->id;
        $blog->categorie_id = $request->categorie_id;

        if (Auth::user()->role_id == 1) {
            $blog->validate = 1;
        } else {
            $blog->validate = 0;
        }
        $blog->trash = 0;
        $blog->save();
        foreach ($request->input('taglist') as $value) {
            $tag = new BlogTag();
            $tag->blog_id = $blog->id;
            $tag->tag_id = $value;
            $tag->save();
        }
        if (Auth::user()->role_id == 2) {
            return redirect()->back()->with('success', 'Votre article a été enregistré');
        } else {
            return redirect()->back()->with('success', 'Votre article a  été envoyé');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(BlogController $Blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $this->authorize('redacteur', $blog);
        $categories = Categorie::all(); 
        $tags = Tag::all();
        $blogtags = Blogtag::all()->where('post_id', $blog->id); 
        return view('admin.blog.edit', compact('blog', 'categories', 'tags', 'blogtags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArticleBlog  $articleBlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $id ){
        $blog = $id;
        

        $request->validate([
            'titre'=>"required",
            'description'=>"required|min:20",
            "image" => "required",
            "categorie_id" => "required",
        ]);

        if ( $request->image != null) {
            Storage::disk('public')->delete('img/', 'public');
            $request->file('image')->storePublicly('img/', 'public');
            $blog->image = $request->file('image')->hashName();
            $blog->save();
        }

        $blog->titre = $request->titre;
        $blog->categorie_id = $request->categorie_id;
        $blog->description = $request->description;
        $blog->save();

        $arttag = BlogTag::where('article_id', $blog->id)->get();
        foreach ($arttag as $item ) {
            $item->delete();
        }
        foreach ($request->tag as $tag) {
            $new = new BlogTag();
            $new->tag_id = $tag;
            $new->article_id = $blog->id;
            $new->save();
        }
        return dd($blog);
        // return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleBlog  $articleBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', "L'article a bien été supprimé");
    }
}
