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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="contact">
    <div class="icon">
{{--        <a href="{{route("paradise")}}"><span><i class="fa-solid fa-x"></i></span></a>--}}

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
<div class="box_location">
    <ul>
        <li class="none">Вінницька</li>
        <li class="none">Волинська</li>
        <li class="none">Дніпропетровська</li>
        <li class="none">Донецька</li>
        <li class="none">Житомирська</li>
        <li class="none">Закарпатська</li>
        <li>Запорізька</li>
        <li>Івано-Франківська</li>
        <li>Київська</li>
        <li>Кіровоградська</li>
        <li>Луганська</li>
        <li>Львівська</li>
        <li class="none">Миколаївська</li>
        <li class="none">Одеська</li>
        <li class="none">Полтавська</li>
        <li class="none">Рівненська</li>
        <li class="none">Сумська</li>
        <li class="none">Тернопільська</li>
        <li class="none">Харківська</li>
        <li class="none">Херсонська</li>
        <li class="none">Хмельницька</li>
        <li class="none">Хмельницька</li>
        <li class="none">Черкаська</li>
        <li class="none">Чернівецька</li>
        <li class="none">Чернігівська</li>
    </ul>
</div>
<div class="box_class">
    <ul>
        <li>Чотирикімнатні</li>
        <li>Трикімнатні</li>
        <li>Двокімнатні</li>
        <li>Однокімнатні</li>
        <li>Будинки</li>
        <li>Новобудови</li>
        <li>Новобудови Львів</li>
        <li>Оренда Комерція</li>
        <li>Оренда житло</li>
    </ul>
</div>
<div class="nav">
    <div class="content_wrapper">
        <div class="img_logo">
            <img src="{{asset('../img/logo.png')}}" alt="">
        </div>
        <div class="input input_location">
            <div class="icon">
                <img src="{{asset("../img/icon_location.png")}}" alt="">
            </div>
            <label for="">
                <input type="text" placeholder="Область">
            </label>
            <span><i class="fa-solid fa-chevron-down"></i></span>
        </div>
        <div class="input input_class">
            <div class="icon">
                <img src="{{asset("../img/icon_glass.png")}}" alt="">
            </div>
            <label for="">
                <input type="text" placeholder="Будинок, квартира..">
            </label>
        </div>
        <ul>
            <li>Оренда</li>
            <li>Продаж</li>
            <li>Новобудови</li>
        </ul>
        <div class="button">
            <button>Замовити</button>
        </div>
    </div>
</div>


@yield("content")


<div class="footer">
    <div class="footer_container">
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
            <div class="container">
                <div class="input">
                    <div class="container_input">
                        <form action="" class="flex">
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
                        </form>
                    </div>
                    <div class="container_2">
                        <form action="">
                            <label for="">
                                <p>Тема</p>
                                <input class="subject" type="text">
                                <span class="hr"></span>
                            </label>
                            <label for="">
                                <p>Введіть своє повідомлення тут...</p>
                                <textarea class="height" name="" id="" cols="30"
                                          rows="10"></textarea>
                                <span class="hr"></span>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="button">
                <button>Надіслати</button>
            </div>
        </div>
    </div>

</div>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
</body>
</html>
