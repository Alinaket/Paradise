@extends("layouts.app_header")
@section("content")
    <link rel="stylesheet" href="{{asset('../css/all_product.css')}}">
    <link rel="stylesheet" href="{{asset('../css/adaptation_all_product.css')}}">


    <div class="all_product">
        <div class="content_wrapper">
            <div class="cardList">
                @foreach($all_product as $item)
                    <div class="card">
                        <div class="img">
                            <img
                                src="{{asset($item->title_img->url)}}"
                                alt="">
                        </div>
                        <div class="text">
                            <h2>{{$item->name}}</h2>
                            <h3>{{$item->location}} {{$item->classHouse}}</h3>
                            <div class="location">
                                <img src="{{asset("../img/location_color.png")}}" alt="">
                                <em>{{$item->address}}</em>
                            </div>
                            <p>{{$item->description}}</p>
                            <div class="border_container">
                                <div class="text_border">
                                    <div class="status border">
                                        <span>@if($item->type==1)
                                                Продаж
                                            @else
                                                Купівля
                                            @endif</span>
                                    </div>

                                    <div class="price border">
                                        <span>{{$item->price}}</span>$
                                    </div>
                                </div>
                                <a href="{{route('product', ['slug'=>$item->slug])}}" class="button">
                                    <button>@if($item->type==1)
                                            Продаж
                                        @else
                                            Купівля
                                        @endif</button>
                                </a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="button">
                <button>Більше</button>
            </div>
        </div>

@stop
