@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('nav')
<nav>
    @if (Auth::check())
    <span class="header-nav">
        <form class="form" action="/logout" method="post">
            @csrf
            <button class="header-nav__button">logout</button>
        </form>
    </span>
    @endif
</nav>
@endsection

@section('content')
<div class="admin__content">
  <div class="admin__heading">
      <p>Admin</p>
  </div>
  <div class="search">
    <form class="search-form" action="/admin/search" method="post">
        @csrf
        <span class="search-form__item">
            <input class="search-form__item-text" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ old('last_name') }}" />
            <select class="search-form__item-select--gender" name="gender">
                <option value="" selected>性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <select class="search-form__item-select--category-id" name="category_id">
                <option value="" selected>お問い合わせの種類</option>
                <option value="1">商品のお届けについて</option>
                <option value="2">商品の交換について</option>
                <option value="3">商品トラブル</option>
                <option value="4">ショップへのお問い合せ</option>
                <option value="5">その他</option>
            </select>
            <input class="search-form__item-date" type="date" name="created_at" />
        </span>
        <span class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
        </span>
        <div class="form__error">
            <!-- 後で -->
        </div>
    </form>
    <form class="search-reset" action="/admin" method="get">
        @csrf
        <span class="search-reset__button">
            <button class="search-reset__button-submit" type="submit">リセット</button>
        </span>
    </form>
  </div>
  <span class="export">
    <form class="export-form">
        <span class="export-form__button">
            <button class="export-form__button-submit">エクスポート</button>
        </span>
    </form>
  </span>

{{--    検索条件とページネーションの連結が上手くできないため、コメントアウト --}}
{{--    {{ $contacts->appends(request()->input())-links() }} --}}
{{--    {{ $contacts->links() }} --}}

  <?php
  $i = 0;
  ?>

  <div class="contact-table">
    <table class="contact-table__inner">
        <tr class="contact-table__row">
            <th class="contact-table__header">
                <span class="contact_table__header-span">お名前</span>
                <span class="contact_table__header-span">性別</span>
                <span class="contact_table__header-span">メールアドレス</span>
                <span class="contact_table__header-span">お問い合わせの種類</span>
                <span class="contact_table__header-span"></span>
            </th>
        </tr>
        @foreach($contacts as $contact)
          <?php
          $i++;
          ?>
        <tr class="contact-table__row">
            <td class="contact-table__item">
                <span class="contact-table__item-span">{{ $contact['last_name'] . " " . $contact['first_name'] }}</span>
                <span class="contact-table__item-span">
                    @switch ($contact['gender'])
                      @case("1")
                        <span>男性</span>
                      @break
                      @case("2")
                        <span>女性</span>
                      @break
                      @case("3")
                        <span>その他</span>
                      @break
                    @endswitch
                </span>
                <span class="contact-table__item-span">{{ $contact['email'] }}</span>
                <span class="contact-table__item-span">
                    @switch ($contact['category_id'])
                      @case("1")
                        <span>商品のお届けについて</span>
                      @break
                      @case("2")
                        <span>商品の交換について</span>
                      @break
                      @case("3")
                        <span>商品トラブル</span>
                      @break
                      @case("4")
                        <span>ショップへのお問い合わせ</span>
                      @break
                      @case("5")
                      <span>その他</span>
                      @break
                    @endswitch
                </span>
                <span class="contact-table__item-span">
                  <form class="contact-table__item-button">
                    @csrf
                    <button class="contact-table__item-button--detail" type="button" data-toggle="modal" data-target="#modal<?= $i ?>">詳細</button>
                    <div class="detail-modal" id="modal<?= $i ?>" tabindex="-1" role="daialog" aria-labelledby="label1" aria-hidden="true">
                        <table class="detail-modal__table">
                            <tr class="detail-modal__table-row">
                                <th class="detail-modal__table-header">お名前</th>
                                <td class="detail-modal__table-item">{{ $contact['last_name'] . " " . $contact['first_name'] }}</td>
                            </tr>
                        
                        </table>
                    </div>
                  </form>
                </span>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>

@endsection