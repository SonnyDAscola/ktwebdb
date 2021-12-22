<?php

namespace Database\Seeders;

use App\Models\Documentation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DocumentationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documentation::factory()->count(120)->create();
        DB::table('documentations')->insert([
            'author_id' => 1,
            'advisor_id' => 1,
            'call_started' => Carbon::now(),
            'call_duration' => 35,
            'client_id' => 1
        ]);
        DB::table('documentations')->insert([
            'author_id' => 1,
            'advisor_id' => 1,
            'call_started' => Carbon::today(),
            'call_duration' => 5,
            'client_id' => 3
        ]);
        DB::table('documentations')->insert([
            'author_id' => 4,
            'advisor_id' => 1,
            'call_started' => '2021-12-19 19:04:00',
            'call_duration' => 15,
            'client_id' => 2
        ]);
        // https://stackoverflow.com/a/41737717
        // https://packagist.org/packages/joshtronic/php-loremipsum
    }
}
