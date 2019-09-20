<?php

use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'title' => 'sunday',
            'weekday' => '1',
        ]);

        DB::table('days')->insert([
            'title' => 'monday',
            'weekday' => '2',
        ]);

        DB::table('days')->insert([
            'title' => 'tuesday',
            'weekday' => '3',
        ]);

        DB::table('days')->insert([
            'title' => 'wednessday',
            'weekday' => '4',
        ]);

        DB::table('days')->insert([
            'title' => 'thursday',
            'weekday' => '5',
        ]);

        DB::table('days')->insert([
            'title' => 'friday',
            'weekday' => '6',
        ]);

        DB::table('days')->insert([
            'title' => 'saturday',
            'weekday' => '7',
        ]);

    }
}
