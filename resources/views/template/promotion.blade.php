<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            @foreach ($readies as $ready)
            <div class="col-md-9">
                <h2>{{$ready->titre}}</h2>
                <p>{{$ready->texte}}</p>
            </div>
            @endforeach
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="{{route('contact')}}" class="site-btn btn-2">Browse</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->