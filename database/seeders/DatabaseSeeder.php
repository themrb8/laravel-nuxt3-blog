<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(20)->create();

        User::find(1)->update([
            'name' => 'Roman',
            'email' => 'officialroman786@gmail.com'
        ]);
    }
}
