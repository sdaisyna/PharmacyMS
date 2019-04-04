<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class pharmacyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function testLogin()
    {
        $email="sdaisyna@gmail.com";
        $password="123456";

        $response=$this->call("GET","/login/$email/$password");
        $this->assertEquals(404,$response->status());
    }

    public function testRegistration()
    {
        $fullname="Daisyna Shrestha";
        $phone_no="9860122072";
        $email="daisyna@gmail.com";
        $password="123456";
        $confirmpassword="123456";

        $response=$this->call("POST","/register/$phone_no/$fullname/$email/$password/$confirmpassword");
        $this->assertEquals(404,$response->status());
    }

    public function testAddmedicine()
    {
        $medicine_name="Cetamol";
        $description="This is painkiller.";
        $rate="10";
        $image="image";
        $manufacture_date="2019-02-13";


        $response=$this->call("POST","/insertmedicine/$medicine_name/$description/
                                                     $rate/$image/$manufacture_date");
        $this->assertEquals(404,$response->status());
    }

    public function testUpdatemedicine()
    {
        $medicine_name="Dolopar";
        $description="This is painkiller.";
        $manufacture_date="2019-02-13";


        $response=$this->call("PUT","/insertmedicine/$medicine_name/$description/$manufacture_date");
        $this->assertEquals(404,$response->status());
    }

    public function testDeletemedicine()
    {
        $medicine_name="Dolopar";
        $description="This is painkiller.";
        $rate="20";
        $image="image";
        $manufacture_date="2019-02-13";


        $response=$this->call("DELETE","/addmedicine/$medicine_name/$description/$manufacture_date");
        $this->assertEquals(404,$response->status());
    }

    public function testAddMedicinetype()
    {
        $medicinetype_name="Fist aid kit";


        $response=$this->call("POST","/insertmedicinetype/$medicinetype_name");
        $this->assertEquals(404,$response->status());
    }

    public function testMedicinePage()
    {
        
        $this->visit('/')
         ->click('Medicine')
         ->seePageIs('/medicine');
    }
}
