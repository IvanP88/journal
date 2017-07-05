<?php

use Illuminate\Database\Seeder;

class SexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sex')->insert([
            'name' => 'male'
        ]);
        DB::table('sex')->insert([
            'name' => 'female'
        ]);
    }
}
