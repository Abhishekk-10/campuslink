<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLink - College Projects</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .navbar {
            background-color: #2c3e50;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
        }

        .logo-icon {
            width: 35px;
            height: 35px;
            background-color: #3498db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 24px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #3498db;
        }

        .login-btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #2980b9;
        }

        .hero {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            padding: 80px 30px;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        .section {
            margin-bottom: 60px;
        }

        .section-title {
            font-size: 32px;
            margin-bottom: 20px;
            color: #2c3e50;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: #27ae60;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin-bottom: 30px;
        }

        .card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .card p {
            margin-bottom: 15px;
        }

        .project-types {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .project-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 4px solid #27ae60;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .project-icon {
            width: 60px;
            height: 60px;
            background-color: #f0f7fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .project-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .benefit-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            background-color: #f0f7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .steps {
            counter-reset: step-counter;
            margin-top: 30px;
        }

        .step {
            display: flex;
            margin-bottom: 30px;
            position: relative;
        }

        .step-number {
            background-color: #27ae60;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
            margin-right: 20px;
        }

        .step-content {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            flex-grow: 1;
        }

        .step-content h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .testimonials {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .testimonial {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
        }

        .testimonial-text::before {
            content: '"';
            font-size: 60px;
            color: #e0e0e0;
            position: absolute;
            top: -20px;
            left: -15px;
            z-index: 0;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #27ae60;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
        }

        .testimonial-info h4 {
            margin-bottom: 5px;
        }

        .testimonial-info p {
            color: #777;
            font-size: 14px;
        }

        .resources {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .resource-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .resource-icon {
            width: 50px;
            height: 50px;
            background-color: #f0f7fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .resource-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .resource-card p {
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .resource-link {
            display: inline-block;
            color: #27ae60;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 0;
            border-bottom: 2px solid transparent;
            transition: border-color 0.3s;
        }

        .resource-link:hover {
            border-color: #27ae60;
        }

        .cta {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            text-align: center;
            padding: 60px 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        .cta h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .cta p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .cta-btn {
            background-color: white;
            color: #27ae60;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .footer p {
            margin-top: 20px;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
            }
            
            .nav-links {
                margin-top: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero h1 {
                font-size: 32px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .project-types, .benefits-grid, .testimonials, .resources {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <div class="logo-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </div>
            <h1>CampusLink</h1>
        </a>
        <div class="nav-links">
            <a href="afterindex.php">Home</a>
            <a href="FindTeam.php">Find Team</a>
            <a href="hackathonpage.php">Hackathons</a>
            <!-- <a href="#">College Projects</a> -->
            <a href="sidehustle.php">Side Hustle</a>
        </div>
        <!-- <button class="login-btn">Login</button> -->
    </nav>

    <div class="hero">
        <h1>College Projects: Building Your Future</h1>
        <p>Discover how academic projects can transform your education, enhance your skills, and launch your career</p>
    </div>

    <div class="container">
        <section class="section">
            <h2 class="section-title">What Are College Projects?</h2>
            <div class="card">
                <h3>The Building Blocks of Applied Learning</h3>
                <p>College projects are structured academic assignments that challenge students to apply theoretical knowledge to practical problems. Unlike regular assignments, projects typically involve deeper research, creative problem-solving, and the development of tangible outcomes or solutions.</p>
                <p>These projects can range from individual research papers to complex team-based endeavors that span an entire semester or academic year. They often simulate real-world challenges and require students to integrate knowledge from multiple disciplines.</p>
                <p>Whether it's designing a mobile app, conducting scientific research, creating a business plan, or producing a documentary, college projects provide a platform for students to demonstrate their understanding, creativity, and professional skills.</p>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Types of College Projects</h2>
            <div class="project-types">
                <div class="project-card">
                    <div class="project-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h3>Research Projects</h3>
                    <p>In-depth exploration of specific topics, often involving literature reviews, data collection, analysis, and formal presentation of findings. These projects help develop critical thinking and analytical skills.</p>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3>Technical Projects</h3>
                    <p>Development of software applications, engineering prototypes, or technological solutions. These projects showcase technical skills and the ability to solve practical problems.</p>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Community Service Projects</h3>
                    <p>Initiatives that address social issues or community needs, often involving partnerships with local organizations. These projects develop empathy, social responsibility, and project management skills.</p>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </div>
                    <h3>Case Studies</h3>
                    <p>Detailed analysis of specific situations, organizations, or phenomena to apply theoretical concepts to real-world scenarios. These projects develop analytical and problem-solving skills.</p>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <h3>Creative Projects</h3>
                    <p>Development of artistic works, multimedia presentations, or design portfolios that showcase creativity and aesthetic skills. These projects foster innovation and self-expression.</p>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <h3>Capstone Projects</h3>
                    <p>Culminating projects that integrate knowledge from an entire program of study, often serving as a bridge between academic learning and professional practice. These comprehensive projects demonstrate mastery of a field.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Benefits of College Projects</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h3>Practical Application</h3>
                    <p>Projects bridge the gap between theory and practice, allowing you to apply classroom knowledge to real-world situations and see concepts in action.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                    </div>
                    <h3>Portfolio Development</h3>
                    <p>Projects create tangible work samples that demonstrate your abilities to potential employers, giving you a competitive edge in the job market.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Teamwork Skills</h3>
                    <p>Group projects develop collaboration, communication, and conflict resolution skills that are essential in today's workplace environments.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                    <h3>Problem-Solving</h3>
                    <p>Projects present complex challenges that require creative thinking, analytical reasoning, and resourcefulness to overcome obstacles.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                    <h3>Technical Proficiency</h3>
                    <p>Projects often require learning new tools, technologies, or methodologies, expanding your technical skill set and adaptability.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                        </svg>
                    </div>
                    <h3>Industry Connections</h3>
                    <p>Projects often involve industry partners or address real business needs, creating networking opportunities and potential job leads.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">How to Create Successful College Projects</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Choose a Meaningful Topic</h3>
                        <p>Select a project topic that genuinely interests you and aligns with your career goals. Your passion will fuel your motivation and enhance the quality of your work. Consider addressing real problems in your field or community.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Define Clear Objectives</h3>
                        <p>Establish specific, measurable goals for your project. What do you want to achieve? What questions are you trying to answer? Clear objectives will guide your work and help you evaluate your success.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Create a Detailed Plan</h3>
                        <p>Develop a comprehensive project plan with timelines, milestones, and resource requirements. Break down large tasks into manageable steps and allocate sufficient time for each phase, including research, development, testing, and refinement.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Form the Right Team</h3>
                        <p>For group projects, assemble a team with complementary skills and compatible work styles. Clearly define roles and responsibilities, establish communication channels, and set expectations for participation and accountability.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Conduct Thorough Research</h3>
                        <p>Build a strong foundation of knowledge by researching existing solutions, relevant theories, and best practices. Consult academic sources, industry publications, and experts in the field to inform your approach.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Seek Regular Feedback</h3>
                        <p>Consult with professors, advisors, and peers throughout the project. External perspectives can help identify blind spots, refine your approach, and improve the quality of your work.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">7</div>
                    <div class="step-content">
                        <h3>Document Your Process</h3>
                        <p>Maintain detailed records of your research, decisions, challenges, and solutions. Good documentation demonstrates your thought process, facilitates collaboration, and provides material for your final presentation or report.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">8</div>
                    <div class="step-content">
                        <h3>Present Professionally</h3>
                        <p>Develop a compelling presentation that clearly communicates your project's purpose, process, and outcomes. Use visual aids, demonstrations, or prototypes to enhance understanding and engagement.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Student Success Stories</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>My senior engineering project on sustainable water filtration caught the attention of a local environmental firm. What started as a class assignment turned into my first job offer! The hands-on experience and problem-solving skills I developed were exactly what employers were looking for.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">RJ</div>
                        <div class="testimonial-info">
                            <h4>Raj Patel</h4>
                            <p>Environmental Engineering Graduate</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>Our team's mobile app project for a healthcare communication platform won the university innovation competition. We've since secured seed funding and are developing it into a startup. The project taught me more about entrepreneurship than any class could have.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">LW</div>
                        <div class="testimonial-info">
                            <h4>Lisa Wong</h4>
                            <p>Computer Science Student & Entrepreneur</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>My psychology research project on stress management techniques for college students became the foundation for my graduate school application. The professors on the admissions committee were impressed by the depth of my research and my ability to design and execute a complex study independently.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">MJ</div>
                        <div class="testimonial-info">
                            <h4>Marcus Johnson</h4>
                            <p>Psychology Graduate Student</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Helpful Resources</h2>
            <div class="resources">
                <div class="resource-card">
                    <div class="resource-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h3>Project Management Tools</h3>
                    <p>Discover software and methodologies to help plan, track, and collaborate on your projects effectively.</p>
                    <a href="#" class="resource-link">Explore Tools</a>
                </div>
                <div class="resource-card">
                    <div class="resource-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                    </div>
                    <h3>Funding Opportunities</h3>
                    <p>Find grants, competitions, and sponsorships to support your innovative project ideas.</p>
                    <a href="#" class="resource-link">Find Funding</a>
                </div>
                <div class="resource-card">
                    <div class="resource-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Mentorship Programs</h3>
                    <p>Connect with experienced professionals and faculty who can provide guidance and feedback on your projects.</p>
                    <a href="#" class="resource-link">Find a Mentor</a>
                </div>
                <div class="resource-card">
                    <div class="resource-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h3>Research Databases</h3>
                    <p>Access academic journals, industry reports, and research papers to inform your project work.</p>
                    <a href="#" class="resource-link">Access Research</a>
                </div>
            </div>
        </section>

        <div class="cta">
            <h2>Ready to Start Your Next Project?</h2>
            <p>Whether you're looking for inspiration, collaborators, or guidance, CampusLink has resources to help you create impactful college projects.</p>
            <button class="cta-btn">Find Project Ideas</button>
        </div>
    </div>

    <footer class="footer">
        <div class="logo">
            <div class="logo-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </div>
            <h1>CampusLink</h1>
        </div>
        <p>&copy; 2023 CampusLink. All rights reserved.</p>
    </footer>

    <script>
        document.querySelector('.login-btn').addEventListener('click', function() {
            window.location.href = "login.html";
        });
        
        document.querySelector('.cta-btn').addEventListener('click', function() {
            alert('This would link to a page with project ideas and opportunities on CampusLink!');
        });
        
        document.querySelectorAll('.resource-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                alert('This would link to specific resources for college projects on CampusLink!');
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9639c5a017da180c',t:'MTc1MzI1ODk2Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>