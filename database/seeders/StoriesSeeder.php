<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Storie;

class StoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('instagram_array.stories');

        foreach ($users as $storie) {

            foreach ($storie['user_id'] as $user) {
                $newstorie = new Storie();

                $newstorie->story_image = $user['story_image'];
                $newstorie->story_description = $user['story_description'];

                $newstorie->user_id = $user;

                $newstorie->save();
            }

        }
    }
}
