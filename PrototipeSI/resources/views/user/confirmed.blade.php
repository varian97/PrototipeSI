@extends('user._header')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <h3>Your Order Sent Successfully</h3>
      <h3>Your Order ID is {{$idOrder}}</h3>
    </div>
</section>

@endsection
