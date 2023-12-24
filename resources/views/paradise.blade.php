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
            <div class="button" >
                <button onclick="contact_block()">Замовити послугу</button>
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
        <div class="content_wrapper">
            <div class="icon arrow_left" onclick="changeSlide(1)"><span><i class="fa-solid fa-chevron-left"></i></span></div>
            <div class="container">
                <div class="title">
                    <h3>About us</h3>
                </div>
                <div class="text text_slider">
                    <div class="language_uk active">
                        <div class="text">
                            <p>Радо допоможемо Вам не тільки підібрати затишну оселю чи приміщення для успішного бізнесу, а
                                й
                                вдало
                                інвестувати у нерухомість. Значний досвід роботи та велика власна база об’єктів дозволять
                                підібрати
                                найкращі
                                варіанти.</p>

                            <p>Працюємо як у форматі зустрічей, так і у дистанційному форматі з детальним відеооглядом
                                об’єктів.</p>
                        </div>

                        <div class="language">
                            <span>(UK)</span>

                        </div>
                    </div>
                    <div class="language_en">
                        <div class="text">
                            <p>We will be happy to help you not only to choose a cozy home or premises for a successful
                                business,
                                but also to successfully invest in real estate.
                                Considerable work experience and a large own database of objects will allow you to choose
                                the
                                best
                                options.</p>
                            <p> We work both in the format of meetings and in a remote format with a detailed video
                                inspection
                                of
                                objects.</p>
                        </div>
                        <div class="language">
                            <span>(EN)</span>

                        </div>
                    </div>
                </div>

            </div>
            <div class="icon arrow_right" onclick="changeSlide(-1)"><span><i class="fa-solid fa-chevron-right"></i></span></div>

        </div>
    </div>
@stop
