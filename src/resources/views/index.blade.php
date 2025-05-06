@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <p>Contact</p>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content--name">
                    <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}" />
                    <input type="text" name="first_name" placeholder="例: 太郎" />
                </div>
                <div class="form__error">
                    @error('last_name')
                     {{ $message }}
                    @enderror
                    @error('first_name')
                     {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content--radio">
                    <input type="radio" name="gender" value="1" checked>
                    <label>男性</label>
                    <input type="radio" name="gender" value="2">
                    <label>女性</label>
                    <input type="radio" name="gender" value="3">
                    <label>その他</label>
                </div>
                <div class="form__error">
                    @error('gender')
                     {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content--text">
                    <input type="email" name="email" placeholder="例: test@example.com" />
                </div>
                <div class="form__error">
                    @error('email')
                     {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content--tel">
                    <input type="text" name="tel_1" placeholder="080" />
                    <span>-</span>
                    <input type="text" name="tel_2" placeholder="1234" />
                    <span>-</span>
                    <input type="text" name="tel_3" placeholder="5678" />
                </div>
                <div class="form__error">
                    @error('tel_1')
                     {{ $message }}
                    @enderror
                    @error('tel_2')
                     {{ $message }}
                    @enderror
                    @error('tel_3')
                     {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content--text">
                    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" />
                </div>
                <div class="form__error">
                    @error('address')
                     {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
                <span class="form__label--required"></span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content--text">
                    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" />
                </div>
                <div class="form__error">
                    <!-- 該当要件無し -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content--select">
                    <select name="category_id">
                        <option value="" selected="selected">選択してください</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}" >{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('category_id')
                     {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content--text">
                    <textarea class="form__group-content--textarea" name="detail" cols="72" rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                     {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection