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
            ['subject_name' => 'history']
        );
        DB::table('subjects')->insert(
            ['subject_name' => 'astronomy']
        );
        DB::table('subjects')->insert(
            ['subject_name' => 'physics']
        );
        DB::table('subjects')->insert(
            ['subject_name' => 'philosophy']
        );
        DB::table('subjects')->insert(
            ['subject_name' => 'music']
        );
        DB::table('subjects')->insert(
            ['subject_name' => 'chemistry']
        );
        DB::table('subjects')->insert(
            ['subject_name' => 'biology']
        );
    }
}
