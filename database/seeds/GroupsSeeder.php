<?php

use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'KT1',
        ]);
        DB::table('groups')->insert([
            'name' => 'KT2',
        ]);
        DB::table('groups')->insert([
            'name' => 'KT3',
        ]);
        DB::table('groups')->insert([
            'name' => 'KT3',
        ]);
    }
}
