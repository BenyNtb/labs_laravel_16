@extends('layouts.index')
@section('content')
<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">

                {{-- @switch($route)
                @case(" search")
                <p>Searching post : {{ $x }} </p>
                <ul>
                    @forelse ($results as $art)
                    <li><a href="{{ route('blog.showart', $art->id) }}">{{ $art->titre }}</a></li>
                    @empty
                    <li>Results not found</li>
                    @endforelse
                </ul>
                @break
                @case(" articles") --}}
                <div class="single-post">
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->titre }}">
                            <div class="post-date">
                                <h2>{{ $blog->created_at->format('d') }} </h2>
                                <h3>{{ $blog->created_at->format('M') . ' ' . $blog->created_at->format('Y') }}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{ $blog->titre }}</h2>
                            <div class="post-meta">
                                <a
                                    href="{{ route('blog-post', $blog->categorie->nom) }}">{{ $blog->categorie->nom }}</a>
                                <a href="">
                                    @forelse ($blog->tags as $tag)
                                    <a style="all:unset;"
                                        href="{{ route('blog-post', $tag->nom) }}">#{{ $tag->nom }}</a>
                                    @empty
                                    <span>No tag</span>
                                    @endforelse
                                </a>
                                <a href="">{{ count($blog->commentaire) }} Comments</a>
                            </div>
                            <p>{{ $blog->description }} </p>
                        </div>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="{{ asset($blog->user->image) }}"
                                alt="{{ $blog->user->nom . ' ' . $blog->user->prenom }}" style="max-height:117px;">
                        </div>
                        <div class="author-info">
                            <h2>{{ $blog->user->nom . ' ' . $blog->user->prenom }}, <span>Author</span></h2>
                            <p>{{ $blog->user->description }} </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    {{-- <div class="comments">
                        <h2>Comments ({{ count($blog->commentaire) }})</h2>
                        <ul class="comment-list">
                            @forelse ($blog->commentaires as $commentaire)
                            @if ($loop->iteration >= 10) @break
                            @endif

                            @if ($commentaire->valide == 1)
                            <li>
                                <div class="commetn-text">
                                    <h3>{{ $commentaire->auteur }} |
                                        {{ $commentaire->created_at->format('d M, Y') }} | <a href="#leavecom"
                                            class="replytocom" data-target="{{ $commentaire->auteur }}">Reply</a></h3>
                                    <p>{{ $commentaire->message }}</p>
                                </div>
                            </li>
                            @endif
                            @empty
                            <li>No comment</li>
                            @endforelse

                        </ul>
                    </div> --}}
                    <!-- Commert Form -->
                    {{-- <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2 id="leavecom">Leave a comment</h2>
                            <form class="form-class" method="POST" action="{{ route('blog.addcom', $id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name"
                                            value="{{ old('name') }}" required>
                                        <br />
                                        @error('name')
                                        <span class="text-danger my-5">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" placeholder="Your email"
                                            value="{{ old('email') }}" required>
                                        <br />
                                        @error('email')
                                        <span class="text-danger my-5">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="message" id="addcomment" placeholder="Message"
                                            style="resize:none!important;">{{ old('message') }}</textarea> --}}

                                        {{-- <p><span id="count"></span> / 200</p> --}}

                                        @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br />
                                        <button class="site-btn" name="subaddcom">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- @break
                @case(" categories")
                <p>{{ count($categ) }} Result(s) of search for categorie: {{ $categorie }} </p>

                @forelse ($categ as $cat)
                <p>Categorie: <u>{{ $cat->nom }}</u> | Articles : {{ count($cat->article) }}</p>
                <ul>
                    @forelse ($cat->article as $art)
                    <li><a href="{{ route('blog.showart', $art->id) }}">{{ $art->titre }}</a></li>
                    @empty
                    <li>No categorie available for this categorie.</li>
                    @endforelse
                </ul>
                @empty
                <p>No categorie for this search.</p>
                @endforelse
                @break
                @case(" tags")
                <p>{{ count($results) }} Result(s) of search for tag: {{ $tag }} </p>
                <ul>
                    @forelse ($results as $taag)
                    @forelse ($taag->article as $art)
                    <li><a href="{{ route('blog.showart', $art->id) }}"> {{ $art->titre }} </a></li>
                    @empty
                    <li>No article for this tag </li>
                    @endforelse
                    @empty
                    <li>No articles available for this tag</li>
                    @endforelse
                </ul>
                @break
                @default
                <p>Erreur 404: page not found. <a href="{{ route(redirect()->back()) }}">Go back </a></p>
                @endswitch --}}

            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar" style="position:sticky; top:50px;">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="{{ route('blog.search') }}" class="search-form" method="GET">
                        <input type="text" placeholder="Search" name="q">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        {{-- Recherche par categorie --}}
                        {{-- @forelse ($cats as $cat)
                        <li><a href="{{ route('blog.showcat', $cat->nom) }}">{{ $cat->nom }}</a></li>
                        @if ($loop->iteration >= 7) @break
                        @endif
                        @empty
                        <p>No categorie</p>
                        @endforelse --}}
                    </ul>
                </div>
                <!-- Single widget -->
                {{-- <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag"> --}}
                        {{-- Recherche par tag --}}
                        {{-- @forelse ($tags as $tag)
                        <li><a href="{{ route('blog.showtag', $tag->nom) }}">{{ $tag->nom }}</a></li>
                        @if ($loop->iteration >= 7)
                        @break
                        @endif
                        @empty
                        <p>No tags</p>
                        @endforelse
                    </ul>
                </div> --}}

            </div>
        </div>
    </div>
</div>
<!-- page section end-->
@endsection