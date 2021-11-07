<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Src\Domain\Entities\AccessControl\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->make([
            'name' => 'Admin',
            'email' => 'admin@admin.com.br',
            'password' => bcrypt('admin')
        ])->save();

        User::factory(10)->create();
    }
}
