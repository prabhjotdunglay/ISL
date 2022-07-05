<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AppTest extends TestCase
{
    use DatabaseTransactions; //this doesnt send the testing data in database it rollsback straight after running test
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testcompanyhasname()
    {
        $user= User::create(['name' =>'hello', 'email'=>'82@gmail.com', 'usertype'=> 'admin', 'password'=>'secret' ]);
        $name = "hello";

        $this->assertEquals($name, $user->name);
    }

    public function testusernotempty()
    {
        $user= User::create(['name' =>'hello', 'email'=>'81@gmail.com', 'password'=>'secret' ]);

        $this->assertNotEmpty($user);
    }

    public function testuserisnotadmin()
    {
        $user= User::create(['name' =>'hello', 'email'=>'81@gmail.com','password'=>'secret' ]);

        $type = 'notadmin';
        $this->assertNotEquals($type,$user->usertype);
    }


    public function testBasicTest()
    {
        //on visiting '/' user should get 200

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testBasicTest1()
    {
        //if user not logged in he should not be able to go to reception

        $response = $this->get('/reception');

        $response->assertStatus(500);
    }

    public function testBasicTest2()
    {
        //if user not logged in he should not be able to go to reception

        $response = $this->get('/admin');

        $response->assertStatus(302);
    }

    public function testBasicTest3()
    {
        //if user not logged in he should not be able to go to customer

        $response = $this->get('/customer');
        $response->assertStatus(302);
    }

}
