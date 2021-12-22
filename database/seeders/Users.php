<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(30)->create();

        DB::table('users')->insert([
            'name' => 'Nutzer Manuel',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
        ]);
        DB::table('users')->insert([
            'name' => 'Nutzer Michaela',
            'email' => Str::random(10).'@gmail.com',
            'description' => 'Schicht: Di Abend, ungerade Woche',
            'password' => Hash::make('password')
        ]);
        DB::table('users')->insert([
            'name' => 'Nutzer Monika',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'description' => 'Ich mache gerade Pause, bis ich wieder Lust habe. Bis dahin wünsche ich Euch gute Gespräche!',
            'active' => false
        ]);
        DB::table('users')->insert([
            'name' => 'Nutzer Muhannad',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true
        ]);
        DB::table('users')->insert([
            'name' => 'Nutzer Moro',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
            'active' => false
        ]);
    }
}
