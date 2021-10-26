<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanGetOwnInformationTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        Auth::login($this->user);
    }

    public function test_user_can_get_own_information()
    {
        $response = $this->getJson(route('api.user.index'));

        $response->assertStatus(200);
    }
}
