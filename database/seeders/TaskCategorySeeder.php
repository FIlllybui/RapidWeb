<?php

namespace Database\Seeders;

use App\Models\TaskCategory;
use Illuminate\Database\Seeder;

class TaskCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Work',
            'Personal',
            'Home',
            'Health',
            'Finance',
            'Education',
            'Hobbies',
            'Social',
            'Errands',
            'Projects',
        ];

        foreach ($categories as $category) {
            TaskCategory::create(['name' => $category]);
        }
    }
}