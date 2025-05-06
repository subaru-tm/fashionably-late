@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('nav')
<nav>
    <span class="header-nav">
        <form class="form" action="/register" method="get">
            @csrf
            <button class="header-nav__button">register</button>
        </form>
    </span>
</nav>
@endsection

@section('content')
<div class="auth-form">
    <div class="auth-form__heading">
        <p>Login</p>
    </div>
    <div class="auth-form__content">
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form__group">
              <div class="form__group-title">メールアドレス</div>
              <div class="form__group-text">
                <input type="text" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
              </div>
            </div>
            <div class="form__group">
              <div class="form__group-title">パスワード</div>
              <div class="form__group-text">
                <input type="text" name="password" placeholder="例:coachtech1106" />
              </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection