<!-- page section -->
@extends('layouts.index')
@section('content')
    
<div class="page-section spad">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-sm-7 blog-posts">
                @foreach ($posts as $post)
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="{{asset('img/'. $post->image)}}" alt="">
                        <div class="post-date">
                            {{-- $date --}}
                            <h2>{{$post->created_at->format('d')}}</h2>
                            <h3>{{$post->created_at->format('M - y')}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$post->titre}}</h2>
                                <div class="post-meta">
                                    {{-- $categorie --}}
                                    <a href="">{{$post->categorie->nom}}</a>
                                    {{-- tags --}}
                                    <a href="">
                                        @foreach ($post->tags as $tag)
                                        <span href="">{{$tag->nom}},</span>    
                                        @endforeach
                                    </a>
                                    
                                    <a href="">{{count($post->commentaire)}} comments</a>
                                    <a href="{{route('blog-post', $post->id)}}" class="read-more">Read More</a>
                        </div>
                        <p>{{ Str::limit($post->description, 200, '...') }}</p>
                    </div>
                </div>
                
                
                <!-- Pagination -->
                @endforeach
                <div class="page-pagination">
                    {{-- {{$posts->links('vendor.pagination.simple-default')}} --}}
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $categorie)
                            <li><a href="{{route('categorie', $categorie->id)}}">{{$categorie->nom}}</a></li>
                            @endforeach
                            
                    </ul>
                </div>
                
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $tag)
                        <li><a href="">{{$tag->nom}}</a></li>
                            @endforeach
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
@endsection