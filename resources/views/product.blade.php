@extends("layouts.app_header")
@section("title", $product->name)
@section("content")
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" href="{{asset('css/adaptation_product.css')}}">
    <div class="order none open">
        <div class="icon" onclick="order_block()">
            <span><i class="fa-solid fa-x"></i></span>
        </div>
        <div class="img_logo">
            <img src="{{asset('../img/logo.png')}}" alt="">
        </div>
        <div class="input_order">
            <h2>Замовити послугу</h2>
            <form action="" class="flex">
                <label for="">
                    <p>Ім’я <span>*</span></p>
                    <input type="text">

                    <div class="hr"></div>

                </label>

                <label for="">
                    <p>Прізвище <span>*</span></p>
                    <input type="text">

                    <div class="hr"></div>

                </label>
                <label for="">
                    <p>Ел.адреса <span>*</span></p>
                    <input type="text">

                    <div class="hr"></div>

                </label>
                <label for="">
                    <p>Телефон <span>*</span></p>
                    <input type="text">
                    <div class="hr"></div>

                </label>
            </form>
        </div>
        <div class="check_list">
            <label>
                <h3>оренда</h3>
                <input type="checkbox"/>
            </label>
            <label>
                <h3>продаж</h3>
                <input type="checkbox"/>
            </label>
        </div>
        <div class="button">
            <button>Відправити</button>
        </div>
    </div>
    <div class="content">
        <div class="content_wrapper">
            <div class="product">
                <div class="all_img">
                    <div class="slider_img">
                        @foreach($product->all_img as $item)
                            <div class="img">
                                <img
                                    src="{{$item->url}}"
                                    alt="">
                            </div>
                        @endforeach
                    </div>

                    <div class="title_img img">
                        <img
                            src="{{$product->title_img->url}}"
                            alt="">
                    </div>
                </div>

                <div class="text">
                    <h2>{{$product->name}}</h2>
                    <div class="location">
                        <img src="{{asset("../img/location_color.png")}}" alt="">
                        <em>{{$product->address}}</em>
                    </div>
                    <div class="description">
                            <p>{{$product->description}}</p>
                    </div>
                    <div class="border_container">
                        <div class="text_border">
                            <div class="status border">
                                <span>@if($product->type==1)
                                        Продаж
                                    @else
                                        Оренда
                                    @endif</span>
                            </div>

                            <div class="price border">
                                <span>{{$product->price}}грн</span>
                            </div>
                        </div>
                        <div class="button">
                            <button onclick="order_block()">Придбати</button>
                        </div>
                    </div>
                </div>
                <ul>
                    @foreach($product->tag as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
                <div class="border_container mobile">
                    <div class="text_border">
                        <div class="status border">
                                <span>@if($product->type==1)
                                        Продаж
                                    @else
                                        Оренда
                                    @endif</span>
                        </div>

                        <div class=" border price">
                            <span>{{$product->price}}грн</span>
                        </div>
                    </div>
                    <div class="button">
                        <button onclick="order_block()">Придбати</button>
                    </div>
                </div>
                <div class="location_map">
                    {{--                    <iframe--}}
                    {{--                        src="{{$product->map}}"--}}
                    {{--                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"--}}
                    {{--                        referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13695544.69435517!2d126.54951586965775!3d33.0659738668307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2z0K_Qv9C-0L3RltGP!5e0!3m2!1suk!2sua!4v1703625722648!5m2!1suk!2sua"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


            </div>

        </div>
    </div>
    <div class="app_products ">
        <div class="content_wrapper">
            <div class="cardList">

                @include('components.card_product_mini')
            </div>
        </div>
    </div>

@stop
