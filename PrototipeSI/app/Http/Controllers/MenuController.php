<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMakananMinuman;
use NumberFormatter;

class MenuController extends Controller
{
  public function showMenu() {
    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    $fmt = new NumberFormatter( 'id_ID', NumberFormatter::CURRENCY );
    foreach ($food as $item) {
      $item->Harga = $fmt->formatCurrency($item->Harga, "IDR");
    }
    foreach ($drink as $item) {
      $item->Harga = $fmt->formatCurrency($item->Harga, "IDR");
    }
    return view('adminmenu', ['food'=> $food, 'drink'=>$drink]);
  }

  public function showEditForm($id) {
    $menu = ModelMakananMinuman::find($id);
    return view('editForm', ['menu' => $menu]);
  }

  public function editMenu(Request $request, $id) {
    $editItem = ModelMakananMinuman::where('id', $id)->first();
    $editItem->Harga = $request->price;
    $editItem->Deskripsi = $request->foodname;
    $editItem->Jenis = $request->category;
    $editItem->save();
    return redirect('adminmenu');
  }

  public function deleteMenu($id) {
    $menu = ModelMakananMinuman::find($id);
    $menu->delete();
    return redirect('adminmenu');
  }
}
