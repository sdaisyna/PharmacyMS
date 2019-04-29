<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="order";

    protected $primaryKey="order_id"; 

    protected $fillable=['order_date','quantity','user_id','medicine_id',
                        'shipping_address','phone_no'];
}
