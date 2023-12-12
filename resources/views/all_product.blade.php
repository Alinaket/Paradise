@extends("layouts.app_header")
@section("content")
    <link rel="stylesheet" href="{{asset('../css/all_product.css')}}">
    <div class="all_product_container">

        <div class="all_product">
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
                        <p>рЗакрита своя територія , дуже гарне та зручне місце , рядом торговий центер дастор . Дуже
                            зручна локація . Є сигналізація відеонагляд свій власний , інвекторний кондиціонер
                            сигналізація сейф , є підігрів підлоги , в квартирі зимою дуже тепло а літом не жарко, що на
                            сьогоднішній час дуже економна , подвіря будинку озеленене немає пилі...</p>
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
                        <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна,
                            добре
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
                        <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна,
                            добре
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
                        <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна,
                            добре
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
                        <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна,
                            добре
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
                        <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна,
                            добре
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
                        <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна,
                            добре
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
                        <p>розкішна дворівнева квартира в тихому районі міста Ужгорода. Дуже затишна, комфортна,
                            добре
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
    </div>

@stop
