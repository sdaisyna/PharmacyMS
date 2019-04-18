<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="order";

    protected $primaryKey="order-id"; 

    protected $fillable=['order_date','quantity','user_id','medicine_id',];
}
