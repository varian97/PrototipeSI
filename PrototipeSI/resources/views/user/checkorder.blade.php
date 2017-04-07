@extends('layouts.adminPage')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <h3>Check Your Order</h3>
      <h4>
          <form method="POST" action="">
              Order ID   : <input type="text" name="orderid"><br><br>
              <input type="submit" value="Check Order">
          </form>
      </h4>
    </div>
</section>

@endsection

