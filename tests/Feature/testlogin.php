<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testlogin extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testLogin()
    {
        $this->startSession();
        $response = $this->call('POST', '/login',[
          'email'=> 'ulul@example.com',
          'password'=> '123456',
          '_token'=> csrf_token()
        ]);
        $this->assertAuthenticated();
    }

}
