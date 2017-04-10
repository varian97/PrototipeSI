<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDetailOrder;
use NumberFormatter;


class CheckOrderController extends Controller
{
  public function checkOrder(Request $request){
  	$this->validate($request,[
        'orderid' => 'required',
        'orderid' => 'numeric'
    ]);

    $fmt = new NumberFormatter( 'id_ID', NumberFormatter::CURRENCY );

    $price = 0;
    
    $id = (int)$request->orderid;
    $orders = ModelDetailOrder::getOrderStatusWithID($id);
    $array_makanan = array();
    $array_minuman = array();

    foreach ($orders as $key => $order) {
    	if($order->Jenis == "minuman"){
    		array_push($array_minuman, $order);
    	}else{
    		array_push($array_makanan, $order);
    	}

      $price += $order->Harga*$order->Jumlah;
    }

    if(count($array_makanan) < 1 && count($array_minuman) < 1){
    	$data_array = array('status' => 'kosong');
    }else{
     	$data_array = array(
                'id' => $id,
                'array_makanan' => $array_makanan,
    						'array_minuman' => $array_minuman,
    						'status' => 'ada',
                'price' => $fmt->formatCurrency($price, "IDR"));
    }
    
    $view = view('user/orderstatus', $data_array);

    return $view;
  }

  public function CancelOrder(Request $request)
  {
  	$this->validate($request,[
        'orderid' => 'required',
        'orderid' => 'numeric'
    ]);
    $id = (int)$request->orderid;
    if(ModelDetailOrder::OrderCancel($id)){
      return redirect('check')->with('canceled', 'Order Canceled\n Please Contact Server for Further Information');
    }else{
      return redirect('check')->with('canceled', 'There is an Error when Canceling');
    }
  }
}
