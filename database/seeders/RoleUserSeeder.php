<?php

namespace Database\Seeders;

use App\Domains\Users\Models\user;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            $user->roles()->sync([rand(1, 4)]); // assign one random role
        }
    }
}
