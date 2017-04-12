<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
/*
SELECT 
    * 
FROM                                                                                                                                                                 (SELECT * FROM detailorder WHERE ID_ORDER =1) as od 
INNER JOIN 
    makananminuman 
ON 
    od.ID_Makanan_Minuman = makananminuman.id   */

class ModelOrder extends Model
{
    protected $table = 'Order';

   	public static function getAllOrder()
   	{
   		$data_array = 	DB::table('order')
   						-> join('detailorder', function($join){
   							$join->select('ID_Detail', 'ID_Makanan_Minuman', 'Jumlah', 'Status')
   								->join('order.ID_Order', '=', 'detailsorder.ID_Order');
   						})
   						->join('makananminuman', 'detailorder.ID_Makanan_Minuman', '=', 'makananminuman.id')
   						->get();

   		return $data_array;
   	}

   	public static function changePaymentStatus($id, $status)
   	{
   		DB::table('order')
   		->where('id', $id)
   		->update(['paymentstatus' => $status]);
   	}


}
