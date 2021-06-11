<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('webmaster', Auth::user());
        $video = Video::all();
        return view('admin.pages.home.video', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Video $video)
    {
        // $this->authorize('webmaster', Auth::user());

        // $request->validate([
        //     "icone" => "required",
        //     "soustitre" => "required",
        //     "description" => "required|max:200"
        // ]);
        // $video->image = $request->image; 
        // $video->url = $request->video; 
        // $video->save();
        // return redirect()->route('video.index')->with('success', 'Modification Service effectuée avec succès !'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $videos = Video::find(1);
        $this->authorize('webmaster', Auth::user()); 
        return view('admin.pages.home.video', compact('videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $this->authorize('webmaster', Auth::user());
        $request->validate([
            "lien" => "required",
        ]); 

        if($request->hasFile('url')){
            $request->file('imgvideo')->storePublicly('img/','public');
            $video->url = "img/" . $request->file('imgvideo')->hashName();
        } 
        $video->image  = $request->image; 
        $video->url = $request->url; 
        $video->save(); 

        return redirect()->route('video.index')->with('success', 'Modification de la vidéo effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
