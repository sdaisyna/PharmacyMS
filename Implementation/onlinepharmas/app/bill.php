<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table= "bill";
    protected $primaryKey = "bill_id";
    protected $fillable = ['order_id', 'medicine_id', 'quantity'];
}
