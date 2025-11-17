<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domains\Roles\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->count(4)->create();
    }
}
