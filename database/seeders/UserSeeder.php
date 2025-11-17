<?php

namespace Database\Seeders;

use App\Domains\Users\Models\User;
use Illuminate\Database\Seeder;
use App\Domains\Organizations\Models\Organization;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $orgIds = Organization::pluck('id')->toArray();

        if (empty($orgIds)) {
            $this->command->error("No organizations found. Seed organizations first.");
            return;
        }        

        User::factory()->count(10)
            ->make()
            ->each(function ($user) use ($orgIds){
                $user->organization_id = fake()->randomElement($orgIds);
                $user->save();
            });
    }
}
