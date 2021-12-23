<?php

namespace Database\Seeders;

use App\Models\Documentation;
use Illuminate\Database\Seeder;


class DocumentationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documentation::factory()->count(200)->configure()->create();

    }
}
