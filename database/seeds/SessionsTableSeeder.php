<?php

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            'title' => 'morning',
            'start' => '11:00',
            'end' => '13:00',
            'charge' => '300',
            'detail' => '',
        ]);

        DB::table('sessions')->insert([
            'title' => 'afternoon',
            'start' => '13:00',
            'end' => '15:00',
            'charge' => '400',
            'detail' => '',
        ]);

        DB::table('sessions')->insert([
            'title' => 'evening',
            'start' => '18:30',
            'end' => '19:30',
            'charge' => '500',
            'detail' => '',
        ]);

        DB::table('sessions')->insert([
            'title' => 'late-evening',
            'start' => '20:00',
            'end' => '21:00',
            'charge' => '500',
            'detail' => '',
        ]);
    }
}
