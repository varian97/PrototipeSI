<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMakananMinuman;
use App\ModelMejaRuang;
use App\ModelOrder;
use App\ModelDetailOrder;
use NumberFormatter;

class OrderController extends Controller
{
  public function showOrder() {
    dd(ModelOrder::getAllOrder());
    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    $mejaruang = ModelMejaRuang::all();
    $method = 'GET';

    $fmt = new NumberFormatter( 'id_ID', NumberFormatter::CURRENCY );
    foreach($food as $item) {
      $item->Harga = $fmt->formatCurrency($item->Harga, "IDR");
    }
    foreach($drink as $item) {
      $item->Harga = $fmt->formatCurrency($item->Harga, "IDR");
    }

    return view('user.order', ['food'=> $food, 'drink'=>$drink, 'mejaruang'=>$mejaruang, 'method'=>$method]);
  }

  public function confirmOrder(Request $request) {
    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    $input = $request;
    $total = 0;

    $fmt = new NumberFormatter( 'id_ID', NumberFormatter::CURRENCY );
    foreach ($food as $item) {
      $total = $total + $item->Harga * $request->input(''+$item->id, 0);
      $item->Harga = $fmt->formatCurrency($item->Harga, "IDR");
    }
    foreach ($drink as $item) {
      $total = $total + $item->Harga * $request->input(''+$item->id, 0);
      $item->Harga = $fmt->formatCurrency($item->Harga, "IDR");
    }

    $total = $fmt->formatCurrency($total, "IDR");

    return view('user.confirmorder', ['food'=>$food, 'drink'=>$drink, 'total'=>$total, 'input'=>$input]);
  }

  public function returnToOrder(Request $request) {
    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    $mejaruang = ModelMejaRuang::all();
    $old = $request;
    $method = 'POST';
    return view('user.order', ['food'=> $food, 'drink'=>$drink, 'mejaruang'=>$mejaruang, 'old'=>$old, 'method'=>$method]);
  }

  public function addOrder(Request $request){
    $this->validate($request,[
        'mejaRuang' => 'required'
    ]);

    //$order = new ModelOrder;
    //$order->No_Meja_Ruang = $request->mejaRuang;
    //$order->save();

    $id = ModelOrder::insertGetId(array('No_Meja_Ruang' => $request->mejaRuang, 'paymentstatus' => false));

    //$idOrder = $order->ID_Order;

    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    foreach ($food as $item) {
      $qty = $request->input($item->id, 0);
      if($qty>0) {
        $detailOrder = new ModelDetailOrder;
        $detailOrder->ID_Order = $id;
        $detailOrder->ID_Makanan_Minuman = $item->id;
        $detailOrder->Jumlah = $qty;
        $detailOrder->Total_Harga = $item->Harga * $qty;
        $detailOrder->Status = 'Accepted';
        $detailOrder->save();
      }
    }

    foreach ($drink as $item) {
      $qty = $request->input($item->id, 0);
      if($qty>0) {
        $detailOrder = new ModelDetailOrder;
        $detailOrder->ID_Order = $id;
        $detailOrder->ID_Makanan_Minuman = $item->id;
        $detailOrder->Jumlah = $qty;
        $detailOrder->Total_Harga = $item->Harga * $qty;
        $detailOrder->Status = 'Accepted';
        $detailOrder->save();
      }
    }

    return view('user.confirmed',['idOrder'=>$id]);
  }

  public function getAllOrder(){
    $data_array = ModelOrder::getAllOrder();
    $orders = array();
    $detailorder = array();    
    foreach ($data_array as $key => $value) {
      $detailorder['id'] = $value->ID_Order;
      $detailorder['room'] = $value->No_Meja_Ruang;
      $detailorder['paymentstatus'] = $value->paymentstatus;
      $detailorder['id_detail'] = $value->ID_Detail;
      $detailorder['total_harga'] = $value->Total_Harga;
      $detailorder['status'] = $value->Status;
      $detailorder['jenis'] = $value->Jenis;
      $detailorder['deskripsi'] = $value->Deskripsi;
      if(!isset($orders[$data_array[0]->ID_Order])){
        $orders[$data_array[0]->ID_Order] = array();
      }
      array_push($orders[$data_array[0]->ID_Order],$detailorder);
    }


    return view('customerStatus',['orders' => $orders]);
  }

  public function changePaymentStatus(Request $request){
    $id = $request->id;
    $paymentstatus = $request->paymentstatus;
    ModelOrder::changePaymentStatus($id, $paymentstatus);
  }


}
