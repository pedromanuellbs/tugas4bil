<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersFactory extends Factory
{
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'pass' => Hash::make('12345678'),
            'role' => 'Operator'
        ];
    }
}
