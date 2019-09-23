<?php

use Illuminate\Database\Seeder;

class HealthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('healths')->insert([
            'value' => '85',
            'note' => 'taken by nurse',
            'user_id' => 'c339ee02-c243-46db-87b8-0716a5814d14',
            'record_id' => '1',
            'member_id' => '2',
        ]);

    }
}
