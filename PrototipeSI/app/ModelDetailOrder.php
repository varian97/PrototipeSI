<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ModelDetailOrder extends Model
{
  protected $table = 'DetailOrder';
  public static function getOrderStatusWithID($id)
  {
    //$table = array();
    $table = DB::table('detailorder')
             ->where('detailorder.ID_ORDER',"=", $id)
             ->join('makananminuman', 'detailorder.ID_Makanan_Minuman', '=', 'makananminuman.id')
             ->get();

    return $table;
  }

  public static function OrderCancel($id)
  {

  	DB::beginTransaction();
  	try{
		DB::table('detailorder')
		->where('detailorder.ID_ORDER', '=', $id)
		->delete();

		DB::table('order')
		->where('ID_Order', '=', $id)
		->delete();

		DB::commit();

		return true;
	}catch(Exception $ex){
		DB::rollBack();

		return false;
	}
  }

  public static function changeDetailOrderStatus($id, $status)
  {
  	DB::table('detailorder')
  	->where('detailorder.ID_ORDER', '=', $id)
  	->update(['Status'] => $status);
  }
}
