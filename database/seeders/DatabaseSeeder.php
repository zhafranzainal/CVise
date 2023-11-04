<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Program;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProgramSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JobSeeder::class);

        $programs = Program::get();
        $jobs = Job::get();

        foreach ($jobs as $key => $job) {
            $job->programs()->attach($programs[$key]);
        }
    }
}
