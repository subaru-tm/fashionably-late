@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('nav')
<nav>
    <span class="header-nav">
        <form class="form" action="/login" method="get">
            @csrf
            <button class="header-nav__button">login</button>
        </form>
    </span>
</nav>
@endsection

@section('content')
<div class="auth-form">
    <div class="auth-form__heading">
        <p>Register</p>
    </div>

    <div class="auth-form__content">
        <form class="form" action="/register" method="post">
            @csrf
            <div class="form__group">
              <div class="form__group-title">お名前</div>
              <div class="form__group-text">
                <input type="text" name="name" placeholder="例: 山田　太郎" value="{{ old('name') }}" />
              </div>
            </div>
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
            <div class="form__group">
              <div class="form__group-title">パスワード確認用</div>
              <div class="form__group-text">
                <input type="text" name="password_confirmation" />
              </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection