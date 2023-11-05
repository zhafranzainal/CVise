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

        $programs[0]->jobs()->attach($jobs[0]);
        $programs[0]->jobs()->attach($jobs[10]);
        $programs[0]->jobs()->attach($jobs[13]);
        $programs[0]->jobs()->attach($jobs[17]);
        $programs[0]->jobs()->attach($jobs[24]);
        $programs[0]->jobs()->attach($jobs[25]);

        $programs[1]->jobs()->attach($jobs[0]);
        $programs[1]->jobs()->attach($jobs[2]);
        $programs[1]->jobs()->attach($jobs[3]);
        $programs[1]->jobs()->attach($jobs[5]);
        $programs[1]->jobs()->attach($jobs[8]);
        $programs[1]->jobs()->attach($jobs[9]);
        $programs[1]->jobs()->attach($jobs[15]);
        $programs[1]->jobs()->attach($jobs[18]);
        $programs[1]->jobs()->attach($jobs[20]);
        $programs[1]->jobs()->attach($jobs[24]);
        $programs[1]->jobs()->attach($jobs[25]);
        $programs[1]->jobs()->attach($jobs[29]);

        $programs[2]->jobs()->attach($jobs[0]);
        $programs[2]->jobs()->attach($jobs[3]);
        $programs[2]->jobs()->attach($jobs[7]);
        $programs[2]->jobs()->attach($jobs[9]);
        $programs[2]->jobs()->attach($jobs[14]);
        $programs[2]->jobs()->attach($jobs[15]);
        $programs[2]->jobs()->attach($jobs[18]);
        $programs[2]->jobs()->attach($jobs[20]);
        $programs[2]->jobs()->attach($jobs[22]);
        $programs[2]->jobs()->attach($jobs[23]);

        $programs[3]->jobs()->attach($jobs[0]);
        $programs[3]->jobs()->attach($jobs[3]);
        $programs[3]->jobs()->attach($jobs[9]);
        $programs[3]->jobs()->attach($jobs[11]);
        $programs[3]->jobs()->attach($jobs[12]);
        $programs[3]->jobs()->attach($jobs[15]);
        $programs[3]->jobs()->attach($jobs[18]);
        $programs[3]->jobs()->attach($jobs[20]);
        $programs[3]->jobs()->attach($jobs[27]);
        $programs[3]->jobs()->attach($jobs[28]);

        $programs[4]->jobs()->attach($jobs[0]);
        $programs[4]->jobs()->attach($jobs[1]);
        $programs[4]->jobs()->attach($jobs[4]);
        $programs[4]->jobs()->attach($jobs[6]);
        $programs[4]->jobs()->attach($jobs[16]);
        $programs[4]->jobs()->attach($jobs[19]);
        $programs[4]->jobs()->attach($jobs[21]);
    }
}
