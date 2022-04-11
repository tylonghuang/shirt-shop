@extends('layouts.master')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>{{__('customlang.myProfile')}}</h2>
                <hr>
                <h4>{{__('customlang.prevPurchases')}}</h4>
                @foreach($orders as $order)
                    <div class="py-3">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach($order->cart->items as $item)
                                        <li class="list-group-item">
                                            <span class="badge badge-success">€{{ $item['price'] }}</span>
                                            {{ $item['item']['title'] }} | {{ $item['qty'] }} Shirts
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer checkout-sum">
                                <h5>{{__('customlang.cartTotal')}}:</h5>
                                <h5 class="checkout-price">&nbsp;{{ $order->cart->totalPrice }}€</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-2"></div>
        </div>
    <div>
@endsection
