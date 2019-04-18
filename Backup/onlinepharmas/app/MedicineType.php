<?php
  
namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineType extends Model
{
    protected $table="medicine_type";

    protected $primaryKey="medicine_type_id"; 

    protected $fillable=['medicine_type_name','image',]; 
}
