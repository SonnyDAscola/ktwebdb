<?php

namespace Database\Seeders;

use App\Models\Texttype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TexttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texttypes')->insert([
            'title' => 'Emotionale Befindlichkeit des Anrufers',
            'description' => 'War sie aufgeregt, betroffen, wütend? Wie hat sich die Emotion im Gespräch verändert?',
            'order' => 1
        ]);
        DB::table('texttypes')->insert([
            'title' => 'Emotionale Befindlichkeit der Berater:in',
            'description' => 'Wie ging es dir? Welche Gefühle wurden ausgelöst, welche übertragen?',
            'order' => 2
        ]);
        DB::table('texttypes')->insert([
            'title' => 'allgemeine Problematik',
            'description' => 'Wie ist der große Rahmen?',
            'order' => 3
        ]);
        DB::table('texttypes')->insert([
            'title' => 'Aktuelle Situation',
            'description' => 'Was ist gerade aktuell passiert?',
            'order' => 4
        ]);
        DB::table('texttypes')->insert([
            'title' => 'Ziele des Anrufers',
            'description' => 'Was will sie erreichen?',
            'order' => 5
        ]);
        DB::table('texttypes')->insert([
            'title' => 'Appell des Anrufers',
            'description' => 'Was wollte die Anruferin von Dir? "Ich will mit dir sprechen, und zwar, damit du..."',
            'order' => 6
        ]);
        DB::table('texttypes')->insert([
            'title' => 'Ressourcen des Anrufers',
            'description' => 'Auf welche Ressourcen kann die Anruferin zurückgreifen, allgemein oder auch in dieser speziellen Situation?',
            'order' => 7
        ]);
        DB::table('texttypes')->insert([
            'title' => 'Absprachen, Ende',
            'description' => 'Gibt es abschließende Absprachen? Wie endete das Gespräch?',
            'order' => 8
        ]);
        //
    }
}
