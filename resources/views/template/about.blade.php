<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($services3 as $service)
                    
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-023-flask"></i>
                        </div>
                        <h2>{{$service->sous_titre}}</h2>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                
                
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>
                    @php
                    $titre1 = str_replace('(', '<span>', $titres[0]->discover);
                    $titre2 = str_replace(')', '</span>', $titre1);
                    echo $titre2;
                    @endphp
                </h2>
            </div>
            <div class="row">
                @foreach ($discovers as $discover)
                    
                <div class="col-md-6">
                    <p>{{$discover->description}}</p>
                </div>
                <div class="col-md-6">
                    <p>{{$discover->description}}</p>
                </div>
                @endforeach
            </div>
            <div class="text-center mt60">
                <a href="" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    @foreach ($videos as $video)
                        <div class="col-md-8 col-md-offset-2">
                            <img src="{{asset('img/'.$video->image)}}" alt="">
                            <a href="{{$video->url}}" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->