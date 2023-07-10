@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="card">
  <div class="done__inner">
    <div class="done__text">
      <h3 class="done__message">ご予約ありがとうございます</h3>
    </div>
    <div class="button">
      <button class="return__button"><a href="/">戻る<a></button>
    </div>
  </div>
</div>
    