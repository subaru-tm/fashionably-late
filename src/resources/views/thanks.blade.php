@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection


@section('content')
<div class="thanks__content">
    <div class="back-strings">Thank you</div>
    <div class="front-strings">お問い合わせありがとうございました</div>
    <div class="home__button">
        <a class="home__button-link" href="/">HOME</a>
    </div>

</div>
@endsection
