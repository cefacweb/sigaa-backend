<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Src\Domain\Entities\AccessControl\Role;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\WithFaker;
use Src\Domain\Entities\AccessControl\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminCanDeleteRolesTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    private $admin;
    private $user;
    private $role;

    protected function setUp(): void
    {
        parent::setUp();

        // Create users
        $this->admin = User::factory()->create();
        $this->user = User::factory()->create();

        // Create permission
        $permission = Permission::findByName('admin');
        $permissions = collect();
        $permissions->push($permission->name);

        // Create admin role
        $adminRole = Role::factory()->create();
        $adminRole->syncPermissions($permissions);

        // Assign role to admin
        $this->admin->assignRole($adminRole->name);

        $this->role = Role::factory()->create();
    }

    public function test_admin_can_update_role()
    {
        Auth::login($this->admin);

        $response = $this->deleteJson(
            route('admin.roles.destroy', $this->role->id)
        );

        $response->assertStatus(200);
    }

    public function test_user_cant_update_roles()
    {
        Auth::login($this->user);

        $response = $this->deleteJson(
            route('admin.roles.destroy', $this->role->id)
        );

        $response->assertForbidden();
    }
}
