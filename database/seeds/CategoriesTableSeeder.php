<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Fitness
        DB::table('categories')->insert([
            'name' => 'Fitness',
            'slug' => 'fitness',
            'info' => 'Fitness'
        ]);

        // 2. Health
        DB::table('categories')->insert([
            'name' => 'Health',
            'slug' => 'health',
            'info' => 'Health'
        ]);

        // 3. Cough & Cold
        DB::table('categories')->insert([
            'name' => 'Cough & Cold',
            'slug' => 'cough-and-cold',
            'info' => 'Cough and Cold'
        ]);

    }
}
