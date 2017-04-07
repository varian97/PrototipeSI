<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMakananMinuman;

class MenuController extends Controller
{
  public function showMenu() {
    $food = ModelMakananMinuman::where('Jenis', 'makanan')->get();
    $drink = ModelMakananMinuman::where('Jenis', 'minuman')->get();
    return view('/adminmenu', ['food'=> $food, 'drink'=>$drink]);
  }

  public function showEditForm($id) {
    
  }

  public function editMenu() {

  }

  public function deleteMenu() {

  }
}
