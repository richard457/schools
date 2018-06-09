<?php

use Illuminate\Database\Seeder;

class DefaultQuestions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        'lang'=>'kin|fr|eng',
//        DB::table('default_questions')->insert([
//            [
//                'question'=>'Ese Ukunda Umupira',
//                'lang'=>'kin',
//            ]
//        ]);
        DB::table('default_questions')->insert([
            [
                'question'=>'Comment on fait un exam complet',
                'lang'=>'fr',
            ]
        ]);
        DB::table('default_questions')->insert([
            [
                'question'=>'How do you do your complicated exam',
                'lang'=>'eng',
            ]
        ]);
    }
}
