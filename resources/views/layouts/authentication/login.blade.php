@extends('layouts.authentication.base')
@section('content')
    <div class="app-auth">
        <div class="banner-auth">
            <img src="{{ Vite::asset('resources/image/baner-auth.jpg') }}">
            <form action="{{ route('post.login') }}" method="POST">
                @csrf
                <div class="box-form">
                    <img class="logo-auth" src="{{ Vite::asset('resources/image/logo.png') }}">
                    <div class="item-form">
                        <p>Email:</p>
                        <input type="email" name="email" placeholder="Please input your email">
                        @error('email')
                            <span class="notify-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="item-form">
                        <p>Password:</p>
                        <input type="password" name="password" placeholder="Please input your password">
                        @error('password')
                            <span class="notify-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <a class="link-login" href="{{ route('view.register') }}">Don't have an account? Sign up here</a>
                    @if (session('success'))
                        <span class='notify-success'>{{ session('success') }}</span>
                    @endif
                    @if (session('error'))
                        <span class='notify-error'>{{ session('error') }}</span>
                    @endif
                    <button class="btn-auth">Login</button>
                    <a class="link-forgot" href="">Forgot Password</a>
                </div>
            </form>
        </div>
    </div>
@endsection
