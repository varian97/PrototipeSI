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
            <td>
              <form method="" action="/adminmenu/{{$item->id}}">
                  {{ csrf_field() }}
                  <input type="submit" value="Edit">
              </form>
              <form method="POST" action="/adminmenu/{{$item->id}}">
                  {{ csrf_field() }}
                  <input type="submit" value="Delete">
                  <input type="hidden" name="_method" value="DELETE">
              </form>
            </td>
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
            <td>
              <form method="" action="/adminmenu/{{$item->id}}">
                {{ csrf_field() }}
                <input type="submit" value="Edit">
              </form>
              <form method="POST" action="/adminmenu/{{$item->id}}">
                  {{ csrf_field() }}
                  <input type="submit" value="Delete">
                  <input type="hidden" name="_method" value="DELETE">
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</section>
@endsection
