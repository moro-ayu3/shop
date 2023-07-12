@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="wrapper">
  <div class="card">
    <div class="content-img">
      <img src="./img/sushi.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">仙人</h3>
      <p class="tag">#東京都 #寿司</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/yakiniku.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">牛助</h3>
      <p class="tag">#大阪府 #焼肉</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/izakaya.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">戦慄</h3>
      <p class="tag">#福岡県 #居酒屋</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/italian.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">ルーク</h3>
      <p class="tag">#東京都 #イタリアン</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
  </div>
</div>
@endsection