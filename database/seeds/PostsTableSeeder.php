<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Make the Most of Your Workout Routine',
            'slug' => 'make-the-most-of-your-workout-routine',
            'image' => 'make-the-most-of-your-workout-routine.jpg',
            'body' => 'Finding time to break a sweat at the gym can be hard with a busy work schedule and a full social calendar. But studies show that all it takes is 30 minutes of exercise five days a week to lower your risk for diabetes and heart disease and lengthen your lifespan. With the right planning, you can create a quick and effective workout — and reach your fitness goals in that half-hour.',
            'user_id' => 'a01411f5-a9ca-4068-b3a1-e3c48a5b0ed4',
            'category_id' => 1,
            'active' => true,
        ]);

        DB::table('posts')->insert([
            'title' => '5 Detoxifying Soup Recipes',
            'slug' => 'detoxifying-vegetable-soup-recipes',
            'image' => 'detoxifying-vegetable-soup-recipes.jpg',
            'body' => 'Bone broth continues to be the hipster darling of soup trends, but if healthy eating is one of your January health goals, just sipping on broth isn\'t going to cut it. You\'re going to need veggies — and a lot of them! Sure, salads pack in a lot of produce, but broth-based soups may be the most satisfying — and warming! — route to healthy eating this winter. If indulged a little too much over the holidays, a detoxifying veggie soup is the perfect way to usher in a healthier year, one satisfying slurp at a time',
            'user_id' => 'a01411f5-a9ca-4068-b3a1-e3c48a5b0ed4',
            'category_id' => 1,
            'active' => true,
        ]);

        DB::table('posts')->insert([
            'title' => 'New Research on Sleep',
            'slug' => 'new-research-on-sleep',
            'image' => 'new-research-on-sleep.jpg',
            'body' => 'A lot of people struggle when it comes to regularly clocking enough sleep. More than a third of adults in the United States do not get the seven or more hours of sleep per night recommended by the American Academy of Sleep Medicine (AASM), according to a 2015 AASM report. Health professionals and public health advocates including AASM and the Centers for Disease Control and Prevention (CDC) jointly declared chronic insufficient sleep a health epidemic back in 2013. That latter step isn’t surprising, because not getting enough sleep regularly has been linked to a host of health problems, like problems with thinking, memory, concentration, and mood in the short run, and problems like obesity, type 2 diabetes, Alzheimer’s disease, and some types of cancer in the long run.',
            'user_id' => 'a01411f5-a9ca-4068-b3a1-e3c48a5b0ed4',
            'category_id' => 1,
            'active' => true,
        ]);

        DB::table('posts')->insert([
            'title' => 'Scientific Fixes For Common Skincare Problems',
            'slug' => 'scientific-fixes-for-common-skincare-problems',
            'image' => 'scientific-fixes-for-common-skincare-problems.jpg',
            'body' => 'Sometimes, it can feel like your skin isn’t on your team. It erupts in breakouts, your puffy eyes give away just how little sleep you clocked last night, and one day you look in the mirror and notice sagging or wrinkles that you swore weren’t there yesterday. Head to the store or online and you’ll be besieged by a litany of beauty products that all make big promises. To cut through the “where do I begin?” confusion, we asked top-notch dermatologists how to get things under control.',
            'user_id' => 'a01411f5-a9ca-4068-b3a1-e3c48a5b0ed4',
            'category_id' => 2,
            'active' => true,
        ]);

        DB::table('posts')->insert([
            'title' => 'Foods Nutrition Experts Won’t Eat',
            'slug' => 'foods-nutrition-experts-wont-eat',
            'image' => 'foods-nutrition-experts-wont-eat.jpg',
            'body' => 'Finding time to break a sweat at the gym can be hard with a busy work schedule and a full social calendar. But studies show that all it takes is 30 minutes of exercise five days a week to lower your risk for diabetes and heart disease and lengthen your lifespan. With the right planning, you can create a quick and effective workout — and reach your fitness goals in that half-hour.',
            'user_id' => 'a01411f5-a9ca-4068-b3a1-e3c48a5b0ed4',
            'category_id' => 2,
            'active' => true,
        ]);
    }
}
