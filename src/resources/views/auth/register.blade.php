@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__card">
  <div class="register__header">
    <h3 class="register__header-title">Registation</h3>
  </div>
  <div class="register__inner">
    <form class="form" action="/register" method="post">
      @csrf
      <div class="form__group">
        <div class="form__group-icon">
          <span class="form__label--item"></span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="name" value="{{ old('name') }}" />
          </div>
        </div>
      </div>
      <div class="form__error">
        @error('name')
        {{ $message }}
        @enderror
      </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" value="{{ old('email') }}" />
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
        <span class="form__label--item">パスワード</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>
</div>
@endsection