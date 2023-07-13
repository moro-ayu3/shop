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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
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
    <div class="heart">
      <div class="heart__icon"></div>
    </div>
  </div>
</div>
@endsection