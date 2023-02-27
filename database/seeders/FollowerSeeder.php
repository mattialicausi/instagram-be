<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use app\Models\Follower;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = DB::table('users')->pluck('id');
        $followers = [];

        // Populating the $followers array with 10 random entries
        for ($i = 0; $i < 10; $i++) {
            $following_user_id = $users->random();
            $followed_user_id = $users->random();

            // Making sure we don't add a duplicate entry
            while ($following_user_id === $followed_user_id) {
                $followed_user_id = $users->random();
            }

            $followers[] = [
                'following_user_id' => $following_user_id,
                'followed_user_id' => $followed_user_id,
                // 'created_at' => now(),
                // 'updated_at' => now(),

            ];
            // $followers->save();
        }

        DB::table('followers')->insert($followers);
    }
}
