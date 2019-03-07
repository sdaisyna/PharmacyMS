<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine', function (Blueprint $table) {
            $table->increments('medicine_id');
            $table->string('medicine_name');
            $table->string('description');
            $table->double('rate');
            $table->string('image');
            $table->date('manufacture_date');
            $table->date('expiry_date');
            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('vendor_id')->on('vendor');
            $table->integer('medicine_type_id')->unsigned();
            $table->foreign('medicine_type_id')->references('medicine_type_id')->on('medicine_type');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicine');
    }
}
