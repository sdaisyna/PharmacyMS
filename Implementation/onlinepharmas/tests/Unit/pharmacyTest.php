<?php

namespace Tests\Unit;

use Tests\TestCase;
use Tests\Unit\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Medicine;
use App\Medicinetype;

class pharmacyTest extends TestCase
{
    use DatabaseTransactions;

    public function testLogin()
    {
        $email="seema@gmail.com";
        $password="123456";

        $response=$this->call("GET",'/login',[
            'email'=>$email,
            'password'=>$password,
        ]);
        $this->assertEquals(200,$response->status());
    }

    public function testProfileedit()
    {
        $response=$this->call("PUT",'/updateprofile/3',[
             'name'=>'Daisyna Shrestha'
        ]);
        $this->assertEquals(302,$response->status());

    }


    public function testRegistration()
    {
        $response=$this->call("POST",'/register',[
            'name'=>"Seema Gharti",
            'address'=>"Pokhara",
            'gender'=>"Female",
            'dateofbirth'=>"01-01-1998",
            'phone_no'=>"9841206735",
            'email'=>"seema@gmail.com",
            'password'=>"123456",
            'confirmpassword'=>"123456",
        ]);
        $this->assertEquals(302,$response->status());
    }

       public function testInsertMedType()
    {
        $medtype=Medicinetype::create([
            'medicine_type_name'=>"Beauty Product",
            'image'=>"beauty.jpg"
        ]);
        $this->assertEquals('Beauty Product',$medtype->medicine_type_name);
    }



    public function testAddmed()
    {

        $med=Medicine::create([
              'medicine_name'=>"Pudin hara",
              'description'=>"Dabur Pudin Hara is an ayurvedic...",
              'rate'=>"40",
              'image'=>"pudinhara.jpg",
              'manufacture_date'=>"2019-04-12",
              'expiry_date'=>"2020-04-12",
              'quantity'=>"40",
              'medicine_type_id'=>"3",
        ]);
        $this->assertEquals('Pudin hara',$med->medicine_name);
    }

    public function testUpdatemedicine()
    {
        $response=$this->call("PUT","/insertmedicine/5",[
            'medicine_name' => "Dolopar",
            'description' => "This is painkiller",
            'manufacture_date' => "2019-02-13"
        ]);
        $this->assertEquals(302,$response->status());
    }

    public function testDeleteMed()
    {
        $response=$this->call('delete','/addmedicine/5',['token_'=>csrf_token()
        ]);
        $this->assertEquals(302,$response->status());
    }

    public function testRoute()
    {
        $response = $this->get('/gomedicine');
        $response->assertJson(['website'=>'medicine']);
    }

    public function testDeleteMedcategory()
    {
        $response=$this->call('delete','/addmedicinetype/3',['token_'=>csrf_token()
        ]);
        $this->assertEquals(302,$response->status());
    }







    public function testDatabase()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'daisyna@gmail.com'
        ]);
    }

    // public function testUpdatemedicinetype()
    // {
    //     $medicine_type_name="Prescription";


    //     $response=$this->call("PUT","/insertmedicinetype/$medicine_type_name");
    //     $this->assertEquals(404,$response->status());

    // }

    public function testDeletemedicinetype()
    {
        
        $response=$this->call("DELETE",'/addmedicinetype/2',['token_'=>csrf_token()
          
        ]);
        $this->assertEquals(500,$response->status());

    }

    public function testIndex()
    { //visit the page and check the given word in that page
        $response=$this->get('/');
        $response->assertSee("Medicine");
    }




}
