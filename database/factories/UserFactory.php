<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Domain\Entities\AccessControl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function testUser()
    {
        return $this->state(function () {
            return [
                "name" => "Fabiano",
                "email" => "fabiano@sigaa.com.br",
                'email_verified_at' => "2020-05-25T15:16:27.000000Z",
                "password" => bcrypt('12312345'),
                "remember_token" => Str::random(10)
            ];
        });
    }
}
