<?php

namespace Tests\Unit;

use App\Models\UserList_Model;
use Tests\TestCase;
use database\factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    use WithFaker;
    use RefreshDatabase; // Resets database after each test

    /**w
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    public function test_example()
    {

        $user = UserFactory::factory()->create(); // Creating a fake user using Laravel Factory

        $this->assertDatabaseHas('user_list', [
            'username' => $user->username,
            'email' => $user->email,
        ]); // Asserting that the created user exists in the database


    }
}
