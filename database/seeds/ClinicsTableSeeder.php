<?php

use Illuminate\Database\Seeder;

class ClinicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinics')->insert([
            'name' => 'Aditya Medical Center',
            'nick' => 'Aditya Medical Center, Rana Pratap Bagh',
            'tagline' => 'Multi-Speciality Clinic',
            'doctor' => 4,
            'phone' => '011 2745 4180',
            'mobile' => '9152644309',
            'incharge' => 'Richa Jain',
            'photo' => 'clinic/aditya-medical-centre-rana-pratap-bagh-delhi.jpg',
            'about' => 'Aditya Medical Centre is a Gynecology/Obstetrics Clinic in Rana Pratap Bagh, Delhi. The clinic is visited by dietitian/nutritionist like Ms. Nupur Jain,Dr. Asha Gupta and Dr. Suman Mehta. The timings of Aditya Medical Centre are: Mon-Sun: 11:00-15:00, 20:00-21:00. Some of the services provided by the Clinic are: Obstetrics & Gynaecology,Laboratory,Child Vaccination,Surgical Extraction and Daycare etc. Click on map to find directions to reach Aditya Medical Centre.',
            'open' => '11:00',
            'lunch' => '13:00',
            'close' => '21:00',
            'off' => '',
            'number' => 'C3/11',
            'street' => 'Rana Pratap Bagh',
            'area' => 'Ashok Vihar',
            'city' => 'New Delhi',
            'state' => 'Delhi',
            'country' => 'India',
            'pincode' => '110007',
            'nearby' => 'Near Gurudwara Nanak Pio',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218.75552408550254!2d77.19206494323734!3d28.6870025653338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0275a5e13037%3A0x31b44cef01e099b1!2sAditya%20Medical%20Centre!5e0!3m2!1sen!2sin!4v1567677242721!5m2!1sen!2sin',
            'gps_long' => '28.686985',
            'gps_lati' => '77.192234',
        ]);

        DB::table('clinics')->insert([
            'name' => 'Aditya Medical Center',
            'nick' => 'Aditya Medical Center, Tri Nagar',
            'tagline' => 'Multi-Speciality Clinic',
            'doctor' => 1,
            'phone' => '011 2745 4180',
            'mobile' => '9152644309',
            'incharge' => 'Bablu Sharma',
            'photo' => 'clinic/aditya-medical-centre-tri-nagar-delhi.jpg',
            'about' => 'Aditya Medical Centre is a Gynecology/Obstetrics Clinic in Tri Nagar, Delhi. The clinic is visited by dietitian/nutritionist like Ms. Nupur Jain,Dr. Asha Gupta and Dr. Suman Mehta. The timings of Aditya Medical Centre are: Mon-Sun: 11:00-15:00, 20:00-21:00. Some of the services provided by the Clinic are: Obstetrics & Gynaecology,Laboratory,Child Vaccination,Surgical Extraction and Daycare etc. Click on map to find directions to reach Aditya Medical Centre.',
            'open' => '18:00',
            'lunch' => '',
            'close' => '19:30',
            'off' => 'Sunday',
            'number' => '3442',
            'street' => 'Onkar Nagar B',
            'area' => 'Tri Nagar',
            'city' => 'New Delhi',
            'state' => 'Delhi',
            'country' => 'India',
            'pincode' => '110035',
            'nearby' => 'On Hansa Puri Road',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.4353329876!2d77.15691103765732!3d28.676621499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaef123f55fad6b71!2sAaditya%20Medical%20Centre!5e0!3m2!1sen!2sin!4v1567824549546!5m2!1sen!2sin',
            'gps_long' => '28.6766215',
            'gps_lati' => '77.156911',
        ]);
    }
}
