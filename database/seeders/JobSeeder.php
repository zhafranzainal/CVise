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
        Job::create([
            'title' => 'Technopreneur',
            'description' => 'Innovative entrepreneurs who combine technology and business to create new ventures.',
            'responsibilities' => json_encode([
                'Identify business opportunities that leverage technology innovation.',
                'Create and develop new technology-based products, services, or ventures.',
                'Manage and oversee the operations and growth of the technology-driven business.',
                'Secure funding and investments for the startup or venture.',
                'Build a team of experts in technology and business domains.',
                'Market and promote the technology-based products or services.',
                'Adapt and pivot the business model as needed to stay competitive.',
            ]),
            'technical_skills' => json_encode([
                'Entrepreneurship and business development',
                'Technology trend analysis',
                'Startup management',
                'Innovation and ideation',
                'Fundraising and investment acquisition',
                'Marketing and sales',
            ]),
            'soft_skills' => json_encode([
                'Creativity and innovation',
                'Leadership and team-building',
                'Risk-taking and adaptability',
                'Problem-solving',
                'Communication and networking',
            ]),
            'salary_min' => 0,
            'salary_max' => 0,
            'programming_languages' => null,
            'tools' => null,
            'career_progression' => 'As a successful technopreneur, you can continue to launch new ventures, lead technology-driven companies, or become an angel investor or mentor to other startups.',
            'job_outlook' => 'The job outlook for technopreneurs can be highly rewarding if you can identify and capitalize on innovative opportunities.',
            'pros' => json_encode([
                'Potential for significant financial rewards and wealth creation',
                'Opportunity to make a significant impact on industries and society',
                'Freedom to pursue your own innovative ideas',
                'Build a strong professional network',
            ]),
            'cons' => json_encode([
                'High risk and uncertainty, with potential for failure',
                'Long hours and intense dedication required',
                'Need to secure funding and investment',
                'Continuous adaptation to changing markets and technologies',
            ])
        ]);

        Job::create([
            'title' => 'Security Architect',
            'description' => 'Design and implement secure systems and infrastructure to protect against cyber threats.',
            'responsibilities' => json_encode([
                'Design and develop security architectures for systems, networks, and applications.',
                'Assess and identify potential security risks and vulnerabilities.',
                'Implement security measures and controls to safeguard data and systems.',
                'Stay up-to-date with the latest cybersecurity threats and solutions.',
                'Collaborate with cross-functional teams to ensure security compliance.',
                'Conduct security audits and assessments.',
                'Respond to and mitigate security incidents and breaches.',
            ]),
            'technical_skills' => json_encode([
                'Cybersecurity and threat analysis',
                'Security architecture and design',
                'Firewall and intrusion detection systems (IDS/IPS)',
                'Encryption and data protection',
                'Security compliance and standards (e.g., ISO 27001)',
            ]),
            'soft_skills' => json_encode([
                'Problem-solving and critical thinking',
                'Communication and teamwork',
                'Attention to detail',
                'Adaptability and continuous learning',
            ]),
            'salary_min' => 4000,
            'salary_max' => 20000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Firewalls (e.g., Cisco ASA)',
                'Intrusion detection and prevention systems (e.g., Snort)',
                'Security information and event management (SIEM) tools',
                'Encryption tools (e.g., OpenSSL)',
            ]),
            'career_progression' => 'Career progression for security architects may lead to roles such as Chief Information Security Officer (CISO), Security Consultant, or Senior Security Architect.',
            'job_outlook' => 'The demand for security architects remains high as organizations need to protect their data and systems from cyber threats.',
            'pros' => json_encode([
                'High demand and competitive salaries',
                'Opportunity to work on critical cybersecurity challenges',
                'Constant learning and staying at the forefront of security technology',
                'Contribute to maintaining data and infrastructure integrity',
            ]),
            'cons' => json_encode([
                'Pressure to prevent security breaches and protect sensitive data',
                'Long hours may be required during incident response',
                'Continuous need to adapt to evolving cybersecurity threats',
                'Complexity and depth of security knowledge required',
            ])
        ]);

        Job::create([
            'title' => 'Solutions Architect',
            'description' => 'Design complex solutions and systems to address specific business needs.',
            'responsibilities' => json_encode([
                'Collaborate with clients and stakeholders to understand their business requirements.',
                'Design and architect end-to-end solutions that meet business needs and align with technology capabilities.',
                'Specify system components and integrations required for the solution.',
                'Create technical documentation, including architecture diagrams and design specifications.',
                'Work closely with development and implementation teams to ensure proper execution.',
                'Evaluate and recommend technologies, platforms, and tools for solution development.',
                'Ensure solutions are scalable, maintainable, and secure.',
            ]),
            'technical_skills' => json_encode([
                'System architecture and design',
                'Business analysis and requirements gathering',
                'Integration and middleware technologies',
                'Cloud computing and microservices',
                'Solution evaluation and selection',
            ]),
            'soft_skills' => json_encode([
                'Communication and client interaction',
                'Problem-solving and critical thinking',
                'Leadership and team collaboration',
                'Project management',
                'Adaptability and continuous learning',
            ]),
            'salary_min' => 4000,
            'salary_max' => 20000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Architectural modeling tools (e.g., Enterprise Architect)',
                'Diagramming tools (e.g., Lucidchart)',
                'Cloud platforms (e.g., AWS, Azure, GCP)',
                'Integration tools (e.g., MuleSoft, Apache Camel)',
            ]),
            'career_progression' => 'Career progression for solutions architects may lead to roles such as Enterprise Architect, Chief Architect, or Technology Director.',
            'job_outlook' => 'The job outlook for solutions architects remains positive as organizations seek expertise in designing and implementing complex solutions.',
            'pros' => json_encode([
                'Highly influential in shaping an organization\'s technology landscape',
                'Opportunity to work on diverse and challenging projects',
                'Competitive salaries and career advancement',
                'Continuous learning and exposure to emerging technologies',
            ]),
            'cons' => json_encode([
                'Responsibility for the success of complex projects',
                'Balancing technical requirements with business needs can be challenging',
                'Heavy involvement in project planning and documentation',
                'Staying up-to-date with evolving technology trends',
            ])
        ]);

        Job::create([
            'title' => 'Consultant',
            'description' => 'Provide expert advice to businesses on various aspects, such as management, technology, or strategy.',
            'responsibilities' => json_encode([
                'Analyze and assess clients\' needs and challenges.',
                'Offer expert advice and recommendations on specific areas of expertise, such as management, technology, or strategy.',
                'Develop and deliver strategies, solutions, or plans to address clients\' issues.',
                'Collaborate with clients and internal teams to implement recommendations.',
                'Provide ongoing guidance and support for clients to achieve their goals.',
                'Stay current with industry trends and best practices.',
                'Manage and monitor project timelines and budgets.',
            ]),
            'technical_skills' => json_encode([
                'Specialized expertise in a particular field (e.g., management, IT, finance)',
                'Data analysis and research',
                'Presentation and communication skills',
                'Project management',
                'Client relationship management',
            ]),
            'soft_skills' => json_encode([
                'Problem-solving and critical thinking',
                'Adaptability and versatility',
                'Communication and interpersonal skills',
                'Leadership and influence',
                'Time management and organization',
            ]),
            'salary_min' => 3500,
            'salary_max' => 13000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Analysis tools (e.g., Excel, SPSS)',
                'Project management tools (e.g., Microsoft Project)',
                'Presentation software (e.g., PowerPoint)',
            ]),
            'career_progression' => 'Career progression for consultants may lead to roles such as Senior Consultant, Principal Consultant, or Partner in consulting firms.',
            'job_outlook' => 'The job outlook for consultants remains positive, as businesses seek expertise to solve complex problems and improve their operations.',
            'pros' => json_encode([
                'Diverse and challenging projects',
                'Opportunity to work across various industries and sectors',
                'Competitive salaries and potential for bonuses',
                'Continuous learning and development of expertise',
            ]),
            'cons' => json_encode([
                'Client-driven work with tight project deadlines',
                'Travel and time away from home may be required',
                'Balancing multiple client projects can be demanding',
                'Pressure to deliver results and meet clients\' expectations',
            ])
        ]);

        Job::create([
            'title' => 'Security Operations Specialist',
            'description' => 'Monitor and respond to security incidents and threats to safeguard an organization.',
            'responsibilities' => json_encode([
                'Monitor security systems and networks for potential security threats and incidents.',
                'Investigate and analyze security alerts and incidents to determine their severity and impact.',
                'Implement and follow incident response procedures to mitigate security breaches.',
                'Collaborate with the incident response team and other security experts to resolve security issues.',
                'Maintain and fine-tune security tools and systems for optimal performance.',
                'Document security incidents and create reports for analysis and prevention.',
                'Stay updated with emerging security threats and best practices.',
            ]),
            'technical_skills' => json_encode([
                'Security information and event management (SIEM) tools',
                'Intrusion detection and prevention systems (IDS/IPS)',
                'Vulnerability assessment and penetration testing',
                'Security incident response and analysis',
                'Security best practices and standards (e.g., NIST, CIS)',
            ]),
            'soft_skills' => json_encode([
                'Analytical and problem-solving skills',
                'Communication and teamwork',
                'Attention to detail',
                'Adaptability and continuous learning',
                'Stress management and decision-making',
            ]),
            'salary_min' => 3000,
            'salary_max' => 12000,
            'programming_languages' => null,
            'tools' => json_encode([
                'SIEM platforms (e.g., Splunk, ELK Stack)',
                'Security incident response tools',
                'Network monitoring and packet capture tools',
                'Vulnerability scanning tools',
            ]),
            'career_progression' => 'Career progression for security operations specialists may lead to roles such as Security Analyst, Incident Responder, or Security Operations Manager.',
            'job_outlook' => 'The job outlook for security operations specialists remains positive as organizations seek to enhance their cybersecurity posture.',
            'pros' => json_encode([
                'Critical role in identifying and mitigating security threats',
                'Competitive salaries and potential for advancement',
                'Opportunity to work on real-time security incidents',
                'Contribution to enhancing overall security',
            ]),
            'cons' => json_encode([
                'Long and irregular hours, as security incidents can occur at any time',
                'Stressful work environment during security incidents',
                'Need for continuous learning and adaptation to evolving threats',
                'Responsibility for maintaining network security 24/7',
            ])
        ]);

        Job::create([
            'title' => 'System Specialist',
            'description' => 'Specialize in managing and optimizing specific IT systems or technologies.',
            'responsibilities' => json_encode([
                'Focus on the management and maintenance of specific IT systems or technologies.',
                'Install, configure, and optimize the system for efficient performance.',
                'Monitor the system for potential issues and troubleshoot problems.',
                'Implement updates, patches, and enhancements to the system.',
                'Collaborate with users and IT teams to support system functionality.',
                'Document system configurations, procedures, and issues.',
                'Stay updated with the latest advancements in the specialized technology.',
            ]),
            'technical_skills' => json_encode([
                'Specialized knowledge in a specific technology or system (e.g., network, storage, server, etc.)',
                'System administration and maintenance',
                'Troubleshooting and problem-solving',
                'Understanding of system-specific protocols and tools',
            ]),
            'soft_skills' => json_encode([
                'Attention to detail',
                'Adaptability and continuous learning',
                'Communication and teamwork',
                'Time management',
                'Analytical and problem-solving skills',
            ]),
            'salary_min' => 3000,
            'salary_max' => 8000,
            'programming_languages' => null,
            'tools' => json_encode([
                'System-specific tools and software (e.g., VMware for virtualization)',
                'Monitoring and management tools (e.g., Nagios, SolarWinds)',
                'Troubleshooting and diagnostic tools',
                'Scripting and automation tools (e.g., PowerShell, Bash)',
            ]),
            'career_progression' => 'Career progression for system specialists may lead to roles such as Senior System Specialist, System Administrator, or IT Manager, specializing in their chosen technology.',
            'job_outlook' => 'The job outlook for system specialists remains positive, as organizations depend on specialized IT expertise to maintain and optimize critical technologies.',
            'pros' => json_encode([
                'Expertise in a specialized field',
                'Competitive salaries and potential for advancement',
                'Hands-on experience with specific technologies',
                'Opportunity for further specialization or management roles',
            ]),
            'cons' => json_encode([
                'Obligation to maintain the specialized system around the clock',
                'Responsibility for system stability and performance',
                'Continual learning and adaptation to evolving technologies',
                'Potential for stressful troubleshooting and problem resolution',
            ])
        ]);

        Job::create([
            'title' => 'IT Security Engineer',
            'description' => 'Focus on safeguarding an organization\'s IT infrastructure and data from cyberattacks.',
            'responsibilities' => json_encode([
                'Design, implement, and manage security measures to protect IT systems and data.',
                'Conduct security assessments and risk analysis to identify vulnerabilities.',
                'Monitor and respond to security incidents and threats in real-time.',
                'Implement and manage security tools and technologies (e.g., firewalls, IDS/IPS).',
                'Develop and enforce security policies and procedures.',
                'Train and educate staff on security best practices.',
                'Stay up-to-date with the latest cybersecurity threats and mitigation techniques.',
            ]),
            'technical_skills' => json_encode([
                'Network security and protocols',
                'Firewalls and intrusion detection/prevention systems (IDS/IPS)',
                'Encryption and data protection',
                'Security compliance and standards (e.g., ISO 27001)',
                'Vulnerability assessment and penetration testing',
            ]),
            'soft_skills' => json_encode([
                'Problem-solving and critical thinking',
                'Communication and teamwork',
                'Attention to detail',
                'Adaptability and continuous learning',
                'Stress management and decision-making',
            ]),
            'salary_min' => 3000,
            'salary_max' => 12000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Firewalls (e.g., Cisco ASA)',
                'Intrusion detection and prevention systems (e.g., Snort)',
                'Security information and event management (SIEM) tools',
                'Encryption tools (e.g., OpenSSL)',
            ]),
            'career_progression' => 'Career progression for IT Security Engineers may lead to roles such as Senior Security Engineer, Security Architect, or Chief Information Security Officer (CISO).',
            'job_outlook' => 'The job outlook for IT Security Engineers remains highly favorable as organizations need to protect their digital assets from an increasing number of cyber threats.',
            'pros' => json_encode([
                'Critical role in ensuring the security of an organization\'s IT assets',
                'Competitive salaries and potential for advancement',
                'Continuous learning and staying at the forefront of security technology',
                'Contribution to maintaining data and infrastructure integrity',
            ]),
            'cons' => json_encode([
                'Pressure to prevent security breaches and protect sensitive data',
                'Long hours may be required during incident response',
                'Continuous need to adapt to evolving cybersecurity threats',
                'Complexity and depth of security knowledge required',
            ])
        ]);

        Job::create([
            'title' => 'Network Engineer',
            'description' => 'Design, implement, and manage computer networks to ensure efficient data communication.',
            'responsibilities' => json_encode([
                'Design, plan, and configure network infrastructure based on business requirements.',
                'Implement and maintain network equipment, including routers, switches, and firewalls.',
                'Optimize network performance and troubleshoot connectivity issues.',
                'Monitor network traffic and security to ensure data integrity and confidentiality.',
                'Collaborate with cross-functional teams to address network-related challenges.',
                'Implement and maintain network security measures.',
                'Stay updated with emerging networking technologies and best practices.',
            ]),
            'technical_skills' => json_encode([
                'Network design and architecture',
                'Router and switch configuration and management',
                'Network protocols (e.g., TCP/IP, BGP, OSPF)',
                'Network security and firewall management',
                'Network monitoring and performance optimization',
            ]),
            'soft_skills' => json_encode([
                'Problem-solving and critical thinking',
                'Communication and teamwork',
                'Attention to detail',
                'Adaptability and continuous learning',
                'Stress management and decision-making',
            ]),
            'salary_min' => 3000,
            'salary_max' => 9000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Network management software (e.g., Cisco, Juniper)',
                'Packet capture and analysis tools (e.g., Wireshark)',
                'Security and firewall appliances (e.g., Palo Alto, Fortinet)',
                'Network monitoring solutions (e.g., Nagios, SolarWinds)',
            ]),
            'career_progression' => 'Career progression for Network Engineers may lead to roles such as Senior Network Engineer, Network Architect, or Network Manager.',
            'job_outlook' => 'The job outlook for Network Engineers remains positive as organizations depend on efficient and secure network infrastructure for their operations.',
            'pros' => json_encode([
                'Critical role in maintaining efficient data communication',
                'Competitive salaries and potential for advancement',
                'Continuous learning and staying at the forefront of networking technology',
                'Contribution to ensuring network security and data integrity',
            ]),
            'cons' => json_encode([
                'Pressure to maintain network uptime and resolve issues quickly',
                'Long hours may be required during network incidents or maintenance',
                'Need to adapt to evolving networking technologies and protocols',
                'Complexity of managing and troubleshooting network infrastructure',
            ])
        ]);

        Job::create([
            'title' => 'Software Quality Assurance Engineer',
            'description' => 'Test and assess software to ensure it meets quality and performance standards.',
            'responsibilities' => json_encode([
                'Develop test plans, test cases, and test scripts based on software requirements.',
                'Execute various types of testing, including functional, regression, and performance testing.',
                'Identify and document software defects and issues, then track their resolution.',
                'Collaborate with the development team to ensure software quality and resolve issues.',
                'Create and maintain test environments and test data as needed.',
                'Automate testing processes using testing frameworks and tools.',
                'Stay updated with software testing best practices and tools.',
            ]),
            'technical_skills' => json_encode([
                'Software testing methodologies and techniques',
                'Testing tools and frameworks (e.g., Selenium, JUnit, TestNG)',
                'Test automation and scripting',
                'Quality assurance processes and standards (e.g., ISO 9001)',
                'Defect tracking and management tools (e.g., JIRA)',
            ]),
            'soft_skills' => json_encode([
                'Attention to detail',
                'Analytical and problem-solving skills',
                'Communication and teamwork',
                'Adaptability and continuous learning',
                'Time management and organization',
            ]),
            'salary_min' => 3000,
            'salary_max' => 8500,
            'programming_languages' => null,
            'tools' => json_encode([
                'Testing frameworks (e.g., Selenium, JUnit, TestNG)',
                'Defect tracking and management tools (e.g., JIRA, Bugzilla)',
                'Test case management tools (e.g., TestRail, Zephyr)',
                'Test automation tools (e.g., Jenkins)',
            ]),
            'career_progression' => 'Career progression for Software Quality Assurance Engineers may lead to roles such as Senior QA Engineer, Test Lead, or QA Manager.',
            'job_outlook' => 'The job outlook for Software Quality Assurance Engineers remains positive as software quality is critical in software development projects.',
            'pros' => json_encode([
                'Critical role in ensuring software quality and reliability',
                'Competitive salaries and potential for advancement',
                'Opportunity to work on diverse projects and software applications',
                'Continuous learning and staying updated with testing tools and techniques',
            ]),
            'cons' => json_encode([
                'Tight project schedules and pressure to meet release deadlines',
                'Continuous need to adapt to new testing tools and technologies',
                'Repetitive and detailed-oriented work',
                'Stressful periods during critical testing phases',
            ])
        ]);

        Job::create([
            'title' => 'Research Engineer',
            'description' => 'Conduct research and development to create innovative technologies or solutions.',
            'responsibilities' => json_encode([
                'Conduct research to explore and develop new technologies or solutions.',
                'Design and perform experiments, data analysis, and prototyping.',
                'Collaborate with cross-functional teams to achieve research objectives.',
                'Document research findings, methodologies, and results.',
                'Stay updated with the latest advancements in the research field.',
                'Publish research findings and present them at conferences.',
            ]),
            'technical_skills' => json_encode([
                'Research methodologies and experimental design',
                'Data analysis and statistical tools',
                'Programming and software development (based on research needs)',
                'Project management and collaboration',
                'Scientific and technical writing',
            ]),
            'soft_skills' => json_encode([
                'Analytical and problem-solving skills',
                'Communication and teamwork',
                'Creativity and innovation',
                'Adaptability and continuous learning',
                'Time management and organization',
            ]),
            'salary_min' => 2600,
            'salary_max' => 6000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Laboratory equipment and tools (e.g., microscopes, spectrometers)',
                'Data analysis software (e.g., MATLAB, R, Python)',
                'Prototyping and modeling tools (e.g., CAD software)',
                'Project and collaboration tools (e.g., GitHub, Slack)',
            ]),
            'career_progression' => 'Career progression for Research Engineers may lead to roles such as Senior Research Engineer, Research Scientist, or Principal Investigator.',
            'job_outlook' => 'The job outlook for Research Engineers remains positive as research and development are essential for innovation and technology advancement.',
            'pros' => json_encode([
                'Involvement in cutting-edge research and innovation',
                'Competitive salaries and potential for advancement',
                'Opportunity to contribute to scientific discoveries and advancements',
                'Diverse and challenging projects',
            ]),
            'cons' => json_encode([
                'Pressure to meet research goals and publish findings',
                'Uncertainty and variability in research outcomes',
                'Continuous need for learning and adapting to emerging technologies',
                'Long hours and extended periods of experimentation and analysis',
            ])
        ]);

        Job::create([
            'title' => 'Web Developer',
            'description' => 'Create and maintain websites, focusing on frontend and/or backend development.',
            'responsibilities' => json_encode([
                'Develop and maintain websites and web applications.',
                'Design and implement user-friendly and responsive web interfaces (frontend development).',
                'Build and maintain server-side logic, databases, and applications (backend development).',
                'Collaborate with designers, content creators, and cross-functional teams.',
                'Optimize websites for speed, performance, and security.',
                'Test and debug web applications and resolve issues.',
                'Stay updated with the latest web development technologies and best practices.',
            ]),
            'technical_skills' => json_encode([
                'Frontend technologies (HTML, CSS, JavaScript, frameworks like React or Angular)',
                'Backend technologies (e.g., Node.js, Ruby on Rails, PHP)',
                'Database management and integration (e.g., SQL, NoSQL)',
                'Version control systems (e.g., Git)',
                'Web development tools and libraries',
            ]),
            'soft_skills' => json_encode([
                'Problem-solving and critical thinking',
                'Creativity and attention to detail',
                'Communication and teamwork',
                'Adaptability and continuous learning',
                'Time management and organization',
            ]),
            'salary_min' => 3000,
            'salary_max' => 8000,
            'programming_languages' => json_encode([
                'HTML',
                'CSS',
                'JavaScript',
                'PHP'
            ]),
            'tools' => json_encode([
                'Code editors and integrated development environments (IDEs)',
                'Frontend libraries and frameworks (e.g., React, Angular)',
                'Backend frameworks and platforms (e.g., Express, Ruby on Rails)',
                'Database management systems (e.g., MySQL, MongoDB)',
            ]),
            'career_progression' => 'Career progression for Web Developers may lead to roles such as Senior Web Developer, Full-Stack Developer, or Web Development Manager.',
            'job_outlook' => 'The job outlook for Web Developers remains positive as the demand for websites and web applications continues to grow.',
            'pros' => json_encode([
                'Opportunity to create visually appealing and functional websites',
                'Competitive salaries and potential for advancement',
                'Diverse projects and industries to work in',
                'Continuous learning and staying updated with web technologies',
            ]),
            'cons' => json_encode([
                'Pressure to meet project deadlines and address issues quickly',
                'Need to adapt to evolving web development technologies and trends',
                'Variability in project scope and client demands',
                'Long hours during project development and debugging phases',
            ])
        ]);

        Job::create([
            'title' => 'Unity 3D Developer',
            'description' => 'Develop interactive 3D applications and games using Unity3D engine.',
            'responsibilities' => json_encode([
                'Design and develop 3D interactive applications, games, or simulations.',
                'Create 3D models, assets, and animations using Unity3D tools.',
                'Implement game mechanics, controls, and user interfaces.',
                'Optimize performance for different platforms and devices.',
                'Collaborate with artists, designers, and other team members.',
                'Debug and resolve issues related to 3D graphics and gameplay.',
                'Stay updated with Unity3D updates and best practices.',
            ]),
            'technical_skills' => json_encode([
                'Unity3D development and scripting (C# or JavaScript)',
                '3D modeling and animation software (e.g., Blender, Maya)',
                'Game development principles and mechanics',
                'Cross-platform development and optimization',
                'Version control systems (e.g., Git)',
            ]),
            'soft_skills' => json_encode([
                'Creativity and attention to detail',
                'Problem-solving and critical thinking',
                'Communication and teamwork',
                'Adaptability and continuous learning',
                'Time management and organization',
            ]),
            'salary_min' => 3000,
            'salary_max' => 9000,
            'programming_languages' => json_encode([
                'C# ',
                'JavaScript',
            ]),
            'tools' => json_encode([
                'Unity3D development environment',
                '3D modeling and animation software (e.g., Blender, Maya)',
                'Game development libraries and tools',
                'Version control systems (e.g., Git)',
            ]),
            'career_progression' => 'Career progression for Unity 3D Developers may lead to roles such as Senior Unity 3D Developer, Game Developer, or Lead Game Developer.',
            'job_outlook' => 'The job outlook for Unity 3D Developers remains positive as the demand for interactive 3D applications and games continues to grow.',
            'pros' => json_encode([
                'Opportunity to work on exciting and visually appealing projects',
                'Competitive salaries and potential for advancement in the gaming industry',
                'Creative and dynamic work environment',
                'Continuous learning and staying updated with Unity3D technologies',
            ]),
            'cons' => json_encode([
                'Pressure to meet game development milestones and deadlines',
                'Need to adapt to evolving Unity3D updates and gaming trends',
                'Long hours during game development and debugging phases',
                'Complexity of managing 3D assets and gameplay mechanics',
            ])
        ]);

        Job::create([
            'title' => 'Game Developer',
            'description' => 'Design and develop video games for various platforms, ensuring engaging gameplay.',
            'responsibilities' => json_encode([
                'Conceptualize and design game concepts, including storylines and gameplay mechanics.',
                'Develop and program games for various platforms (e.g., PC, consoles, mobile devices).',
                'Create and integrate game assets, 3D models, animations, and sound effects.',
                'Optimize game performance and troubleshoot issues and bugs.',
                'Collaborate with artists, designers, and other team members.',
                'Test and iterate on gameplay to ensure an engaging player experience.',
                'Stay updated with gaming industry trends and technologies.',
            ]),
            'technical_skills' => json_encode([
                'Game development engines (e.g., Unity, Unreal Engine)',
                'Programming languages (e.g., C++, C#, or Java)',
                '3D modeling and animation software (e.g., Blender, Maya)',
                'Game design principles and mechanics',
                'Version control systems (e.g., Git)',
            ]),
            'soft_skills' => json_encode([
                'Creativity and storytelling',
                'Problem-solving and critical thinking',
                'Communication and teamwork',
                'Adaptability and continuous learning',
                'Time management and organization',
            ]),
            'salary_min' => 3000,
            'salary_max' => 9000,
            'programming_languages' => json_encode([
                'C++',
                'C#',
                'Java',
            ]),
            'tools' => json_encode([
                'Game development engines (e.g., Unity, Unreal Engine)',
                '3D modeling and animation software (e.g., Blender, Maya)',
                'Version control systems (e.g., Git)',
                'Sound design software and tools (e.g., Adobe Audition)',
            ]),
            'career_progression' => 'Career progression for Game Developers may lead to roles such as Senior Game Developer, Lead Game Developer, or Game Development Manager.',
            'job_outlook' => 'The job outlook for Game Developers remains positive as the gaming industry continues to grow and diversify.',
            'pros' => json_encode([
                'Opportunity to work on creative and interactive projects',
                'Competitive salaries and potential for advancement in the gaming industry',
                'Dynamic and engaging work environment',
                'Continuous learning and staying updated with gaming technologies',
            ]),
            'cons' => json_encode([
                'Pressure to meet game development milestones and release deadlines',
                'Need to adapt to evolving game development engines and industry trends',
                'Long hours during game development and debugging phases',
                'Complexity of managing game assets and mechanics',
            ])
        ]);

        Job::create([
            'title' => 'Programmer',
            'description' => 'Write, test, and maintain code for software applications or systems.',
            'responsibilities' => json_encode([
                'Write, test, and maintain high-quality code for software applications or systems.',
                'Collaborate with cross-functional teams to gather and analyze software requirements.',
                'Design and implement software solutions that align with project goals.',
                'Debug and resolve software defects and issues.',
                'Optimize software performance and ensure scalability.',
                'Stay up-to-date with industry best practices and emerging technologies.',
                'Document code and technical specifications.',
                'Provide technical support and guidance to team members.',
            ]),
            'technical_skills' => json_encode([
                'Proficiency in programming languages (e.g., Java, Python, C++)',
                'Familiarity with software development methodologies and tools',
                'Problem-solving and algorithmic thinking',
                'Version control systems (e.g., Git)',
            ]),
            'soft_skills' => json_encode([
                'Communication and teamwork',
                'Analytical and critical thinking',
                'Adaptability and continuous learning',
                'Attention to detail',
                'Time management and organization',
            ]),
            'salary_min' => 2700,
            'salary_max' => 9000,
            'programming_languages' => json_encode([
                'C',
                'C++',
                'Java',
                'Python'
            ]),
            'tools' => json_encode([
                'Integrated Development Environments (IDEs)',
                'Version control systems (e.g., Git)',
                'Code editors and debugging tools',
                'Continuous integration and delivery (CI/CD) tools',
            ]),
            'career_progression' => 'Career progression for Programmers may lead to roles such as Senior Programmer, Software Engineer, or Technical Lead.',
            'job_outlook' => 'The job outlook for Programmers remains positive as software development is critical in various industries.',
            'pros' => json_encode([
                'High demand and competitive salaries',
                'Opportunities for creativity and problem-solving',
                'Varied work environments and potential for remote work',
                'Continuous learning and skill development',
            ]),
            'cons' => json_encode([
                'Long hours or tight deadlines',
                'Need to stay up-to-date with rapidly changing technologies',
                'Mentally challenging and potentially stressful',
                'Potential for repetitive tasks',
            ])
        ]);

        Job::create([
            'title' => 'Network Analyst',
            'description' => 'Analyze and optimize network performance and troubleshoot connectivity issues.',
            'responsibilities' => json_encode([
                'Analyze and monitor network performance and connectivity.',
                'Identify and troubleshoot network issues, outages, and bottlenecks.',
                'Optimize network configurations for efficiency and reliability.',
                'Collaborate with network engineers and IT teams to implement improvements.',
                'Maintain network documentation and diagrams.',
                'Stay updated with networking technologies and security best practices.',
            ]),
            'technical_skills' => json_encode([
                'Network analysis and troubleshooting tools (e.g., Wireshark, Ping, Traceroute)',
                'Network protocols and topologies (e.g., TCP/IP, VLANs)',
                'Routing and switching configurations (e.g., Cisco, Juniper)',
                'Security protocols and firewalls',
                'Network monitoring and management systems (e.g., SNMP, Nagios)',
            ]),
            'soft_skills' => json_encode([
                'Analytical and problem-solving skills',
                'Communication and teamwork',
                'Adaptability and continuous learning',
                'Time management and organization',
                'Attention to detail',
            ]),
            'salary_min' => 3000,
            'salary_max' => 9000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Network analysis and troubleshooting tools (e.g., Wireshark, Ping, Traceroute)',
                'Network management software (e.g., Cisco Prime, SolarWinds)',
                'Router and switch configurations',
                'Security and firewall configurations',
            ]),
            'career_progression' => 'Career progression for Network Analysts may lead to roles such as Network Engineer, Network Administrator, or Network Architect.',
            'job_outlook' => 'The job outlook for Network Analysts remains positive as networks are critical for businesses and organizations.',
            'pros' => json_encode([
                'Opportunity to troubleshoot and optimize critical network infrastructure',
                'Competitive salaries and potential for advancement in networking roles',
                'Varied work environments across different industries',
                'Continuous learning and staying updated with networking technologies',
            ]),
            'cons' => json_encode([
                'Pressure to resolve network issues quickly, especially during outages',
                'Need to adapt to evolving network technologies and security threats',
                'On-call responsibilities for network emergencies',
                'Complexity of managing and configuring network infrastructure',
            ])
        ]);

        Job::create([
            'title' => 'System Analyst',
            'description' => 'Evaluate and improve an organization\'s IT systems and processes.',
            'responsibilities' => json_encode([
                'Analyze and assess an organization\'s existing IT systems and processes.',
                'Identify areas for improvement and optimization.',
                'Collaborate with stakeholders to gather system requirements.',
                'Design and propose solutions to enhance efficiency and functionality.',
                'Document system specifications and process workflows.',
                'Ensure compliance with industry standards and best practices.',
                'Provide technical support and guidance to IT teams.',
            ]),
            'technical_skills' => json_encode([
                'System analysis and design methodologies',
                'Data modeling and database management',
                'Business process modeling and optimization',
                'Requirements gathering and documentation',
                'Understanding of IT infrastructure and architectures',
            ]),
            'soft_skills' => json_encode([
                'Analytical and critical thinking',
                'Communication and stakeholder management',
                'Adaptability and continuous learning',
                'Time management and organization',
                'Problem-solving and attention to detail',
            ]),
            'salary_min' => 3000,
            'salary_max' => 9000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Business analysis tools (e.g., Microsoft Visio, Lucidchart)',
                'Data modeling and database design tools (e.g., ERwin, MySQL Workbench)',
                'Project management and collaboration software (e.g., JIRA, Trello)',
            ]),
            'career_progression' => 'Career progression for System Analysts may lead to roles such as Business Analyst, Senior System Analyst, or IT Project Manager.',
            'job_outlook' => 'The job outlook for System Analysts remains positive as organizations seek to optimize their IT systems and processes.',
            'pros' => json_encode([
                'Opportunity to enhance and streamline IT systems for improved efficiency',
                'Competitive salaries and potential for advancement in IT roles',
                'Varied work environments across different industries',
                'Continuous learning and staying updated with IT best practices',
            ]),
            'cons' => json_encode([
                'Pressure to identify and resolve system issues and process inefficiencies',
                'Need to adapt to evolving technology and business requirements',
                'Managing stakeholder expectations and change management',
                'Complexity of system documentation and requirements gathering',
            ])
        ]);

        Job::create([
            'title' => 'Cybersecurity Executive',
            'description' => 'Oversee cybersecurity measures and strategies to protect against cyber threats.',
            'responsibilities' => json_encode([
                'Develop and implement cybersecurity policies and strategies.',
                'Oversee the protection of sensitive data and systems from cyber threats.',
                'Lead incident response and threat mitigation efforts.',
                'Ensure compliance with security regulations and industry standards.',
                'Collaborate with IT and security teams to identify vulnerabilities and risks.',
                'Stay updated with the latest cybersecurity threats and technologies.',
                'Report to executive management on security status and incidents.',
            ]),
            'technical_skills' => json_encode([
                'Cybersecurity frameworks and standards (e.g., NIST, ISO 27001)',
                'Security risk assessment and management',
                'Security incident response and forensics',
                'Security technology and tools (e.g., firewalls, SIEM)',
                'Understanding of encryption and authentication methods',
            ]),
            'soft_skills' => json_encode([
                'Leadership and strategic thinking',
                'Communication and stakeholder management',
                'Problem-solving and decision-making',
                'Adaptability and continuous learning',
                'Time management and organization',
            ]),
            'salary_min' => 3000,
            'salary_max' => 12000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Security information and event management (SIEM) systems',
                'Firewalls and intrusion detection/prevention systems',
                'Vulnerability assessment and penetration testing tools',
                'Incident response and forensics software',
            ]),
            'career_progression' => 'Career progression for Cybersecurity Executives may lead to roles such as Chief Information Security Officer (CISO) or Chief Technology Officer (CTO).',
            'job_outlook' => 'The job outlook for Cybersecurity Executives remains positive as organizations prioritize data and system security in an increasingly digital world.',
            'pros' => json_encode([
                'Critical role in protecting organizations against cyber threats',
                'Competitive salaries and potential for executive leadership positions',
                'Dynamic and challenging work environment',
                'Continuous learning and staying updated with cybersecurity threats and solutions',
            ]),
            'cons' => json_encode([
                'High-pressure role with the responsibility for safeguarding sensitive data',
                'Need to adapt to evolving cyber threats and security technologies',
                'Balancing security measures with business productivity and user experience',
                'Complexity of managing security incidents and compliance requirements',
            ])
        ]);

        Job::create([
            'title' => 'IT Support Executive',
            'description' => 'Provide technical support to users and resolve IT-related issues.',
            'responsibilities' => json_encode([
                'Provide technical support to end-users and resolve IT-related issues.',
                'Install, configure, and maintain hardware and software systems.',
                'Manage user accounts and permissions for network access.',
                'Respond to user inquiries and troubleshoot hardware and software problems.',
                'Document support requests and resolutions in a ticketing system.',
                'Collaborate with IT teams to resolve complex technical issues.',
            ]),
            'technical_skills' => json_encode([
                'Operating systems (e.g., Windows, macOS, Linux)',
                'Software installation and troubleshooting',
                'Basic network and hardware troubleshooting',
                'Remote desktop support tools',
                'Understanding of IT security and data protection',
            ]),
            'soft_skills' => json_encode([
                'Customer service and communication',
                'Problem-solving and patience',
                'Adaptability and continuous learning',
                'Time management and organization',
                'Teamwork and collaboration',
            ]),
            'salary_min' => 2000,
            'salary_max' => 9000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Help desk and ticketing systems (e.g., Zendesk, ServiceNow)',
                'Remote support tools (e.g., TeamViewer, Remote Desktop)',
                'Basic diagnostic and troubleshooting software',
                'Knowledge base and documentation tools',
            ]),
            'career_progression' => 'Career progression for IT Support Executives may lead to roles such as IT Support Manager, IT Administrator, or IT Service Desk Manager.',
            'job_outlook' => 'The job outlook for IT Support Executives remains positive as organizations rely on efficient IT support for their operations.',
            'pros' => json_encode([
                'Opportunity to provide critical support to end-users and organizations',
                'Competitive salaries and potential for advancement in IT support roles',
                'Variety of technical challenges and continuous learning',
                'Interactions with users and the opportunity to improve user experiences',
            ]),
            'cons' => json_encode([
                'Handling a high volume of support requests and time-sensitive issues',
                'Need to adapt to evolving technologies and software updates',
                'Dealing with frustrated or non-technical users at times',
                'Maintaining documentation and knowledge bases can be time-consuming',
            ])
        ]);

        Job::create([
            'title' => 'Marketing Executive',
            'description' => 'Plan and execute marketing campaigns and strategies to promote products or services.',
            'responsibilities' => json_encode([
                'Plan and develop marketing strategies to promote products or services.',
                'Execute marketing campaigns across various channels (digital, traditional, social media).',
                'Analyze market trends and customer data to identify target audiences.',
                'Collaborate with creative teams to create marketing materials and content.',
                'Monitor and measure the effectiveness of marketing campaigns and adjust strategies as needed.',
                'Manage budgets, marketing schedules, and project timelines.',
            ]),
            'technical_skills' => json_encode([
                'Digital marketing tools and analytics (e.g., Google Analytics, SEO tools)',
                'Email marketing and marketing automation platforms',
                'Social media management and advertising',
                'Content management systems (CMS)',
                'Design and multimedia tools (e.g., Adobe Creative Suite)',
            ]),
            'soft_skills' => json_encode([
                'Creativity and innovative thinking',
                'Communication and presentation skills',
                'Analytical and data-driven decision-making',
                'Time management and organization',
                'Teamwork and collaboration',
            ]),
            'salary_min' => 2000,
            'salary_max' => 6000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Marketing analytics and reporting tools',
                'Social media management platforms (e.g., Hootsuite, Buffer)',
                'Content management systems (CMS)',
                'Design and multimedia software (e.g., Adobe Creative Suite)',
            ]),
            'career_progression' => 'Career progression for Marketing Executives may lead to roles such as Marketing Manager, Director of Marketing, or Chief Marketing Officer (CMO).',
            'job_outlook' => 'The job outlook for Marketing Executives remains positive as marketing plays a critical role in business growth and brand promotion.',
            'pros' => json_encode([
                'Opportunity to influence brand image and product promotion',
                'Competitive salaries and potential for leadership in marketing roles',
                'Dynamic and creative work environment',
                'Continuous learning and staying updated with marketing trends',
            ]),
            'cons' => json_encode([
                'Pressure to meet marketing targets and ROI goals',
                'Need to adapt to evolving digital marketing technologies and algorithms',
                'Balancing multiple marketing channels and campaigns can be challenging',
                'Managing budgets and resources effectively',
            ])
        ]);

        Job::create([
            'title' => 'Risk and Compliance Officer',
            'description' => 'Ensure regulatory compliance and manage risk within an organization.',
            'responsibilities' => json_encode([
                'Monitor and assess the organization\'s compliance with relevant regulations and standards.',
                'Develop and implement risk management and compliance strategies.',
                'Conduct risk assessments and create risk mitigation plans.',
                'Collaborate with departments to ensure policies and procedures align with compliance requirements.',
                'Prepare reports and documentation for regulatory audits and examinations.',
                'Stay updated with changes in regulations and best practices.',
            ]),
            'technical_skills' => json_encode([
                'Understanding of regulatory requirements (e.g., GDPR, HIPAA, ISO standards)',
                'Risk assessment and management methodologies',
                'Compliance management software and tools',
                'Data privacy and security knowledge',
                'Audit and documentation skills',
            ]),
            'soft_skills' => json_encode([
                'Analytical and critical thinking',
                'Communication and stakeholder management',
                'Problem-solving and decision-making',
                'Attention to detail and organization',
                'Adaptability and continuous learning',
            ]),
            'salary_min' => 3000,
            'salary_max' => 10000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Compliance management software (e.g., GRC platforms)',
                'Risk assessment and audit tools',
                'Regulatory reporting and documentation software',
                'Data privacy and security tools',
            ]),
            'career_progression' => 'Career progression for Risk and Compliance Officers may lead to roles such as Compliance Manager, Chief Risk Officer, or Chief Compliance Officer (CCO).',
            'job_outlook' => 'The job outlook for Risk and Compliance Officers remains positive as organizations face increased regulatory requirements and risk management needs.',
            'pros' => json_encode([
                'Critical role in ensuring legal and regulatory compliance',
                'Competitive salaries and potential for senior compliance or risk management roles',
                'Opportunity to work in various industries with evolving regulations',
                'Continuous learning and staying updated with compliance and risk management practices',
            ]),
            'cons' => json_encode([
                'Pressure to maintain compliance and manage risks effectively',
                'Need to adapt to changing regulations and industry standards',
                'Managing documentation and audit requirements can be time-consuming',
                'Balancing compliance with business objectives and growth',
            ])
        ]);

        Job::create([
            'title' => 'Information Systems Officer',
            'description' => 'Manage and maintain an organization\'s information systems and databases.',
            'responsibilities' => json_encode([
                'Oversee the design, development, and maintenance of information systems.',
                'Manage databases and ensure data integrity, security, and backup procedures.',
                'Collaborate with IT teams to optimize system performance and reliability.',
                'Provide technical support to end-users and troubleshoot system issues.',
                'Implement and maintain data privacy and security measures.',
                'Stay updated with emerging technologies and industry best practices.',
            ]),
            'technical_skills' => json_encode([
                'Database management systems (e.g., SQL Server, Oracle, MySQL)',
                'Information system architecture and design',
                'Data backup and recovery procedures',
                'Data security and privacy standards',
                'System administration and maintenance',
            ]),
            'soft_skills' => json_encode([
                'Communication and collaboration',
                'Problem-solving and decision-making',
                'Time management and organization',
                'Adaptability and continuous learning',
                'Attention to detail and documentation',
            ]),
            'salary_min' => 2300,
            'salary_max' => 7500,
            'programming_languages' => null,
            'tools' => json_encode([
                'Database management tools (e.g., phpMyAdmin, SQL Management Studio)',
                'System monitoring and maintenance software',
                'Data backup and recovery tools',
                'Data security and encryption software',
            ]),
            'career_progression' => 'Career progression for Information Systems Officers may lead to roles such as IT Manager, Database Administrator, or Chief Information Officer (CIO).',
            'job_outlook' => 'The job outlook for Information Systems Officers remains positive as organizations depend on well-maintained information systems and databases for their operations.',
            'pros' => json_encode([
                'Key role in managing and maintaining critical information systems and data',
                'Competitive salaries and potential for leadership in IT roles',
                'Varied work environments across different industries',
                'Continuous learning and staying updated with technology and data management practices',
            ]),
            'cons' => json_encode([
                'Pressure to maintain data integrity and system reliability',
                'Need to adapt to evolving technologies and data security threats',
                'Balancing data privacy and security with accessibility and usability',
                'Complexity of managing and optimizing information systems and databases',
            ])
        ]);

        Job::create([
            'title' => 'Penetration Tester',
            'description' => 'Ethical hackers who assess the security of systems and networks by simulating cyberattacks.',
            'responsibilities' => json_encode([
                'Conduct penetration testing to identify vulnerabilities in systems and networks.',
                'Simulate cyberattacks to test the resilience of security measures.',
                'Analyze and report on security weaknesses and recommend improvements.',
                'Collaborate with security and IT teams to implement security enhancements.',
                'Stay updated with the latest hacking techniques and security vulnerabilities.',
                'Participate in red teaming and vulnerability assessment activities.',
            ]),
            'technical_skills' => json_encode([
                'Security testing tools and frameworks (e.g., Metasploit, Burp Suite)',
                'Knowledge of common vulnerabilities and attack vectors',
                'Network and system security knowledge',
                'Ethical hacking and penetration testing methodologies',
                'Operating systems and scripting for testing',
            ]),
            'soft_skills' => json_encode([
                'Analytical and critical thinking',
                'Communication and reporting skills',
                'Problem-solving and creative thinking',
                'Adaptability and continuous learning',
                'Attention to detail and documentation',
            ]),
            'salary_min' => 3300,
            'salary_max' => 10000,
            'programming_languages' => json_encode([
                'Python',
                'Bash scripting',
                'SQL',
            ]),
            'tools' => json_encode([
                'Penetration testing frameworks (e.g., Kali Linux)',
                'Network scanning and analysis tools (e.g., Wireshark, Nmap)',
                'Vulnerability assessment and reporting tools',
                'Exploitation and post-exploitation tools',
            ]),
            'career_progression' => 'Career progression for Penetration Testers may lead to roles such as Senior Penetration Tester, Security Consultant, or Chief Information Security Officer (CISO).',
            'job_outlook' => 'The job outlook for Penetration Testers remains positive as organizations prioritize security assessments to protect against cyber threats.',
            'pros' => json_encode([
                'Critical role in identifying and mitigating security vulnerabilities',
                'Competitive salaries and potential for specialized security roles',
                'Varied work environments, including cybersecurity firms and organizations',
                'Continuous learning and staying updated with hacking techniques and defenses',
            ]),
            'cons' => json_encode([
                'Pressure to identify vulnerabilities while adhering to ethical guidelines',
                'Need to adapt to evolving hacking techniques and security measures',
                'Facing complex and potentially high-stress security scenarios',
                'Documenting and reporting vulnerabilities comprehensively',
            ])
        ]);

        Job::create([
            'title' => 'Network Administrator',
            'description' => 'Administer and maintain computer networks, ensuring their optimal performance.',
            'responsibilities' => json_encode([
                'Install, configure, and maintain network hardware and software components.',
                'Monitor network performance, troubleshoot issues, and optimize network traffic.',
                'Manage user accounts and permissions for network access.',
                'Implement and enforce network security measures and access controls.',
                'Collaborate with IT teams to plan and execute network upgrades and expansions.',
                'Document network configurations and changes.',
            ]),
            'technical_skills' => json_encode([
                'Network hardware and software components (routers, switches, firewalls, etc.)',
                'Network protocols and standards (TCP/IP, VLAN, DNS, etc.)',
                'Network monitoring and management tools',
                'Network security and firewall configurations',
                'Troubleshooting and diagnostic tools',
            ]),
            'soft_skills' => json_encode([
                'Communication and teamwork',
                'Problem-solving and critical thinking',
                'Time management and organization',
                'Adaptability and continuous learning',
                'Attention to detail and documentation',
            ]),
            'salary_min' => 3000,
            'salary_max' => 9000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Network monitoring and management software (e.g., Cisco, SolarWinds)',
                'Firewall and network security tools',
                'Diagnostic and troubleshooting software (e.g., Wireshark)',
                'Documentation and network configuration tools',
            ]),
            'career_progression' => 'Career progression for Network Administrators may lead to roles such as Network Engineer, Network Manager, or Chief Information Officer (CIO).',
            'job_outlook' => 'The job outlook for Network Administrators remains positive as organizations rely on efficient and secure network operations.',
            'pros' => json_encode([
                'Key role in maintaining network performance and security',
                'Competitive salaries and potential for senior network roles',
                'Variety of industries with network infrastructure needs',
                'Continuous learning and staying updated with networking technologies',
            ]),
            'cons' => json_encode([
                'Pressure to maintain network uptime and security',
                'Need to adapt to evolving network technologies and security threats',
                'Balancing network performance with security measures',
                'Complexity of managing network configurations and troubleshooting',
            ])
        ]);

        Job::create([
            'title' => 'Server Administrator',
            'description' => 'Manage and maintain servers to ensure they operate efficiently and securely.',
            'responsibilities' => json_encode([
                'Install, configure, and maintain server hardware and software components.',
                'Monitor server performance, troubleshoot issues, and optimize resource usage.',
                'Manage user accounts and access permissions on servers.',
                'Implement and enforce server security measures and access controls.',
                'Collaborate with IT teams to plan and execute server upgrades and expansions.',
                'Document server configurations and changes.',
            ]),
            'technical_skills' => json_encode([
                'Server hardware and software components (e.g., Windows Server, Linux, virtualization)',
                'Server performance monitoring and management tools',
                'Server security and access control configurations',
                'Troubleshooting and diagnostic tools',
                'Server backup and recovery procedures',
            ]),
            'soft_skills' => json_encode([
                'Communication and teamwork',
                'Problem-solving and critical thinking',
                'Time management and organization',
                'Adaptability and continuous learning',
                'Attention to detail and documentation',
            ]),
            'salary_min' => 2300,
            'salary_max' => 7500,
            'programming_languages' => null,
            'tools' => json_encode([
                'Server management and monitoring software (e.g., Microsoft System Center, VMware)',
                'Server security and access control tools',
                'Diagnostic and troubleshooting software (e.g., Nagios, Zabbix)',
                'Server backup and recovery tools',
            ]),
            'career_progression' => 'Career progression for Server Administrators may lead to roles such as Server Engineer, IT Manager, or Chief Information Officer (CIO).',
            'job_outlook' => 'The job outlook for Server Administrators remains positive as organizations depend on efficient and secure server operations.',
            'pros' => json_encode([
                'Critical role in maintaining server performance and security',
                'Competitive salaries and potential for senior server roles',
                'Variety of industries with server infrastructure needs',
                'Continuous learning and staying updated with server technologies',
            ]),
            'cons' => json_encode([
                'Pressure to maintain server uptime and security',
                'Need to adapt to evolving server technologies and security threats',
                'Balancing server performance with security measures',
                'Complexity of managing server configurations and troubleshooting',
            ])
        ]);

        Job::create([
            'title' => 'Database Administrator',
            'description' => 'Oversee databases, including design, maintenance, and data security.',
            'responsibilities' => json_encode([
                'Design, implement, and maintain database systems for optimal performance.',
                'Monitor database performance, troubleshoot issues, and optimize queries.',
                'Manage user accounts and access permissions within databases.',
                'Implement and enforce database security measures and access controls.',
                'Collaborate with development and IT teams to ensure data integrity and availability.',
                'Perform database backups, recovery procedures, and data migration.',
            ]),
            'technical_skills' => json_encode([
                'Database management systems (e.g., Oracle, MySQL, Microsoft SQL Server)',
                'Database design and optimization techniques',
                'Database performance monitoring and tuning',
                'Data security and access control configurations',
                'Database backup and recovery procedures',
            ]),
            'soft_skills' => json_encode([
                'Communication and teamwork',
                'Problem-solving and critical thinking',
                'Time management and organization',
                'Adaptability and continuous learning',
                'Attention to detail and documentation',
            ]),
            'salary_min' => 2500,
            'salary_max' => 8500,
            'programming_languages' => null,
            'tools' => json_encode([
                'Database management systems and tools (e.g., Oracle DB, MySQL Workbench)',
                'Database security and access control tools',
                'Database monitoring and performance tuning software',
                'Backup and recovery tools (e.g., Veeam, Backup Exec)',
            ]),
            'career_progression' => 'Career progression for Database Administrators may lead to roles such as Database Engineer, Data Architect, or Chief Data Officer (CDO).',
            'job_outlook' => 'The job outlook for Database Administrators remains positive as organizations rely on efficient and secure data management.',
            'pros' => json_encode([
                'Key role in maintaining data integrity and database performance',
                'Competitive salaries and potential for senior database roles',
                'Variety of industries with database management needs',
                'Continuous learning and staying updated with database technologies',
            ]),
            'cons' => json_encode([
                'Pressure to maintain data integrity and database performance',
                'Need to adapt to evolving database technologies and security threats',
                'Balancing database performance with security measures',
                'Complexity of managing database configurations and troubleshooting',
            ])
        ]);

        Job::create([
            'title' => 'System Administrator',
            'description' => 'Administer and manage an organization\'s IT infrastructure and systems.',
            'responsibilities' => json_encode([
                'Install, configure, and maintain servers, workstations, and IT infrastructure components.',
                'Monitor system performance, troubleshoot issues, and optimize resource usage.',
                'Manage user accounts and access permissions for IT systems.',
                'Implement and enforce system security measures and access controls.',
                'Collaborate with IT teams to plan and execute system upgrades and expansions.',
                'Perform system backups, recovery procedures, and disaster recovery planning.',
            ]),
            'technical_skills' => json_encode([
                'Server and workstation operating systems (e.g., Windows Server, Linux, Windows)',
                'Virtualization and cloud technologies',
                'System performance monitoring and tuning',
                'System security and access control configurations',
                'Backup and recovery procedures',
            ]),
            'soft_skills' => json_encode([
                'Communication and teamwork',
                'Problem-solving and critical thinking',
                'Time management and organization',
                'Adaptability and continuous learning',
                'Attention to detail and documentation',
            ]),
            'salary_min' => 2700,
            'salary_max' => 7000,
            'programming_languages' => null,
            'tools' => json_encode([
                'System management and monitoring tools (e.g., Microsoft System Center, VMware vSphere)',
                'Security and access control tools',
                'Diagnostic and troubleshooting software (e.g., Nagios, Zabbix)',
                'Backup and recovery tools (e.g., Veeam, Backup Exec)',
            ]),
            'career_progression' => 'Career progression for System Administrators may lead to roles such as IT Manager, IT Director, or Chief Information Officer (CIO).',
            'job_outlook' => 'The job outlook for System Administrators remains positive as organizations rely on efficient and secure IT infrastructure and systems.',
            'pros' => json_encode([
                'Key role in maintaining IT infrastructure and system performance',
                'Competitive salaries and potential for senior IT roles',
                'Variety of industries with IT infrastructure needs',
                'Continuous learning and staying updated with IT technologies',
            ]),
            'cons' => json_encode([
                'Pressure to maintain system uptime and security',
                'Need to adapt to evolving IT technologies and security threats',
                'Balancing system performance with security measures',
                'Complexity of managing system configurations and troubleshooting',
            ])
        ]);

        Job::create([
            'title' => 'UI/UX Designer',
            'description' => 'Design user interfaces and user experiences to create intuitive and appealing digital products.',
            'responsibilities' => json_encode([
                'Gather and analyze user requirements and business objectives.',
                'Create wireframes, prototypes, and mockups for digital products.',
                'Design user interfaces that are visually appealing and user-friendly.',
                'Ensure consistent branding and design guidelines across products.',
                'Collaborate with developers and product teams to implement designs.',
                'Conduct user testing and gather feedback for iterative design improvements.',
            ]),
            'technical_skills' => json_encode([
                'User interface (UI) design tools (e.g., Adobe XD, Sketch, Figma)',
                'User experience (UX) design methodologies',
                'Responsive and mobile design principles',
                'Understanding of front-end development (HTML, CSS, JavaScript)',
            ]),
            'soft_skills' => json_encode([
                'Creative and artistic design skills',
                'Communication and collaboration with cross-functional teams',
                'User empathy and understanding of user behaviors',
                'Problem-solving and critical thinking',
                'Attention to detail and aesthetics',
            ]),
            'salary_min' => 3000,
            'salary_max' => 9500,
            'programming_languages' => null,
            'tools' => json_encode([
                'UI/UX design software and tools (e.g., Adobe Creative Cloud, Figma)',
                'Prototyping and wireframing tools',
                'Collaboration and version control tools (e.g., Zeplin, InVision)',
                'User testing and feedback platforms',
            ]),
            'career_progression' => 'Career progression for UI/UX Designers may lead to roles such as Senior UI/UX Designer, UX Lead, or Creative Director.',
            'job_outlook' => 'The job outlook for UI/UX Designers remains positive as businesses prioritize user-centered design for digital products.',
            'pros' => json_encode([
                'Creative and visually rewarding work',
                'High demand for UI/UX expertise',
                'Collaborative and cross-functional work environment',
                'Opportunities for design leadership roles',
            ]),
            'cons' => json_encode([
                'Need for continuous learning and staying updated with design trends',
                'Iterative design process may involve multiple revisions',
                'Meeting tight deadlines and managing project expectations',
                'Subjectivity and the need for effective communication of design choices',
            ])
        ]);

        Job::create([
            'title' => 'Web Designer',
            'description' => 'Focus on the visual design and aesthetics of websites and web applications.',
            'responsibilities' => json_encode([
                'Create visually appealing layouts and designs for websites and web applications.',
                'Select color schemes, typography, and graphics to enhance user experience.',
                'Ensure design consistency and branding across digital products.',
                'Collaborate with developers to implement designs and ensure responsiveness.',
                'Stay updated with design trends and emerging web design technologies.',
            ]),
            'technical_skills' => json_encode([
                'Web design tools (e.g., Adobe Creative Cloud, Sketch, Figma)',
                'Graphic design software (e.g., Adobe Photoshop, Illustrator)',
                'HTML and CSS for design implementation',
                'Responsive web design principles',
            ]),
            'soft_skills' => json_encode([
                'Creative and artistic design skills',
                'Attention to detail and aesthetics',
                'Communication and collaboration with cross-functional teams',
                'Problem-solving and critical thinking',
                'Time management and organization',
            ]),
            'salary_min' => 2600,
            'salary_max' => 7000,
            'programming_languages' => null,
            'tools' => json_encode([
                'Web design software and tools (e.g., Adobe Creative Cloud, Figma)',
                'Graphics and image editing software',
                'HTML and CSS for design implementation',
                'Prototyping and wireframing tools',
            ]),
            'career_progression' => 'Career progression for Web Designers may lead to roles such as Senior Web Designer, Design Lead, or Creative Director.',
            'job_outlook' => 'The job outlook for Web Designers remains positive as businesses rely on visually appealing and user-friendly web interfaces.',
            'pros' => json_encode([
                'Creative and visually rewarding work',
                'High demand for web design expertise',
                'Opportunities for design leadership roles',
                'Potential for freelance and remote work',
            ]),
            'cons' => json_encode([
                'Need for continuous learning and staying updated with design trends',
                'Meeting tight deadlines and managing project expectations',
                'Subjectivity and the need for effective communication of design choices',
                'May require collaboration with other design and development teams',
            ])
        ]);

        Job::create([
            'title' => 'Multimedia Designer',
            'description' => 'Create multimedia content, including graphics, videos, and animations for various purposes.',
            'responsibilities' => json_encode([
                'Design and create visual content, such as graphics, illustrations, and infographics.',
                'Develop multimedia presentations, animations, and interactive content.',
                'Edit and produce videos, including motion graphics and special effects.',
                'Collaborate with creative teams to ensure a consistent visual style.',
                'Stay updated with multimedia design trends and software tools.',
            ]),
            'technical_skills' => json_encode([
                'Graphic design software (e.g., Adobe Creative Cloud, CorelDRAW)',
                'Video editing and production software (e.g., Adobe Premiere, After Effects)',
                '3D modeling and animation tools (e.g., Blender, Maya)',
                'Audio editing and music production software',
            ]),
            'soft_skills' => json_encode([
                'Creative and artistic design skills',
                'Attention to detail and aesthetics',
                'Communication and collaboration with cross-functional teams',
                'Problem-solving and critical thinking',
                'Time management and organization',
            ]),
            'salary_min' => 2000,
            'salary_max' => 5500,
            'programming_languages' => null,
            'tools' => json_encode([
                'Graphic design software and tools (e.g., Adobe Creative Cloud, CorelDRAW)',
                'Video editing and animation software',
                '3D modeling and rendering tools',
                'Audio editing and music production software',
            ]),
            'career_progression' => 'Career progression for Multimedia Designers may lead to roles such as Senior Multimedia Designer, Art Director, or Creative Director.',
            'job_outlook' => 'The job outlook for Multimedia Designers remains positive as multimedia content is essential in various industries, from marketing to entertainment.',
            'pros' => json_encode([
                'Diverse and creative multimedia projects',
                'High demand for multimedia design expertise',
                'Opportunities for leadership roles in creative teams',
                'Potential for freelance and remote work',
            ]),
            'cons' => json_encode([
                'Need for continuous learning and staying updated with design and multimedia trends',
                'Meeting tight deadlines and managing project expectations',
                'Subjectivity and the need for effective communication of design choices',
                'May require collaboration with other creative and development teams',
            ])
        ]);

        Job::create([
            'title' => 'Software Engineer',
            'description' => 'Design, develop, and maintain software applications. Work collaboratively in a team of developers to create solutions that meet client or organizational needs.',
            'responsibilities' => json_encode([
                'Write, test, and maintain high-quality code for software applications.',
                'Collaborate with cross-functional teams to gather and analyze software requirements.',
                'Design and implement software solutions that align with project goals.',
                'Debug and resolve software defects and issues.',
                'Optimize software performance and ensure scalability.',
                'Stay up-to-date with industry best practices and emerging technologies.',
                'Document code and technical specifications.',
                'Provide technical support and guidance to team members.',
            ]),
            'technical_skills' => json_encode([
                'Experienced in software development',
                'Proficient in programming',
                'Familiar with software development methodologies and tools'
            ]),
            'soft_skills' => json_encode([
                'Communication',
                'Problem-solving',
                'Teamwork',
                'Adaptability'
            ]),
            'salary_min' => 3000,
            'salary_max' => 10000,
            'programming_languages' => json_encode([
                'Java',
                'Python',
                'JavaScript',
                'C++'
            ]),
            'tools' => json_encode([
                'IDEs',
                'Git',
                'JIRA',
                'Docker'
            ]),
            'career_progression' => 'Potential career paths include Senior Software Engineer, Software Architect, Technical Lead, etc.',
            'job_outlook' => 'The technology industry and other sectors continue to rely on software development, leading to a positive job outlook.',
            'pros' => json_encode([
                'High demand and competitive salaries',
                'Opportunities for creativity and problem-solving',
                'Varied work environments and potential for remote work',
                'Continuous learning and skill development',
            ]),
            'cons' => json_encode([
                'Long hours or tight deadlines',
                'Need to stay up-to-date with rapidly changing technologies',
                'Mentally challenging and stressful',
                'Potential for repetitive tasks',
            ])
        ]);
    }
}
