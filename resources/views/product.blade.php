@extends("layouts.app_header")
@section("title", $product->name)
@section("content")
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <div class="order">
        <div class="icon">
            <span><i class="fa-solid fa-x"></i></span>
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
        <div class="content_container">
            <div class="product">
                <div class="all_img">
                    <div class="img">
                        <img
                            src="https://s3-alpha-sig.figma.com/img/b426/a8eb/feea5da9dbba69e67492c981de6f3314?Expires=1703462400&Signature=p20HSY0v9iK7L5fe6OWDdCv21C9Rju1CBjPGQGGix-XaOuMqOB-t172~Prj6~eaYYX5zwSHRXMoKSq8~1V1s0zt5uMKQF59uzSYAFKfkY1qBtVrD4p0yixAWsr-N3c6in8NhAmukDdr8jcKd5jnQvnNG7aHgyup7fs6xRccmP4Cbv7qmeMF3eCPTfDq0kpDPIYtwEtttYF~9VcZjIStNLgjs3-Osq42wgW-teBzyddc4mWij-cVkjfN1QbC4NOnGOKaL0wnog2EYSnUqvlPUcLe8wG9qzQTFaVapjZgNfMFlwQXex93j2iZ7a0eLF9Go2598nNJ87h5dS2YRHFi8~w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt="">
                        <img
                            src="https://s3-alpha-sig.figma.com/img/b426/a8eb/feea5da9dbba69e67492c981de6f3314?Expires=1703462400&Signature=p20HSY0v9iK7L5fe6OWDdCv21C9Rju1CBjPGQGGix-XaOuMqOB-t172~Prj6~eaYYX5zwSHRXMoKSq8~1V1s0zt5uMKQF59uzSYAFKfkY1qBtVrD4p0yixAWsr-N3c6in8NhAmukDdr8jcKd5jnQvnNG7aHgyup7fs6xRccmP4Cbv7qmeMF3eCPTfDq0kpDPIYtwEtttYF~9VcZjIStNLgjs3-Osq42wgW-teBzyddc4mWij-cVkjfN1QbC4NOnGOKaL0wnog2EYSnUqvlPUcLe8wG9qzQTFaVapjZgNfMFlwQXex93j2iZ7a0eLF9Go2598nNJ87h5dS2YRHFi8~w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt="">
                        <img
                            src="https://s3-alpha-sig.figma.com/img/59e9/9a01/60756cda360413d36ea5285e289e7106?Expires=1703462400&Signature=HuQTVPKH2KxnITNrlKmxAty1ZDxiMzf9vOc~QIaNrAv0VldUmJlLPR37MCtjDVuSjENE4udSWYAFPUOJRfzCxqM4QB~6NuZzxjvEtUctTLghJ8IwCG01393xmMvD9GuCfweMJeetAh4wt6GrUDGQ7dYtHVAUEXgBTY3N-9fZYRmqvdifUx4jGHKeULmhXysyAZ4GBCo4GX5tRyJnvUXnHO1LGO8P9vKp-mL1rx2Xt7FwU6eT9sbOlkCIF7sPesBCti6GsApNKQPK1ea2i49kgqrsb8VBXB3iUwOEczLUXHz5FltriIXsNKl329hoO~KKkfhw0UXj94Lqj7-lTKmojw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt="">
                        <img
                            src="https://s3-alpha-sig.figma.com/img/59e9/9a01/60756cda360413d36ea5285e289e7106?Expires=1703462400&Signature=HuQTVPKH2KxnITNrlKmxAty1ZDxiMzf9vOc~QIaNrAv0VldUmJlLPR37MCtjDVuSjENE4udSWYAFPUOJRfzCxqM4QB~6NuZzxjvEtUctTLghJ8IwCG01393xmMvD9GuCfweMJeetAh4wt6GrUDGQ7dYtHVAUEXgBTY3N-9fZYRmqvdifUx4jGHKeULmhXysyAZ4GBCo4GX5tRyJnvUXnHO1LGO8P9vKp-mL1rx2Xt7FwU6eT9sbOlkCIF7sPesBCti6GsApNKQPK1ea2i49kgqrsb8VBXB3iUwOEczLUXHz5FltriIXsNKl329hoO~KKkfhw0UXj94Lqj7-lTKmojw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt="">
                    </div>
                    <div class="title_img">
                        <img
                            src="https://s3-alpha-sig.figma.com/img/eb52/016b/6eff0e7a923f63071b4bcfe4eb14bdf1?Expires=1703462400&Signature=b~UWyq9PplorGlobwrTtFhrmdp-yYQEP0qI3i8mlFjJ0aXMJ3DfjOvF~9n59dytSo6uECQ8fFOvep67IuHFl~jeof~o11p968habZ9e7WCydGWKQHA9C-C7z3RfPjxAwCZJg1XwQbfChQC9X2~GWfgPo4dzhCBLHGqMCHr5hF3IzvIbWQJvVVfMPo~9BJYusWxtRNkv1NmrBmCvINFfqueVYe8H85a-bOdrIfDSTLlXhf-om0c9UEVWJdy8pYLUfdE3w1hdPHUO4MV8-J-jhbZW4zoeY2S8w39XkC3336DfrfNbkYgu6WNfajFF3hgoUlpi8LOaxAV8wEtkvQaoryA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt="">
                    </div>
                </div>
                <div class="text">
                    <h2>{{$product->name}}</h2>
                    <div class="location">
                        <img src="{{asset("../img/location_color.png")}}" alt="">
                        <em>{{$product->address}}</em>
                    </div>
                    <p>{{$product->description}}</p>
                    <div class="border_container">
                        <div class="text_border">
                            <div class="status border">
                                <span>{{$product->type}}</span>
                            </div>

                            <div class="price border">
                                <span>295 000</span>$
                            </div>
                        </div>
                        <div class="button">
                            <button>Придбати</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categories">
                <ul>
                    <li> Окрема спальня</li>
                    <li>Прилягаюча гардеробна кімната</li>
                    <li>Світла ванна кімната</li>
                    <li>Кухня студія з якої наявний вихід на балкон</li>
                    <li>З меблями</li>
                    <li>З технікою</li>
                    <li>Продається</li>
                    <li>Вигідна ціна</li>
                    <li>Площа 52.9 м2</li>
                    <li>Спокійний та тихий район</li>
                    <li>Стильний ремонт</li>
                    <li>Є балкон</li>
                    <li>Світла квартира</li>
                    <li>Двокімнатна квартира</li>
                </ul>
                <div class="location_map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207446.32916008425!2d139.57606058270267!3d35.66841030597444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2zVG9reW8sINCi0L7QutGW0L4sINCv0L_QvtC90ZbRjw!5e0!3m2!1suk!2sua!4v1702411337524!5m2!1suk!2sua"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="app_products">
        <div class="cardList">
            <div class="card">
                <div class="img">
                    <img
                        src="{{asset('https://s3-alpha-sig.figma.com/img/466d/4fc9/beb53e9542c865da486847714fde8a74?Expires=1702857600&Signature=TyyuAnF1G7f6tSJLHa0rEiDJXo9LFEOIfe2wmWM3ifz4d~cm-8esrBF1XbMLjJ5Bbi~2wo9zxytHGSCncS0VE8Zo4B2VeEhFoew4Oe-USDcNbwPDXrTsiO5UC0t3o1gt7J8U9GdndbsoWz0vNGjdmpS12Wx1~4b8xPidOQEyK-6jJvzMnw6rsmSPo1vnmtEP4QfTHeQIoqcuHcOvuqM~ZqegG5LRAF8uj1Hl4uoBvWVYiNwA66iQY2OT1FcrBCjObASxVqZeuWLLJgmogVajlGHNX8-hhjU0yz9E2q9D8MHe9mUkTmNbDZUqPZ6sJ-L7Hqhvb4VfWU7zcw~uTv0j1w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4')}}"
                        alt="">
                </div>
                <div class="text">
                    <h2>Розкішна квартира</h2>
                    <div class="location">
                        <img src="{{asset("../img/location_color.png")}}" alt="">
                        <em>Ужгород</em>
                    </div>
                    <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна, добре
                        освітлена, з панорамними вікнами та краєвидом. Поряд набережна, стадіон, тенісний корт,
                        спортивний
                        комплекс.</p>
                    <div class="border_container">
                        <div class="text_border">
                            <div class="status border">
                                <span>Продаж</span>
                            </div>

                            <div class="price border">
                                <span>295 000</span>$
                            </div>
                        </div>
                        <div class="button">
                            <button>Продаж</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="img">
                    <img
                        src="{{asset('https://s3-alpha-sig.figma.com/img/466d/4fc9/beb53e9542c865da486847714fde8a74?Expires=1702857600&Signature=TyyuAnF1G7f6tSJLHa0rEiDJXo9LFEOIfe2wmWM3ifz4d~cm-8esrBF1XbMLjJ5Bbi~2wo9zxytHGSCncS0VE8Zo4B2VeEhFoew4Oe-USDcNbwPDXrTsiO5UC0t3o1gt7J8U9GdndbsoWz0vNGjdmpS12Wx1~4b8xPidOQEyK-6jJvzMnw6rsmSPo1vnmtEP4QfTHeQIoqcuHcOvuqM~ZqegG5LRAF8uj1Hl4uoBvWVYiNwA66iQY2OT1FcrBCjObASxVqZeuWLLJgmogVajlGHNX8-hhjU0yz9E2q9D8MHe9mUkTmNbDZUqPZ6sJ-L7Hqhvb4VfWU7zcw~uTv0j1w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4')}}"
                        alt="">
                </div>
                <div class="text">
                    <h2>Розкішна квартира</h2>
                    <div class="location">
                        <img src="{{asset("../img/location_color.png")}}" alt="">
                        <em>Ужгород</em>
                    </div>
                    <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна, добре
                        освітлена, з панорамними вікнами та краєвидом. Поряд набережна, стадіон, тенісний корт,
                        спортивний
                        комплекс.</p>
                    <div class="border_container">
                        <div class="text_border">
                            <div class="status border">
                                <span>Продаж</span>
                            </div>

                            <div class="price border">
                                <span>295 000</span>$
                            </div>
                        </div>
                        <div class="button">
                            <button>Продаж</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="img">
                    <img
                        src="{{asset('https://s3-alpha-sig.figma.com/img/466d/4fc9/beb53e9542c865da486847714fde8a74?Expires=1702857600&Signature=TyyuAnF1G7f6tSJLHa0rEiDJXo9LFEOIfe2wmWM3ifz4d~cm-8esrBF1XbMLjJ5Bbi~2wo9zxytHGSCncS0VE8Zo4B2VeEhFoew4Oe-USDcNbwPDXrTsiO5UC0t3o1gt7J8U9GdndbsoWz0vNGjdmpS12Wx1~4b8xPidOQEyK-6jJvzMnw6rsmSPo1vnmtEP4QfTHeQIoqcuHcOvuqM~ZqegG5LRAF8uj1Hl4uoBvWVYiNwA66iQY2OT1FcrBCjObASxVqZeuWLLJgmogVajlGHNX8-hhjU0yz9E2q9D8MHe9mUkTmNbDZUqPZ6sJ-L7Hqhvb4VfWU7zcw~uTv0j1w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4')}}"
                        alt="">
                </div>
                <div class="text">
                    <h2>Розкішна квартира</h2>
                    <div class="location">
                        <img src="{{asset("../img/location_color.png")}}" alt="">
                        <em>Ужгород</em>
                    </div>
                    <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна, добре
                        освітлена, з панорамними вікнами та краєвидом. Поряд набережна, стадіон, тенісний корт,
                        спортивний
                        комплекс.</p>
                    <div class="border_container">
                        <div class="text_border">
                            <div class="status border">
                                <span>Продаж</span>
                            </div>

                            <div class="price border">
                                <span>295 000</span>$
                            </div>
                        </div>
                        <div class="button">
                            <button>Продаж</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
