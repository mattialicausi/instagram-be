<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('instagram_array.comments');

        foreach ($comments as $comment) {
            $newcomment = new Comment();
            $newcomment->user_id = $comment['user_id'];

            $newcomment->post_id = $comment['post_id'];
            $newcomment->comment = $comment['comment'];

            // $newcomment->fill($comment);

            $newcomment->save();
        }
    }
}
