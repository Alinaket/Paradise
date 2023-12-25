<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/paradise.css')}}">
    <link rel="stylesheet" href="{{asset('css/recet.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/adaptation.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="{{asset('img/logo.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img/logo.ico')}}" type="image/x-icon">
    <title>@yield('title', 'Paradise')</title>
</head>
<body>
<div class="contact none">
    <div class="icon">
        <span class="x" onclick="contact_block(2)"><i class="fa-solid fa-x"></i></span>
    </div>
    <div class="img_logo">
        <img src="{{asset('../img/logo.png')}}" alt="">
    </div>
    <h2>контакт для зворотнього зв’язку</h2>
    <div class="input">
        <div class="contact_input">
            <form action="" class="flex">
                <label for="">
                    <p>Ім’я <span>*</span></p>
                    <input type="text">

                    <div class="hr"></div>

                </label>

                <label for="">
                    <p>Ел.адреса <span>*</span></p>
                    <input type="text">

                    <div class="hr"></div>

                </label>
                <label for="">
                    <p>Призвіще <span>*</span></p>
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
        <div class="contact_input_2">
            <form action="">
                <label for="">
                    <p>Тема</p>
                    <input class="subject" type="text">
                    <div class="hr"></div>
                </label>
                <label for="">
                    <textarea class="height" placeholder="Введіть своє повідомлення тут..." name="" id="" cols="30"
                              rows="10"></textarea>
                    <div class="hr"></div>
                </label>
            </form>
        </div>
    </div>
    <div class="button">
        <button>Надіслати</button>
    </div>
</div>


<div class="nav">
    <div class="content_wrapper">
        <div class="img_logo">
            <a href="{{route("paradise")}}"><img src="{{asset('../img/logo.png')}}" alt=""></a>
            <div class="menu_icon">
                <span onclick="open_menu_mob()"><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>
        <div class="container_location">
            <div class="input input_location">
                <div class="icon">
                    <img src="{{asset("../img/icon_location.png")}}" alt="">
                </div>
                <label for="">
                    <input type="text" onclick="open_input_location(this)" placeholder="Область">
                    <span class="icon"><i class="fa-solid fa-chevron-down"></i></span>
                    <div class="box_location">
                        <div class="wrapper_ul_loc">
                            <ul>
                                @foreach(\App\Models\Location::get() as $item)
                                    <a href="{{route('all_product',['location'=>$item->tag])}}">
                                        <li>{{$item->name}}</li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </label>
            </div>

        </div>
        <div class="container_class">
            <div class="input input_class">
                <div class="icon">
                    <img src="{{asset("../img/icon_glass.png")}}" alt="">
                </div>
                <label for="">
                    <input type="text" onclick="open_input_class(this)" placeholder="Будинок, квартира..">
                    <span class="icon"><i class="fa-solid fa-chevron-down"></i></span>
                    <div class="box_class">
                        <div class="wrapper_ul">
                            <ul>
                                @foreach(\App\Models\ClassHouse::get() as $item)
                                    <a href="{{route('all_product',['location'=>$item->tag])}}">
                                        <li>{{$item->name}}</li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </label>

            </div>

        </div>
        <div class="sort">
            <ul>

                @php
                $arr_lick = [
                    'rent'=>'Оренда',
                    'buy'=>'Продаж',
                    'new_buildings' =>'Новобудови',
                    ]
                @endphp
                @foreach($arr_lick as $key=>$item)
                    @php
                        $class_link = "";
                    if($key === ($type??"")){
                         $class_link = "active";
                    }
                    @endphp
                    <li class="{{$class_link}}"><a href="{{route('all_product_type', ['type'=>$key])}}">{{$item}}</a></li>
                    {{--                        <a href="{{route('all_product')}}" class="button"><li>Всі будинки</li></a>--}}
                @endforeach

            </ul>
        </div>

        <div class="button" onclick="contact_block()">
            <button>Замовити</button>
        </div>
    </div>
</div>

<div class="nav_mobile">
    <div class="content_wrapper">
        <div class="img_logo">
            <a href="{{route("paradise")}}"><img src="{{asset('../img/logo.png')}}" alt=""></a>
            <div class="menu_icon">
                <span onclick="open_menu_mob()"><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>
        <div class="container_location">
            <div class="input input_location">
                <div class="icon">
                    <img src="{{asset("../img/icon_location.png")}}" alt="">
                </div>
                <label for="">
                    <input type="text" onclick="open_input_location(this)" placeholder="Область">
                    <span class="icon"><i class="fa-solid fa-chevron-down"></i></span>
                    <div class="box_location">
                        <div class="wrapper_ul_loc">
                            <ul>
                                @foreach(\App\Models\Location::get() as $item)
                                    <a href="{{route('all_product',['location'=>$item->tag])}}">
                                        <li>{{$item->name}}</li>
                                    </a>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </label>
            </div>

        </div>
        <div class="container_class">
            <div class="input input_class">
                <div class="icon">
                    <img src="{{asset("../img/icon_glass.png")}}" alt="">
                </div>
                <label for="">
                    <input type="text" onclick="open_input_class(this)" placeholder="Будинок, квартира..">
                    <span class="icon"><i class="fa-solid fa-chevron-down"></i></span>
                    <div class="box_class">
                        <div class="wrapper_ul">
                            <ul>
                                @foreach(\App\Models\ClassHouse::get() as $item)
                                    <a href="{{route('all_product',['location'=>$item->tag])}}">
                                        <li>{{$item->name}}</li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </label>

            </div>

        </div>
        <div class="sort">
            <ul>
                <li><a href="{{route('all_product_type', ['type'=>'rent'])}}">Оренда</a></li>
                <li><a href="{{route('all_product_type', ['type'=>'buy'])}}">Продаж</a></li>
                <li><a href="{{route('all_product_type', ['type'=>'new_buildings'])}}">Новобудови</a></li>
                {{--                        <a href="{{route('all_product')}}" class="button"><li>Всі будинки</li></a>--}}
            </ul>
        </div>

        <div class="button" onclick="contact_block()">
            <button>Замовити послугу</button>
        </div>
        <div class="info_mobile">
            <div class="hr">
            </div>
            <div class="info_con_mob">
                <h3>Корисна інформація</h3>
                <ul>
                    <li>Дмитра Донського 2в</li>
                    <li>+38 067 17242 17</li>
                    <li>paradise.an.uz@gmail.com</li>
                    <li><img src="{{asset('../img/Qr_bleak.png')}}" alt="">
                        <p>Instagram</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@yield("content")


<div class="footer">
    <div class="content_wrapper">
        <div class="info_contact">
            <h3>Корисна інформація</h3>
            <ul>
                <li>Дмитра Донського 2в</li>
                <li>+38 067 17242 17</li>
                <li>paradise.an.uz@gmail.com</li>
                <li><img src="{{asset('../img/Qr_code.png')}}" alt="">
                    <p>Instagram</p>
                </li>
            </ul>
        </div>
        <div class="form_contact">
            <form class="container">

                <label for="">
                    <p>Ім’я <span>*</span></p>
                    <input type="text">

                    <div class="hr"></div>

                </label>

                <label for="">
                    <p>Ел.адреса <span>*</span></p>

                    <input type="text">
                    <span class="hr"></span>

                </label>
                <label for="">
                    <p>Призвіще <span>*</span></p>

                    <input type="text">
                    <span class="hr"></span>

                </label>
                <label for="">
                    <p>Телефон <span>*</span></p>

                    <input type="text">
                    <span class="hr"></span>

                </label>
                <label class="sp2" for="">
                    <p>Тема</p>
                    <input class="subject" type="text">
                    <span class="hr"></span>
                </label>
                <label class="sp2" for="">
                    <p>Введіть своє повідомлення тут...</p>
                    <textarea class="height" name="" id="" cols="30"
                              rows="10"></textarea>
                    <span class="hr"></span>
                </label>


            </form>
            <div class="button">
                <button>Надіслати</button>
            </div>
            <div class="hr_end">
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
<script src="{{asset('../js/paradise.js')}}"></script>
<script src="{{asset('../js/product.js')}}"></script>
</body>
</html>
