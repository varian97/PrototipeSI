<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelOrder extends Model
{
    protected $table = 'Order';
    public function getOrderStatusWithID($id)
  {
  	// DB::table('order')
	  // 	->join('detailorder', function($join){
	  // 		$join->on('order.id', '=', 'contac')
	  // 	})
	  // 	->get();
  }

  public function OrderCancel($id)
  {
  	//stub
  }
}
