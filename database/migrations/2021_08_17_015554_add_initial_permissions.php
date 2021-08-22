<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Domain\Entities\AccessControl\Permission;
use Illuminate\Database\Migrations\Migration;

class AddInitialPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Permission::create([
            'name' => 'admin',
            'guard_name' => 'web',
            'description' => 'User is admin'
        ]);

        Permission::create([
            'name' => 'cam-view-dashboard',
            'guard_name' => 'web',
            'description' => 'User can view dashboard'
        ]);

        Permission::create([
            'name' => 'can-list-users',
            'guard_name' => 'web',
            'description' => 'User can list users'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
