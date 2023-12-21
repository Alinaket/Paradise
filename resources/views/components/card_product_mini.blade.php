@foreach($recommend_house as $item )
    <div class="card">
        <div class="img">
            <img src="{{$item->img}}"
                 alt="">
        </div>
        <div class="text">
            <h2>{{$item->name}}</h2>
            <div class="location">
                <img src="{{asset("../img/location_color.png")}}" alt="">
                <em>{{$item->address}}</em>
            </div>
            <p>{{$item->description}}</p>
            <div class="border_container">
                <div class="text_border">
                    <div class="status border">
                        <span>@if($item->type==1)
                                Продажа
                            @else
                                Покупка
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
