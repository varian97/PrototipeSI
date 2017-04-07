<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMakananMinuman;

class DrinkController extends Controller
{
  public function addMenu(Request $request){
    $drink = new ModelMakananMinuman;
    $drink->Harga = $request->price;
    $drink->Deskripsi = $request->foodname;
    $drink->Jenis = "minuman";
    $drink->save();

    return redirect('admin');
  }
}
