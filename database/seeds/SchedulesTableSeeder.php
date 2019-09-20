<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Doctor : Asha Gupta(1)
         * Clinic : Ashok Nagar(1)
         * Session : Morning (11am - 1pm)(1)
         */

        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '1', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '2', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '3', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '4', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '5', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

         // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '6',
            'appointments_count' => '5',
            'status' => 'available',
        ]);

         // Sunday
         DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '7',
            'appointments_count' => '0',
            'status' => 'off',
        ]);

         /* Doctor : Asha Gupta(1)
         * Clinic : Ashok Nagar(1)
         * Session : Evening (8pm - 9pm)(4)
         */
        
        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '4',
            'day_id' => '1', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '4',
            'day_id' => '2', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '4',
            'day_id' => '3', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '4',
            'day_id' => '4', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '4',
            'day_id' => '5', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '4',
            'day_id' => '6',
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Sunday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '1',
            'session_id' => '4',
            'day_id' => '7',
            'appointments_count' => '0',
            'status' => 'off',
        ]);

        /* Doctor : Asha Gupta(1)
         * Clinic : Tri Nagar(2)
         * Session : Evening (6:30pm - 7:30pm)(3)
         */
        
        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '2',
            'session_id' => '3',
            'day_id' => '1', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '2',
            'session_id' => '3',
            'day_id' => '2', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '2',
            'session_id' => '3',
            'day_id' => '3', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '2',
            'session_id' => '3',
            'day_id' => '4', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '2',
            'session_id' => '3',
            'day_id' => '5', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '2',
            'session_id' => '3',
            'day_id' => '6',
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Sunday
        DB::table('schedules')->insert([
            'doctor_id' => '1',
            'clinic_id' => '2',
            'session_id' => '3',
            'day_id' => '7',
            'appointments_count' => '0',
            'status' => 'off',
        ]);



        /* Doctor : Suman Mehta(2)
         * Clinic : Ashok Nagar(1)
         * Session : Afternoon (1pm - 3pm)(2)
         */
        
        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '2',
            'clinic_id' => '1',
            'session_id' => '2',
            'day_id' => '1', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '2',
            'clinic_id' => '1',
            'session_id' => '2',
            'day_id' => '2', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '2',
            'clinic_id' => '1',
            'session_id' => '2',
            'day_id' => '3', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '2',
            'clinic_id' => '1',
            'session_id' => '2',
            'day_id' => '4', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '2',
            'clinic_id' => '1',
            'session_id' => '2',
            'day_id' => '5', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '2',
            'clinic_id' => '1',
            'session_id' => '2',
            'day_id' => '6',
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Sunday
        DB::table('schedules')->insert([
            'doctor_id' => '2',
            'clinic_id' => '1',
            'session_id' => '2',
            'day_id' => '7',
            'appointments_count' => '0',
            'status' => 'off',
        ]);



        /* Doctor : Nupur Jain(3)
         * Clinic : Ashok Nagar(1)
         * Session : Morning (11am - 1pm)(1)
         */
        
        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '3',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '1', 
            'appointments_count' => '0',
            'status' => 'off',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '3',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '2', 
            'appointments_count' => '0',
            'status' => 'off',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '3',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '3', 
            'appointments_count' => '0',
            'status' => 'off',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '3',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '4', 
            'appointments_count' => '0',
            'status' => 'off',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '3',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '5', 
            'appointments_count' => '0',
            'status' => 'off',
        ]);

        // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '3',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '6', 
            'appointments_count' => '0',
            'status' => 'off',
        ]);

        // Sunday
        DB::table('schedules')->insert([
            'doctor_id' => '3',
            'clinic_id' => '1',
            'session_id' => '1',
            'day_id' => '7', 
            'appointments_count' => '10',
            'status' => 'available',
        ]);

       

        /* Doctor : Tarak Mehta(4)
         * Clinic : Tri Nagar(2)
         * Session : Morning (11am - 1pm)(1)
         */

        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '1',
            'day_id' => '1', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '1',
            'day_id' => '2', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '1',
            'day_id' => '3', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '1',
            'day_id' => '4', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '1',
            'day_id' => '5', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '1',
            'day_id' => '6',
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Sunday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '1',
            'day_id' => '7',
            'appointments_count' => '0',
            'status' => 'off',
        ]);

         /* Doctor : Tarak Mehta(4)
         *  Clinic : Tri Nagar(2)
         *  Session : Evening (8pm - 9pm)(4)
         */
        
        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '4',
            'day_id' => '1', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '4',
            'day_id' => '2', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '4',
            'day_id' => '3', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '4',
            'day_id' => '4', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '4',
            'day_id' => '5', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '4',
            'day_id' => '6',
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Sunday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '2',
            'session_id' => '4',
            'day_id' => '7',
            'appointments_count' => '0',
            'status' => 'off',
        ]);

         /* Doctor : Tarak Mehta(4)
         * Clinic : Ashok Nagar(1)
         * Session : Evening (6:30pm - 7:30pm)(3)
         */
        
        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '1',
            'session_id' => '3',
            'day_id' => '1', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '1',
            'session_id' => '3',
            'day_id' => '2', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '1',
            'session_id' => '3',
            'day_id' => '3', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '1',
            'session_id' => '3',
            'day_id' => '4', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '1',
            'session_id' => '3',
            'day_id' => '5', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

         // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '1',
            'session_id' => '3',
            'day_id' => '6',
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Sunday
        DB::table('schedules')->insert([
            'doctor_id' => '4',
            'clinic_id' => '1',
            'session_id' => '3',
            'day_id' => '7',
            'appointments_count' => '0',
            'status' => 'off',
        ]);


        /* Doctor : Pankaj Goel(5)
         * Clinic : Ashok Nagar(2)
         * Session : Afternoon (1pm - 3pm)(2)
         */
        
        // Monday
        DB::table('schedules')->insert([
            'doctor_id' => '5',
            'clinic_id' => '2',
            'session_id' => '2',
            'day_id' => '1', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Tuesday
        DB::table('schedules')->insert([
            'doctor_id' => '5',
            'clinic_id' => '2',
            'session_id' => '2',
            'day_id' => '2', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Wednessday
        DB::table('schedules')->insert([
            'doctor_id' => '5',
            'clinic_id' => '2',
            'session_id' => '2',
            'day_id' => '3', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Thursday
        DB::table('schedules')->insert([
            'doctor_id' => '5',
            'clinic_id' => '2',
            'session_id' => '2',
            'day_id' => '4', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Friday
        DB::table('schedules')->insert([
            'doctor_id' => '5',
            'clinic_id' => '2',
            'session_id' => '2',
            'day_id' => '5', 
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Saturday
        DB::table('schedules')->insert([
            'doctor_id' => '5',
            'clinic_id' => '2',
            'session_id' => '2',
            'day_id' => '6',
            'appointments_count' => '5',
            'status' => 'available',
        ]);

        // Sunday
        DB::table('schedules')->insert([
            'doctor_id' => '5',
            'clinic_id' => '2',
            'session_id' => '2',
            'day_id' => '7',
            'appointments_count' => '0',
            'status' => 'off',
        ]);
    }
}