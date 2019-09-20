<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'url' => 'gallery/reception.jpg',
            'thumb' => 'gallery/reception-thumb.jpg',
            'content' => 'image',
            'description' => 'some description about image',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/carboxytherapy-medical-equipment.jpg',
            'thumb' => 'gallery/carboxytherapy-medical-equipment-thumb.jpg',
            'content' => 'image',
            'description' => 'Carboxytherapy Medical Equipment',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/father-with-little-girl-in-medical-office.jpg',
            'thumb' => 'gallery/father-with-little-girl-in-medical-office-thumb.jpg',
            'content' => 'image',
            'description' => 'Child Doctor Visit',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/medical-examination.jpg',
            'thumb' => 'gallery/medical-examination-thumb.jpg',
            'content' => 'image',
            'description' => 'Live Medical Examination',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/medical-examination-of-knee.jpg',
            'thumb' => 'gallery/medical-examination-of-knee-thumb.jpg',
            'content' => 'image',
            'description' => 'Medical Examination of Knee',
            'active' => true
        ]);
       
        DB::table('galleries')->insert([
            'url' => 'gallery/medical-tools.jpg',
            'thumb' => 'gallery/medical-tools-thumb.jpg',
            'content' => 'image',
            'description' => 'Medical Tools',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/pensive-female-doctor.jpg',
            'thumb' => 'gallery/pensive-female-doctor-thumb.jpg',
            'content' => 'image',
            'description' => 'Pensive Female Doctor',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/plastic-surgeon-using-lip-injectables.jpg',
            'thumb' => 'gallery/plastic-surgeon-using-lip-injectables-thumb.jpg',
            'content' => 'image',
            'description' => 'Plastic Surgeon using Lip Injectables',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/portrait-of-female-optometrist-at-eyesight.jpg',
            'thumb' => 'gallery/portrait-of-female-optometrist-at-eyesight-thumb.jpg',
            'content' => 'image',
            'description' => 'Female Optometrist at Eyesight',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/professional-dentist-doing-teeth-checkup.jpg',
            'thumb' => 'gallery/professional-dentist-doing-teeth-checkup-thumb.jpg',
            'content' => 'image',
            'description' => 'Professional Dentist doing teeth checkup',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/senior-doctor-doing-medical-exam.jpg',
            'thumb' => 'gallery/senior-doctor-doing-medical-exam-thumb.jpg',
            'content' => 'image',
            'description' => 'Senior Doctor doing Medical Exam',
            'active' => true
        ]);

        DB::table('galleries')->insert([
            'url' => 'gallery/team-of-doctors-at-medical-office.jpg',
            'thumb' => 'gallery/team-of-doctors-at-medical-office-thumb.jpg',
            'content' => 'image',
            'description' => 'Team of Doctors at Medical Office',
            'active' => true
        ]);
        
    }
}
