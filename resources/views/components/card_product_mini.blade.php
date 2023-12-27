@foreach($recommend_house as $item )
    <div class="card">
        <div class="img">
            <img src="{{$item->title_img->url}}"
                 alt="">
        </div>
        <div class="text">
            <h2>{{$item->name}}</h2>
            <div class="location">
                <img src="{{asset("../img/location_color.png")}}" alt="">
                <em>{{$item->address}}</em>
            </div>
            <div class="description">
                <p>{{$item->description}}</p>
            </div>
            <div class="border_container">
                <div class="text_border">
                    <div class="status border">
                        <span>@if($item->type==1)
                                Продажа
                            @else
                                Оренда
                            @endif</span>
                    </div>
                    <div class="price border">
                        <span>{{$item->price}}$</span>
                    </div>
                </div>
                <a href="{{route('product', ['slug'=>$item->slug])}}" class="button">
                    <button>Детальніше</button>
                </a>

            </div>
        </div>
    </div>

@endforeach
