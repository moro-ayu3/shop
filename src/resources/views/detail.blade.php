@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
@foreach($shops as $shop)
<div class="shop__detail">
  <div class="shop__title">
    <div class="return"><button class="return__button"><</button></div>
    <h3 class="shop__name">{{ $shop->shop_name }}</h3>
  </div>
  <div class="content-img">
    <img src="{{ $shop->shop_img }}" />
  </div>
  <div class="shop__tag">
    <p class="area_tag">#{{ $shop->area->name }}</p>
    <p class="genre_tag">#{{ $shop->genre->name }}</p>
  </div>
  <div class="explain">
    <p class="shop_explain">{{ $shop->shop_explanation }}</p>
  </div>
</div>
@endforeach
<div class="reserve">
  <form class="form" action="/detail/:shop_id/reserve" method="post">
      <input type="date" name="date" id="date" class="date"/>
      <input type="time" name="time" id="time" class="time">
      <select name="reserve_id" class="number">
        @foreach($reserves as $reserve)
          <option value="{{ $reserve->id }}">{{ $reserve->number }}人</option>
        @endforeach
      </select>
  </form>
  @foreach($reserves as $reserve)
  <div class="reserve__list">
    <div class="text-box">
      <p class="title">Shop</p>
      @foreach($shops as $shop)
      <p class="shop_name">{{ $shop->shop_name }}</p>
      @endforeach
    </div>
    <div class="text-box">
      <p class="title">Time</p>
    <div class="heart">
      <a href="./img/icon8-heart-50.png">
      <img src="./img/icon8-heart-50.png" alt="heart" width="20" height="20"></a>
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