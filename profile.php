 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusLink - User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8;
        }
        .profile-header {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .hackathon-card {
            transition: all 0.2s ease;
        }
        .hackathon-card:hover {
            transform: translateY(-3px);
        }
        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <span class="text-indigo-600 font-bold text-xl">CampusLink</span>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                            <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Dashboard
                            </a>
                            <a href="#" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Profile
                            </a>
                            <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Hackathons
                            </a>
                            <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                Teams
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <div class="ml-3 relative">
                            <div>
                                <button type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Abhishek+Kumar+Thakur&background=4f46e5&color=fff" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Profile Header -->
        <div class="profile-header text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="flex-shrink-0 mb-4 md:mb-0">
                        <img class="h-32 w-32 rounded-full border-4 border-white shadow-lg" src="https://ui-avatars.com/api/?name=Abhishek+Kumar+Thakur&background=7c3aed&color=fff&size=128" alt="Abhishek Kumar Thakur">
                    </div>
                    <div class="md:ml-6 text-center md:text-left">
                        <h1 class="text-3xl font-bold">Abhishek Kumar Thakur</h1>
                        <p class="text-indigo-100">Computer Science Student</p>
                        <p class="text-indigo-100 mt-1">Netaji Subhas University</p>
                        <div class="mt-3 flex flex-wrap justify-center md:justify-start gap-2">
                            <span class="bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full text-sm">Full Stack Developer</span>
                            <span class="bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full text-sm">AI Enthusiast</span>
                            <span class="bg-indigo-800 text-indigo-100 px-3 py-1 rounded-full text-sm">UI/UX Design</span>
                        </div>
                    </div>
                    <div class="md:ml-auto mt-6 md:mt-0">
                        <button class="bg-white text-indigo-600 px-4 py-2 rounded-lg font-medium shadow-sm hover:bg-indigo-50 transition-colors">
                            Edit Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="stat-card bg-white rounded-xl shadow p-6 border-l-4 border-green-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-3xl font-bold text-gray-900">5</h2>
                            <p class="text-gray-500">Hackathons Won</p>
                        </div>
                    </div>
                </div>
                <div class="stat-card bg-white rounded-xl shadow p-6 border-l-4 border-blue-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-3xl font-bold text-gray-900">12</h2>
                            <p class="text-gray-500">Hackathons Participated</p>
                        </div>
                    </div>
                </div>
                <div class="stat-card bg-white rounded-xl shadow p-6 border-l-4 border-purple-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 text-purple-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-3xl font-bold text-gray-900">3</h2>
                            <p class="text-gray-500">Applications Pending</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="mb-6">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                        <button class="tab-btn border-indigo-500 text-indigo-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" data-tab="hackathons">
                            Hackathons
                        </button>
                        <button class="tab-btn border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" data-tab="skills">
                            Skills & Achievements
                        </button>
                        <button class="tab-btn border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" data-tab="about">
                            About Me
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="hackathons">
                <!-- Hackathon Filter -->
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <div class="text-gray-700 font-medium">Filter by:</div>
                    <button class="filter-btn bg-indigo-100 text-indigo-700 px-4 py-2 rounded-lg text-sm font-medium" data-filter="all">All</button>
                    <button class="filter-btn bg-white text-gray-600 px-4 py-2 rounded-lg text-sm font-medium" data-filter="won">Won</button>
                    <button class="filter-btn bg-white text-gray-600 px-4 py-2 rounded-lg text-sm font-medium" data-filter="participated">Participated</button>
                    <button class="filter-btn bg-white text-gray-600 px-4 py-2 rounded-lg text-sm font-medium" data-filter="applied">Applied</button>
                </div>

                <!-- Hackathon List -->
                <div class="space-y-6">
                    <!-- Hackathon Item - Won -->
                    <div class="hackathon-card bg-white rounded-xl shadow-sm overflow-hidden border-l-4 border-green-500" data-category="won">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row md:items-center">
                                <div class="flex-1">
                                    <div class="flex items-center">
                                        <h3 class="text-lg font-semibold text-gray-900">AI Innovation Hackathon 2023</h3>
                                        <span class="ml-3 badge bg-green-100 text-green-800">Won</span>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">Stanford University • June 15-17, 2023</p>
                                    <p class="mt-3 text-gray-700">Created an AI-powered solution for early disease detection using machine learning algorithms.</p>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">AI/ML</span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Healthcare</span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Python</span>
                                    </div>
                                </div>
                                <div class="mt-4 md:mt-0 md:ml-6 flex flex-col items-end">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="ml-1 text-sm font-medium text-gray-700">1st Place</span>
                                    </div>
                                    <button class="mt-3 text-indigo-600 hover:text-indigo-800 text-sm font-medium">View Project</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hackathon Item - Participated -->
                    <div class="hackathon-card bg-white rounded-xl shadow-sm overflow-hidden border-l-4 border-blue-500" data-category="participated">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row md:items-center">
                                <div class="flex-1">
                                    <div class="flex items-center">
                                        <h3 class="text-lg font-semibold text-gray-900">Global Climate Hackathon</h3>
                                        <span class="ml-3 badge bg-blue-100 text-blue-800">Participated</span>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">Virtual Event • April 22-24, 2023</p>
                                    <p class="mt-3 text-gray-700">Developed a web application to track and reduce carbon footprint for individuals and small businesses.</p>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Climate Tech</span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">React</span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Node.js</span>
                                    </div>
                                </div>
                                <div class="mt-4 md:mt-0 md:ml-6 flex flex-col items-end">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="ml-1 text-sm font-medium text-gray-700">Top 10 Finalist</span>
                                    </div>
                                    <button class="mt-3 text-indigo-600 hover:text-indigo-800 text-sm font-medium">View Project</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hackathon Item - Applied -->
                    <div class="hackathon-card bg-white rounded-xl shadow-sm overflow-hidden border-l-4 border-purple-500" data-category="applied">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row md:items-center">
                                <div class="flex-1">
                                    <div class="flex items-center">
                                        <h3 class="text-lg font-semibold text-gray-900">Blockchain Innovation Challenge</h3>
                                        <span class="ml-3 badge bg-purple-100 text-purple-800">Applied</span>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">MIT • August 10-12, 2023</p>
                                    <p class="mt-3 text-gray-700">Application submitted on July 15, 2023. Waiting for confirmation.</p>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Blockchain</span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Web3</span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">Solidity</span>
                                    </div>
                                </div>
                                <div class="mt-4 md:mt-0 md:ml-6 flex flex-col items-end">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="ml-1 text-sm font-medium text-gray-700">Pending Review</span>
                                    </div>
                                    <button class="mt-3 text-indigo-600 hover:text-indigo-800 text-sm font-medium">View Application</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content hidden" id="skills">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Technical Skills</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">JavaScript</span>
                                <span class="text-sm font-medium text-gray-700">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">Python</span>
                                <span class="text-sm font-medium text-gray-700">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">React</span>
                                <span class="text-sm font-medium text-gray-700">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">Node.js</span>
                                <span class="text-sm font-medium text-gray-700">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-lg font-semibold text-gray-900 mt-8 mb-4">Certifications & Achievements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-gray-900">AWS Certified Solutions Architect</h4>
                                <p class="text-sm text-gray-500">Amazon Web Services • 2022</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-gray-900">TensorFlow Developer Certificate</h4>
                                <p class="text-sm text-gray-500">Google • 2022</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-gray-900">Dean's List</h4>
                                <p class="text-sm text-gray-500">Stanford University • 2021-2023</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content hidden" id="about">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">About Me</h3>
                    <p class="text-gray-700">
                        I'm a Computer Science student at Stanford University with a passion for building innovative solutions using technology. My interests span across full-stack development, artificial intelligence, and UI/UX design. I love participating in hackathons to challenge myself and collaborate with other talented individuals.
                    </p>
                    <p class="text-gray-700 mt-4">
                        When I'm not coding, you can find me hiking in the mountains, playing basketball, or reading about the latest tech trends. I'm currently seeking internship opportunities in software development for Summer 2024.
                    </p>

                    <h3 class="text-lg font-semibold text-gray-900 mt-8 mb-4">Education</h3>
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-100 text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Stanford University</h4>
                            <p class="text-gray-600">Bachelor of Science in Computer Science</p>
                            <p class="text-gray-500">2020 - 2024 (Expected)</p>
                            <p class="text-gray-700 mt-2">GPA: 3.92/4.0</p>
                        </div>
                    </div>

                    <h3 class="text-lg font-semibold text-gray-900 mt-8 mb-4">Contact Information</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3 text-gray-700">alex.johnson@example.com</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3 text-gray-700">(123) 456-7890</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="ml-3 text-gray-700">Stanford, CA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab Switching
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
                
                // Update active tab button
                tabButtons.forEach(btn => {
                    btn.classList.remove('border-indigo-500', 'text-indigo-600');
                    btn.classList.add('border-transparent', 'text-gray-500');
                });
                button.classList.remove('border-transparent', 'text-gray-500');
                button.classList.add('border-indigo-500', 'text-indigo-600');
                
                // Show active tab content
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });
                document.getElementById(tabId).classList.remove('hidden');
            });
        });

        // Hackathon Filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        const hackathonCards = document.querySelectorAll('.hackathon-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');
                
                // Update active filter button
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-indigo-100', 'text-indigo-700');
                    btn.classList.add('bg-white', 'text-gray-600');
                });
                button.classList.remove('bg-white', 'text-gray-600');
                button.classList.add('bg-indigo-100', 'text-indigo-700');
                
                // Filter hackathon cards
                hackathonCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // User menu dropdown (simplified for demo)
        const userMenuButton = document.getElementById('user-menu-button');
        userMenuButton.addEventListener('click', () => {
            alert('User menu clicked - would show dropdown in full implementation');
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'965313f963c09aa2',t:'MTc1MzUyNDMyMC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>