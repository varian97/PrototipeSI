<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMakananMinuman;
use App\ModelMejaRuang;
use App\ModelOrder;
use App\ModelDetailOrder;

class OrderController extends Controller
{
  public function showOrder() {
    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    $mejaruang = ModelMejaRuang::all();
    $method = 'GET';
    return view('user.order', ['food'=> $food, 'drink'=>$drink, 'mejaruang'=>$mejaruang, 'method'=>$method]);
  }

  public function confirmOrder(Request $request) {
    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    $input = $request;
    $total = 0;
    foreach ($food as $item) {
      $total = $total + $item->Harga * $request->input(''+$item->id, 0);
    }
    foreach ($drink as $item) {
      $total = $total + $item->Harga * $request->input(''+$item->id, 0);
    }
    
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

    $id = ModelOrder::insertGetId(array('No_Meja_Ruang' => $request->mejaRuang,));

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
        $detailOrder->Status = 'sent';
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
        $detailOrder->Status = 'sent';
        $detailOrder->save();
      }
    }

    return view('user.confirmed',['idOrder'=>$id]);
  }
}
