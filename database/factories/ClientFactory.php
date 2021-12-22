<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('de_DE');

    	return [
            'name' => $this->faker->firstName(),
            'revisit_client' => ($this->faker->randomDigit() >= 8),
            'created_at' => $this->faker->dateTimeBetween('-4 months')
        ];
    }
}
