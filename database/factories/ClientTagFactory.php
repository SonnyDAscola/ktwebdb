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
        $client_id = $this->faker->randomElement(Client::all())->id;
        $tag_id = $this->faker->randomElement(Tag::all())->id;
    	return [
            'client_id' => $client_id,
            'tag_id' => $tag_id
    	];
    }
}
