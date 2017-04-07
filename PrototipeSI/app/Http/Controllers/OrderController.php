<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMakananMinuman;
use App\ModelMejaRuang;

class OrderController extends Controller
{
  public function showOrder() {
    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    $mejaruang = ModelMejaRuang::all();
    return view('user.order', ['food'=> $food, 'drink'=>$drink], 'mejaruang'=>$mejaruang);
  }

  public function editOrder() {

  }

  public function deleteOrder() {

  }
}
