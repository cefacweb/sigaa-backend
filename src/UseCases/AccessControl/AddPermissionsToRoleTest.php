<?php

namespace UseCases\AccessControl;

use Tests\TestCase;
use Domain\Entities\AccessControl\Role;
use Exceptions\InvalidPermissionException;
use Domain\Entities\AccessControl\Permission;
use UseCases\AccessControl\AddPermissionsToRole;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Domain\Repositories\AccessControl\RoleRepository;
use UseCases\AccessControl\Permissions\CanViewDashboard;

class AddPermissionsToRoleTest extends TestCase
{
    use RefreshDatabase;

    private $role;

    protected function setUp(): void
    {
        parent::setUp();

        $this->role = Role::factory()->create();
    }

    public function test_can_add_permissions_to_role(): void
    {
        $permission = new CanViewDashboard();

        $useCase = new AddPermissionsToRole(new RoleRepository);
        $useCase($this->role->id, collect([$permission->getName()]));

        $this->assertDatabaseHas('role_has_permissions', [
            'role_id' => $this->role->id,
            'permission_id' => Permission::findByName($permission->getName())->id
        ]);
    }

    public function test_cant_add_invalid_permissions_to_role(): void
    {
        $this->expectException(InvalidPermissionException::class);

        $useCase = new AddPermissionsToRole(new RoleRepository);
        $useCase($this->role->id, collect(['invalid-permission']));
    }
}
