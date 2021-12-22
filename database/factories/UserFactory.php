<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('de_DE');

    	return [
            'name' => $this->faker->name(),
            'password' => Hash::make('password'),
            'description' => $this->faker->optional($weight=60)->paragraph(),
            'active' => $this->faker->boolean(),
            'email' => $this->faker->safeEmail(),
            'created_at' => $this->faker->dateTimeBetween('-4 months')
// 'email', 'description', 'password', 'active', 'is_admin', 'remember_token'
        ];
    }
}
