<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'title' => 'pending',
            'detail' => 'Your appointment is yet to confirm'
        ]);

        DB::table('statuses')->insert([
            'title' => 'confirmed',
            'detail' => 'Your appointment is now confirmed'
        ]);

        DB::table('statuses')->insert([
            'title' => 'arrived',
            'detail' => 'Reached Clinic'
        ]);

        DB::table('statuses')->insert([
            'title' => 'waiting',
            'detail' => 'You are in que'
        ]);

        DB::table('statuses')->insert([
            'title' => 'active',
            'detail' => 'Consulting with doctor'
        ]);

        DB::table('statuses')->insert([
            'title' => 'completed',
            'detail' => 'Appointment Done'
        ]);

        DB::table('statuses')->insert([
            'title' => 'cancelled',
            'detail' => 'Appointment Cancelled'
        ]);

        DB::table('statuses')->insert([
            'title' => 'available',
            'detail' => 'Doctor is available at clinic'
        ]);

        DB::table('statuses')->insert([
            'title' => 'unavailable',
            'detail' => 'Doctor is unavailable for current session'
        ]);

    }
}
