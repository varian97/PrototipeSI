@extends('layouts.adminPage')

@section('content')

<section class="hero">
  <div class="caption" background="{{asset('img/hero.jpg')}}">
    <h3>Customer Status</h3>
    <br><br>
    <form action="/updateOrderStatus" method="POST" >
    {{csrf_field()}}
    <div class = "customerTable">
      <table>
          <tr>
            <th>Room</th>
            <th>Details</th>
            <th>Payment</th>
          </tr>
            @foreach($orders as $order)
            <tr>
              <td>Ruang {{$order[0]['room']}}</td>
              <td style="text-align: left !important; ">
              @foreach($order as $detailorder)
                <div style="width: 50%;display: inline-block; vertical-align: center;">
                  <div>{{$detailorder['deskripsi']}} x{{$detailorder['jumlah']}}</div>
                  <div>{{$detailorder['total_harga']}}</div>
                </div>
                <div style="width: 30%;display: inline-block; padding-top:10px;">
                  <div class="form-group">
                    <label for="sel1">Status</label>
                    <select class="form-control" id="sel1" name="d{{$detailorder['id_detail']}}">
                      <option <?php echo $detailorder['status'] == 'Accepted' ? "selected" : ""?> value="Accepted" >Accepted</option>
                      <option <?php echo $detailorder['status'] == 'In Progress' ? "selected" : ""?> value="In Progress">In Progress</option>
                      <option <?php echo $detailorder['status'] == 'Done' ? "selected" : ""?> value="Done">Done</option>
                      <option <?php echo $detailorder['status'] == 'Finished' ? "selected" : ""?> value="Finished">Finished</option>
                    </select>

                  </div>
                </div>

                <hr>
              @endforeach
              </td>
              <td colspan="2">
                <div style="width:50%; margin:auto;">
                  <label for='sel2'>Payment Status :</label>
                  <select class="form-control" id="sel2" name="o{{$detailorder['id']}}">
                    @if($order[0]['paymentstatus'])
                      <option selected value="Paid" >Paid</option>
                      <option value="Not Paid">Not Paid</option>
                    @else
                      <option value="Paid" >Paid</option>
                      <option selected value="Not Paid">Not Paid</option>
                    @endif
                  </select>
                </div>

              </td>
            </tr>
            @endforeach

      </table>
      <input type='submit' value='Change'/>
  </div>

  </form>
</section><!--  end hero  -->

@endsection
