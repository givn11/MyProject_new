@extends('shop.layouts.fullwidth')

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ env('APP_URL') }}">Home</a></li>
                    <li class="active">Корзина</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                @if(Session::has('cart'))
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image" colspan="2">Товар</td>
                            <td class="price">Цена</td>
                            <td class="quantity">Количество</td>
                            <td class="total">Итог</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="images/cart/one.png" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">{{ $product['item']->title }}</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>{{ $product['price']/$product['qty'] }} руб.</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="{{ route('product.increaseByOne', ['id' => $product['item']->id]) }}"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$product['qty']}}" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href="{{ route('product.reduceByOne', ['id' => $product['item']->id]) }}"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{ $product['price'] }} руб.</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{ route('product.remove', ['id' => $product['item']->id]) }}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="cart_total_price text-right" colspan="5">Общая стоимость: {{ $totalPrice }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-default" href="{{ route('get.checkout') }}">Оформить заказ</a>
                    <a class="btn btn-default" href="{{ route('clear.cart') }}">Очистить корзину</a>
                @else
                    <h1>Ваша корзина пуста</h1>
                @endif
            </div>
        </div>
    </section>
@endsection