@extends('user._header')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}" style="font-size: 1.12em !important;">
    @if($status == 'kosong')
      <h3>Your ID is Wrong or Already Sent</h3>
    @else
      <div class="caption" background="{{asset('img/hero.jpg')}}" style="font-size: 1.12em !important;">
        <h5 style="color: #ACAFA0;font-size: 1.12em !important;">Check Your Order <br> ID {{$id}}</h5>
        <br>
        <h6 style="color: #4CAF50;">Foods</h6>
        <br>
        <div class = "menuTable">
          <table>
            <tr>
              <th>Name</th>
              <th>Quantity</th>
              <th>Status</th>
            </tr>
            @foreach($array_makanan as $key => $makanan)
              <tr>
                <td>{{$makanan->Deskripsi}}</td>
                <td>{{$makanan->Jumlah}}</td>
                <td>{{$makanan->Status}}</td>
              </tr>
            @endforeach
          </table>
        </div>
        <br>
        <h6 style="color: #4CAF50;">Beverages</h6>
        <br>
        <div class = "menuTable">
          <table>
            <tr>
              <th>Name</th>
              <th>Quantity</th>
              <th>Status</th>
            </tr>
            @foreach($array_minuman as $key => $minuman)
              <tr>
                <td>{{$minuman->Deskripsi}}</td>
                <td>{{$minuman->Jumlah}}</td>
                <td>{{$minuman->Status}}</td>
              </tr>
            @endforeach
          </table>
        </div>
        <br>
        <h5 style="color: #ACAFA0;style="font-size: 1.12em !important;">Total Price : {{$price}}</h5>
        <br><br><br><br>
        <form method="POST" action="/cancelorder">
          <div class="centerBtn">
            {{ csrf_field() }}
            <input type="hidden" name="orderid" value="{{$id}}">
            <input type="submit" value="CANCEL" class="orderBtn">
         </div>
        </form>
        
      </div>
    @endif
    </div>

</section>

@endsection

