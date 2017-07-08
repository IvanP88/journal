<?php

use Illuminate\Database\Seeder;

class LeanerLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leaner_log')->insert([
            'user_id' => 2,
            'teacher_id' => 6,
            'subject_id' => 1,
            'group_id' => 1,
            'rating' => 0,
        ]);
        DB::table('leaner_log')->insert([
            'user_id' => 2,
            'teacher_id' => 6,
            'subject_id' => 2,
            'group_id' => 1,
            'rating' => 0,
        ]);
        DB::table('leaner_log')->insert([
            'user_id' => 2,
            'teacher_id' => 6,
            'subject_id' => 3,
            'group_id' => 1,
            'rating' => 0,
        ]);
        DB::table('leaner_log')->insert([
            'user_id' => 2,
            'teacher_id' => 6,
            'subject_id' => 4,
            'group_id' => 1,
            'rating' => 0,
        ]);
    }
}
