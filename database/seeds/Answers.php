<?php

use Illuminate\Database\Seeder;

class Answers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([

            [
                'answer'=>'yes',
                'question_id'=>1
            ]
        ]);
    }
}
