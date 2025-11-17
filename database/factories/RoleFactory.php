<?php

namespace Database\Factories;

use App\Domains\Roles\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\AppDomainsRolesModelsRole>
 */
class RoleFactory extends Factory
{
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['Admin', 'Employee', 'HR', 'Manager']),
            'description' => fake()->sentence,
        ];
    }
}
