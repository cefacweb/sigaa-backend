<?php

namespace UseCases\AccessControl;

use Tests\TestCase;
use Domain\Entities\AccessControl\Role;
use Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use UseCases\AccessControl\Permissions\CanViewDashboard;
use Domain\Repositories\AccessControl\PermissionRepository;

class GetUserPermissionsTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        // Create permission
        $permission = new CanViewDashboard();
        $this->permissions = collect();
        $this->permissions->push($permission->getName());

        // Create role
        $userRole = Role::factory()->create();
        $userRole->syncPermissions($this->permissions);

        // Assign role to user
        $this->user = User::factory()->create();
        $this->user->assignRole($userRole->name);
    }

    public function test_user_has_default_permissions(): void
    {
        $useCase = new GetUserPermissions(new PermissionRepository);
        $permissions = $useCase($this->user->id);

        self::assertEquals($permissions->first()->name, CanViewDashboard::getName());
    }
}
