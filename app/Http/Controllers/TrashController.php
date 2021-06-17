<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index() {
        $posts = Blog::where('trash', 1)->get();
        return view('admin.pages.trash', compact('posts'));
    }

    public function recupArticle(Blog $id) {
        $post = $id;
        $post->trash = 0;
        $post->save();
        return redirect()->back()->with('success', 'Article récupéré');
    }

    public function deleteArticle(Blog $id)
    {
        $post = $id;
        $tagposts = BlogTag::where('blog_id', $post->id)->get();
        foreach ($tagposts as $tagpost) {
            $tagpost->delete();
        }
        $comments = Commentaire::where('blog_id', $post->id)->get();
        foreach ($comments as $comment) {
            $comment->delete();
        }
        $post->delete();
        return redirect()->back()->with('success', 'Article supprimé');
    }

    public function trashArticle(Blog $id)
    {
        $post = $id;
        $post->trash = 1;
        $post->save();
        return redirect()->back()->with('success', 'Article déplacé dans la corbeille');
    }
}
