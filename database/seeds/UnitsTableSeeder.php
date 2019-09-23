<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'title' => 'kilogram',
            'abbr' => 'kg',
            'detail' => 'body mass'
        ]);

        DB::table('units')->insert([
            'title' => 'centimeters',
            'abbr' => 'cms',
            'detail' => 'body height'
        ]);
    }
}
