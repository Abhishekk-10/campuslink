<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLink - Side Hustle Ideas</title>
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            line-height: 1.6;
        }
        
        a {
            text-decoration: none;
            color: #4f46e5;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header & Navigation */
        header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #4f46e5;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 2rem;
        }
        
        .nav-links a {
            color: #6b7280;
            font-weight: 500;
            padding-bottom: 0.25rem;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }
        
        .nav-links a:hover {
            color: #4f46e5;
            border-bottom: 2px solid #4f46e5;
        }
        
        .nav-links a.active {
            color: #1f2937;
            border-bottom: 2px solid #4f46e5;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            background-color: #4f46e5;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-left: 1rem;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: white;
            color: #4f46e5;
        }
        
        .btn-primary:hover {
            background-color: #f9fafb;
        }
        
        .btn-secondary {
            background-color: #4338ca;
            color: white;
            margin-left: 0.75rem;
        }
        
        .btn-secondary:hover {
            background-color: #3730a3;
        }
        
        /* Main Content */
        .main-content {
            padding: 3rem 0;
        }
        
        .section-title {
            font-size: 1.875rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #1f2937;
        }
        
        .section-subtitle {
            color: #6b7280;
            margin-bottom: 2rem;
        }
        
        /* Category Pills */
        .categories {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 2rem;
        }
        
        .category-pill {
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .category-pill.active {
            background-color: #e0e7ff;
            color: #4f46e5;
        }
        
        .category-pill:not(.active) {
            background-color: white;
            color: #6b7280;
        }
        
        .category-pill:hover:not(.active) {
            background-color: #f9fafb;
        }
        
        /* Search Bar */
        .search-container {
            margin-bottom: 2rem;
        }
        
        .search-bar {
            display: flex;
            max-width: 400px;
            position: relative;
        }
        
        .search-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 0.875rem;
        }
        
        .search-icon {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }
        
        /* Hustle Cards Grid */
        .hustle-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        
        .hustle-card {
            background-color: white;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .hustle-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .card-header {
            height: 0.25rem;
        }
        
        .tech-header {
            background: linear-gradient(90deg, #3b82f6, #4f46e5);
        }
        
        .creative-header {
            background: linear-gradient(90deg, #ec4899, #db2777);
        }
        
        .service-header {
            background: linear-gradient(90deg, #f59e0b, #d97706);
        }
        
        .online-header {
            background: linear-gradient(90deg, #06b6d4, #0891b2);
        }
        
        .campus-header {
            background: linear-gradient(90deg, #10b981, #059669);
        }
        
        .card-content {
            padding: 1.5rem;
        }
        
        .card-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 3rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .tech-icon {
            background-color: #dbeafe;
            color: #3b82f6;
        }
        
        .creative-icon {
            background-color: #fce7f3;
            color: #ec4899;
        }
        
        .service-icon {
            background-color: #fef3c7;
            color: #f59e0b;
        }
        
        .online-icon {
            background-color: #cffafe;
            color: #06b6d4;
        }
        
        .campus-icon {
            background-color: #d1fae5;
            color: #10b981;
        }
        
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #1f2937;
        }
        
        .tag {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }
        
        .tech-tag {
            background-color: #dbeafe;
            color: #1e40af;
        }
        
        .creative-tag {
            background-color: #fce7f3;
            color: #9d174d;
        }
        
        .service-tag {
            background-color: #fef3c7;
            color: #92400e;
        }
        
        .online-tag {
            background-color: #cffafe;
            color: #155e75;
        }
        
        .campus-tag {
            background-color: #d1fae5;
            color: #065f46;
        }
        
        .card-description {
            margin: 1rem 0;
            color: #4b5563;
        }
        
        .rating {
            display: flex;
            margin-bottom: 0.5rem;
        }
        
        .star {
            color: #fbbf24;
            margin-right: 0.25rem;
        }
        
        .empty-star {
            color: #e5e7eb;
            margin-right: 0.25rem;
        }
        
        .rating-text {
            margin-left: 0.5rem;
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .feature-icon {
            margin-right: 0.5rem;
            color: #9ca3af;
        }
        
        .card-button {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #4f46e5;
            color: white;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        
        .card-button:hover {
            background-color: #4338ca;
        }
        
        /* Success Stories */
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .testimonial-avatar {
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background-color: #4f46e5;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 1rem;
        }
        
        .testimonial-name {
            font-weight: 600;
            color: #1f2937;
        }
        
        .testimonial-role {
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .testimonial-quote {
            font-style: italic;
            color: #4b5563;
            margin-bottom: 1rem;
        }
        
        /* CTA Section */
        .cta-section {
            background-color: #4f46e5;
            border-radius: 0.75rem;
            padding: 3rem 2rem;
            color: white;
            margin-bottom: 3rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        @media (min-width: 768px) {
            .cta-section {
                flex-direction: row;
                text-align: left;
                justify-content: space-between;
                padding: 3rem;
            }
        }
        
        .cta-content {
            margin-bottom: 2rem;
        }
        
        @media (min-width: 768px) {
            .cta-content {
                margin-bottom: 0;
                margin-right: 2rem;
            }
        }
        
        .cta-title {
            font-size: 1.875rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }
        
        .cta-text {
            color: #e0e7ff;
            margin-bottom: 1.5rem;
            max-width: 36rem;
        }
        
        .cta-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }
        
        @media (min-width: 768px) {
            .cta-buttons {
                justify-content: flex-start;
            }
        }
        
        /* Footer */
        footer {
            background-color: white;
            padding: 3rem 0;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .footer-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #4f46e5;
            margin-bottom: 1rem;
        }
        
        .footer-copyright {
            color: #6b7280;
            font-size: 0.875rem;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .btn {
                display: block;
                width: 100%;
                margin-bottom: 1rem;
            }
            
            .btn-secondary {
                margin-left: 0;
            }
            
            .hustle-grid, .testimonial-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="nav-container">
            <div class="logo">CampusLink</div>
            <ul class="nav-links">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Hackathons</a></li>
                <li><a href="#" class="active">Side Hustles</a></li>
            </ul>
            <div class="user-profile">
                <div class="user-avatar">AJ</div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Boost Your Income with Side Hustles</h1>
            <p>Discover flexible ways to earn money while studying. Perfect for college students looking to gain experience and extra cash.</p>
            <div>
                <a href="#explore" class="btn btn-primary">Explore Side Hustles</a>
                <a href="#success-stories" class="btn btn-secondary">Success Stories</a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <!-- Search and Filter -->
            <div>
                <h2 class="section-title">Find Your Perfect Side Hustle</h2>
                <p class="section-subtitle">Browse through our curated list of side hustles popular among college students</p>
                
                <div class="search-container">
                    <div class="search-bar">
                        <span class="search-icon">🔍</span>
                        <input type="text" class="search-input" placeholder="Search side hustles...">
                    </div>
                </div>
            </div>

            <!-- Categories -->
            <div id="explore">
                <h3 style="margin-bottom: 1rem; font-size: 1.125rem; font-weight: 500;">Browse by Category</h3>
                <div class="categories">
                    <span class="category-pill active">All Categories</span>
                    <span class="category-pill">Tech</span>
                    <span class="category-pill">Creative</span>
                    <span class="category-pill">Service</span>
                    <span class="category-pill">Online</span>
                    <span class="category-pill">On Campus</span>
                </div>
            </div>

            <!-- Side Hustle Cards -->
            <div class="hustle-grid">
                <!-- Freelance Web Development -->
                <div class="hustle-card">
                    <div class="card-header tech-header"></div>
                    <div class="card-content">
                        <div class="card-icon tech-icon">💻</div>
                        <h3 class="card-title">Freelance Web Development</h3>
                        <div>
                            <span class="tag tech-tag">Tech</span>
                            <span class="tag online-tag">Online</span>
                        </div>
                        <p class="card-description">Build websites for local businesses, student organizations, or startups. Utilize your coding skills to create professional web presences.</p>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">High earning potential</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">⏱️</span>
                            <span>Flexible hours</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">📈</span>
                            <span>Builds portfolio for future jobs</span>
                        </div>
                        <a href="#" class="card-button">Learn More</a>
                    </div>
                </div>

                <!-- Content Creation -->
                <div class="hustle-card">
                    <div class="card-header creative-header"></div>
                    <div class="card-content">
                        <div class="card-icon creative-icon">🎥</div>
                        <h3 class="card-title">Content Creation</h3>
                        <div>
                            <span class="tag creative-tag">Creative</span>
                            <span class="tag online-tag">Online</span>
                        </div>
                        <p class="card-description">Create videos, blogs, or podcasts about your interests, campus life, or academic subjects. Monetize through ads, sponsorships, or subscriptions.</p>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="empty-star">★</span>
                            <span class="rating-text">Medium earning potential</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">⏱️</span>
                            <span>Flexible schedule</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">📈</span>
                            <span>Builds personal brand</span>
                        </div>
                        <a href="#" class="card-button">Learn More</a>
                    </div>
                </div>

                <!-- Campus Tour Guide -->
                <div class="hustle-card">
                    <div class="card-header service-header"></div>
                    <div class="card-content">
                        <div class="card-icon service-icon">🏫</div>
                        <h3 class="card-title">Campus Tour Guide</h3>
                        <div>
                            <span class="tag service-tag">Service</span>
                            <span class="tag campus-tag">On Campus</span>
                        </div>
                        <p class="card-description">Lead tours for prospective students and their families. Share your knowledge and experience about campus life and facilities.</p>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="empty-star">★</span>
                            <span class="empty-star">★</span>
                            <span class="rating-text">Moderate earning potential</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">⏱️</span>
                            <span>Scheduled shifts</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">📈</span>
                            <span>Improves communication skills</span>
                        </div>
                        <a href="#" class="card-button">Learn More</a>
                    </div>
                </div>

                <!-- Academic Tutoring -->
                <div class="hustle-card">
                    <div class="card-header campus-header"></div>
                    <div class="card-content">
                        <div class="card-icon campus-icon">📚</div>
                        <h3 class="card-title">Academic Tutoring</h3>
                        <div>
                            <span class="tag service-tag">Service</span>
                            <span class="tag campus-tag">On Campus</span>
                        </div>
                        <p class="card-description">Offer tutoring services in subjects you excel at. Help fellow students understand difficult concepts and prepare for exams.</p>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="empty-star">★</span>
                            <span class="rating-text">Good earning potential</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">⏱️</span>
                            <span>Flexible scheduling</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">📈</span>
                            <span>Reinforces your own knowledge</span>
                        </div>
                        <a href="#" class="card-button">Learn More</a>
                    </div>
                </div>

                <!-- Virtual Assistant -->
                <div class="hustle-card">
                    <div class="card-header online-header"></div>
                    <div class="card-content">
                        <div class="card-icon online-icon">📋</div>
                        <h3 class="card-title">Virtual Assistant</h3>
                        <div>
                            <span class="tag tech-tag">Tech</span>
                            <span class="tag online-tag">Online</span>
                        </div>
                        <p class="card-description">Provide administrative support to businesses or entrepreneurs remotely. Tasks may include email management, scheduling, data entry, and research.</p>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="empty-star">★</span>
                            <span class="rating-text">Good earning potential</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">⏱️</span>
                            <span>Flexible hours</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">📈</span>
                            <span>Develops organizational skills</span>
                        </div>
                        <a href="#" class="card-button">Learn More</a>
                    </div>
                </div>

                <!-- Graphic Design -->
                <div class="hustle-card">
                    <div class="card-header creative-header"></div>
                    <div class="card-content">
                        <div class="card-icon creative-icon">🎨</div>
                        <h3 class="card-title">Graphic Design</h3>
                        <div>
                            <span class="tag creative-tag">Creative</span>
                            <span class="tag online-tag">Online</span>
                        </div>
                        <p class="card-description">Create logos, social media graphics, posters, and other visual content for clients. Perfect for students with design skills and creativity.</p>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="rating-text">High earning potential</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">⏱️</span>
                            <span>Flexible schedule</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">📈</span>
                            <span>Builds creative portfolio</span>
                        </div>
                        <a href="#" class="card-button">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Success Stories -->
            <div id="success-stories">
                <h2 class="section-title">Success Stories</h2>
                <div class="testimonial-grid">
                    <!-- Success Story 1 -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">EC</div>
                            <div>
                                <div class="testimonial-name">Emily Chen</div>
                                <div class="testimonial-role">Computer Science, Junior</div>
                            </div>
                        </div>
                        <blockquote class="testimonial-quote">
                            "I started freelance web development in my sophomore year. Now I make around $2,000 per month building websites for local businesses while maintaining my GPA. CampusLink helped me find my first clients!"
                        </blockquote>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>

                    <!-- Success Story 2 -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">MJ</div>
                            <div>
                                <div class="testimonial-name">Marcus Johnson</div>
                                <div class="testimonial-role">Business Administration, Senior</div>
                            </div>
                        </div>
                        <blockquote class="testimonial-quote">
                            "I started tutoring fellow students in accounting and finance. What began as a way to make extra cash turned into a passion for teaching. I now have a waitlist of students and charge premium rates!"
                        </blockquote>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>

                    <!-- Success Story 3 -->
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="testimonial-avatar">SR</div>
                            <div>
                                <div class="testimonial-name">Sophia Rodriguez</div>
                                <div class="testimonial-role">Communications, Sophomore</div>
                            </div>
                        </div>
                        <blockquote class="testimonial-quote">
                            "I started a podcast about campus life that gained popularity. Through sponsorships and merchandise, I now earn enough to cover my rent each month while building my personal brand!"
                        </blockquote>
                        <div class="rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <div class="cta-content">
                    <h2 class="cta-title">Ready to start your side hustle?</h2>
                    <p class="cta-text">Get personalized recommendations based on your skills, schedule, and interests.</p>
                </div>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">Take the Quiz</a>
                    <a href="#" class="btn btn-secondary">Browse All Opportunities</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">CampusLink</div>
            <p class="footer-copyright">&copy; 2023 CampusLink. All rights reserved.</p>
        </div>
    </footer>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'96534245356e7935',t:'MTc1MzUyNjIxNi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>