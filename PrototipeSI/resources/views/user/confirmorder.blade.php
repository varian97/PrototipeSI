@extends('user._header')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">

      <br>
      <h3>Please Confirm Your Order</h3>
      <br><br><br><br>
      <div class = "menuTable">
        <table>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
          </tr>
          @foreach($food as $item)
            @php
              $id = $item->id;
            @endphp
            @if($input->$id > 0)
              <tr>
                <td>{{$item->Deskripsi}}</td>
                <td>Rp. {{$item->Harga}}</td>
                <td>{{$input->$id}}</td>
              </tr>
            @endif
          @endforeach
          
        </table>
      </div>
      <br><br>
      <div class = "menuTable">
        <table>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
          </tr>
          @foreach($drink as $item)
            @php
              $id = $item->id;
            @endphp
            @if($input->$id > 0)
              <tr>
                <td>{{$item->Deskripsi}}</td>
                <td>Rp. {{$item->Harga}}</td>
                <td>{{$input->$id}}</td>
              </tr>
            @endif
          @endforeach
        </table> 
      </div>
      <br><br>
      <p style="font-size: 50px; color: #FFFFFF">Total Harga: Rp. {{$total}}</p>
      <p style="font-size: 50px; color: #FFFFFF">Nomor Meja/Ruang : Meja/Ruang {{$input->mejaRuang}}</p>
      <br><br><br><br>

      <form method="POST" action="/order">
        {{csrf_field()}}
        <input type="hidden" name="mejaRuang" value = {{$input->mejaRuang}}
        @foreach($food as $item)
          @php
            $id = $item->id;
          @endphp
          {{csrf_field()}}
          <input type="hidden" name="{{$item->id}}" value="{{$input->$id}}">
        @endforeach
        @foreach($drink as $item)
          @php
            $id = $item->id;
          @endphp
          {{csrf_field()}}
          <input type="hidden" name="{{$item->id}}" value="{{$input->$id}}">
        @endforeach
        <div class="centerBtn">

         <input type="submit" value="RETURN" class="orderBtn">
        </div>
      </form>

      <form method="POST" action="/confirmed">
        {{csrf_field()}}
        <input type="hidden" name="mejaRuang" value = {{$input->mejaRuang}}
        @foreach($food as $item)
          @php
            $id = $item->id;
          @endphp
          {{csrf_field()}}
          <input type="hidden" name="{{$item->id}}" value="{{$input->$id}}">
        @endforeach
        @foreach($drink as $item)
          @php
            $id = $item->id;
          @endphp
          {{csrf_field()}}
          <input type="hidden" name="{{$item->id}}" value="{{$input->$id}}">
        @endforeach
        <div class="centerBtn">
         <input type="submit" value="CONFIRM" class="orderBtn">
        </div>
      </form>

    </div>
</section>

@endsection
