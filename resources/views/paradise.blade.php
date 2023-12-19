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
            <div class="button">
                <button>Замовити послугу</button>
            </div>
        </div>
    </div>
    <div class="commodity">
        <div class="content_wrapper">
            <div class="cardList">
                @include('components.card_product_mini')
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
        <div class="info_company">
            <div class="icon arrow_left"><span><i class="fa-solid fa-chevron-left"></i></span></div>
            <div class="text">
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
