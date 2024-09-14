<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\TaskCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'title' => 'Complete project proposal',
                'description' => 'Draft and finalize the project proposal for the new client, including budget and timeline.',
                'completed' => true,
                'created_at' => '2024-08-15 09:00:00',
                'updated_at' => '2024-08-20 16:30:00',
            ],
            [
                'title' => 'Schedule team meeting',
                'description' => 'Arrange a team meeting to discuss Q4 goals and assign responsibilities.',
                'completed' => true,
                'created_at' => '2024-08-18 11:15:00',
                'updated_at' => '2024-08-19 14:00:00',
            ],
            [
                'title' => 'Update website content',
                'description' => 'Review and update the company website with new product information and team bios.',
                'completed' => false,
                'created_at' => '2024-08-22 13:45:00',
                'updated_at' => '2024-08-22 13:45:00',
            ],
            [
                'title' => 'Prepare financial report',
                'description' => 'Compile and analyze financial data for the monthly report to be presented to stakeholders.',
                'completed' => false,
                'created_at' => '2024-08-25 10:30:00',
                'updated_at' => '2024-08-25 10:30:00',
            ],
            [
                'title' => 'Conduct client feedback survey',
                'description' => 'Design and distribute a survey to gather client feedback on recent project deliverables.',
                'completed' => false,
                'created_at' => '2024-08-28 09:20:00',
                'updated_at' => '2024-08-28 09:20:00',
            ],
            [
                'title' => 'Optimize database queries',
                'description' => 'Review and optimize slow-running database queries to improve application performance.',
                'completed' => false,
                'created_at' => '2024-09-01 14:00:00',
                'updated_at' => '2024-09-01 14:00:00',
            ],
            [
                'title' => 'Plan company retreat',
                'description' => 'Research venues and activities for the annual company retreat scheduled for next quarter.',
                'completed' => false,
                'created_at' => '2024-09-03 11:30:00',
                'updated_at' => '2024-09-03 11:30:00',
            ],
            [
                'title' => 'Implement new security measures',
                'description' => 'Roll out new security protocols and conduct employee training on best practices.',
                'completed' => false,
                'created_at' => '2024-09-05 09:45:00',
                'updated_at' => '2024-09-05 09:45:00',
            ],
            [
                'title' => 'Develop marketing strategy',
                'description' => 'Create a comprehensive marketing strategy for the upcoming product launch.',
                'completed' => false,
                'created_at' => '2024-09-08 13:15:00',
                'updated_at' => '2024-09-08 13:15:00',
            ],
            [
                'title' => 'Conduct performance reviews',
                'description' => 'Schedule and prepare for quarterly employee performance reviews.',
                'completed' => false,
                'created_at' => '2024-09-10 10:00:00',
                'updated_at' => '2024-09-10 10:00:00',
            ],
        ];

        $categories = TaskCategory::pluck('id')->toArray();

        foreach ($tasks as $task) {
            DB::table('tasks')->insert([
                'title' => $task['title'],
                'description' => $task['description'],
                'completed' => $task['completed'],
                'category_id' => $categories[array_rand($categories)],
            ]);
           
        }
    }
}
