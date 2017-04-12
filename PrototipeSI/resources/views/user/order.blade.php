@extends('user._header')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <form method="POST" action="/confirm">

        <br>
        <h3>Foods</h3>
        <div class = "menuTable">
          <table>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
            </tr>
            @foreach ($food as $item)
              <tr>
                <td>{{$item->Deskripsi}}</td>
                <td>{{$item->Harga}}</td>
                @if($method == 'GET')
                  <td>{{csrf_field()}}<input type="number" name="{{$item->id}}" class="qty" value="0"></td>
                @elseif($method == 'POST')
                  @php
                    $id = $item->id;
                  @endphp
                  <td>{{csrf_field()}}<input type="number" name="{{$item->id}}" class="qty" value="{{$old->$id}}"></td>
                @endif
              </tr>
            @endforeach
          </table>
        </div>
        <br><br>
        <h3>Beverages</h3>
        <div class = "menuTable">
          <table>
            <tr>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
            </tr>
            @foreach ($drink as $item)
              <tr>
                <td>{{$item->Deskripsi}}</td>
                <td>{{$item->Harga}}</td>
                @if($method == 'GET')
                  <td>{{csrf_field()}}<input type="number" name="{{$item->id}}" class="qty" value="0"></td>
                @elseif($method == 'POST')
                  @php
                    $id = $item->id;
                  @endphp
                  <td>{{csrf_field()}}<input type="number" name="{{$item->id}}" class="qty" value="{{$old->$id}}"></td>
                @endif
              </tr>
            @endforeach
          </table> 
        </div>
        <br><br><br><br>
        {{csrf_field()}}
        <select name="mejaRuang" class="dropDownLeft">
          <option value="empty">Nomor Meja/Ruang</option>
          @foreach ($mejaruang as $item)
            @if($method=='GET')
              <option value="{{$item->No_Meja_Ruang}}">Meja/Ruang {{$item->No_Meja_Ruang}}</option>
            @elseif($method=='POST')
              @if($item->No_Meja_Ruang==$old->mejaRuang)
                <option value="{{$item->No_Meja_Ruang}}" selected="selected">Meja/Ruang {{$item->No_Meja_Ruang}}</option>
              @else
                <option value="{{$item->No_Meja_Ruang}}">Meja/Ruang {{$item->No_Meja_Ruang}}</option>
              @endif
            @endif
          @endforeach
        </select>
        <br><br><br><br>
        <div class="centerBtn">
         <input type="submit" value="ORDER" class="orderBtn">
        </div>
      </form>
    </div>
</section>

@endsection
