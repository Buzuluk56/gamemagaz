@extends('layouts.views')

@section('head-title')main - ГеймсМаркет@endsection
@section('last-item')Игры в разделе {{$category}}@endsection

@section('content')

    @foreach($categoryG as $el)
        <div class="products-category__list">
            <div class="products-category__list__item">
                <div class="products-category__list__item__title-product"><a href="#">{{$el->name}}</a></div>
                <div class="products-category__list__item__thumbnail"><a href="#" class="products-category__list__item__thumbnail__link"><img src="{{$el->picture}}" alt="Preview-image"></a></div>
                <div class="products-category__list__item__description"><span class="products-price">400 руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
            </div>
        </div>
    @endforeach
@endsection