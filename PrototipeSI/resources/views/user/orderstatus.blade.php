@extends('user._header')

@section('content')

<section class="hero">
    <div class="caption" background="{{asset('img/hero.jpg')}}">
      
      <div class="caption" background="{{asset('img/hero.jpg')}}">
        <h3>Check Your Order</h3>
        <br>
        <h4>Foods</h4>
        <br>
        <div class = "menuTable">
          <table>
            <tr>
              <th>Name</th>
              <th>Quantity</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>Nasi Goreng</td>
              <td>1</td>
              <td>Done</td>
            </tr>
            <tr>
              <td>Mie Goreng</td>
              <td>1</td>
              <td>In Progress</td>
            </tr>
          </table>
        </div>
        <br>
        <h4>Beverages</h4>
        <br>
        <div class = "menuTable">
          <table>
            <tr>
              <th>Name</th>
              <th>Quantity</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>Jus Jeruk</td>
              <td>2</td>
              <td>Received</td>
            </tr> 
          </table>
        </div>
        <br><br><br><br>
        <form>
          <div class="centerBtn">
            <input type="hidden" name="id" value="1">
            <input type="submit" value="CANCEL" class="orderBtn">
         </div>
        </form>
        
    </div>
    </div>
</section>

@endsection

