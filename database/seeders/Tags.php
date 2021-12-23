<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\ClientTag;
use Exception;
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
        try {
            Tag::factory()->count(6)->create();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
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
        ClientTag::factory()->count(8)->create();

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
