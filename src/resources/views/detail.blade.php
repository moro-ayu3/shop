@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
@foreach($shops as $shop)
<div class="shop__detail">
  <div class="shop__title">
    <div class="return"><button class="return__button"><a href="/"><</a></button></div>
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
  <div class="reserve__form">
    <div class="reserve__title">
      <p class="reserve__title-1">予約</p>
    </div>
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
        <p class="shop_name">{{ $reserve->shop->shop_name }}</p>
      </div>
      <div class="text-box">
        <p class="title">Date</p>
        <p class="reserve_date">{{ $reserve->date }}</p>
      </div>
      <div class="text-box">
        <p class="title">Time</p>
        <p class="reserve_time">{{ $reserve->time }}</p>
      </div>
      <div class="text_box">
        <p class="title">Number</p>
        <p class="reserve_number">{{ $reserve->number }}</p>
      </div>
    </div>
    @endforeach
    <div class="button">
      <button class="reserve_button">予約する</button>
    </div>
  </div>
</div>
@endsection