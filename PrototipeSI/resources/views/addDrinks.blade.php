@extends('layouts.adminPage')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <h3>Add Drink</h3>
      <h4>
          <form method="POST" action="/addDrinks">
              {{ csrf_field() }}
              Drink Name : <input type="text" name="foodname"><br><br>
              Price      : <input type="text" name="price"><br><br>
              <input type="submit" value="Add Drink">
          </form>
          @if(count($errors) > 0)
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
          @endif
      </h4>
    </div>
</section>

@endsection
