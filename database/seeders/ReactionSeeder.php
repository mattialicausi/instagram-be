<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $users = DB::table('users')->pluck('id');
            $posts = DB::table('posts')->pluck('id');
            $reactions = [];

            // Populating the $reactions array with 10 random entries
            for ($i = 0; $i < 10; $i++) {
                $user_id = $users->random();
                $post_id = $posts->random();
                $reaction_type = rand(0, 1);

                $reactions[] = [
                    'user_id' => $user_id,
                    'post_id' => $post_id,
                    'reaction_type' => $reaction_type,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            DB::table('reactions')->insert($reactions);
        }
    }

}
