@extends('layouts.views')

@section('head-title')main - ГеймсМаркет@endsection

@section('last-item')Последние товары@endsection

@section('content')

    <div class="content-main__container">
                    <div class="products-columns">
                        @foreach($game as $item)
                            <div class="products-columns__item">
                                <div class="products-columns__item__title-product"><a href="id={{$item->id}}" class="products-columns__item__title-product__link">{{$item->name}}</a></div>
                                <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="{{$item->picture}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                                <div class="products-columns__item__description"><span class="products-price">{{$item->price}} руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                            </div>
                         @endforeach

                        <!--
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Overwatch</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-2.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Deus Ex: Mankind Divided</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-3.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">World of WarCraft</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-4.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Call of Duty: Black ops II</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-5.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">Batman</a></div>
                            <div class="products-columns__item__thumbnail"><a href="#" class="products-columns__item__thumbnail__link"><img src="img/cover/game-6.jpg" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span class="products-price">400 руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                        -->
                    </div>
                </div>
@endsection

@section('content-footer__container')
    <div class="content-footer__container">
        <ul class="page-nav">
            <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
            <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
            <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
            <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
            <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
            <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
            <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
        </ul>
    </div>
@endsection