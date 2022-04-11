@extends('layouts.master')

@section('title')
    Trump Merch
@endsection

@section('content')
    <audio autoplay loop>
        <source src="{{ asset('/assets/anthem.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    @if(Session::has('cart'))
        <div class="py-5 px-3">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <ul class="list-group">
                        @foreach($products as $product)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 align-self-start">
                                        <span class="badge">{{ $product['qty'] }}</span>
                                        <strong>{{ $product['item']['title'] }}</strong>
                                        <span class="badge badge-success">€{{ $product['price'] }}</span>
                                        <img src="{{ asset('/assets/dab.gif') }}" height="20px">
                                    </div>
                                    <div class="col-sm-12 col-md-6 align-self-center shop-buttons">
                                        <a class="btn btn-danger float-right mx-1" type="button" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">
                                            {{__('customlang.cartAll')}}
                                        </a>
                                        <a class="btn btn-outline-danger float-right mx-1" type="button" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">
                                            {{__('customlang.cartOne')}}
                                        </a>
                                    </div>
                                </div>
                                <div class="row"></div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <br>
                    <div class="checkout-sum">
                        <h5>{{__('customlang.cartTotal')}}:</h5>
                        <h5 class="checkout-price">&nbsp;{{ $totalPrice }}€</h5>
                    </div>
                    <hr>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <a href="{{ route('checkout') }}" type="button" class="btn btn-success">{{__('customlang.cartCheck')}}</a>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    @else
        <div class="py-5 px-3">
            <div class="row">
                <div class="col-lg-6">
                    <h2>{{__('customlang.cartEmpty')}}</h2>
                </div>
            </div>
        </div>
    @endif
@endsection
