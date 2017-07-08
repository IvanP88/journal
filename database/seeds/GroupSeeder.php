<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group')->insert([
            'group_id' => 1,
            'user_id' => 2,
            'status' => True,
        ]);
        DB::table('group')->insert([
            'group_id' => 1,
            'user_id' => 3,
            'status' => True,
        ]);
        DB::table('group')->insert([
            'group_id' => 1,
            'user_id' => 4,
            'status' => True,
        ]);
        DB::table('group')->insert([
            'group_id' => 1,
            'user_id' => 5,
            'status' => True,
        ]);
    }
}
