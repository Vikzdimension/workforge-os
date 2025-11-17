<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domains\Users\Models\user;

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
