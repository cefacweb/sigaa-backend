<?php

namespace Application\UseCases\AccessControl;

use Tests\TestCase;

use Illuminate\Support\Facades\Auth;
use Src\Exceptions\InvalidRoleException;
use Src\Domain\Entities\AccessControl\Role;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Src\Infra\AccessControl\Repositories\RoleRepository;
use Src\Infra\AccessControl\Repositories\UserRepository;
use Src\Application\UseCases\AccessControl\AddUserToRoles;

class AddUserToRolesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->roles = Role::factory(3)->create();
        $this->user = User::factory()->create();

        Auth::login($this->user);
    }

    public function test_can_add_user_to_single_role(): void
    {
        $useCase = new AddUserToRoles(new UserRepository ,new RoleRepository);
        $useCase($this->user->id, collect([$this->roles->first()->id]));

        $this->assertDatabaseHas('model_has_roles', [
            'role_id' => $this->roles->first()->id,
            'model_type' => User::class,
            'model_uuid' => $this->user->id
        ]);
    }

    public function test_can_add_user_to_multiple_roles(): void
    {
        $useCase = new AddUserToRoles(new UserRepository ,new RoleRepository);
        $useCase($this->user->id, collect($this->roles->pluck('id')));

        $this->roles->each(function ($role) {
            $this->assertDatabaseHas('model_has_roles', [
                'role_id' => $role->id,
                'model_type' => User::class,
                'model_uuid' => $this->user->id
            ]);
        });
    }

    public function test_cant_add_invalid_role_to_user(): void
    {
        $this->expectException(InvalidRoleException::class);

        $useCase = new AddUserToRoles(new UserRepository ,new RoleRepository);
        $useCase($this->user->id, collect(['invalid-role']));

        $this->roles->each(function () {
            $this->assertDatabaseMissing('model_has_roles', [
                'role_id' => 'invalid-role',
                'model_type' => User::class,
                'model_uuid' => $this->user->id
            ]);
        });
    }
}
