<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Desk;
use App\Models\DeskList;
use App\Models\Card;
use App\Models\Task;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    Desk::factory(10)->create();
    DeskList::factory(10)->create();
    Card::factory(10)->create();
    Task::factory(10)->create();
    }
}
