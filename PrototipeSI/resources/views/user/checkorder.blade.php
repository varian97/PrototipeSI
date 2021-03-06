@extends('user._header')



@section('content')

@if (session('canceled'))
    <div class="alert alert-success" style="margin:auto; width: 20%; text-align: middle;">
        {{ session('canceled') }}
    </div>
@endif

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <h3>Check Your Order</h3>
      <h4>
          <form method="POST" action="/orderstatus">
              {{ csrf_field() }}
              Order ID   : <input type="text" name="orderid"><br><br>
              <input type="submit" value="Check Order">
          </form>
      </h4>
    </div>
</section>

@endsection

