@extends("layouts.app_header")
@section("content")

    <div class="title_screen">
        <div class="content_wrapper">
            <div class="background">
                <img src="{{asset("../img/background_house.png")}}" alt="">
            </div>
            <h1>Надаємо послуги підбору нерухомості в Україні та закордоном.</h1>
            <div class="img_trident">
                <img src="{{asset("../img/trident.png")}}" alt="">
                <p>Будуйте майбутнє разом з нами!</p>
            </div>
            <div class="button" onclick="contact_block()">
                <button>Замовити послугу</button>
            </div>
        </div>
    </div>
    <div class="commodity">
        <div class="content_wrapper">
        <div class="cardList">

                @include('components.card_product_mini')

            </div>
        </div>
    </div>
    <div class="info_company">
        <div class="icon arrow_left"><span><i class="fa-solid fa-chevron-left"></i></span></div>
        <div class="text text_slider">
            <h3>About us</h3>
            <p>Радо допоможемо Вам не тільки підібрати затишну оселю чи приміщення для успішного бізнесу, а й вдало
                інвестувати у нерухомість. Значний досвід роботи та велика власна база об’єктів дозволять підібрати
                найкращі
                варіанти.</p>

            <p>Працюємо як у форматі зустрічей, так і у дистанційному форматі з детальним відеооглядом
                об’єктів.</p>
            <div class="language">
                <span>(UK)</span>

            </div>
        </div>
        <div class="icon arrow_right"><span><i class="fa-solid fa-chevron-right"></i></span></div>
    </div>
@stop
