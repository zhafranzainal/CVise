<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::create(['name' => 'Computer Science', 'description' => "Explore the fundamental principles and theories that underpin modern computing. Learn to solve complex problems, write efficient algorithms, and develop software applications in this foundational course."]);
        Program::create(['name' => 'Software Engineering', 'description' => "Master the art of designing, building, and maintaining robust software systems. Gain hands-on experience in software development methodologies, project management, and quality assurance to create reliable and scalable applications."]);
        Program::create(['name' => 'Computer Systems & Networking', 'description' => "Delve into the inner workings of computer hardware and networks. Understand how systems are designed, configured, and interconnected to support modern computing environments, ensuring a seamless flow of data and resources."]);
        Program::create(['name' => 'Graphics & Multimedia Technology', 'description' => "Unleash your creativity in the digital realm by learning the ins and outs of graphics and multimedia technology. Develop skills in graphic design, digital media production, and interactive content creation."]);
        Program::create(['name' => 'Cyber Security', 'description' => "Defend against evolving cyber threats and protect valuable data and information. Explore the world of ethical hacking, security protocols, and risk management strategies to become a proficient cybersecurity specialist."]);
    }
}
