@extends('layouts.authentication.base')
@section('content')
    <div class="app-auth">
        <div class="banner-auth">
            <img src="{{ Vite::asset('resources/image/baner-auth.jpg') }}">
            <form action="{{ route('post.register') }}" method="POST">
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
                        <p>Name:</p>
                        <input type="text" name="user_name" placeholder="Please input your name">
                        @error('user_name')
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
                    <div class="item-form">
                        <p>Password Confirm:</p>
                        <input type="password" name="password_confirmation"
                            placeholder="Please input your password confirm">
                        @error('password_confirmation')
                            <span class="notify-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <a class="link-login" href="{{ route('view.login') }}">Already have an account? Login here</a>
                    @if (session('error'))
                        <span class='notify-error'>{{ session('error') }}</span>
                    @endif
                    <button class="btn-auth">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
