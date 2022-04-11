@extends('layouts.master')

@section('title')
    Trump Merch
@endsection

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="mb-3">{{__('customlang.checkout')}}</h2>
                <hr>
                <div class="checkout-sum">
                    <h4>{{__('customlang.cartTotal')}}:</h4>
                    <h4 class="checkout-price">&nbsp;{{ $total }}€</h4>
                </div>
                <br>
                <div id="charge-error" class="alert alert-danger" {{ !Session::has('error') ? 'hidden' : '' }}>
                    {{ Session::get('error') }}
                </div>
                <form class="needs-validation" action="{{ route('checkout') }}" method="post" id="checkout-form" novalidate>
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" placeholder="Max Mustermann" required name="name">
                            <div class="invalid-feedback" style="width: 100%;">
                                {{__('customlang.nameReq')}}
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">{{__('customlang.address')}}</label>
                        <input type="text" class="form-control" id="address" placeholder="Musterstraße 1" required name="address">
                        <div class="invalid-feedback">
                            {{__('customlang.addReq')}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="card-name">{{__('customlang.cardOwner')}}</label>
                            <input type="text" class="form-control" id="card-name" placeholder="Max Mustermann" required>
                            <div class="invalid-feedback">
                                {{__('customlang.ownerReq')}}
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="card-number">{{__('customlang.cardNumber')}}</label>
                            <input type="text" class="form-control" id="card-number" placeholder="4242424242424242" required>
                            <div class="invalid-feedback">
                                {{__('customlang.numberReq')}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="card-expiry-month">{{__('customlang.expMonth')}}</label>
                            <input type="text" class="form-control" id="card-expiry-month" placeholder="12" required>
                            <div class="invalid-feedback">
                                {{__('customlang.expMonReq')}}
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="card-expiry-year">{{__('customlang.expYear')}}</label>
                            <input type="text" class="form-control" id="card-expiry-year" placeholder="2020" required>
                            <div class="invalid-feedback">
                                {{__('customlang.expYrReq')}}
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="card-cvc">{{__('customlang.cvc')}}</label>
                            <input type="text" class="form-control" id="card-cvc" placeholder="000" required>
                            <div class="invalid-feedback">
                                {{__('customlang.cvcReq')}}
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    {{ csrf_field() }}
                    <button class="btn btn-success btn-lg btn-block" type="submit">{{__('customlang.buy')}}</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection
