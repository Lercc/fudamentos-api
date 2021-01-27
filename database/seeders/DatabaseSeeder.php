<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Post::factory(18)->create();

        User::create([
            'name'      => 'Luis Roque Ccanto',
            'email'     =>  'luis@luis.com',
            'password'  =>  bcrypt('123456')
        ]);
    }
}
