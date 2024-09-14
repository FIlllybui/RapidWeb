<?php

namespace Database\Seeders;

use App\Models\TaskCategory;
use Illuminate\Database\Seeder;

class TaskCategorySeeder extends Seeder
{
    public function run()
    {
        TaskCategory::factory()->count(5)->create();
    }
}