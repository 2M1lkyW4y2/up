@extends("layouts.app")
@section("content")

    <div class="container" id=information>
        <div class="d-flex align-items-center justify-content-around"><h3>О нас</h3></div>
        <div class="d-flex align-items-center justify-content-center pt-5">
        <img src="\public\ТЗ\logo.svg" alt="">
        </div>
    </div>
    <section>
        <div class="container">
            <div class="d-flex">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner age">
                    @foreach($comic as $comi)
                    @if($loop->first)
                    <div class="carousel-item active">
                    <img src="{{$comi->img}}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$comi->name}}</h5>
                        <p>{{$comi->price}}</p>
                    </div>
                    </div>
                    @else
                    <div class="carousel-item">
                    <img src="{{$comi->img}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$comi->name}}</h5>
                        <p>{{$comi->price}}</p>
                    </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
                </div>
            </div>
        </div>
    </section>

@endsection