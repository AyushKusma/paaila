<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'a@a',
            'password' => 'asdfasdf',
        ]);

        // blog should be id: 1
        $categories = [
            'Blog',
        ];


        foreach ($categories as $category) {
            Category::create(
                [
                    'name' => $category,
                ]
            );
        }
    }
}
