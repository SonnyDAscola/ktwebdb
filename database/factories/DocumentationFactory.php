<?php

namespace Database\Factories;

use App\Models\Documentation;
use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentationFactory extends Factory
{
    protected $model = Documentation::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('de_DE');
        $client_id = $this->faker->randomElement(Client::all())->id;
        $allUsers = User::all();
        $user_id = $this->faker->randomElement($allUsers)->id;
        $date = $this->faker->dateTimeBetween('-4 months');
        if ($this->faker->randomDigit() > 8) {
            $author_id = $this->faker->randomElement($allUsers)->id;
            $edit_date = $this->faker->dateTimeInInterval($date, '+3 days');

        } else {
            $author_id = $user_id;
            $edit_date = $date;
        }

    	return [
            'created_at' => $edit_date,
            'author_id' => $author_id,
            'advisor_id' => $user_id,
            'call_started' => $date,
            'call_duration' => $this->faker->numberBetween(0,14) * 5,
            'client_id' => $client_id
    	    //
    	];
    }
}
