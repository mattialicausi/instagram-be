<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Functions\Helpers;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('instagram_array.users');

        foreach ($users as $user) {
            $newuser = new User();
            $newuser->name = $user['name'];
            $newuser->slug = Helpers::generateSlug($newuser->name);

            $newuser->lastname = $user['lastname'];
            $newuser->profile_name = $user['profile_name'];
            $newuser->profile_image = $user['profile_image'];
            $newuser->profile_description = $user['profile_description'];
            $user['password'] = Hash::make($user['password']);
            $newuser->fill($user);

            $newuser->save();
        }
    }
}
