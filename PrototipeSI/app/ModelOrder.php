<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
