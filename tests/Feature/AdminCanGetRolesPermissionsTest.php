<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Src\Domain\Entities\AccessControl\Role;
use Src\Domain\Entities\AccessControl\User;
use Src\Domain\Entities\AccessControl\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Src\Infra\AccessControl\Repositories\PermissionRepository;

class AdminCanGetRolesPermissionsTest extends TestCase
{
    use RefreshDatabase;

    private $admin;
    private $user;
    private $adminRole;

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
        $this->adminRole = Role::factory()->create();
        $this->adminRole->syncPermissions($this->permissions);

        // Assign role to user
        $this->admin->assignRole($this->adminRole->name);
    }

    public function test_admin_can_get_permissions()
    {
        Auth::login($this->admin);

        $response = $this->getJson(
            route("admin.roles.permissions.index", $this->adminRole->id)
        );

        $responseIds = collect($response->json()['data'])->pluck('id');

        // TODO maybe check for pagination.
        $this->assertEquals($responseIds, collect($this->permission->id));
    }

    public function test_user_cant_get_permissions()
    {
        Auth::login($this->user);

        $response = $this->getJson(
            route("admin.roles.permissions.index", $this->adminRole->id)
        );

        $response->assertForbidden();
    }
}
