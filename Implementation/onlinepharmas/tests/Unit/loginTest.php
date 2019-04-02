<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class loginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $email="sdaisyna@gmail.com";

        $response=$this->call("GET","/login/$email/$password");
        $this->assertEquals(404,$response->status());
    }
}
