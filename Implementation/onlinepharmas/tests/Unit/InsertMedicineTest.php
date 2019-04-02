<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertMedicineTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMedicine()
    {
       $medicine_name="Cetamol";
       $description="This is painkiller.";
       $rate="10";
       $image="image";
       $manufacture_date="2019-02-13";
       $expiry_date="2021-02-13";
       $quantity="20";
       $medicine_type_id="2";

       $response=$this->call("POST","/medicine/$medicine_name/$description/$rate/$image/$manufacture_date/
                              $expiry_date/$quantity/$medicine_type_id");
        $this->assertEquals(404,$response->status());
        

    }
}
