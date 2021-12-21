<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Clients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Klient Armin'
        ]);
        DB::table('clients')->insert([
            'name' => 'Klientin Berta'
        ]);
        DB::table('clients')->insert([
            'name' => 'Klientin Claus',
            'revisit_client' => true
        ]);
    }
}
