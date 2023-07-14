@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="shop__detail">
  <div class="shop__title">
    <div class="return"><button class="return__button"><</button></div>
    @foreach($shops as $shop)
    <h3 class="shop__name">{{ $shop->shop_name }}</h3>
    @endforeach
  </div>
  <div class="content-img">
    <img src="" />
  </div>
    <div class="search__content">
      <select name="area_id" class="area">
        <option value="">All area</option>
        @foreach($areas as $area)
          <option value="{{ $area->id }}">{{ $area->name }}</option>
        @endforeach
      </select>
      <select name="genre_id" class="genre">
        <option value="">All genre</option>
        @foreach($genres as $genre)
          <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
      </select>
      <input class="search_shop" type="text" name="keyword" id="keyword" placeholder="Search ..."/>
    </div>
</div>
<div class="wrapper">
  <div class="card">
    <div class="content-img">
      <img src="./img/sushi.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">仙人</h3>
      <p class="tag">#東京都 #寿司</p>
    </div>
    @foreach($shops as $shop)
    <div class="detail">
      <button class="detail__button"><a href="/all/{{ $shop->id }}">詳しく見る</a></button>
    </div>
    @endforeach
    <div class="heart">
      <a href="./img/icon8-heart-50.png">
      <img src="./img/icon8-heart-50.png" alt="heart" width="20" height="20"></a>
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