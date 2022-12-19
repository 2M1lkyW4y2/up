@extends("layouts.app")
@section("content")

<div class="container">
    <div class="d-flex align-items-center justify-content-around">
        <h3>О нас</h3>
    </div>
    <div class="flex-column d-flex align-items-center justify-content-center pt-2">
        <img src="\public\tz\logotip.svg" alt="" class="photo pb-3">
        <p class="tagline">ЧИТАЙ И УДОВОЛЬСТВИЕ ОТ ПРОЧТЕНИЯ ПОЛУЧАЙ</p>
        <link rel="stylesheet" href="/public/css/style.css">
    </div>
</div>
<section>
        <div class="d-flex align-items-center justify-content-around">
            <h3>Новинки компании</h3>
        </div>
    <div class="container">
        <div class="d-flex justify-content-center aligh-items-center flex-wrap">
            <div id="carouselExampleCaptions" class="carousel slide w-25 h-25 px-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner ">
                    @foreach($comic as $comi)
                    @if($loop->first)
                    <div class="carousel-item active">
                        <img class="img-fluid age" src="{{$comi->img}}" class="d-block " alt="1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$comi->name}}</h5>
                            <p>{{$comi->price}}</p>
                        </div>
                    </div>
                    @else
                    <div class="carousel-item">
                        <img class="img-fluid age" src="{{$comi->img}}" class="d-block " alt="2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$comi->name}}</h5>
                            <p>{{$comi->price}}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </div>
    </div>
</section>



@endsection