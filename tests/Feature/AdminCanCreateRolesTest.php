<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Src\Domain\Entities\AccessControl\Role;
use Src\Domain\Entities\AccessControl\User;
use Src\Domain\Entities\AccessControl\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminCanCreateRolesTest extends TestCase
{
    use RefreshDatabase;

    private $admin;
    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        // Create users
        $this->admin = User::factory()->create();
        $this->user = User::factory()->create();

        // Create permission
        $this->permission = Permission::findByName('admin');
        $this->permissions = collect();
        $this->permissions->push($this->permission->name);

        // Create admin role
        $adminRole = Role::factory()->create();
        $adminRole->syncPermissions($this->permissions);

        // Assign role to user
        $this->admin->assignRole($adminRole->name);
    }

    public function test_admin_can_get_permissions()
    {
        Auth::login($this->admin);

        $response = $this->postJson(
            route('admin.roles.store'),
            [
                "name" => "Invalid Id",
                "description" => "100"
            ]
        );

        $response->assertStatus(201);
    }

    public function test_user_cant_get_permissions()
    {
        Auth::login($this->user);

        $response = $this->postJson(
            route('admin.roles.store'),
            [
                "name" => "Invalid Id",
                "description" => "100"
            ]
        );

        $response->assertForbidden();
    }
}
