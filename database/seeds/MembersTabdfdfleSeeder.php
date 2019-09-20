<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Arora's
        DB::table('members')->insert([
            'name' => 'Deepak Arora',
            'user_id' => 'c339ee02-c243-46db-87b8-0716a5814d14',
        ]);

        DB::table('members')->insert([
            'name' => 'Neha Arora',
            'user_id' => 'c339ee02-c243-46db-87b8-0716a5814d14',
        ]);

        DB::table('members')->insert([
            'name' => 'Divyanshi Arora',
            'user_id' => 'c339ee02-c243-46db-87b8-0716a5814d14',
        ]);

        // Sikka's
        DB::table('members')->insert([
            'name' => 'Abhay Sikka',
            'user_id' => 'f75c2b12-c3c1-4e41-9928-cf3fbc96d7d6',
        ]);

        DB::table('members')->insert([
            'name' => 'Neelam Sikka',
            'user_id' => 'f75c2b12-c3c1-4e41-9928-cf3fbc96d7d6',
        ]);

        DB::table('members')->insert([
            'name' => 'Akshay Sikka',
            'user_id' => 'f75c2b12-c3c1-4e41-9928-cf3fbc96d7d6',
        ]);

        // Kumar's
        DB::table('members')->insert([
            'name' => 'Kapil Kumar',
            'user_id' => 'de02fb40-e2cc-44dd-bc9e-f0fb7d864ddf',
        ]);

        DB::table('members')->insert([
            'name' => 'Kavita Kumar',
            'user_id' => 'de02fb40-e2cc-44dd-bc9e-f0fb7d864ddf',
        ]);        
        
        // Sharma
        DB::table('members')->insert([
            'name' => 'Atul Sharma',
            'user_id' => 'a1aaeeba-9441-451a-836e-5ab141b4f31b',
        ]);
    }
}
