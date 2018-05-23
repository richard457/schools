<?php

use Illuminate\Database\Seeder;

class Questions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([

            [
                'question'=>'Ese Ukunda Umupira',
            ]
        ]);
    }
}
