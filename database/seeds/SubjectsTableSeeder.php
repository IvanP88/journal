<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(
            ['name' => 'history']
        );
        DB::table('subjects')->insert(
            ['name' => 'astronomy']
        );
        DB::table('subjects')->insert(
            ['name' => 'physics']
        );
        DB::table('subjects')->insert(
            ['name' => 'philosophy']
        );
        DB::table('subjects')->insert(
            ['name' => 'music']
        );
        DB::table('subjects')->insert(
            ['name' => 'chemistry']
        );
        DB::table('subjects')->insert(
            ['name' => 'biology']
        );
    }
}
