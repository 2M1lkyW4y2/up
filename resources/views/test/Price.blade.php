@extends("layouts.app")
@section("content")


<body>

<div class="row">
        <div class="col">
            <h4 class="text-center"><b>Сортировать по:</d></h4>
            <div class="row pt-2">
            @if ($n == "name" && $nap=="asc")
                <div class="col text-center">
                    <a href="/public/price/year/desc" class="cardsT">Году производства(убывание)</a>
                </div>
            @else
            <div class="col text-center">
                    <a href="/public/price/year/asc" class="cardsT">Году производства(возрастание)</a>
            </div>
            @endif
                        
              @if ($n == "name" && $nap=="asc")
                <div class="col text-center">
                    <a href="/public/price/name/desc" class="cardsT">Наименованию(убывание)</a>
                </div>
              @else
              <div class="col text-center">
                    <a href="/public/price/name/asc" class="cardsT">Наименованию(возрастание)</a>
                </div>
              @endif

                <div class="col text-center">
                    <a href="/public/price" class="cardsT">Цене</a>
                </div>
            </div>
        </div>
        <div class="col">
            <h4 class="text-center pt-3"><b>Фильтровать по:</d></h4>
            <div class="row pt-2">
            @if ($n == "name" && $nap=="asc")
                <div class="col text-center">
                    <a href="/public/price/publisher" class="cardsT">Marvel</a>
                </div>
            @else
            <div class="col text-center">
                    <a href="/public/price/publisher" class="cardsT">Marvel</a>
            </div>
            @endif
                        
              @if ($n == "name" && $nap=="asc")
                <div class="col text-center">
                    <a href="/public/price/publisher" class="cardsT">DC</a>
                </div>
              @else
              <div class="col text-center">
                    <a href="/public/price/publisher" class="cardsT">DC</a>
                </div>
              @endif

                <div class="col text-center">
                    <a href="/public/price" class="cardsT">Other</a>
                </div>
            </div>
        </div>
        <!-- <div class="col pt-3">
            <h4 class="text-center"><b>Фильтр по:</b></h4>
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
        </div> -->
    </div>



       <!-- Новость --><div class="news-wrap col">
            <div class="news-item">

<div class="row pt-3">
@foreach($comic as $com)
     
    <div class="container col col-md-4 mt-3 mb-3 cards">
        <div class="card">       

        
              <h2 class="news-item-title bold"> <b class="mx-3">{{$com->name}} </b></h2>
              <p class="mx-3">{{$com->year}}</p> 
              <div class="news-img-item" style="text-align:center;">
            <img src="{{$com->img}}" />
          </div>
          <br>
                <h5 style="text-align:center; ">Цена: <strong>{{$com->price}}</strong></h5>

                <p><a href="page/{{$com->id}}" class="mx-3 more">Подробнее...</a></p>
              </div>
            </div>
          
          <!-- /Новость -->
          @endforeach
          @endsection
    


