@extends('layouts.adminPage')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <h3>Edit Item</h3>
      <h4>
          <form method="POST" action="/adminmenu/{{$menu->id}}/update">
              {{ csrf_field() }}
              Menu Name : <input type="text" name="foodname" value="{{$menu->Deskripsi}}"><br><br>
              Price     : <input type="text" name="price" value="{{$menu->Harga}}"><br><br>
              Category  : <input type="text" name="category" value="{{$menu->Jenis}}"><br><br>
              <input type="submit" value="Edit">
              <input type="hidden" name="_method" value="PUT">
          </form>
      </h4>
    </div>
</section>

@endsection
