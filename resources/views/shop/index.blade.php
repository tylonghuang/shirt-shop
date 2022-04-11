@extends('layouts.master')

@section('title')
    Trump Merch
@endsection

@section('content')
    <div class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-container">
                        <iframe style="width:100%;"
                            src="https://www.youtube.com/embed/hrQAU33EZXU?autoplay=1&showinfo=0&controls=0" 
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            @if(Session::has('success'))
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div id="charge-message" class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            </div>
            @endif
            @foreach($products->chunk(4) as $productChunk)
                <div class="row hidden-md-up">
                    @foreach($productChunk as $product)
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card" style="margin-top: 2rem">
                                <img class="card-img-top thumbnail zoom"
                                     src="{{ $product->imagePath }}"
                                     alt="..."
                                >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <p class="card-text description">{{ $product->description }}</p>
                                    <div class="pull-left price">€{{ $product->price }}</div>
                                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right">{{__('customlang.addCart')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
