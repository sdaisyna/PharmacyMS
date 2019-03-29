<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table="medicine";

    protected $primaryKey="medicine_id"; 

    protected $fillable=['medicine_name','description','rate','image','manufacture_date','expiry_date','quantity','medicine_type_id',];
}
?>