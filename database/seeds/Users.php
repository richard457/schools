<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //
        DB::table('users')->insert([

            ['name' => 'alli', 'email' => 'alli@gmail.com', 'password' => Hash::make('password'),'role'=>'super']
        ]);
    }
}
