<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{$logo}}"  alt="{{ config('app_name') }}">
            <p id="cartext">
                @foreach ($carousel as $car)
                    @if ($car->principal == 1)
                        {{ $car->titreIntro }}
                    @endif
                @endforeach
            </p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @forelse ($carousel as $item)
            <div class="item  hero-item" data-bg="{{ $item->img }}"></div>
        @empty
            
        @endforelse
        @foreach ($carousel as $item)
            <div class="item  hero-item" data-bg="img/{{$item->img}}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->
