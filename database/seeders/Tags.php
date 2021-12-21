<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Tags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag' => 'Laberbacke',
            'description' => ' Kann einem wirklich das Ohr abreden. Hesse James ist ncihts dagegen...'
        ]);
        DB::table('tags')->insert([
            'tag' => 'unsicher'
        ]);
        DB::table('tags')->insert([
            'tag' => 'Lästermaul',
            'description' => 'Mag es zu Lästern, gerne über Politiker.'
        ]);

        DB::table('client_tag')->insert([
            'client_id' => 1,
            'tag_id' => 1
        ]);
        DB::table('client_tag')->insert([
            'client_id' => 1,
            'tag_id' => 3
        ]);
        DB::table('client_tag')->insert([
            'client_id' => 2,
            'tag_id' => 2
        ]);
    }
}
