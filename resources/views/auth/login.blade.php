@extends('layouts.app')
@section('title', 'Login')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{elixir('assets/css/login.css')}}">
@stop
@section('content')
    <div class="login-container row justify-content-center">
        <div class="col-md-7" style="display: flex;">
            <img src="{{elixir('assets/img/bg/crew2.jpg')}}">
        </div>
        <div class="col-md-5">
            <div class="form">
                <div class="title">
                    <h1>welcome back</h1>
                    <span>Login to continue exploring our services</span>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address Or Username..." required autocomplete="email" autofocus>
                    <input id="password" type="password" placeholder="Enter Password..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="checkbox">
                        <div></div> Remeber Me
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
                    </div>
                    <br>
                    <button type="submit" style="width: -webkit-fill-available;" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection