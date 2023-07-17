@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
@endsection

@section('content')
<form class="form" action="/all/search" method="get">
  <div class="search">
    <div class="search__content">
      <select name="area_id" class="area">
        <option value="">All area</option>
        @foreach($areas as $area)
          <option value="{{ $area->id }}" class="search_area">{{ $area->name }}</option>
        @endforeach
      </select>
      <select name="genre_id" class="genre">
        <option value="">All genre</option>
        @foreach($genres as $genre)
          <option value="{{ $genre->id }}" class="search_genre">{{ $genre->name }}</option>
        @endforeach
      </select>
      <button type="submit" aria-label="検索" class="search__button"></button>
      <div class="search__shop">
        <input class="search_shop" type="text" name="keyword" id="keyword" placeholder="Search ..."/>
      </div>
    </div>
  </div>
</form>
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
      @foreach($shops as $shop)
      <button class="detail__button"><a href="/detail/:{{ $shop->id }}">詳しく見る</a></button>
      @endforeach
    </div>
    <button class="heart"></button>
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
    <button class="heart"><i class="fa-regular fa-heart" style="color: #666f7f;"></i></button>
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
    <button class="heart"></button>
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
    <button class="heart"></button>
  </div>
</div>
<div class="wrapper">
  <div class="card">
    <div class="content-img">
      <img src="./img/ramen.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">志摩屋</h3>
      <p class="tag">#福岡県 #ラーメン</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/yakiniku.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">香</h3>
      <p class="tag">#東京都 #焼肉</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/italian.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">JJ</h3>
      <p class="tag">#大阪府 #イタリアン</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/ramen.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">らーめん極み</h3>
      <p class="tag">#東京都 #ラーメン</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
</div>
<div class="wrapper">
  <div class="card">
    <div class="content-img">
      <img src="./img/izakaya.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">鳥雨</h3>
      <p class="tag">#大阪府 #居酒屋</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/sushi.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">築地色合</h3>
      <p class="tag">#東京都 #寿司</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/yakiniku.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">晴海</h3>
      <p class="tag">#大阪府 #焼肉</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/yakiniku.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">三子</h3>
      <p class="tag">#福岡県 #焼肉</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
</div>
<div class="wrapper">
  <div class="card">
    <div class="content-img">
      <img src="./img/izakaya.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">八戒</h3>
      <p class="tag">#東京都 #居酒屋</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/sushi.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">福助</h3>
      <p class="tag">#大阪府 #寿司</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/ramen.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">ラー北</h3>
      <p class="tag">#東京都 #ラーメン</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/izakaya.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">翔</h3>
      <p class="tag">#大阪府 #居酒屋</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
</div>
<div class="wrapper">
  <div class="card">
    <div class="content-img">
      <img src="./img/sushi.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">経緯</h3>
      <p class="tag">#東京都 #寿司</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/yakiniku.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">漆</h3>
      <p class="tag">#東京都 #焼肉</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/italian.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">THE TOOL</h3>
      <p class="tag">#福岡県 #イタリアン</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  <div class="card">
    <div class="content-img">
      <img src="./img/sushi.jpg" />
    </div>
    <div class="text-box">
      <h3 class="title">木船</h3>
      <p class="tag">#大阪府 #寿司</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
</div>

@if(!empty($shops))
 @foreach($shops as $shop)
  <div class="card">
    <div class="content-img">
      <img src="{{ $shop->shop_img }}">
    </div>
    <div class="text-box">
      <h3 class="title">{{ $shop->shop_name }}</h3>
      <p class="tag">#{{ $shop->area->name }}#{{ $shop->genre->name }}</p>
    </div>
    <div class="detail">
      <button class="detail__button">詳しく見る</button>
    </div>
    <button class="heart"></button>
  </div>
  @endforeach
@endif
@endsection