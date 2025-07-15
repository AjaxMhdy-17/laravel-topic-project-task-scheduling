<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->Post();
    }


    function Post()
    {
        for ($i = 0; $i < 15; $i++) {
            Blog::create([
                "name" => "title " . $i,
                "description" => "description : " . $i
            ]);
        }
    }
}
