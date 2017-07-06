<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('qwerty12'),
            'role_id' => 1
        ]);
        DB::table('profile')->insert([
            'user_id' => 1,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);
//        Leaner
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Leaner1',
            'email' => 'leaner1@gmail.com',
            'password' => bcrypt('qwerty12'),
            'role_id' => 2
        ]);
        DB::table('profile')->insert([
            'user_id' => 2,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Leaner2',
            'email' => 'leaner2@gmail.com',
            'password' => bcrypt('qwerty12'),
            'role_id' => 2
        ]);
        DB::table('profile')->insert([
            'user_id' => 3,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Leaner3',
            'email' => 'leaner3@gmail.com',
            'password' => bcrypt('qwerty12'),
            'role_id' => 2
        ]);
        DB::table('profile')->insert([
            'user_id' => 4,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'leaner4',
            'email' => 'leaner4@gmail.com',
            'password' => bcrypt('qwerty12'),
            'role_id' => 2
        ]);
        DB::table('profile')->insert([
            'user_id' => 5,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);

//        Teachers
        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Teacher',
            'email' => 'teacher1@gmail.com',
            'password' => bcrypt('qwerty12'),
            'role_id' => 3
        ]);
        DB::table('profile')->insert([
            'user_id' => 6,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);

        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Teacher2',
            'email' => 'teacher2@gmail.com',
            'password' => bcrypt('qwerty12'),
            'role_id' => 3
        ]);
        DB::table('profile')->insert([
            'user_id' => 7,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);
//        Director
        DB::table('users')->insert([
            'id' => 8,
            'name' => 'Director',
            'email' => 'director@gmail.com',
            'password' => bcrypt('qwerty12'),
            'role_id' => 4
        ]);
        DB::table('profile')->insert([
            'user_id' => 8,
            'last_name' => '_',
            'sex_id' => 1,
            'coordinate' => '1',
            'cell_phone'=>'1',
            'address'=>'address'
        ]);
    }
}
