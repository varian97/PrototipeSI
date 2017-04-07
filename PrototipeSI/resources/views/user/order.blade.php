@extends('user._header')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      <form method="POST" action="">
        <h3>Foods</h3>
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
              <td><input type="number" name="foodQty1" class="qty" value="0"></td>
            </tr>
            <tr>
              <td>Mie Goreng</td>
              <td>Rp. 40.000,00</td>
              <td><input type="number" name="foodQty2" class="qty" value="0"></td>
            </tr>
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
            <tr>
              <td>Jus Jeruk</td>
              <td>Rp. 20.000,00</td>
              <td><input type="number" name="beverageQty1" class="qty" value="0"></td>
            </tr>
            <tr>
              <td>Jus Pokat</td>
              <td>Rp. 25.000,00</td>
              <td><input type="number" name="beverageQty2" class="qty" value="0"></td>
            </tr>
          </table> 
        </div>
        <br><br><br><br>
        <div class="centerBtn">
         <input type="submit" value="ORDER" class="orderBtn">
        </div>
      </form>
    </div>
</section>

@endsection
