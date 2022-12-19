@extends("layouts.app")
@section("content")


<body>

<div class="row">
        <div class="col">
            <p class="text-center">Сортировать по:</p>
            <div class="row">
            @if ($n == "name" && $nap=="asc")
                <div class="col text-center">
                    <a href="/public/price/year/desc">Году производства(убывание)</a>
                </div>
            @else
            <div class="col text-center">
                    <a href="/public/price/year/asc">Году производства(возрастание)</a>
            </div>
            @endif
                        
              @if ($n == "name" && $nap=="asc")
                <div class="col text-center">
                    <a href="/public/price/name/desc">Наименованию(убывание)</a>
                </div>
              @else
              <div class="col text-center">
                    <a href="/public/price/name/asc">Наименованию(возрастание)</a>
                </div>
              @endif

                <div class="col text-center">
                    <a href="/public/price">Цене</a>
                </div>
            </div>
        </div>
        <div class="col">
            <p class="text-center">Фильтр по:</p>
            <div class="row">
                <div class="col text-center">
                    <a href="/public/categories/Marvel">Marvel</a>
                </div>
                <div class="col text-center">
                    <a href="/public/categories/DC">DC</a>
                </div>
                <div class="col text-center">
                    <a href="/public/categories/Other">Other</a>
                </div>
            </div>
        </div>
    </div>



       <!-- Новость --><div class="news-wrap col">
            <div class="news-item">

<div class="row">
@foreach($comic as $com)
     
    <div class="col col-md-4 mt-3 mb-3">
        <div class="card">       

        
              <h2 class="news-item-title"> {{$com->name}}</h2>
              <p>{{$com->year}}</p> 
              <div class="news-img-item" style="text-align:center;">
            <img src="{{$com->img}}" />
          </div>
          <br>
                <h5 style="text-align:center;">Цена:<strong>{{$com->price}}</strong></h5>

                <p><a href="page/{{$com->id}}">Подробнее...</a></p>
              </div>
            </div>
          
          <!-- /Новость -->
          @endforeach
          @endsection
    


