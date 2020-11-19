<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value =[ 
            [
                'name' => 'システム管理者',
                'email' => 'system@gmail.com',
                'password' => Hash::make('password'),
                'status' => 1,
        ],
         [
                'name' => '教員',
                'email' => 'teacher@gmail.com',
                'password' => Hash::make('password'),
                'status' => 2,
        ],
         [
                'name' => '学生',
                'email' => 'student@gmail.com',
                'password' => Hash::make('password'),
                'status' => 3,
        ],
         [
                'name' => '担任なし',
                'email' => 'not@gmail.com',
                'password' => Hash::make('password'),
                'status' => 4,
        ]
         ];
    
     DB::table('users')->insert($value);
    }
}
