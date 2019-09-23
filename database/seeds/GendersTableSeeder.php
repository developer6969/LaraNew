<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            'title' => 'Male',
            'icon' => 'fas fa-male'
        ]);

        DB::table('genders')->insert([
            'title' => 'Female',
            'icon' => 'fas fa-female'
        ]);

        DB::table('genders')->insert([
            'title' => 'Other',
            'icon' => 'fas fa-genderless'
        ]);
    }
}
