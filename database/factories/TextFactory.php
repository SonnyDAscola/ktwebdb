<?php

namespace Database\Factories;

use App\Models\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

class TextFactory extends Factory
{
    protected $model = Text::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('de_DE');

        return [
            'texttype_id' => 3,
            'content' => $this->faker->paragraph($this->faker->numberBetween(1,5))
    	    //
    	];
    }
}
