<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'name' => 'Dr. Asha Gupta'
        ]);

        DB::table('doctors')->insert([
            'name' => 'Dr. Suman Mehta'
        ]);

        DB::table('doctors')->insert([
            'name' => 'Dr. Nupur Jain'
        ]);

        DB::table('doctors')->insert([
            'name' => 'Dr. Pankaj Goel'
        ]);

        DB::table('doctors')->insert([
            'name' => 'Dr. Tarak Mehta'
        ]);
    }
}
