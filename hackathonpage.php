 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLink - Hackathons</title>
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
            background: linear-gradient(135deg, #3498db, #8e44ad);
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
            background-color: #3498db;
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

        .benefit-icon svg {
            width: 30px;
            height: 30px;
            color: #3498db;
        }

        .benefit-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #2c3e50;
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
            background-color: #3498db;
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
            background-color: #3498db;
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

        .cta {
            background: linear-gradient(135deg, #3498db, #8e44ad);
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
            color: #3498db;
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
            
            .benefits-grid, .testimonials {
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
            <a href="#">Home</a>
            <a href="#">Find Team</a>
            <a href="#">Hackathons</a>
            <a href="#">College Projects</a>
            <a href="#">Side Hustle</a>
        </div>
        <!-- <button class="login-btn">Login</button> -->
    </nav>

    <div class="hero">
        <h1>Hackathons: Ideas that Build Themselves</h1>
        <p>Discover the exciting world of hackathons, where creativity meets technology to solve real-world problems</p>
    </div>

    <div class="container">
        <section class="section">
            <h2 class="section-title">What is a Hackathon?</h2>
            <div class="card">
                <h3>A Sprint of Innovation and Collaboration</h3>
                <p>A hackathon is an event where programmers, designers, project managers, and domain experts collaborate intensively over a short period (typically 24-48 hours) to create innovative solutions to specific challenges or problems.</p>
                <p>Despite the name, hackathons aren't about "hacking" in the cybersecurity sense. Instead, they focus on creative problem-solving, rapid prototyping, and building functional software or hardware solutions from scratch.</p>
                <p>Participants form teams, brainstorm ideas, develop prototypes, and present their solutions to judges and peers. The fast-paced, collaborative environment fosters innovation, learning, and networking.</p>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Benefits of Participating in Hackathons</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Skill Development</h3>
                    <p>Sharpen your technical skills and learn new technologies in a hands-on environment. The time constraint pushes you to learn quickly and efficiently.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Networking</h3>
                    <p>Connect with like-minded individuals, industry professionals, and potential employers. Many participants have found jobs or co-founders through hackathons.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                    </div>
                    <h3>Resume Building</h3>
                    <p>Add valuable project experience to your portfolio and resume. Employers value the practical skills and initiative demonstrated by hackathon participation.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                    <h3>Problem-Solving</h3>
                    <p>Develop critical thinking and creative problem-solving abilities by tackling real-world challenges under pressure.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </div>
                    <h3>Innovation</h3>
                    <p>Turn your ideas into reality and potentially create something that could become a startup or product. Many successful companies began as hackathon projects.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <h3>Fun and Prizes</h3>
                    <p>Enjoy a fun, energetic atmosphere with free food, swag, and the chance to win prizes ranging from cash to tech gadgets to investment opportunities.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">How Hackathons Work</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Registration</h3>
                        <p>Sign up individually or with a team (typically 2-5 people). Some hackathons allow you to form teams on the spot, while others require pre-formed teams.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Kickoff and Theme Announcement</h3>
                        <p>The event begins with an opening ceremony where organizers announce the theme, challenges, rules, and available resources. Sponsors may present specific problem statements or APIs to use.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Team Formation</h3>
                        <p>If you haven't already formed a team, this is when you'll network and find teammates with complementary skills. Ideally, teams include a mix of developers, designers, and domain experts.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Brainstorming</h3>
                        <p>Teams brainstorm ideas that address the hackathon's theme or challenges. This phase involves discussing feasibility, impact, and technical requirements.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Building</h3>
                        <p>The main phase where teams design, code, and develop their solutions. This typically lasts 24-48 hours with mentors available to provide guidance.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Submission and Presentations</h3>
                        <p>Teams submit their projects and prepare short presentations (usually 3-5 minutes) to demonstrate their solutions to judges and other participants.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">7</div>
                    <div class="step-content">
                        <h3>Judging and Awards</h3>
                        <p>Judges evaluate projects based on criteria like innovation, technical complexity, design, and relevance to the theme. Winners are announced and prizes are awarded.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Why Participate in Hackathons?</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>My first hackathon completely changed my career trajectory. I met my co-founder there, and three years later, our startup has raised $2 million in funding. The connections and skills I gained were invaluable.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">AR</div>
                        <div class="testimonial-info">
                            <h4>Aisha Rahman</h4>
                            <p>Tech Entrepreneur</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>As a student with no industry experience, hackathons helped me build a portfolio that impressed recruiters. I learned more in one weekend than in weeks of classes, and the hands-on experience was exactly what employers were looking for.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">JL</div>
                        <div class="testimonial-info">
                            <h4>Jason Lee</h4>
                            <p>Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        <p>I was intimidated at first, thinking I wasn't skilled enough. But the collaborative atmosphere was so welcoming! I contributed my design skills while learning coding basics from teammates. Now I attend hackathons regularly to keep learning.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">MP</div>
                        <div class="testimonial-info">
                            <h4>Maria Perez</h4>
                            <p>UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="cta">
            <h2>Ready to Join Your First Hackathon?</h2>
            <p>Whether you're a coding expert or just starting out, hackathons offer something for everyone. Challenge yourself, build your network, and create something amazing!</p>
            
            <a href="apply.php">

            <button class="cta-btn">Find Upcoming Hackathons</button>
            </a>


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
            alert('This would link to a page listing upcoming hackathons on CampusLink!');
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9639bbf2647bf647',t:'MTc1MzI1ODU3MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>