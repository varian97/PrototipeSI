@extends('layouts.adminPage')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <h3>Add Drink</h3>
      <h4>
          <form method="POST" action="">
              Drink Name : <input type="text" name="foodname"><br><br>
              Price      : <input type="text" name="price"><br><br>
              <input type="submit" value="Add Drink">
          </form>
      </h4>
    </div>
</section>

@endsection