<?php

use Illuminate\Database\Seeder;

class Account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([


            ['name' => 'Kigali', 'user_id' => 1]
        ]);
    }
}
