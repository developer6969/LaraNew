<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'title' => 'Nursing Care',
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ipsa delectus. Dolor deserunt impedit necessitatibus, iusto mollitia ducimus iure aliquam consequuntur sapiente vel praesentium expedita architecto dolores quia tenetur atque.',
            'views' => '40',
            'star' => 5,
            'member_id' => '1',
            'tag_id' => '1',
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'Very Resonable',
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ipsa delectus. Dolor deserunt impedit necessitatibus, iusto mollitia ducimus iure aliquam consequuntur sapiente vel praesentium expedita architecto dolores quia tenetur atque.',
            'views' => '40',
            'star' => 5,
            'member_id' => '1',
            'tag_id' => '1',
        ]);

        DB::table('reviews')->insert([
            'title' => 'Doctors are Good',
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ipsa delectus. Dolor deserunt impedit necessitatibus, iusto mollitia ducimus iure aliquam consequuntur sapiente vel praesentium expedita architecto dolores quia tenetur atque.',
            'views' => '40',
            'star' => 5,
            'member_id' => '1',
            'tag_id' => '1',
        ]);

        DB::table('reviews')->insert([
            'title' => 'Laboratary',
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ipsa delectus. Dolor deserunt impedit necessitatibus, iusto mollitia ducimus iure aliquam consequuntur sapiente vel praesentium expedita architecto dolores quia tenetur atque.',
            'views' => '40',
            'star' => 5,
            'member_id' => '1',
            'tag_id' => '1',
        ]);

        DB::table('reviews')->insert([
            'title' => 'Nursing Care',
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ipsa delectus. Dolor deserunt impedit necessitatibus, iusto mollitia ducimus iure aliquam consequuntur sapiente vel praesentium expedita architecto dolores quia tenetur atque.',
            'views' => '40',
            'star' => 5,
            'member_id' => '1',
            'tag_id' => '1',
        ]);

        DB::table('reviews')->insert([
            'title' => 'Hospitality',
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ipsa delectus. Dolor deserunt impedit necessitatibus, iusto mollitia ducimus iure aliquam consequuntur sapiente vel praesentium expedita architecto dolores quia tenetur atque.',
            'views' => '40',
            'star' => 5,
            'member_id' => '1',
            'tag_id' => '1',
        ]);

        DB::table('reviews')->insert([
            'title' => 'Hygine',
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ipsa delectus. Dolor deserunt impedit necessitatibus, iusto mollitia ducimus iure aliquam consequuntur sapiente vel praesentium expedita architecto dolores quia tenetur atque.',
            'views' => '40',
            'star' => 5,
            'member_id' => '1',
            'tag_id' => '1',
        ]);

        DB::table('reviews')->insert([
            'title' => 'Paitent Care',
            'comment' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ipsa delectus. Dolor deserunt impedit necessitatibus, iusto mollitia ducimus iure aliquam consequuntur sapiente vel praesentium expedita architecto dolores quia tenetur atque.',
            'views' => '40',
            'star' => 5,
            'member_id' => '1',
            'tag_id' => '1',
        ]);
    }
}
