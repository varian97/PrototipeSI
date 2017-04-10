<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMakananMinuman;

class FoodController extends Controller
{
    public function addMenu(Request $request){
      $this->validate($request,[
          'foodname' => 'required',
          'price' => 'required',
          'price' => 'numeric'
      ]);
      
      $food = new ModelMakananMinuman;
      $food->Harga = $request->price;
      $food->Deskripsi = $request->foodname;
      $food->Jenis = "makanan";
      $food->save();

      return redirect('adminmenu');
    }
}
