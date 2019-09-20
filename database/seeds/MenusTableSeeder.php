<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. About
        DB::table('menus')->insert([
            'name' => 'About',
            'icon' => 'fas fa-clinic-medical',
            'link' => '/about',
            'active' => true,
            'type' => 1,
        ]);

        // 2. Doctor
        DB::table('menus')->insert([
            'name' => 'Doctors',
            'icon' => 'fas fa-user-md',
            'link' => '/doctors',
            'active' => true,
            'type' => 1,
        ]);

        // 3. Services
        DB::table('menus')->insert([
            'name' => 'Services',
            'icon' => 'fas fa-briefcase-medical',
            'link' => '/services',
            'active' => true,
            'type' => 1,
        ]);

        // 4. Blog
        DB::table('menus')->insert([
            'name' => 'Blog',
            'icon' => 'fas fa-blog',
            'link' => '/blog',
            'active' => true,
            'type' => 1,
        ]);

        // 5. Reviews
        DB::table('menus')->insert([
            'name' => 'Reviews',
            'icon' => 'fas fa-comment-medical',
            'link' => '/reviews',
            'active' => true,
            'type' => 1,
        ]);

        // 6. Gallery
        DB::table('menus')->insert([
            'name' => 'Gallery',
            'icon' => 'fas fa-photo-video',
            'link' => '/gallery',
            'active' => true,
            'type' => 1,
        ]);

        // 7. Appointments
        DB::table('menus')->insert([
            'name' => 'Appointments',
            'icon' => 'far fa-calendar-check',
            'link' => '/my-appointments',
            'active' => true,
            'type' => 2,
        ]);

        // 8. Members
        DB::table('menus')->insert([
            'name' => 'Members',
            'icon' => 'fas fa-user-friends',
            'link' => '/members',
            'active' => true,
            'type' => 2,
        ]);

        // 9. Chats
        DB::table('menus')->insert([
            'name' => 'Chat',
            'icon' => 'fas fa-comments',
            'link' => '/chat',
            'active' => true,
            'type' => 2,
        ]);
    }
}
