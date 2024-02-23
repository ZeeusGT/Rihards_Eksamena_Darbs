<?php

namespace Tests\Unit;

use App\Models\UserList_Model;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    use WithFaker;
    use RefreshDatabase; // Resets database after each test

    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    public function test_example()
    {

        $response = $this->post('/songs/loginUser', []); // Sending an empty request, expecting validation errors
        $response->assertSessionHasErrors(['username', 'password']); // Asserting validation errors for username and password fields

    }
}
