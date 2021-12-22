<?php

namespace Database\Factories;

use App\Models\ClientTag;
use App\Models\Client;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientTagFactory extends Factory
{
    protected $model = ClientTag::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('de_DE');
        $client_count = count(Client::all());
        $tag_count = count(Tag::all());
    	return [
            'client_id' => $this->faker->numberBetween(1,$client_count),
            'tag_id' => $this->faker->numberBetween(1,$tag_count)
    	];
    }
}
