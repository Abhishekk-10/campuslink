<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLink - College Side Hustles</title>
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
            background-color: #f39c12;
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
            color: #f39c12;
        }

        .login-btn {
            background-color: #f39c12;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #e67e22;
        }

        .hero {
            background: linear-gradient(135deg, #f39c12, #e67e22);
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
            background-color: #f39c12;
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

        .hustle-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .hustle-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 4px solid #f39c12;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .hustle-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .hustle-icon {
            width: 60px;
            height: 60px;
            background-color: #fff8e1;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .hustle-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .hustle-details {
            margin-top: 15px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: auto;
        }

        .hustle-tag {
            background-color: #fff8e1;
            color: #e67e22;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
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
            background-color: #fff8e1;
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
            background-color: #f39c12;
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
            background-color: #f39c12;
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

        .faq-section {
            margin-top: 30px;
        }

        .faq-item {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 15px;
            overflow: hidden;
        }

        .faq-question {
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            color: #2c3e50;
        }

        .faq-question::after {
            content: '+';
            font-size: 20px;
            transition: transform 0.3s;
        }

        .faq-answer {
            padding: 0 25px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease;
        }

        .faq-item.active .faq-question::after {
            content: '−';
        }

        .faq-item.active .faq-answer {
            padding: 0 25px 20px;
            max-height: 500px;
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
            background-color: #fff8e1;
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
            color: #f39c12;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 0;
            border-bottom: 2px solid transparent;
            transition: border-color 0.3s;
        }

        .resource-link:hover {
            border-color: #f39c12;
        }

        .cta {
            background: linear-gradient(135deg, #f39c12, #e67e22);
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
            color: #f39c12;
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
            
            .hustle-grid, .benefits-grid, .testimonials, .resources {
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
            <a href="findTeam.php">Find Team</a>
            <a href="hackathonpage.php">Hackathons</a>
            <a href="collegeproject.php">College Projects</a>
            <!-- <a href="sidehustle.php">Side Hustle</a> -->
        </div>
        <!-- <button class="login-btn">Login</button> -->
    </nav>

    <div class="hero">
        <h1>Side Hustles: Earn While You Learn</h1>
        <p>Discover flexible ways to make money, gain valuable skills, and build your resume while balancing your studies</p>
    </div>

    <div class="container">
        <section class="section">
            <h2 class="section-title">What Are College Side Hustles?</h2>
            <div class="card">
                <h3>Flexible Income Opportunities for Students</h3>
                <p>College side hustles are part-time income opportunities that allow students to earn money while maintaining the flexibility needed to prioritize their academic responsibilities. Unlike traditional part-time jobs with fixed schedules, side hustles often offer greater control over when, where, and how much you work.</p>
                <p>These income streams can range from freelance work and gig economy opportunities to small businesses and passive income ventures. The digital economy has created countless ways for students to monetize their skills, interests, and available time without committing to rigid employment structures.</p>
                <p>Whether you're looking to cover basic expenses, reduce student loan debt, build savings, or gain practical experience in your field of study, the right side hustle can help you achieve your financial and professional goals while still focusing on your education.</p>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Popular Side Hustles for College Students</h2>
            <div class="hustle-grid">
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                            <path d="M2 2l7.586 7.586"></path>
                            <circle cx="11" cy="11" r="2"></circle>
                        </svg>
                    </div>
                    <h3>Freelance Writing</h3>
                    <p>Create content for blogs, websites, and publications. Strong writing skills can earn you $20-50 per hour depending on your expertise and the client.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">Remote</span>
                        <span class="hustle-tag">Flexible Hours</span>
                        <span class="hustle-tag">Skill-Based</span>
                    </div>
                </div>
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3>Web Development</h3>
                    <p>Build websites for small businesses, startups, or individuals. Entry-level developers can charge $25-50 per hour, with rates increasing with experience.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">Remote</span>
                        <span class="hustle-tag">Project-Based</span>
                        <span class="hustle-tag">Tech Skills</span>
                    </div>
                </div>
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                            <circle cx="12" cy="13" r="4"></circle>
                        </svg>
                    </div>
                    <h3>Photography</h3>
                    <p>Offer portrait, event, or stock photography services. Campus events, graduation photos, and local businesses are great starting points.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">Creative</span>
                        <span class="hustle-tag">Equipment Needed</span>
                        <span class="hustle-tag">Weekend Work</span>
                    </div>
                </div>
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Tutoring</h3>
                    <p>Help other students in subjects you excel at. Campus tutoring can pay $15-25 per hour, while specialized test prep or advanced subjects can earn $30-50+.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">On-Campus</span>
                        <span class="hustle-tag">Academic</span>
                        <span class="hustle-tag">Scheduled</span>
                    </div>
                </div>
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                    </div>
                    <h3>Social Media Management</h3>
                    <p>Create and schedule content for small businesses on platforms like Instagram, TikTok, and Facebook. Starting rates range from $15-30 per hour.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">Remote</span>
                        <span class="hustle-tag">Digital Marketing</span>
                        <span class="hustle-tag">Ongoing Work</span>
                    </div>
                </div>
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </div>
                    <h3>Virtual Assistant</h3>
                    <p>Provide administrative support to entrepreneurs and small businesses. Tasks include email management, scheduling, and basic customer service for $15-25 per hour.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">Remote</span>
                        <span class="hustle-tag">Administrative</span>
                        <span class="hustle-tag">Flexible Hours</span>
                    </div>
                </div>
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                        </svg>
                    </div>
                    <h3>Food Delivery</h3>
                    <p>Work with apps like DoorDash, Uber Eats, or Grubhub. Earnings vary by location, but typically range from $15-25 per hour including tips.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">Local</span>
                        <span class="hustle-tag">Transportation Needed</span>
                        <span class="hustle-tag">On-Demand</span>
                    </div>
                </div>
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <line x1="10" y1="9" x2="8" y2="9"></line>
                        </svg>
                    </div>
                    <h3>Print-on-Demand Products</h3>
                    <p>Design and sell custom merchandise through platforms like Redbubble, Printify, or Etsy without inventory or upfront costs.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">Passive Income</span>
                        <span class="hustle-tag">Creative</span>
                        <span class="hustle-tag">E-commerce</span>
                    </div>
                </div>
                <div class="hustle-card">
                    <div class="hustle-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                    <h3>House Sitting</h3>
                    <p>Care for homes while owners are away. Services can include plant watering, pet care, and mail collection. Rates typically range from $25-75 per day.</p>
                    <div class="hustle-details">
                        <span class="hustle-tag">Local</span>
                        <span class="hustle-tag">Occasional</span>
                        <span class="hustle-tag">Low Effort</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Benefits of Side Hustles for Students</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3>Financial Independence</h3>
                    <p>Earn money to cover expenses, reduce student loan debt, or build savings while maintaining control over your schedule.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h3>Resume Building</h3>
                    <p>Develop practical skills and gain real-world experience that can make you more competitive in the job market after graduation.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                    <h3>Skill Development</h3>
                    <p>Learn valuable skills like time management, client communication, marketing, and financial literacy that aren't always taught in the classroom.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Networking</h3>
                    <p>Build professional connections with clients, customers, and fellow entrepreneurs that could lead to future opportunities.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                        </svg>
                    </div>
                    <h3>Career Exploration</h3>
                    <p>Test different industries and roles to discover your interests and strengths before committing to a full-time career path.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Flexibility</h3>
                    <p>Work around your class schedule and academic commitments, unlike traditional part-time jobs with rigid hours.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">How to Start Your Side Hustle</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Assess Your Skills and Interests</h3>
                        <p>Identify what you're good at and what you enjoy doing. The most sustainable side hustles leverage your existing strengths and passions. Consider your academic major, hobbies, and natural talents when brainstorming potential opportunities.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Research Market Demand</h3>
                        <p>Investigate whether there's a need for your skills or services. Look for gaps in the market, especially within your campus community or local area. Research what others are charging for similar services to establish competitive pricing.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Start Small and Test</h3>
                        <p>Begin with a minimal investment of time and money to test your idea. Offer your services to friends, classmates, or a small audience before scaling up. This allows you to refine your offering based on feedback without overcommitting.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Create a Basic Business Plan</h3>
                        <p>Outline your services, target customers, pricing strategy, and time commitment. Set realistic income goals and determine how many hours you can dedicate to your side hustle without compromising your studies.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Build an Online Presence</h3>
                        <p>Create professional profiles on relevant platforms where potential clients can find you. This might include a simple website, social media accounts, or profiles on freelance marketplaces like Upwork, Fiverr, or TaskRabbit.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Network and Market Yourself</h3>
                        <p>Spread the word about your services through campus organizations, social media, and word of mouth. Consider creating business cards or flyers to distribute in appropriate locations. Ask satisfied clients for referrals and testimonials.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">7</div>
                    <div class="step-content">
                        <h3>Manage Your Time Effectively</h3>
                        <p>Use calendars and productivity tools to balance your side hustle with academic responsibilities. Block out dedicated time for both studying and working, and be realistic about what you can accomplish.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">8</div>
                    <div class="step-content">
                        <h3>Handle Finances Properly</h3>
                        <p>Keep track of income and expenses for tax purposes. Consider opening a separate bank account for your business activities. Research whether you need to report your income and potentially pay quarterly estimated taxes.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Student Success Stories</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>I started designing custom graduation announcements for friends during my sophomore year. Word spread quickly, and I now run a thriving design business that pays for my apartment and textbooks. The best part is I can work between classes and still maintain my GPA.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">EL</div>
                        <div class="testimonial-info">
                            <h4>Emma Liu</h4>
                            <p>Graphic Design Major, Junior</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>As a computer science student, I started building websites for local businesses on weekends. What began as a way to make extra cash turned into valuable portfolio pieces that helped me land a summer internship at a tech company. I'm now earning enough to graduate debt-free.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">JR</div>
                        <div class="testimonial-info">
                            <h4>James Rodriguez</h4>
                            <p>Computer Science Major, Senior</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>I turned my passion for fitness into a side hustle by becoming a certified personal trainer. I now offer training sessions to other students between classes. It's helped me apply what I'm learning in my exercise science courses while making connections that will help my future career.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">TJ</div>
                        <div class="testimonial-info">
                            <h4>Taylor Johnson</h4>
                            <p>Exercise Science Major, Senior</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-section">
                <div class="faq-item">
                    <div class="faq-question">How many hours should I dedicate to my side hustle?</div>
                    <div class="faq-answer">
                        <p>The right amount of time varies based on your academic workload, the nature of your side hustle, and your financial needs. Start with 5-10 hours per week and adjust based on how it affects your studies. Remember that your education is your primary investment, so prioritize accordingly.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do I need to register my side hustle as a business?</div>
                    <div class="faq-answer">
                        <p>For most small-scale side hustles, you can operate as a sole proprietor without formal registration. However, as your income grows, you may want to consider registering as an LLC for liability protection. Check your local regulations, as requirements vary by location.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How do I handle taxes on my side hustle income?</div>
                    <div class="faq-answer">
                        <p>In the U.S., if you earn more than $400 from self-employment, you're required to report it on your tax return. Keep detailed records of income and business expenses, as these can be deducted. Consider consulting with a tax professional or using tax software designed for self-employed individuals.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I run my side hustle from my dorm room?</div>
                    <div class="faq-answer">
                        <p>Check your housing agreement, as some colleges have restrictions on running businesses from dorms. Many digital side hustles can be operated discreetly, but businesses that require inventory storage or client visits may need alternative spaces. Campus entrepreneurship centers often offer workspace for student businesses.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How do I find my first clients or customers?</div>
                    <div class="faq-answer">
                        <p>Start with your existing network—classmates, friends, and family members are often willing to support you and provide feedback. Campus bulletin boards, social media groups, and local community forums are good places to advertise. Consider offering introductory rates or free samples to build your portfolio and generate reviews.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Helpful Resources</h2>
            <div class="resources">
                <div class="resource-card">
                    <div class="resource-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h3>Side Hustle Platforms</h3>
                    <p>Discover websites and apps that connect you with gig work and freelance opportunities suited for students.</p>
                    <a href="#" class="resource-link">Explore Platforms</a>
                </div>
                <div class="resource-card">
                    <div class="resource-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                    </div>
                    <h3>Campus Entrepreneurship Center</h3>
                    <p>Learn about resources, mentorship, and potential funding available through your university's entrepreneurship programs.</p>
                    <a href="#" class="resource-link">Visit Center</a>
                </div>
                <div class="resource-card">
                    <div class="resource-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Student Business Network</h3>
                    <p>Connect with other student entrepreneurs to share advice, collaborate, and find support for your side hustle journey.</p>
                    <a href="#" class="resource-link">Join Network</a>
                </div>
                <div class="resource-card">
                    <div class="resource-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f39c12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h3>Tax and Legal Guides</h3>
                    <p>Access simplified information about tax obligations, business structures, and legal considerations for student entrepreneurs.</p>
                    <a href="#" class="resource-link">View Guides</a>
                </div>
            </div>
        </section>

        <div class="cta">
            <h2>Ready to Start Your Side Hustle?</h2>
            <p>Turn your skills and interests into income while building valuable experience for your future career.</p>
           <a href="sidehustleidea.php">find sidehustleideas</a>
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
            alert('This would link to a page with side hustle ideas and opportunities on CampusLink!');
        });
        
        document.querySelectorAll('.resource-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                alert('This would link to specific resources for side hustles on CampusLink!');
            });
        });
        
        // FAQ accordion functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                faqItem.classList.toggle('active');
                
                // Close other open FAQs
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem && item.classList.contains('active')) {
                        item.classList.remove('active');
                    }
                });
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9639d2b4b303f655',t:'MTc1MzI1OTUwMy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>