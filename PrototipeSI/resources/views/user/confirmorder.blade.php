@extends('user._header')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <form method="POST" action="">

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
            <tr>
              <td>Nasi Goreng</td>
              <td>Rp. 50.000,00</td>
              <td>1</td>
            </tr>
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
            <tr>
              <td>Jus Jeruk</td>
              <td>Rp. 20.000,00</td>
              <td>1</td>
            </tr>
          </table> 
        </div>
        <br><br>
        <p style="font-size: 50px; color: #FFFFFF">Nomor Meja/Ruang : Meja 01</p>
        <br><br><br><br>
        <div class="centerBtn">
         <input type="submit" value="RETURN" class="orderBtn">
         <input type="submit" value="CONFIRM" class="orderBtn">
        </div>
      </form>
    </div>
</section>

@endsection
