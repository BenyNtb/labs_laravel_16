<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                
            
            <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="{{asset('img/' .$article->image)}}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$article->titre}}</h2>
                        <p>{{$article->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- services card section end-->