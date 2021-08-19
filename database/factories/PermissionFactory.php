<?php

namespace Database\Factories;

use Domain\Entities\AccessControl\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Permission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'guard_name' => 'web',
            'description' => $this->faker->unique()->words(3, true)
        ];
    }
}
