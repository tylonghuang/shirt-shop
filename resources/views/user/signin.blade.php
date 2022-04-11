@extends('layouts.master')

@section('content')
    <div class="py-5 px-3">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>{{__('customlang.signIn')}}</h1><br>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('user.signin') }}" method="post">
                    <div class="form-group">
                        <label for="email">{{__('customlang.eMail')}}</label>
                        <input  class="form-control" type="text" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">{{__('customlang.password')}}</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <button class="btn btn-primary" type="submit">{{__('customlang.go')}}</button>
                    {{ csrf_field() }}
                </form>
                <p><small>{{__('customlang.noAcc')}} <a href="{{ route('user.signup') }}">{{__('customlang.noAccSign')}}</a></small></p>
            </div>
            <div class="col-md-3"></div>
        </div>
    <div>
@endsection
