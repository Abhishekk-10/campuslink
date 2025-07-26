<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLink - Connect with Student Teams</title>
    <style>
        
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #06b6d4;
            --light: #f3f4f6;
            --dark: #1f2937;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --gray: #6b7280;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9fafb;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .logo-icon {
            background-color: var(--primary);
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .nav-link {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link.active {
            color: var(--primary);
            font-weight: 600;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 0.375rem;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: var(--primary-dark);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.125rem;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .search-bar {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            background-color: white;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .search-bar input {
            flex: 1;
            padding: 1rem;
            border: none;
            outline: none;
            font-size: 1rem;
        }

        .search-bar button {
            padding: 1rem 1.5rem;
            background-color: var(--primary);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 500;
        }

        /* Tabs */
        .tabs {
            display: flex;
            background-color: white;
            border-radius: 0.5rem;
            overflow: hidden;
            margin: 2rem 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .tab {
            flex: 1;
            padding: 1rem;
            text-align: center;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .tab.active {
            background-color: var(--primary);
            color: white;
        }

        /* Content Sections */
        .section {
            padding: 2rem 0;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Team Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background-color: white;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            color: var(--gray);
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-text {
            margin-bottom: 1rem;
        }

        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .tag {
            background-color: #e5e7eb;
            color: var(--dark);
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .card-footer {
            padding: 1rem 1.5rem;
            background-color: #f9fafb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Profile Section */
        .profile-section {
            display: none;
        }

        .profile-header {
            background-color: white;
            border-radius: 0.5rem;
            padding: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 2rem;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: var(--gray);
            flex-shrink: 0;
        }

        .profile-info {
            flex: 1;
        }

        .profile-name {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .profile-headline {
            color: var(--gray);
            margin-bottom: 1rem;
        }

        .profile-stats {
            display: flex;
            gap: 2rem;
            margin-bottom: 1rem;
        }

        .stat {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-weight: 600;
            font-size: 1.25rem;
        }

        .stat-label {
            color: var(--gray);
            font-size: 0.875rem;
        }

        .profile-actions {
            display: flex;
            gap: 1rem;
        }

        .profile-tabs {
            display: flex;
            background-color: white;
            border-radius: 0.5rem;
            overflow: hidden;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-tab {
            padding: 1rem 2rem;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .profile-tab.active {
            border-bottom: 2px solid var(--primary);
            color: var(--primary);
        }

        /* Projects */
        .project-card {
            background-color: white;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .project-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .project-body {
            padding: 1.5rem;
        }

        /* Resume */
        .resume-section {
            background-color: white;
            border-radius: 0.5rem;
            padding: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .resume-section h3 {
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .resume-item {
            margin-bottom: 1.5rem;
            padding-left: 1rem;
            border-left: 2px solid #e5e7eb;
        }

        .resume-item:hover {
            border-left-color: var(--primary);
        }

        .resume-item-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .resume-item-subtitle {
            color: var(--gray);
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        /* Post Form */
        .post-form {
            background-color: white;
            border-radius: 0.5rem;
            padding: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
            font-size: 1rem;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-footer {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        /* Purpose Cards */
        .purpose-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .purpose-card {
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 1.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .purpose-card:hover {
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        .purpose-card.selected {
            border-color: var(--primary);
            background-color: rgba(79, 70, 229, 0.1);
        }

        .purpose-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .purpose-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .purpose-description {
            font-size: 0.875rem;
            color: var(--gray);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .cards {
                grid-template-columns: 1fr;
            }

            .profile-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-stats {
                justify-content: center;
            }

            .profile-actions {
                justify-content: center;
            }

            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .purpose-cards {
                grid-template-columns: 1fr;
            }
        }

        /* Active States */
        .teams-section {
            display: block;
        }

        .post-section, .profile-section {
            display: none;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
        }

        /* Badge for team purpose */
        .purpose-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
            margin-right: 0.5rem;
        }

        .purpose-badge.hackathon {
            background-color: #fee2e2;
            color: #dc2626;
        }

        .purpose-badge.college {
            background-color: #e0e7ff;
            color: #4f46e5;
        }

        .purpose-badge.side-hustle {
            background-color: #d1fae5;
            color: #059669;
        }

        .purpose-badge.research {
            background-color: #fef3c7;
            color: #d97706;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <div class="logo-icon">CL</div>
                    CampusLink
                </div>
                <div class="nav-links">
                     <h1>Home</h1>
                     <h1>Find Team</h1>
                     <h1>Hackathon</h1>
                     <h1>College Project</h1>
                     <h1>Side Hustle</h1>
                     
                </div>
                <button class="mobile-menu-btn">☰</button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Connect with Student Teams</h1>
            <p>Find the perfect team for your next project or recruit talented students for your team</p>
            <div class="search-bar">
                <input type="text" placeholder="Search for teams, projects, or skills...">
                <button>Search</button>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        <!-- Tabs -->
        <div class="tabs">
            <div class="tab active" id="tab-teams">Find Teams</div>
            <div class="tab" id="tab-post">Post Requirement</div>
            <div class="tab" id="tab-profile">My Profile</div>
        </div>

        <!-- Teams Section -->
        <section class="section teams-section" id="teams-section">
            <div class="section-title">
                <h2>Available Teams</h2>
                <div class="filters">
                    <select class="form-control">
                        <option>All Categories</option>
                        <option>Web Development</option>
                        <option>Mobile Apps</option>
                        <option>Data Science</option>
                        <option>UI/UX Design</option>
                    </select>
                </div>
            </div>

            <div class="cards">
                <!-- Team Card 1 -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Web Dev Dream Team</h3>
                        <div class="card-subtitle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Computer Science Department
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Looking for a frontend developer with React experience to join our team for the university hackathon. We're building a sustainability tracking app.</p>
                        <div class="tag-list">
                            <span class="tag">React</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">UI/UX</span>
                            <span class="tag">Hackathon</span>
                        </div>
                        <div class="card-subtitle">
                            <span class="purpose-badge hackathon">Hackathon</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            Posted 2 days ago
                        </div>
                    </div>
                    <div class="card-footer">
                        <span>3/4 members</span>
                        <a href="applyform.html">apply</a>
                        
                    </div>
                </div>

                <!-- Team Card 2 -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Science Squad</h3>
                        <div class="card-subtitle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Mathematics Department
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Seeking a student with machine learning experience to help with our research project on predictive analytics for student success.</p>
                        <div class="tag-list">
                            <span class="tag">Python</span>
                            <span class="tag">Machine Learning</span>
                            <span class="tag">Data Analysis</span>
                            <span class="tag">Research</span>
                        </div>
                        <div class="card-subtitle">
                            <span class="purpose-badge research">Research</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            Posted 1 week ago
                        </div>
                    </div>
                    <div class="card-footer">
                        <span>2/3 members</span>
                        <a href="applyform.html">apply</a>
                    </div>
                </div>

                <!-- Team Card 3 -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Mobile App Innovators</h3>
                        <div class="card-subtitle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Engineering Department
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Looking for Android developers to join our team for the senior project. We're building a campus navigation app with AR features.</p>
                        <div class="tag-list">
                            <span class="tag">Android</span>
                            <span class="tag">Kotlin</span>
                            <span class="tag">AR</span>
                            <span class="tag">Senior Project</span>
                        </div>
                        <div class="card-subtitle">
                            <span class="purpose-badge college">College Project</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            Posted 3 days ago
                        </div>
                    </div>
                    <div class="card-footer">
                        <span>1/4 members</span>
                        <a href="applyform.html">apply</a>
                        
                    </div>
                </div>

                <!-- Team Card 4 -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Startup Weekend Team</h3>
                        <div class="card-subtitle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Business School
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Looking for a developer and designer to join our team for a food delivery app targeting college students. Great opportunity to build a real product!</p>
                        <div class="tag-list">
                            <span class="tag">React Native</span>
                            <span class="tag">UI/UX</span>
                            <span class="tag">Firebase</span>
                            <span class="tag">Startup</span>
                        </div>
                        <div class="card-subtitle">
                            <span class="purpose-badge side-hustle">Side Hustle</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            Posted 5 days ago
                        </div>
                    </div>
                    <div class="card-footer">
                        <span>2/4 members</span>
                        <a href="applyform.html">apply</a>
                    
                    </div>
                </div>
            </div>
        </section>

        <!-- Post Requirement Section -->
        <section class="section post-section" id="post-section">
            <div class="section-title">
                <h2>Post Team Requirement</h2>
            </div>

            <div class="post-form">
                <div class="form-group">
                    <label class="form-label">Team Name</label>
                    <input type="text" class="form-control" placeholder="Enter your team name">
                </div>

                <div class="form-group">
                    <label class="form-label">Department</label>
                    <select class="form-control">
                        <option>Select Department</option>
                        <option>Computer Science</option>
                        <option>Engineering</option>
                        <option>Business</option>
                        <option>Mathematics</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Team Purpose</label>
                    <div class="purpose-cards">
                        <div class="purpose-card" data-purpose="hackathon">
                            <div class="purpose-icon">🏆</div>
                            <div class="purpose-title">Hackathon</div>
                            <div class="purpose-description">For competitive coding events and hackathons</div>
                        </div>
                        <div class="purpose-card" data-purpose="college">
                            <div class="purpose-icon">🎓</div>
                            <div class="purpose-title">College Project</div>
                            <div class="purpose-description">For academic assignments and course projects</div>
                        </div>
                        <div class="purpose-card" data-purpose="side-hustle">
                            <div class="purpose-icon">💼</div>
                            <div class="purpose-title">Side Hustle</div>
                            <div class="purpose-description">For startups and entrepreneurial ventures</div>
                        </div>
                        <div class="purpose-card" data-purpose="research">
                            <div class="purpose-icon">🔬</div>
                            <div class="purpose-title">Research</div>
                            <div class="purpose-description">For academic research and publications</div>
                        </div>
                    </div>
                    <input type="hidden" id="selected-purpose" name="purpose" value="">
                </div>

                <div class="form-group">
                    <label class="form-label">Project Description</label>
                    <textarea class="form-control" placeholder="Describe your project and what kind of team members you're looking for..."></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Required Skills (comma separated)</label>
                    <input type="text" class="form-control" placeholder="e.g. JavaScript, React, UI/UX, Python">
                </div>

                <div class="form-group">
                    <label class="form-label">Team Size</label>
                    <select class="form-control">
                        <option>Select Team Size</option>
                        <option>2 members</option>
                        <option>3 members</option>
                        <option>4 members</option>
                        <option>5+ members</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Project Timeline</label>
                    <select class="form-control">
                        <option>Select Timeline</option>
                        <option>Less than 1 week</option>
                        <option>1-2 weeks</option>
                        <option>2-4 weeks</option>
                        <option>1-2 months</option>
                        <option>Semester-long</option>
                    </select>
                </div>

                <div class="form-footer">
                    <button class="btn btn-outline">Cancel</button>
                    <button class="btn">Post Requirement</button>
                </div>
            </div>
        </section>

        <!-- Profile Section -->
        <section class="section profile-section" id="profile-section">
            <div class="profile-header">
                <div class="profile-avatar">JS</div>
                <div class="profile-info">
                    <h2 class="profile-name">John Smith</h2>
                    <p class="profile-headline">Computer Science Student | Web Developer | UI/UX Enthusiast</p>
                    <div class="profile-stats">
                        <div class="stat">
                            <span class="stat-value">5</span>
                            <span class="stat-label">Projects</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">3</span>
                            <span class="stat-label">Teams</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">12</span>
                            <span class="stat-label">Connections</span>
                        </div>
                    </div>
                    <div class="profile-actions">
                        <button class="btn">Edit Profile</button>
                        <button class="btn btn-outline">Share Profile</button>
                    </div>
                </div>
            </div>

            <div class="profile-tabs">
                <div class="profile-tab active">Projects</div>
                <div class="profile-tab">Resume</div>
                <div class="profile-tab">Skills</div>
            </div>

            <!-- Projects Tab Content -->
            <div class="projects-content">
                <div class="project-card">
                    <div class="project-header">
                        <h3 class="card-title">Campus Event Finder</h3>
                        <div class="card-subtitle">Web Application | Team Project</div>
                    </div>
                    <div class="project-body">
                        <p class="card-text">A web application that helps students discover events happening on campus. Built with React, Node.js, and MongoDB.</p>
                        <div class="tag-list">
                            <span class="tag">React</span>
                            <span class="tag">Node.js</span>
                            <span class="tag">MongoDB</span>
                            <span class="tag">Express</span>
                        </div>
                        <a href="#" class="btn btn-outline">View Project</a>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-header">
                        <h3 class="card-title">Study Buddy</h3>
                        <div class="card-subtitle">Mobile App | Personal Project</div>
                    </div>
                    <div class="project-body">
                        <p class="card-text">A mobile app that helps students find study partners for their courses. Built with Flutter and Firebase.</p>
                        <div class="tag-list">
                            <span class="tag">Flutter</span>
                            <span class="tag">Dart</span>
                            <span class="tag">Firebase</span>
                            <span class="tag">Mobile</span>
                        </div>
                        <a href="#" class="btn btn-outline">View Project</a>
                    </div>
                </div>
            </div>

            <!-- Resume Tab Content (Hidden by default) -->
            <div class="resume-content" style="display: none;">
                <div class="resume-section">
                    <h3>Education</h3>
                    <div class="resume-item">
                        <div class="resume-item-title">Bachelor of Science in Computer Science</div>
                        <div class="resume-item-subtitle">State University | 2020 - Present</div>
                        <p>GPA: 3.8/4.0</p>
                    </div>
                </div>

                <div class="resume-section">
                    <h3>Experience</h3>
                    <div class="resume-item">
                        <div class="resume-item-title">Web Development Intern</div>
                        <div class="resume-item-subtitle">Tech Solutions Inc. | Summer 2022</div>
                        <p>Worked on developing responsive web applications using React and Node.js. Collaborated with a team of developers to implement new features and fix bugs.</p>
                    </div>
                    <div class="resume-item">
                        <div class="resume-item-title">Teaching Assistant</div>
                        <div class="resume-item-subtitle">State University | Fall 2021</div>
                        <p>Assisted professor in teaching Introduction to Programming course. Conducted lab sessions and graded assignments.</p>
                    </div>
                </div>

                <div class="resume-section">
                    <h3>Skills</h3>
                    <div class="tag-list">
                        <span class="tag">JavaScript</span>
                        <span class="tag">Mongo DB</span>
                        <span class="tag">Angular JS</span>
                        <span class="tag">React</span>
                        <span class="tag">Node.js</span>
                        <span class="tag">HTML/CSS</span>
                        <span class="tag">Python</span>
                        <span class="tag">Java</span>
                        <span class="tag">Flutter</span>
                        <span class="tag">Git</span>
                        <span class="tag">UI/UX Design</span>
                        <span class="tag">Agile</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Tab Switching Logic
        document.getElementById('tab-teams').addEventListener('click', function() {
            document.getElementById('tab-teams').classList.add('active');
            document.getElementById('tab-post').classList.remove('active');
            document.getElementById('tab-profile').classList.remove('active');
            
            document.getElementById('teams-section').style.display = 'block';
            document.getElementById('post-section').style.display = 'none';
            document.getElementById('profile-section').style.display = 'none';
        });

        document.getElementById('tab-post').addEventListener('click', function() {
            document.getElementById('tab-teams').classList.remove('active');
            document.getElementById('tab-post').classList.add('active');
            document.getElementById('tab-profile').classList.remove('active');
            
            document.getElementById('teams-section').style.display = 'none';
            document.getElementById('post-section').style.display = 'block';
            document.getElementById('profile-section').style.display = 'none';
            
            // Show the post form
            document.querySelector('.post-form').style.display = 'block';
        });

        document.getElementById('tab-profile').addEventListener('click', function() {
            document.getElementById('tab-teams').classList.remove('active');
            document.getElementById('tab-post').classList.remove('active');
            document.getElementById('tab-profile').classList.add('active');
            
            document.getElementById('teams-section').style.display = 'none';
            document.getElementById('post-section').style.display = 'none';
            document.getElementById('profile-section').style.display = 'block';
        });

        // Profile Tab Switching
        const profileTabs = document.querySelectorAll('.profile-tab');
        const projectsContent = document.querySelector('.projects-content');
        const resumeContent = document.querySelector('.resume-content');

        profileTabs.forEach((tab, index) => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                profileTabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');

                // Show appropriate content
                if (index === 0) { // Projects tab
                    projectsContent.style.display = 'block';
                    resumeContent.style.display = 'none';
                } else if (index === 1) { // Resume tab
                    projectsContent.style.display = 'none';
                    resumeContent.style.display = 'block';
                }
            });
        });

        // Purpose Card Selection
        const purposeCards = document.querySelectorAll('.purpose-card');
        const selectedPurposeInput = document.getElementById('selected-purpose');

        purposeCards.forEach(card => {
            card.addEventListener('click', function() {
                // Remove selected class from all cards
                purposeCards.forEach(c => c.classList.remove('selected'));
                // Add selected class to clicked card
                this.classList.add('selected');
                // Update hidden input value
                selectedPurposeInput.value = this.dataset.purpose;
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'963bdd1ae7ee7643',t:'MTc1MzI4MDkwMC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
