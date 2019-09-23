<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'icon' => 'fas fa-weight',
            'title' => 'weight',
            'detail' => 'weight of your body',
            'instructions' => 'remove any heavy object that you might be wearing',
            'unit_id' => 1,
        ]);

        DB::table('records')->insert([
            'icon' => 'fas fa-ruler-vertical',
            'title' => 'height',
            'detail' => 'length of your body',
            'instructions' => 'remove shoes or cap',
            'unit_id' => 2,
        ]);
    }
}
