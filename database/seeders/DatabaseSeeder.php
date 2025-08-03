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
            'name' => 'Admin',
            'email' => 'admin@paaila.edu.np',
            'password' => 'p@@ila8842',
        ]);

        // blog should be id: 1
        $categories = [
            'Blog',
            'Course'
        ];
        foreach ($categories as $category) {
            Category::create(
                [
                    'name' => $category,
                ]
            );
        }

        $courseCategories = ['UI/UX Design Service', 'Software Development', 'Digital Marketing', 'Self Management', 'Application Development', 'UI/UX Graphic Design'];

        foreach ($courseCategories as $courseCategory) {
            Category::create(
                [
                    'name' => $courseCategory,
                    'category_id' => 2, // Course category
                ]
            );
        }
    }
}
