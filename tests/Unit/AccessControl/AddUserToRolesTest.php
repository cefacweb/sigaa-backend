<?php

namespace Application\UseCases\AccessControl;

use Tests\TestCase;

use Illuminate\Support\Facades\Auth;
use Domain\Entities\AccessControl\Role;
use Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Infra\AccessControl\Repositories\RoleRepository;
use Infra\AccessControl\Repositories\UserRepository;

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
}
