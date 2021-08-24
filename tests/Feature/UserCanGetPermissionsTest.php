<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Domain\Entities\AccessControl\Role;
use Domain\Entities\AccessControl\User;
use Domain\Entities\AccessControl\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanGetPermissionsTest extends TestCase
{
    use RefreshDatabase;

    private $user;
    private $permission;
    private $invalidPermission;

    protected function setUp(): void
    {
        parent::setUp();

        // Create invalid permission
        $this->invalidPermission = Permission::factory()->make();

        // Create permission
        $this->permission = Permission::factory()->create();
        $permissions = collect();
        $permissions->push($this->permission->name);

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
            route('api.users.permissions.index')
        );

        $response->assertStatus(200);

        $response->assertJson([
            'data' => [
                [
                    'name' => $this->permission->name,
                    'description' => $this->permission->description,
                ]
            ]
        ]);

        $response->assertJsonMissing([
            'data' => [
                [
                    'name' => $this->invalidPermission->name,
                    'description' => $this->invalidPermission->description,
                ]
            ]
        ]);
    }
}
