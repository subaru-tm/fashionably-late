@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection


@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <p>Confirm</p>
    </div>
    <table class="confirm-table">
      <form class="form" action="/contacts" method="post">
        @csrf
        <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__text">
               <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
               <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="confirm-table__text">
                @switch ($contact['gender'])
                    @case("1")
                        <input type="text" name="gender_text" value="男性" readonly />
                        @break
                    @case("2")
                        <input type="text" name="gender_text" value="女性" readonly />
                        @break
                    @case("3")
                        <input type="text" name="gender_text" value="その他" readonly />
                        @break
                @endswitch
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}" />
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="confirm-table__text">
               <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header"></th>
            <td class="confirm-table__text">
              <input type="text" name="tel" value="{{ $contact['tel_1'] . $contact['tel_2'] . $contact['tel_3']}}" readonly />
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header"></th>
            <td class="confirm-table__text">
               <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header"></th>
            <td class="confirm-table__text">
               <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__header"></th>
            <td class="confirm-table__text">
              @switch ($contact['category_id'])
                @case("1")
                  <input type="text" value="商品のお届けについて" readonly />
                  @break
                @case("2")
                  <input type="text" name="category_content" value="商品の交換について" readonly />
                  @break
                @case("3")
                  <input type="text" name="category_content" value="商品トラブル" readonly />
                  @break
                @case("4")
                  <input type="text" name="category_content" value="ショップへのお問い合せ" readonly />
                  @break
                @case("5")
                  <input type="text" name="category_content" value="その他" readonly />
                  @break
              @endswitch

              <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" />
            </td>
        <tr class="confirm-table__row">
            <th class="confirm-table__header"></th>
            <td class="confirm-table__text">
               <textarea name="detail" cols="66" rows="5" readonly>{{ $contact['detail'] }}</textarea>
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th> </th>
            <td class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <button class="form__button-correction" type="submit">
                    <a href="/">修正</a>
                </button>
            </td>
        </tr>
      </form>

    </table>
</div>
@endsection