<?php

namespace Tests\Feature;

use Tests\TestCase;
use Domain\Entities\AccessControl\Role;
use Domain\Entities\AccessControl\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use UseCases\AccessControl\Permissions\CanViewDashboard;

class UserCanGetPermissionsTest extends TestCase
{
    use RefreshDatabase;

    private $user;
    private $permission;

    protected function setUp(): void
    {
        parent::setUp();

        // Create permission
        $this->permission = new CanViewDashboard();
        $permissions = collect();
        $permissions->push($this->permission->getName());

        // Create role
        $role = Role::factory()->create();
        $role->syncPermissions($permissions);

        // Assign role to user
        $this->user = User::factory()->create();
        $this->user->assignRole($role->name);

        Auth::login($this->user);
    }

    public function test_user_can_get_permissions()
    {
        $response = $this->getJson(
            route('api.permissions.index')
        );

        $response->assertStatus(200);
        $response->assertJson([
            'data' => [
                [
                    'name' => $this->permission->getName(),
                    'description' => $this->permission->getDescription(),
                ]
            ]
        ]);
    }
}
