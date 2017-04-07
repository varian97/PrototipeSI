@extends('layouts.adminPage')

@section('content')

<section class="hero">
  <div class="caption" background="{{asset('img/hero.jpg')}}">
    <h3>Customer Status</h3>
    <br><br>
    <div class = "customerTable">
      <table>
          <tr>
            <th>Table</th>
            <th>Room</th>
            <th>Details</th>
            <th>Payment</th>
          </tr>
          <tr>
            <td>Table 02</td>
            <td>Cafetaria</td>
            <td>Nasi Goreng<br>Jus jeruk</td>
            <td colspan="2">Paid <button type="button">Change</button></td>
          </tr>
          <tr>
            <td>Table 05</td>
            <td>Room 10</td>
            <td>Mie Goreng<br>Jus Pokat</td>
            <td colspan="2">Not Paid <button type="button">Change</button></td>
          </tr>
          <tr>
            <td>Table 12</td>
            <td>Cafetaria</td>
            <td>Nasi Goreng<br>Mie Goreng</td>
            <td colspan="2">Paid <button type="button">Change</button></td>
          </tr>
      </table>
  </div>
</section><!--  end hero  -->

@endsection
