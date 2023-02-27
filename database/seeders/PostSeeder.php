<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('instagram_array.posts');

        foreach ($posts as $post) {
            $newpost = new Post();

            $newpost->post_image = $post['post_image'];
            $newpost->post_description = $post['post_description'];
            $newpost->post_video = $post['post_video'];
            $newpost->user_id = $post['user_id'];
            $newpost->fill($post);

            $newpost->save();
        }
    }
}
