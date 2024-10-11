<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Task::create([
            'user_id' => 1,
            'title' => 'Task 1',
            'description' => 'Description for Task 1',
            'due_date' => now()->addDays(1),
        ]);

        Task::create([
            'user_id'=> 1,
            'title' => 'Task 2',
            'description' => 'Description for Task 2',
            'due_date' => now()->addDays(2),
        ]);

        Task::create([
            'user_id'=> 1,
            'title' => 'Task 3',
            'description' => 'Description for Task 3',
            'due_date' => now()->addDays(3),
        ]);

    }
}
