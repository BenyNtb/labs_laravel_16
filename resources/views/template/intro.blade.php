<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{ $logo }}" alt="">
            <p>
                @foreach ($carousel as $car)
                    @if ($car->principal == 1)
                        {{ $car->titre }}
                    @endif
                @endforeach
            </p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carousel as $item)
            <div class="item  hero-item" data-bg="{{ $item->img }}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->
