<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Task::create([
            'title' => 'Task 1',
            'description' => 'Description for Task 1',
            'due_date' => now()->addDays(1),
        ]);

        Task::create([
            'title' => 'Task 2',
            'description' => 'Description for Task 2',
            'due_date' => now()->addDays(2),
        ]);

        Task::create([
            'title' => 'Task 3',
            'description' => 'Description for Task 3',
            'due_date' => now()->addDays(3),
        ]);

    }
}
