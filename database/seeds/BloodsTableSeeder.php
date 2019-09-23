<?php

use Illuminate\Database\Seeder;

class BloodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloods')->insert([
            'title' => 'A+',
            'details' => 'A RhD positive'
        ]);

        DB::table('bloods')->insert([
            'title' => 'A-',
            'details' => 'A RhD negative'
        ]);

        DB::table('bloods')->insert([
            'title' => 'B+',
            'details' => 'B RhD positive'
        ]);

        DB::table('bloods')->insert([
            'title' => 'B-',
            'details' => 'B RhD negative'
        ]);

        DB::table('bloods')->insert([
            'title' => 'O+',
            'details' => 'O RhD positive'
        ]);

        DB::table('bloods')->insert([
            'title' => 'O-',
            'details' => 'O RhD negative'
        ]);

        DB::table('bloods')->insert([
            'title' => 'AB+',
            'details' => 'AB RhD positive'
        ]);

        DB::table('bloods')->insert([
            'title' => 'AB-',
            'details' => 'AB RhD negative'
        ]);
    }
}
