<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create(['title' => 'Technopreneur', 'description' => 'Innovative entrepreneurs who combine technology and business to create new ventures.']);
        Job::create(['title' => 'Security Architect', 'description' => 'Design and implement secure systems and infrastructure to protect against cyber threats.']);
        Job::create(['title' => 'Solutions Architect', 'description' => 'Design complex solutions and systems to address specific business needs.']);
        Job::create(['title' => 'Consultant', 'description' => 'Provide expert advice to businesses on various aspects, such as management, technology, or strategy.']);
        Job::create(['title' => 'Security Operations Specialist', 'description' => 'Monitor and respond to security incidents and threats to safeguard an organization.']);
        Job::create(['title' => 'System Specialist', 'description' => 'Specialize in managing and optimizing specific IT systems or technologies.']);
        Job::create(['title' => 'IT Security Engineer', 'description' => 'Focus on safeguarding an organization\'s IT infrastructure and data from cyberattacks.']);
        Job::create(['title' => 'Network Engineer', 'description' => 'Design, implement, and manage computer networks to ensure efficient data communication.']);
        Job::create(['title' => 'Software Quality Assurance Engineer', 'description' => 'Test and assess software to ensure it meets quality and performance standards.']);
        Job::create(['title' => 'Research Engineer', 'description' => 'Conduct research and development to create innovative technologies or solutions.']);

        Job::create(['title' => 'Web Developer', 'description' => 'Create and maintain websites, focusing on frontend and/or backend development.']);
        Job::create(['title' => 'Unity 3D Developer', 'description' => 'Develop interactive 3D applications and games using Unity3D engine.']);
        Job::create(['title' => 'Game Developer', 'description' => 'Design and develop video games for various platforms, ensuring engaging gameplay.']);
        Job::create(['title' => 'Programmer', 'description' => 'Write, test, and maintain code for software applications or systems.']);
        Job::create(['title' => 'Network Analyst', 'description' => 'Analyze and optimize network performance and troubleshoot connectivity issues.']);
        Job::create(['title' => 'System Analyst', 'description' => 'Evaluate and improve an organization\'s IT systems and processes.']);
        Job::create(['title' => 'Cybersecurity Executive', 'description' => 'Oversee cybersecurity measures and strategies to protect against cyber threats.']);
        Job::create(['title' => 'IT Support Executive', 'description' => 'Provide technical support to users and resolve IT-related issues.']);
        Job::create(['title' => 'Marketing Executive', 'description' => 'Plan and execute marketing campaigns and strategies to promote products or services.']);
        Job::create(['title' => 'Risk and Compliance Officer', 'description' => 'Ensure regulatory compliance and manage risk within an organization.']);

        Job::create(['title' => 'Information Systems Officer', 'description' => 'Manage and maintain an organization\'s information systems and databases.']);
        Job::create(['title' => 'Penetration Tester', 'description' => 'Ethical hackers who assess the security of systems and networks by simulating cyberattacks.']);
        Job::create(['title' => 'Network Administrator', 'description' => 'Administer and maintain computer networks, ensuring their optimal performance.']);
        Job::create(['title' => 'Server Administrator', 'description' => 'Manage and maintain servers to ensure they operate efficiently and securely.']);
        Job::create(['title' => 'Database Administrator', 'description' => 'Oversee databases, including design, maintenance, and data security.']);
        Job::create(['title' => 'System Administrator', 'description' => 'Administer and manage an organization\'s IT infrastructure and systems.']);
        Job::create(['title' => 'UI/UX Designer', 'description' => 'Design user interfaces and user experiences to create intuitive and appealing digital products.']);
        Job::create(['title' => 'Web Designer', 'description' => 'Focus on the visual design and aesthetics of websites and web applications.']);
        Job::create(['title' => 'Multimedia Designer', 'description' => 'Create multimedia content, including graphics, videos, and animations for various purposes.']);
    }
}
