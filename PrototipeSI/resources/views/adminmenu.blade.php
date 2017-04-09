@extends('layouts.adminPage')

@section('content')
<section class="hero">
  <div class="caption" background="{{asset('img/hero.jpg')}}">
    <h3>Foods</h3>
    <div class = "menuTable">
      <table>
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        @foreach($food as $item)
          <tr>
            <td>{{$item->Deskripsi}}</td>
            <td>{{$item->Harga}} </td>
            <td><a href="/adminmenu/{{$item->id}}"><button type="button">Edit</button></a>
              <a href=""><button type="button">Delete</button></a></td>
          </tr>
        @endforeach
      </table>
    </div>
    <br><br><br>


    <h3>Beverages</h3>
    <div class = "menuTable">
      <table>
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        @foreach($drink as $item)
          <tr>
            <td>{{$item->Deskripsi}}</td>
            <td>{{$item->Harga}}</td>
            <td><button type="button">Edit</button> <button type="button">Delete</button></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</section>
@endsection
