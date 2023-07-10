@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="card">
  <div class="thanks__inner">
    <div class="thanks__text">
      <h3 class="thanks__message">会員登録ありがとうございます</h3>
    </div>
    <div class="button">
      <button class="login__button"><a href="/login">ログインする<a></button>
    </div>
  </div>
</div>
    