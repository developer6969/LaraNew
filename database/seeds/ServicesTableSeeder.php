<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icon' => 'icon/critical-care.png',
            'name' => 'Critical Care',
            'slug' => 'critical-care',
            'image' => 'critical-care.jpg',
            'detail' => 'critical-care detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/cardio-thoracic-and-vascular-surgery.png',
            'name' => 'Cardio Thoracic & Vascular Surgery',
            'slug' => 'cardio-thoracic-and-vascular-surgery',
            'image' => 'cardio-thoracic-and-vascular-surgery.jpg',
            'detail' => 'cardio-thoracic-and-vascular-surgery detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/dental-care.png',
            'name' => 'Dental Care',
            'slug' => 'dental-care',
            'image' => 'dental-care.jpg',
            'detail' => 'dental-care detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/gastroenterology-and-hepatology.png',
            'name' => 'Gastroenterology & Hepatology',
            'slug' => 'gastroenterology-and-hepatology',
            'image' => 'gastroenterology-and-hepatology.jpg',
            'detail' => 'gastroenterology-and-hepatology detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/gastroenterology.png',
            'name' => 'Gastrointestinal, Minimal Access Surgery & Liver Transplant',
            'slug' => 'gastrointestinal-and-hepatobiliary-surgery',
            'image' => 'gastrointestinal-and-hepatobiliary-surgery.jpg',
            'detail' => 'gastrointestinal-and-hepatobiliary-surgery detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);
        
        DB::table('services')->insert([
            'icon' => 'icon/medical-oncology.png',
            'name' => 'Haemato Medical Oncology & Bone Marrow Transplant',
            'slug' => 'haemato-medical-oncology-and-bone-marrow-transplant',
            'image' => 'medical-oncology.jpg',
            'detail' => 'haemato-medical-oncology-and-bone-marrow-transplant detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/interventional-cardiology.png',
            'name' => 'Interventional Cardiology',
            'slug' => 'interventional-cardiology',
            'image' => 'interventional-cardiology.jpg',
            'detail' => 'interventional-cardiology detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/neurology-and-paediatric-neurology.png',
            'name' => 'Neurology & Paediatric Neurology',
            'slug' => 'neurology-and-paediatric-neurology',
            'image' => 'neurology-and-paediatric-neurology.jpg',
            'detail' => 'neurology-and-paediatric-neurology detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/neurosurgery.png',
            'name' => 'Neurosurgery',
            'slug' => 'neurosurgery',
            'image' => 'neurosurgery.jpg',
            'detail' => 'neurosurgery detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/urology-nephrology.png',
            'name' => 'Nephrology, Urology & Kidney Transplant',
            'slug' => 'urology-nephrology',
            'image' => 'urology-nephrology.jpg',
            'detail' => 'urology-nephrology detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/orthopedics-and-joint-replacement.png',
            'name' => 'Orthopedics & Joint Replacement',
            'slug' => 'orthopedics-and-joint-replacement',
            'image' => 'orthopedics-and-joint-replacement.jpg',
            'detail' => 'orthopedics-and-joint-replacement detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/pulmonology-and-sleep-medicine.png',
            'name' => 'Pulmonology & Sleep Medicine',
            'slug' => 'pulmonology-and-sleep-medicine',
            'image' => 'pulmonology-and-sleep-medicine.jpg',
            'detail' => 'pulmonology-and-sleep-medicine detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/radiation-oncology.png',
            'name' => 'Radiation Oncology',
            'slug' => 'radiation-oncology',
            'image' => 'radiation-oncology.jpg',
            'detail' => 'radiation-oncology detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/surgical-oncology.png',
            'name' => 'Surgical Oncology',
            'slug' => 'surgical-oncology',
            'image' => 'surgical-oncology.jpg',
            'detail' => 'surgical-oncology detail',
            'category' => 'main',
            'doctor_id' => 1
        ]);
        
        DB::table('services')->insert([
            'icon' => 'icon/anesthesia.png',
            'name' => 'Anesthesia',
            'slug' => 'anesthesia',
            'image' => 'anesthesia.jpg',
            'detail' => 'anesthesia detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/bariatric-and-weight-loss-surgery.png',
            'name' => 'Bariatric & Weight Loss Surgery',
            'slug' => 'bariatric-and-weight-loss-surgery',
            'image' => 'bariatric-and-weight-loss-surgery.jpg',
            'detail' => 'bariatric-and-weight-loss-surgery detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/clinical-physcology.png',
            'name' => 'Clinical Psychology',
            'slug' => 'clinical-psychology',
            'image' => 'clinical-psychology.jpg',
            'detail' => 'clinical-psychology detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/dermatology-and-aesthetic-medicine.png',
            'name' => 'Dermatology & Aesthetics',
            'slug' => 'dermatology-and-aesthetic-medicine',
            'image' => 'dermatology-and-aesthetic-medicine.jpg',
            'detail' => 'dermatology-and-aesthetic-medicine detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/nutrition-and-dietetics.png',
            'name' => 'Nutrition & Dietetics',
            'slug' => 'nutrition-and-dietetics',
            'image' => 'nutrition-and-dietetics.jpg',
            'detail' => 'nutrition-and-dietetics detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/diabetes-endocrinology-and-metabolic-disorder.png',
            'name' => 'Diabetes, Endocrinology & Metabolic Disorder',
            'slug' => 'diabetes-endocrinology-and-metabolic-disorder',
            'image' => 'diabetes-endocrinology-and-metabolic-disorder.jpg',
            'detail' => 'diabetes-endocrinology-and-metabolic-disorder detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);
  
        DB::table('services')->insert([
            'icon' => 'icon/ent-and-cochlear-implants.png',
            'name' => 'ENT & Cochlear Implants',
            'slug' => 'ent-and-cochlear-implants',
            'image' => 'ent-and-cochlear-implants.jpg',
            'detail' => 'ent-and-cochlear-implants detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);
        
        DB::table('services')->insert([
            'icon' => 'icon/fetal-medicine.png',
            'name' => 'Foetal Medicine',
            'slug' => 'foetal-medicine',
            'image' => 'foetal-medicine.jpg',
            'detail' => 'foetal-medicine detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);
        
        DB::table('services')->insert([
            'icon' => 'icon/general-and-laparoscopic-surgery.png',
            'name' => 'General & Laparoscopic Surgery',
            'slug' => 'general-and-laparoscopic-surgery',
            'image' => 'general-and-laparoscopic-surgery.jpg',
            'detail' => 'general-and-laparoscopic-surgery detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/internal-medicine.png',
            'name' => 'Internal Medicine',
            'slug' => 'internal-medicine',
            'image' => 'internal-medicine.jpg',
            'detail' => 'internal-medicine detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/ivf-and-infertility.png',
            'name' => 'IVF & Infertility',
            'slug' => 'ivf-and-infertility',
            'image' => 'ivf-and-infertility.jpg',
            'detail' => 'ivf-and-infertility detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/nuclear-medicine.png',
            'name' => 'Nuclear Medicine',
            'slug' => 'nuclear-medicine',
            'image' => 'nuclear-medicine.jpg',
            'detail' => 'nuclear-medicine detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/ophthalmology.png',
            'name' => 'Ophthalmology',
            'slug' => 'ophthalmology',
            'image' => 'ophthalmology.jpg',
            'detail' => 'ophthalmology detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/paediatrics-and-neonatology.png',
            'name' => 'Paediatrics & Neonatology',
            'slug' => 'paediatrics-and-neonatology',
            'image' => 'paediatrics-and-neonatology.jpg',
            'detail' => 'paediatrics-and-neonatology detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/obstetrics-and-gynaecology.png',
            'name' => 'Obstetrics & Gynaecology',
            'slug' => 'obstetrics-and-gynaecology',
            'image' => 'obstetrics-and-gynaecology.jpg',
            'detail' => 'obstetrics-and-gynaecology detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/plastic-reconstructive-and-cosmetic-surgery.png',
            'name' => 'Plastic, Reconstructive & Cosmetic Surgery',
            'slug' => 'plastic-reconstructive-and-cosmetic-surgery',
            'image' => 'plastic-reconstructive-and-cosmetic-surgery.jpg',
            'detail' => 'plastic-reconstructive-and-cosmetic-surgery detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/pain-management.png',
            'name' => 'Pain Management',
            'slug' => 'pain-management',
            'image' => 'pain-management.jpg',
            'detail' => 'pain-management detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/rheumatology.png',
            'name' => 'Rheumatology',
            'slug' => 'rheumatology',
            'image' => 'rheumatology.jpg',
            'detail' => 'rheumatology detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/pathology-and-lab-medicine.png',
            'name' => 'Pathology & Lab Medicine',
            'slug' => 'pathology-and-lab-medicine',
            'image' => 'pathology-and-lab-medicine.jpg',
            'detail' => 'pathology-and-lab-medicine detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/physiotherapy.png',
            'name' => 'Physiotherapy',
            'slug' => 'physiotherapy',
            'image' => 'physiotherapy.jpg',
            'detail' => 'physiotherapy detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/imaging-interventional-radiology.png',
            'name' => 'Imaging & Interventional Radiology',
            'slug' => 'imaging-interventional-radiology',
            'image' => 'imaging-interventional-radiology.jpg',
            'detail' => 'imaging-interventional-radiology detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);

        DB::table('services')->insert([
            'icon' => 'icon/transfusion-medicine.png',
            'name' => 'Transfusion Medicine',
            'slug' => 'transfusion-medicine',
            'image' => 'transfusion-medicine.jpg',
            'detail' => 'transfusion-medicine detail',
            'category' => 'other',
            'doctor_id' => 1
        ]);
    }
}
