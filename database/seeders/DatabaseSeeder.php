<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Clients;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Clients::class,
            Users::class,
            Tags::class,
            DocumentationsSeeder::class
        ]);
    }
}
