<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('de_DE');
        $tags = ['dominant', 'anstrengend', 'hungrig', 'wertschätzend', 'nervig', 'langweilig', 'schnell', 'langsam',
        'Redefluss', 'belästigend', 'schüchtern', 'unkonzentriert', 'Universität', 'Verwandschaft', 'Elternhaus',
        'Partnerschaft', 'Arbeit', 'Reisen', 'Norddeutschland', 'Süddeutschland', 'Westdeutschland','Ostdeutschland'
        , 'Österreich', 'Schweiz', 'Schweden', 'Brasilien'];
    	return [
            'tag' => $this->faker->unique()->randomElement($tags),
            'description' => $this->faker->optional($weight = 20)->sentence(),
            'created_at' => $this->faker->dateTimeBetween('-4 months')
    	];
    }
}
