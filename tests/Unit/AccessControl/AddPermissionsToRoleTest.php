<?php

namespace Application\UseCases\AccessControl;

use Tests\TestCase;
use Src\Domain\Entities\AccessControl\Role;
use Src\Exceptions\InvalidPermissionException;
use Src\Domain\Entities\AccessControl\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Src\Infra\AccessControl\Repositories\RoleRepository;
use Src\Application\UseCases\AccessControl\AddPermissionsToRole;

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
        $this->permission = Permission::factory()->create();

        $useCase = new AddPermissionsToRole(new RoleRepository);
        $useCase($this->role->id, collect([$this->permission->id]));

        $this->assertDatabaseHas('role_has_permissions', [
            'role_id' => $this->role->id,
            'permission_id' => $this->permission->id
        ]);
    }

    public function test_cant_add_invalid_permissions_to_role(): void
    {
        $this->expectException(InvalidPermissionException::class);

        $useCase = new AddPermissionsToRole(new RoleRepository);
        $useCase($this->role->id, collect(['invalid-permission']));
    }
}
