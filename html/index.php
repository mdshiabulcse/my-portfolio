

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Professional portfolio of Md. Shiabul Islam, Software Developer specializing in PHP Laravel and Vue.js">
    <title>Md. Shiabul Islam - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/custom.css"/>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --dark-color: #2c3e50;
            --light-color: #f5f7fa;
            --text-color: #333;
            --text-light: #7f8c8d;
            --box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }

        .dark-mode {
            --primary-color: #4facfe;
            --secondary-color: #2ecc71;
            --dark-color: #ecf0f1;
            --light-color: #1a1a2e;
            --text-color: #ecf0f1;
            --text-light: #bdc3c7;
            --box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--light-color);
            color: var(--text-color);
            padding: 15px;
            line-height: 1.6;
            transition: var(--transition);
        }
        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--primary-color);
            box-shadow: var(--box-shadow);
            margin-bottom: 20px;
            transition: var(--transition);
        }

        .profile-img:hover {
            transform: scale(1.05);
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            background: var(--light-color) === '#f5f7fa' ? '#fff' : '#16213e';
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }
        header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .theme-toggle {
            position: absolute;
            top: 0;
            right: 0;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary-color);
            cursor: pointer;
            transition: var(--transition);
        }

        .theme-toggle:hover {
            transform: rotate(30deg);
        }

        .language-selector {
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            gap: 10px;
        }

        .language-btn {
            background: none;
            border: 1px solid var(--primary-color);
            border-radius: 4px;
            padding: 5px 10px;
            color: var(--primary-color);
            cursor: pointer;
            transition: var(--transition);
        }

        .language-btn:hover, .language-btn.active {
            background: var(--primary-color);
            color: white;
        }

        h1, h2, h3 {
            color: var(--dark-color);
            transition: var(--transition);
        }

        h1 { 
            font-size: 2.5rem; 
            margin-bottom: 10px;
            font-weight: 700;
        }

        h2 { 
            font-size: 1.5rem; 
            border-bottom: 2px solid var(--primary-color); 
            padding-bottom: 10px; 
            margin-top: 35px; 
            margin-bottom: 20px;
            color: var(--primary-color);
            display: inline-block;
        }

        h3 {
            font-size: 1.2rem;
            margin: 15px 0 10px;
        }
        p { 
            margin: 12px 0; 
            transition: var(--transition);
        }

        .section { 
            margin-bottom: 40px; 
            padding: 0 10px;
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .contact {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 25px 0;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            transition: var(--transition);
        }

        .contact-item:hover {
            transform: translateY(-3px);
        }

        .contact-item i {
            margin-right: 10px;
            color: var(--primary-color);
            width: 22px;
            text-align: center;
            font-size: 1.1rem;
        }

        .contact a { 
            color: var(--primary-color); 
            text-decoration: none; 
            transition: var(--transition);
            font-weight: 500;
        }

        .contact a:hover {
            color: var(--secondary-color);
        }
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .skills span {
            display: inline-block;
            background: var(--light-color) === '#f5f7fa' ? '#ecf0f1' : '#1e293b';
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 15px;
            border: 1px solid var(--primary-color);
            transition: var(--transition);
        }

        .skills span:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }

        .skill-category {
            margin-top: 25px;
            width: 100%;
        }

        ul {
            padding-left: 25px;
            margin-bottom: 18px;
            list-style-type: none;
        }

        ul li {
            margin-bottom: 10px;
            position: relative;
        }

        ul li:before {
            content: '•';
            color: var(--primary-color);
            font-weight: bold;
            position: absolute;
            left: -15px;
        }

        .job-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark-color);
            font-size: 1.1rem;
        }

        .job-period {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
        }

        .job-period i {
            margin-right: 5px;
            color: var(--primary-color);
        }
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional portfolio showcasing web development and design projects. Expertise in front-end and back-end technologies including HTML, CSS, JavaScript, PHP, and more.">
    <meta name="keywords" content="portfolio, web development, web design, projects, skills, professional">
    <meta name="author" content="Portfolio Owner">

    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="Professional Portfolio">
    <meta property="og:description" content="Professional portfolio showcasing web development and design projects.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://shiabul.com">
    <meta property="og:image" content="https://shiabul.com/assets/images/portfolio-preview.jpg">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Professional Portfolio">
    <meta name="twitter:description" content="Professional portfolio showcasing web development and design projects.">
    <meta name="twitter:image" content="https://shiabul.com/assets/images/portfolio-preview.jpg">

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://shiabul.com">

    <title>Professional Portfolio</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Content will be added here -->

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/seo.js"></script>
</body>
</html>
        .education-item, .experience-item {
            margin-bottom: 25px;
            padding: 15px;
            border-radius: 8px;
            transition: var(--transition);
            border-left: 3px solid transparent;
        }

        .education-item:hover, .experience-item:hover {
            background: var(--light-color) === '#f5f7fa' ? '#f8f9fa' : '#1e293b';
            border-left: 3px solid var(--primary-color);
            transform: translateX(5px);
        }

        /* Projects Slider Container */
        .projects-slider-container {
            overflow: hidden;
            position: relative;
            margin-bottom: 30px;
        }

        .projects-slider {
            display: flex;
            transition: transform 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000);
            margin: 0 -10px;
            overflow: visible;
        }

        /* Project styles */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .slider-project-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            min-width: calc(33.333% - 20px);
            height: 380px;
            margin: 0 10px;
            display: flex;
            flex-direction: column;
            background: var(--light-color) === '#f5f7fa' ? '#fff' : '#1e293b';
            position: relative;
        }

        .slider-project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .project-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
            background: var(--light-color) === '#f5f7fa' ? '#fff' : '#1e293b';
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .project-img {
            height: 180px;
            width: 100%;
            object-fit: cover;
        }

        .project-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .project-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin: 10px 0;
        }

        .project-tech span {
            font-size: 12px;
            padding: 3px 8px;
            background: var(--primary-color);
            color: white;
            border-radius: 4px;
        }

        .project-links {
            margin-top: auto;
            display: flex;
            gap: 15px;
        }

        .project-links a {
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: var(--transition);
        }

        .project-links a i {
            margin-right: 5px;
        }

        .project-links a:hover {
            color: var(--secondary-color);
        }

        /* Testimonials */
        .testimonials {
            margin-top: 30px;
        }

        .testimonial-item {
            padding: 20px;
            border-radius: 10px;
            background: var(--light-color) === '#f5f7fa' ? '#f8f9fa' : '#1e293b';
            margin-bottom: 20px;
            position: relative;
            transition: var(--transition);
        }

        .testimonial-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 15px;
            position: relative;
            padding-left: 25px;
        }

        .testimonial-text:before {
            content: '\201C';
            font-size: 40px;
            color: var(--primary-color);
            position: absolute;
            left: 0;
            top: -10px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }

        .author-info h4 {
            margin: 0;
            color: var(--dark-color);
        }

        .author-info p {
            margin: 5px 0 0;
            color: var(--text-light);
            font-size: 14px;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid var(--light-color) === '#f5f7fa' ? '#eee' : '#2d3748';
            color: var(--text-light);
        }

        footer p {
            font-size: 14px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            transform: translateY(-5px);
            background: var(--secondary-color);
        }

        /* Progress bar */
        .progress-container {
            margin-top: 10px;
            width: 100%;
            background: var(--light-color) === '#f5f7fa' ? '#eee' : '#2d3748';
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-bar {
            height: 8px;
            background: var(--primary-color);
            width: 0;
            transition: width 0.5s ease;
        }

        /* Animations */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-5px);
        }

        /* Slider Controls */
        .slider-controls {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .slider-control-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .slider-control-btn:hover {
            background: var(--secondary-color);
            transform: scale(1.1);
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
        }

        .slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #ddd;
            cursor: pointer;
            transition: var(--transition);
        }

        .slider-dot.active {
            background: var(--primary-color);
            transform: scale(1.2);
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            body { padding: 10px; }
            .container { padding: 20px 15px; }
            h1 { font-size: 2rem; }
            h2 { font-size: 1.3rem; }
            .contact { flex-direction: column; align-items: flex-start; }
            .skills span { margin: 3px; }
            .projects-grid {
                grid-template-columns: 1fr;
            }
            .theme-toggle {
                top: -40px;
                right: 10px;
            }
            .language-selector {
                top: -40px;
                left: 10px;
            }
        }

        @media (max-width: 480px) {
            h1 { font-size: 1.7rem; }
            .container { padding: 15px 12px; }
            .section { padding: 0; }
            .profile-img {
                width: 150px;
                height: 150px;
            }
            .theme-toggle {
                top: -30px;
            }
            .language-selector {
                top: -30px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <div class="language-selector">
            <button class="language-btn active" data-lang="en">EN</button>
            <button class="language-btn" data-lang="fr">FR</button>
            <button class="language-btn" data-lang="es">ES</button>
            <button class="language-btn" data-lang="zh">中文</button>
            <button class="language-btn" data-lang="ja">日本語</button>
        </div>

        <button class="theme-toggle" id="themeToggle">
            <i class="fas fa-moon"></i>
        </button>

        <img src="Shiabul.png" alt="Md. Shiabul Islam" class="profile-img">
        <h1 data-translate="name">Md. Shiabul Islam</h1>
        <p data-translate="title"><strong>Software Developer (PHP Laravel & Vue.js)</strong></p>

        <div class="animated-text">
            <span data-translate="passionate">Passionate about creating elegant solutions</span>
        </div>
    </header>

    <div class="section contact">
        <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <a href="mailto:md.shiabul.cse@gmail.com">md.shiabul.cse@gmail.com</a>
        </div>
        <div class="contact-item">
            <i class="fab fa-linkedin"></i>
            <a href="https://www.linkedin.com/in/md-shiabul-islam/" target="_blank">linkedin.com/in/md-shiabul-islam</a>
        </div>
        <div class="contact-item">
            <i class="fab fa-github"></i>
            <a href="https://github.com/mdshiabulcse" target="_blank">github.com/mdshiabulcse</a>
        </div>
        <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <span data-translate="location">Dhaka, Bangladesh</span>
        </div>
<!--        <div class="contact-item">-->
<!--            <i class="fas fa-phone"></i>-->
<!--            <a href="tel:+8801700000000">+880 1700 000000</a>-->
<!--        </div>-->
        <div class="contact-item">
            <i class="fas fa-globe"></i>
            <a href="https://www.shiabul.com" target="_blank">www.shiabul.com</a>
        </div>
    </div>

    <div class="section">
        <h2 data-translate="summary-title">Career Summary</h2>
        <p data-translate="summary-content">Skilled Full-Stack Web Developer with strong experience in building scalable HMIS, POS, and business web
            applications using Vue.js, Laravel, CodeIgniter, and MySQL. Proficient in Ubuntu server management,
            Docker, and CI/CD pipelines with GitHub Actions. Focused on delivering clean, secure, and maintainable
            code across full development lifecycles.
        </p>
    </div>

    <div class="section">
        <h2 data-translate="experience-title">Professional Experience</h2>
        <div class="experience-item">
            <p class="job-title" data-translate="job1-title">Executive IT Officer – Vision Eye Hospital Pvt. Ltd</p>
            <p class="job-period"><i class="far fa-calendar-alt"></i> <span data-translate="job1-period">Aug 2021 – Present</span></p>
            <ul>
                <li data-translate="job1-resp1">Developed ERP solutions and HMIS to streamline hospital workflows</li>
                <li data-translate="job1-resp2">Created and maintained official websites</li>
                <li data-translate="job1-resp3">Managed Ubuntu/Nginx servers ensuring 100% uptime</li>
                <li data-translate="job1-resp4">Automated systems, reducing manual workload by 30%</li>
            </ul>
        </div>

        <div class="experience-item">
            <p class="job-title" data-translate="job2-title">Junior Software Developer – Agile Tech Solution</p>
            <p class="job-period"><i class="far fa-calendar-alt"></i> <span data-translate="job2-period">Jan 2020 – Aug 2021</span></p>
            <ul>
                <li data-translate="job2-resp1">Started as Laravel Developer; contributed to backend systems and web solutions</li>
                <li data-translate="job2-resp2">Collaborated with senior developers on various client projects</li>
                <li data-translate="job2-resp3">Implemented responsive designs and user interfaces</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2 data-translate="skills-title">Technical Skills</h2>

        <div class="skill-category">
            <h3 data-translate="backend-title">Backend Development</h3>
            <div class="skills">
                <span>PHP</span>
                <span>Laravel</span>
                <span>CodeIgniter</span>
                <span>MySQL</span>
                <span>REST API</span>
            </div>
        </div>

        <div class="skill-category">
            <h3 data-translate="frontend-title">Frontend Development</h3>
            <div class="skills">
                <span>Vue.js</span>
                <span>Nuxt.js</span>
                <span>HTML5</span>
                <span>CSS3</span>
                <span>JavaScript</span>
                <span>Bootstrap</span>
            </div>
        </div>

        <div class="skill-category">
            <h3 data-translate="devops-title">DevOps & Infrastructure</h3>
            <div class="skills">
                <span>Git</span>
                <span>Ubuntu Server</span>
                <span>Nginx</span>
                <span>MikroTik</span>
                <span>Docker</span>
            </div>
        </div>

        <div class="skill-category">
            <h3 data-translate="languages-title">Languages</h3>
            <div class="skills">
                <span data-translate="english">English - Fluent</span>
                <span data-translate="bengali">Bengali - Native</span>
            </div>
        </div>
    </div>

    <div class="section">
        <h2 data-translate="projects-title">Featured Projects</h2>

        <!-- Projects Slider -->
        <div class="projects-slider-container">
            <div class="projects-slider">
                <div class="slider-project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Healthcare</div>
                    <img src="assets/img/liveProjectLogo/vision.jpg" alt="Vision Eye Hospital" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project1-title">Vision Eye Hospital</h3>
                        <p data-translate="project1-desc">Complete hospital management system including patient records, appointment scheduling, POS system for optical shop, HR management and accounting modules.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="http://visioneyebd.org/" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="slider-project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Non-profit</div>
                    <img src="assets/img/liveProjectLogo/vaf.png" alt="Vision Aid Foundation" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project2-title">Vision Aid Foundation</h3>
                        <p data-translate="project2-desc">A foundation website with donation management system, event scheduling, volunteer registration and community outreach campaign features.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Bootstrap</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                        </div>
                        <div class="project-links">
                            <a href="https://visionaidfoundation.org/" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="slider-project-card">
                    <div class="project-status ongoing">Ongoing</div>
                    <div class="project-category">E-commerce</div>
                    <img src="assets/img/liveProjectLogo/chasmaworld.png" alt="Chasma World" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project3-title">Chasma World</h3>
                        <p data-translate="project3-desc">Comprehensive e-commerce platform for eyewear with product management, shopping cart, payment processing, and integrated POS system for physical stores.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                            <span>Payment Gateway API</span>
                        </div>
                        <div class="project-links">
                            <a href="http://chasmaworld.com/" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="slider-project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Corporate</div>
                    <img src="assets/img/liveProjectLogo/hexagon-logo.gif" alt="Hexagon Global" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project4-title">Hexagon Global</h3>
                        <p data-translate="project4-desc">Corporate website with modern UI/UX design, responsive layout and interactive elements showcasing company services and portfolio.</p>
                        <div class="project-tech">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="https://www.hexagonglobal.net/" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="slider-project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Education</div>
                    <img src="assets/img/liveProjectLogo/default.png" alt="BAVIS" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project5-title">BAVIS</h3>
                        <p data-translate="project5-desc">Online examination platform with automated assessment, student management system, result processing and certificate generation features.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>jQuery</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="https://bavis.visionbd.org/" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="slider-project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Healthcare</div>
                    <img src="assets/img/liveProjectLogo/deh.png" alt="Dristi Eye Hospital" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project6-title">Dristi Eye Hospital</h3>
                        <p data-translate="project6-desc">Complete hospital management system with electronic medical records, appointment scheduling, and integrated website with online booking functionality.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="http://dristieyehospital.com" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="slider-project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Healthcare</div>
                    <img src="assets/img/liveProjectLogo/doctuc-sq.png" alt="Doctuch" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project7-title">Doctuch</h3>
                        <p data-translate="project7-desc">Comprehensive hospital management solution featuring doctor scheduling, patient management, billing, and administrative tools.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Bootstrap</span>
                            <span>MySQL</span>
                            <span>jQuery</span>
                        </div>
                        <div class="project-links">
                            <a href="http://doctuch.com" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="slider-project-card">
                    <div class="project-status ongoing">Ongoing</div>
                    <div class="project-category">Web Application</div>
                    <img src="assets/img/liveProjectLogo/default.png" alt="SearchDin" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project8-title">SearchDin</h3>
                        <p data-translate="project8-desc">Advanced search engine with intelligent indexing, natural language processing, and sophisticated search algorithms for improved search experiences.</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>ElasticSearch</span>
                        </div>
                        <div class="project-links">
                            <a href="http://searchdin.com" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="slider-project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Medical Organization</div>
                    <img src="assets/img/liveProjectLogo/bgs.png" alt="BGS Glaucoma" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project9-title">BGS Glaucoma</h3>
                        <p data-translate="project9-desc">Professional organization platform for glaucoma specialists featuring member management, resource sharing, event coordination and educational content distribution.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Bootstrap</span>
                            <span>MySQL</span>
                            <span>jQuery</span>
                        </div>
                        <div class="project-links">
                            <a href="https://bgsglaucoma.com/" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, '_blank'); return false;"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="slider-dots">
                <span class="slider-dot active"></span>
                <span class="slider-dot"></span>
                <span class="slider-dot"></span>
                <span class="slider-dot"></span>
                <span class="slider-dot"></span>
                <span class="slider-dot"></span>
                <span class="slider-dot"></span>
                <span class="slider-dot"></span>
                <span class="slider-dot"></span>
            </div>
        </div>

        <button class="view-more-btn" data-translate="view-more">View More Projects</button>

        <!-- All Projects Grid (Initially Hidden) -->
        <div class="projects-grid">
            <div class="project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Healthcare</div>
                    <img src="assets/img/liveProjectLogo/vision.jpg" alt="Vision Eye Hospital" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project1-title">Vision Eye Hospital</h3>
                        <p data-translate="project1-desc">Complete hospital management system including patient records, appointment scheduling, POS system for optical shop, HR management and accounting modules.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                            <span>Ubuntu</span>
                        </div>
                        <div class="project-links">
                            <a href="http://visioneyebd.org/" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Non-profit</div>
                    <img src="assets/img/liveProjectLogo/vaf.png" alt="Vision Aid Foundation" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project2-title">Vision Aid Foundation</h3>
                        <p data-translate="project2-desc">A foundation website with donation management system, event scheduling, volunteer registration and community outreach campaign features.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Bootstrap</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                        </div>
                        <div class="project-links">
                            <a href="https://visionaidfoundation.org/" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-status ongoing">Ongoing</div>
                    <div class="project-category">E-commerce</div>
                    <img src="assets/img/liveProjectLogo/chasmaworld.png" alt="Chasma World" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project3-title">Chasma World</h3>
                        <p data-translate="project3-desc">Comprehensive e-commerce platform for eyewear with product management, shopping cart, payment processing, and integrated POS system for physical stores.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                            <span>Payment Gateway API</span>
                        </div>
                        <div class="project-links">
                            <a href="http://chasmaworld.com/" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Corporate</div>
                    <img src="assets/img/liveProjectLogo/hexagon-logo.gif" alt="Hexagon Global" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project4-title">Hexagon Global</h3>
                        <p data-translate="project4-desc">Corporate website with modern UI/UX design, responsive layout and interactive elements showcasing company services and portfolio.</p>
                        <div class="project-tech">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="https://www.hexagonglobal.net/" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Education</div>
                    <img src="assets/img/liveProjectLogo/default.png" alt="BAVIS" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project5-title">BAVIS</h3>
                        <p data-translate="project5-desc">Online examination platform with automated assessment, student management system, result processing and certificate generation features.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>jQuery</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="https://bavis.visionbd.org/" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-status">Completed</div>
                    <div class="project-category">Healthcare</div>
                    <img src="assets/img/liveProjectLogo/deh.png" alt="Dristi Eye Hospital" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title" data-translate="project6-title">Dristi Eye Hospital</h3>
                        <p data-translate="project6-desc">Complete hospital management system with electronic medical records, appointment scheduling, and integrated website with online booking functionality.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="http://dristieyehospital.com" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                    </div>
                </div>
            </div>
        </div>
            </div>

            <div class="section" id="more-projects">
        <h2 data-translate="more-projects-title">More Projects</h2>
        <p class="section-description" data-translate="more-projects-desc">Explore my complete portfolio of projects across various domains and technologies.</p>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-status">Completed</div>
                <div class="project-category">Healthcare</div>
<!--                <img src="assets/img/liveProjectLogo/400x250?text=Doctuch" alt="Doctuch" class="project-img">-->
<!--                <div class="project-content">-->
<!--                    <img src="assets/img/liveProjectLogo/150x50?text=Doctuch+Logo" alt="Doctuch Logo" class="project-logo">-->
                <img src="assets/img/liveProjectLogo/doctuc-sq.png" alt="Doctuch" class="project-img">
                <div class="project-content">
                    <h3 class="project-title" data-translate="project7-title">Doctuch</h3>
                    <p data-translate="project7-desc">Comprehensive hospital management solution featuring doctor scheduling, patient management, billing, and administrative tools.</p>
                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>Vue JS</span>
                        <span>Bootstrap</span>
                        <span>MySQL</span>
                        <span>jQuery</span>
                    </div>
                    <div class="project-links">
                        <a href="http://doctuch.com" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-status ongoing">Ongoing</div>
                <div class="project-category">Web Application</div>
                <img src="assets/img/liveProjectLogo/default.png" alt="SearchDin" class="project-img">
                <div class="project-content">
                    <h3 class="project-title" data-translate="project8-title">SearchDin</h3>
                    <p data-translate="project8-desc">Advanced search engine with intelligent indexing, natural language processing, and sophisticated search algorithms for improved search experiences.</p>
                    <div class="project-tech">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>Vue.js</span>
                        <span>ElasticSearch</span>
                    </div>
                    <div class="project-links">
                        <a href="http://searchdin.com" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-status">Completed</div>
                <div class="project-category">Medical Organization</div>
                <img src="assets/img/liveProjectLogo/bgs.png" alt="BGS Glaucoma" class="project-img">
                <div class="project-content">
                    <h3 class="project-title" data-translate="project9-title">BGS Glaucoma</h3>
                    <p data-translate="project9-desc">Professional organization platform for glaucoma specialists featuring member management, resource sharing, event coordination and educational content distribution.</p>
                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>Bootstrap</span>
                        <span>MySQL</span>
                        <span>jQuery</span>
                    </div>
                    <div class="project-links">
                        <a href="https://bgsglaucoma.com/" target="_blank"><i class="fas fa-link"></i> <span data-translate="view-live">View Live</span></a>
                    </div>
                </div>
            </div>
        </div>
            </div>

            <div class="section">
        <h2 data-translate="testimonials-title">Testimonials</h2>
        <div class="testimonials">
            <div class="testimonial-item">
                <p class="testimonial-text" data-translate="testimonial1-text">Working with Shiabul was a pleasure. He quickly understood our requirements and implemented elegant solutions to complex problems. A true professional!</p>
                <div class="testimonial-author">
                    <img src="assets/img/testimonial/testimonial.png" alt="Philip lungu">
                    <div class="author-info">
                        <h4 data-translate="testimonial1-name">Philip lungu</h4>
                        <p data-translate="testimonial1-position">Director, ugzambia.com pos system</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <p class="testimonial-text" data-translate="testimonial2-text">Developer tried to help to implement complex logic and will surely continue to work with him.</p>
                <div class="testimonial-author">
                    <img src="assets/img/testimonial/testimonial.png" alt="Gizm 0dder">
                    <div class="author-info">
                        <h4 data-translate="testimonial2-name">Gizm 0dder</h4>
                        <p data-translate="testimonial2-position">CEO, Care Connect</p>
                    </div>
                </div>
            </div>
        </div>
            </div>

            <div class="section">
        <h2 data-translate="education-title">Education & Certifications</h2>
        <div class="education-item">
            <p class="job-title">B.Sc. in Computer Science & Engineering</p>
            <p class="job-period">Southeast University | Aug 2022 – Present</p>
        </div>

        <div class="education-item">
            <p class="job-title">Diploma in Computer Science</p>
            <p class="job-period">Rajshahi Polytechnic Institute | Aug 2014 – 2018</p>
        </div>

        <div class="education-item">
            <p class="job-title">PHP & Laravel Development</p>
            <p class="job-period">Creative IT | Nov 2019 – 2020</p>
        </div>
    </div>

    <footer>
        <div class="social-links">
            <a href="https://linkedin.com/in/md-shiabul-islam" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/mdshiabulcse" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://x.com/ShakibShiabul" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/shiabulislam/#" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <p data-translate="copyright">© 2025 Md. Shiabul Islam. All rights reserved.</p>
    </footer>
</div>

<div class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
</div>

<!-- Custom slider script -->
<script src="assets/js/slider.js"></script>

<script>
    // Theme Toggle Functionality
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    const icon = themeToggle.querySelector('i');

    // Check for saved theme preference or use the system preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        body.classList.add('dark-mode');
        icon.classList.replace('fa-moon', 'fa-sun');
    }

    themeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');

        if (body.classList.contains('dark-mode')) {
            icon.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('theme', 'dark');
        } else {
            icon.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('theme', 'light');
        }
    });

    // Multi-language Support
    const translations = {
        'en': {
            'name': 'Md. Shiabul Islam',
            'title': '<strong>Software Developer (PHP Laravel & Vue.js)</strong>',
            'passionate': 'Passionate about creating elegant solutions',
            'location': 'Dhaka, Bangladesh',
            'summary-title': 'Career Summary',
            'summary-content': 'Skilled Full-Stack Web Developer with strong experience in building scalable HMIS, POS, and business web applications using Vue.js, Laravel, CodeIgniter, and MySQL. Proficient in Ubuntu server management, Docker, and CI/CD pipelines with GitHub Actions. Focused on delivering clean, secure, and maintainable code across full development lifecycles.',
            'experience-title': 'Professional Experience',
            'job1-title': 'Executive IT Officer – Vision Eye Hospital Pvt. Ltd',
            'job1-period': 'Aug 2021 – Present',
            'job1-resp1': 'Developed ERP solutions and HMIS to streamline hospital workflows',
            'job1-resp2': 'Created and maintained official websites',
            'job1-resp3': 'Managed Ubuntu/Nginx servers ensuring 100% uptime',
            'job1-resp4': 'Automated systems, reducing manual workload by 30%',
            'job2-title': 'Junior Software Developer – Agile Tech Solution',
            'job2-period': 'Jan 2020 – Aug 2021',
            'job2-resp1': 'Started as Laravel Developer; contributed to backend systems and web solutions',
            'job2-resp2': 'Collaborated with senior developers on various client projects',
            'job2-resp3': 'Implemented responsive designs and user interfaces',
            'skills-title': 'Technical Skills',
            'backend-title': 'Backend Development',
            'frontend-title': 'Frontend Development',
            'devops-title': 'DevOps & Infrastructure',
            'languages-title': 'Languages',
            'english': 'English - Fluent',
            'bengali': 'Bengali - Native',
            'projects-title': 'Featured Projects',
            'project1-title': 'Hospital ERP System',
            'project1-desc': 'A comprehensive hospital management system handling patient records, appointments, and billing.',
            'project2-title': 'E-commerce Platform',
            'project2-desc': 'Full-featured online store with product management, cart functionality, and payment processing.',
            'project1-title': 'Vision Eye Hospital',
            'project1-desc': 'Hospital management system, POS system, HR and accounting software for a leading eye hospital.',
            'project2-title': 'Vision Aid Foundation',
            'project2-desc': 'A foundation website with donation management, event scheduling and community outreach features.',
            'project3-title': 'Chasma World',
            'project3-desc': 'E-commerce platform with integrated POS system for eyewear products. (Ongoing development)',
            'project4-title': 'Hexagon Global',
            'project4-desc': 'Corporate website with modern UI/UX design and responsive layout.',
            'project5-title': 'BAVIS',
            'project5-desc': 'Online exam platform and student management system with automated assessment.',
            'project6-title': 'Dristi Eye Hospital',
            'project6-desc': 'Hospital management system and website with appointment booking feature.',
            'project7-title': 'Doctuch',
            'project7-desc': 'Hospital management project with doctor scheduling and patient management.',
            'project8-title': 'SearchDin',
            'project8-desc': 'Search engine project with advanced indexing and search algorithms. (Ongoing)',
            'project9-title': 'BGS Glaucoma',
            'project9-desc': 'Doctor organization project with member management and educational resources.',
            'more-projects-title': 'More Projects',
            'view-live': 'View Live',
            'source-code': 'Source Code',
            'view-more': 'View More Projects',
            'view-less': 'View Less',
            'more-projects-title': 'More Projects',
            'more-projects-desc': 'Explore my complete portfolio of projects across various domains and technologies.',
            'testimonials-title': 'Testimonials',
            'testimonial1-text': 'Working with Shiabul was a pleasure. He quickly understood our requirements and implemented elegant solutions to complex problems. A true professional!',
            'testimonial1-name': 'Philip lungu',
            'testimonial1-position': 'Director, ugzambia.com pos system',
            'testimonial2-text': 'Developer tried to help to implement complex logic and will surely continue to work with him.',
            'testimonial2-name': 'Gizm 0dder',
            'testimonial2-position': 'Care Connect',
            'education-title': 'Education & Certifications',
            'edu1-degree': 'B.Sc. in Computer Science & Engineering',
            'edu1-period': 'Southeast University | Aug 2022 – Present',
            'edu2-degree': 'Diploma in Computer Science',
            'edu2-period': 'Rajshahi Polytechnic Institute | Aug 2014 – 2018',
            'edu3-degree': 'PHP & Laravel Development',
            'edu3-period': 'Creative IT | Nov 2019 – 2020',
            'copyright': '© 2025 Md. Shiabul Islam. All rights reserved.',
        },
        'fr': {
            'name': 'Md. Shiabul Islam',
            'title': '<strong>Développeur de Logiciels (PHP Laravel & Vue.js)</strong>',
            'passionate': 'Passionné par la création de solutions élégantes',
            'location': 'Dhaka, Bangladesh',
            'summary-title': 'Résumé de Carrière',
            'summary-content': 'Développeur Web Full-Stack qualifié avec une solide expérience dans la création de sites Web HMIS, POS et commerciaux évolutifs.applications utilisant Vue.js, Laravel, CodeIgniter et MySQL. Maîtrise de la gestion de serveur Ubuntu, Docker et pipelines CI/CD avec actions GitHub. Axé sur la fourniture de services propres, sécurisés et maintenables code tout au long des cycles de vie de développement complets.',
            'experience-title': 'Expérience Professionnelle',
            'job1-title': 'Responsable Informatique – Vision Eye Hospital Pvt. Ltd',
            'job1-period': 'Août 2021 – Présent',
            'job1-resp1': 'Développé des solutions ERP et HMIS pour optimiser les flux de travail hospitaliers',
            'job1-resp2': 'Créé et maintenu des sites web officiels',
            'job1-resp3': 'Géré des serveurs Ubuntu/Nginx assurant une disponibilité à 100%',
            'job1-resp4': 'Automatisé des systèmes, réduisant la charge de travail manuelle de 30%',
            'job2-title': 'Développeur Junior – Agile Tech Solution',
            'job2-period': 'Janvier 2020 – Août 2021',
            'job2-resp1': 'Commencé en tant que développeur Laravel; contribué aux systèmes backend et solutions web',
            'job2-resp2': 'Collaboré avec des développeurs seniors sur divers projets clients',
            'job2-resp3': 'Implémenté des designs responsifs et interfaces utilisateurs',
            'skills-title': 'Compétences Techniques',
            'backend-title': 'Développement Backend',
            'frontend-title': 'Développement Frontend',
            'devops-title': 'DevOps & Infrastructure',
            'languages-title': 'Langues',
            'english': 'Anglais - Courant',
            'bengali': 'Bengali - Langue Maternelle',
            'projects-title': 'Projets Principaux',
            'project1-title': 'Système ERP Hospitalier',
            'project1-desc': 'Un système complet de gestion hospitalière gérant les dossiers patients, les rendez-vous et la facturation.',
            'project2-title': 'Plateforme E-commerce',
            'project2-desc': 'Boutique en ligne complète avec gestion de produits, fonctionnalité de panier et traitement des paiements.',
            'project1-title': 'Hôpital Ophtalmologique Vision',
            'project1-desc': 'Système de gestion hospitalière, système POS, logiciel RH et comptabilité pour un hôpital ophtalmologique de premier plan.',
            'project2-title': 'Fondation Vision Aid',
            'project2-desc': 'Un site web de fondation avec gestion des dons, planification d\'événements et fonctionnalités de sensibilisation communautaire.',
            'project3-title': 'Chasma World',
            'project3-desc': 'Plateforme e-commerce avec système POS intégré pour produits de lunetterie. (Développement en cours)',
            'project4-title': 'Hexagon Global',
            'project4-desc': 'Site web d\'entreprise avec design UI/UX moderne et mise en page responsive.',
            'project5-title': 'BAVIS',
            'project5-desc': 'Plateforme d\'examen en ligne et système de gestion des étudiants avec évaluation automatisée.',
            'project6-title': 'Hôpital Ophtalmologique Dristi',
            'project6-desc': 'Système de gestion hospitalière et site web avec fonctionnalité de réservation de rendez-vous.',
            'project7-title': 'Doctuch',
            'project7-desc': 'Projet de gestion hospitalière avec planification de médecins et gestion de patients.',
            'project8-title': 'SearchDin',
            'project8-desc': 'Projet de moteur de recherche avec algorithmes d\'indexation et de recherche avancés. (En cours)',
            'project9-title': 'BGS Glaucome',
            'project9-desc': 'Projet d\'organisation de médecins avec gestion des membres et ressources éducatives.',
            'more-projects-title': 'Plus de Projets',
            'view-live': 'Voir en Direct',
            'source-code': 'Code Source',
            'view-more': 'Voir Plus de Projets',
            'view-less': 'Voir Moins',
            'more-projects-title': 'Plus de Projets',
            'more-projects-desc': 'Explorez mon portfolio complet de projets dans divers domaines et technologies.',
            'testimonials-title': 'Témoignages',
            'testimonial1-text': 'Shiabul est un développeur exceptionnel qui a livré notre système de gestion hospitalière à temps et dépassé nos attentes. Ses compétences techniques et son attention aux détails sont impressionnantes.',
            'testimonial1-name': 'Dr. Philip lungu',
            'testimonial1-position': 'Directeur Médical, Vision Eye Hospital',
            'testimonial2-text': 'Travailler avec Shiabul était un plaisir. Il a rapidement compris nos exigences et mis en œuvre des solutions élégantes à des problèmes complexes. Un vrai professionnel !',
            'testimonial2-name': 'Gizm 0dder',
            'testimonial2-position': 'PDG, Agile Tech Solution',
            'education-title': 'Éducation & Certifications',
            'edu1-degree': 'Licence en Informatique et Ingénierie',
            'edu1-period': 'Université du Sud-Est | Août 2022 – Présent',
            'edu2-degree': 'Diplôme en Informatique',
            'edu2-period': 'Institut Polytechnique de Rajshahi | Août 2014 – 2018',
            'edu3-degree': 'Développement PHP & Laravel',
            'edu3-period': 'Creative IT | Novembre 2019 – 2020',
            'copyright': '© 2025 Md. Shiabul Islam. Tous droits réservés.',
        },
        'es': {
            'name': 'Md. Shiabul Islam',
            'title': '<strong>Desarrollador de Software (PHP Laravel & Vue.js)</strong>',
            'passionate': 'Apasionado por crear soluciones elegantes',
            'location': 'Dhaka, Bangladesh',
            'summary-title': 'Resumen Profesional',
            'summary-content': 'Kompetenta Reta Programisto kun forta sperto pri konstruado de skalebla HMIS, POS kaj komerca retejo aplikaĵoj uzante Vue.js, Laravel, CodeIgniter kaj MySQL. Kompetenta pri Ubuntu-servila administrado, Docker kaj CI/CD-duktoj kun GitHub Agoj. Enfokusigita al liverado de pura, sekura kaj konservebla kodon tra plenaj evoluaj vivocikloj.',
            'experience-title': 'Experiencia Profesional',
            'job1-title': 'Oficial de TI Ejecutivo – Vision Eye Hospital Pvt. Ltd',
            'job1-period': 'Agosto 2021 – Presente',
            'job1-resp1': 'Desarrollado soluciones ERP y HMIS para optimizar los flujos de trabajo hospitalarios',
            'job1-resp2': 'Creado y mantenido sitios web oficiales',
            'job1-resp3': 'Gestionado servidores Ubuntu/Nginx garantizando 100% de tiempo de actividad',
            'job1-resp4': 'Automatizado sistemas, reduciendo la carga de trabajo manual en un 30%',
            'job2-title': 'Desarrollador de Software Junior – Agile Tech Solution',
            'job2-period': 'Enero 2020 – Agosto 2021',
            'job2-resp1': 'Comenzado como Desarrollador Laravel; contribuido a sistemas backend y soluciones web',
            'job2-resp2': 'Colaborado con desarrolladores senior en varios proyectos de clientes',
            'job2-resp3': 'Implementado diseños responsivos e interfaces de usuario',
            'skills-title': 'Habilidades Técnicas',
            'backend-title': 'Desarrollo Backend',
            'frontend-title': 'Desarrollo Frontend',
            'devops-title': 'DevOps & Infraestructura',
            'languages-title': 'Idiomas',
            'english': 'Inglés - Fluido',
            'bengali': 'Bengalí - Nativo',
            'projects-title': 'Proyectos Destacados',
            'project1-title': 'Sistema ERP Hospitalario',
            'project1-desc': 'Un sistema completo de gestión hospitalaria que maneja registros de pacientes, citas y facturación.',
            'project2-title': 'Plataforma de Comercio Electrónico',
            'project2-desc': 'Tienda online completa con gestión de productos, funcionalidad de carrito y procesamiento de pagos.',
            'project1-title': 'Hospital Oftalmológico Vision',
            'project1-desc': 'Sistema de gestión hospitalaria, sistema POS, software de RRHH y contabilidad para un hospital oftalmológico líder.',
            'project2-title': 'Fundación Vision Aid',
            'project2-desc': 'Un sitio web de fundación con gestión de donaciones, programación de eventos y características de alcance comunitario.',
            'project3-title': 'Chasma World',
            'project3-desc': 'Plataforma de comercio electrónico con sistema POS integrado para productos de gafas. (Desarrollo en curso)',
            'project4-title': 'Hexagon Global',
            'project4-desc': 'Sitio web corporativo con diseño moderno de UI/UX y diseño responsivo.',
            'project5-title': 'BAVIS',
            'project5-desc': 'Plataforma de exámenes en línea y sistema de gestión de estudiantes con evaluación automatizada.',
            'project6-title': 'Hospital Oftalmológico Dristi',
            'project6-desc': 'Sistema de gestión hospitalaria y sitio web con función de reserva de citas.',
            'project7-title': 'Doctuch',
            'project7-desc': 'Proyecto de gestión hospitalaria con programación de médicos y gestión de pacientes.',
            'project8-title': 'SearchDin',
            'project8-desc': 'Proyecto de motor de búsqueda con algoritmos avanzados de indexación y búsqueda. (En curso)',
            'project9-title': 'BGS Glaucoma',
            'project9-desc': 'Proyecto de organización de médicos con gestión de miembros y recursos educativos.',
            'more-projects-title': 'Más Proyectos',
            'view-live': 'Ver en Vivo',
            'source-code': 'Código Fuente',
            'view-more': 'Ver Más Proyectos',
            'view-less': 'Ver Menos',
            'more-projects-title': 'Más Proyectos',
            'more-projects-desc': 'Explore mi portfolio completo de proyectos en diversos dominios y tecnologías.',
            'testimonials-title': 'Testimonios',
            'testimonial1-text': 'Shiabul es un desarrollador excepcional que entregó nuestro sistema de gestión hospitalaria a tiempo y superó nuestras expectativas. Sus habilidades técnicas y atención al detalle son impresionantes.',
            'testimonial1-name': 'Dr. Philip lungu',
            'testimonial1-position': 'Director Médico, Vision Eye Hospital',
            'testimonial2-text': 'Trabajar con Shiabul fue un placer. Comprendió rápidamente nuestros requisitos e implementó soluciones elegantes para problemas complejos. ¡Un verdadero profesional!',
            'testimonial2-name': 'Gizm 0dder',
            'testimonial2-position': 'Care Connect',
            'education-title': 'Educación y Certificaciones',
            'edu1-degree': 'Licenciatura en Ciencias de la Computación e Ingeniería',
            'edu1-period': 'Universidad Southeast | Agosto 2022 – Presente',
            'edu2-degree': 'Diploma en Ciencias de la Computación',
            'edu2-period': 'Instituto Politécnico de Rajshahi | Agosto 2014 – 2018',
            'edu3-degree': 'Desarrollo PHP & Laravel',
            'edu3-period': 'Creative IT | Noviembre 2019 – 2020',
            'copyright': '© 2025 Md. Shiabul Islam. Todos los derechos reservados.',
        },
        'zh': {
            'name': 'Md. Shiabul Islam',
            'title': '<strong>软件开发工程师 (PHP Laravel & Vue.js)</strong>',
            'passionate': '热衷于创造优雅的解决方案',
            'location': '达卡，孟加拉国',
            'summary-title': '职业概述',
            'summary-content': '熟练的全栈 Web 开发人员，在构建可扩展的 HMIS、POS 和商业 Web 方面拥有丰富的经验 使用 Vue.js、Laravel、CodeIgniter 和 MySQL 的应用程序。精通Ubuntu服务器管理，Docker 以及带有 GitHub Actions 的 CI/CD 管道。专注于提供清洁、安全和可维护的 跨整个开发生命周期的代码。',
            'experience-title': '专业经验',
            'job1-title': '执行IT官员 – Vision Eye Hospital Pvt. Ltd',
            'job1-period': '2021年8月 – 至今',
            'job1-resp1': '开发ERP解决方案和HMIS以简化医院工作流程',
            'job1-resp2': '创建和维护官方网站',
            'job1-resp3': '管理Ubuntu/Nginx服务器，确保100%正常运行时间',
            'job1-resp4': '自动化系统，减少30%的手动工作量',
            'job2-title': '初级软件开发人员 – Agile Tech Solution',
            'job2-period': '2020年1月 – 2021年8月',
            'job2-resp1': '开始作为Laravel开发人员；为后端系统和Web解决方案做出贡献',
            'job2-resp2': '与高级开发人员合作处理各种客户项目',
            'job2-resp3': '实现响应式设计和用户界面',
            'skills-title': '技术技能',
            'backend-title': '后端开发',
            'frontend-title': '前端开发',
            'devops-title': 'DevOps和基础设施',
            'languages-title': '语言',
            'english': '英语 - 流利',
            'bengali': '孟加拉语 - 母语',
            'projects-title': '精选项目',
            'project1-title': 'Vision眼科医院',
            'project1-desc': '完整的医院管理系统，包括患者记录、预约安排、光学商店POS系统、人力资源管理和会计模块。',
            'project2-title': 'Vision Aid基金会',
            'project2-desc': '基金会网站，具有捐赠管理系统、活动安排、志愿者注册和社区外展活动功能。',
            'project3-title': 'Chasma World',
            'project3-desc': '眼镜的综合电子商务平台，包括产品管理、购物车、支付处理和实体店集成POS系统。（开发中）',
            'project4-title': 'Hexagon Global',
            'project4-desc': '具有现代UI/UX设计、响应式布局和交互元素的企业网站，展示公司服务和作品集。',
            'project5-title': 'BAVIS',
            'project5-desc': '在线考试平台，具有自动评估、学生管理系统、结果处理和证书生成功能。',
            'project6-title': 'Dristi眼科医院',
            'project6-desc': '完整的医院管理系统，包括电子病历、预约安排和集成网站与在线预订功能。',
            'project7-title': 'Doctuch',
            'project7-desc': '综合医院管理解决方案，包括医生排班、患者管理、计费和管理工具。',
            'project8-title': 'SearchDin',
            'project8-desc': '高级搜索引擎，具有智能索引、自然语言处理和复杂的搜索算法，提供改进的搜索体验。（开发中）',
            'project9-title': 'BGS青光眼',
            'project9-desc': '青光眼专家的专业组织平台，具有会员管理、资源共享、活动协调和教育内容分发功能。',
            'more-projects-title': '更多项目',
            'view-live': '查看网站',
            'source-code': '源代码',
            'view-more': '查看更多项目',
            'view-less': '收起项目',
            'testimonials-title': '客户评价',
            'testimonial1-text': 'Shiabul是一位出色的开发人员，他按时交付了我们的医院管理系统，并超出了我们的期望。他的技术技能和对细节的关注令人印象深刻。',
            'testimonial1-name': 'Philip lungu医生',
            'testimonial1-position': '医疗主任，Vision眼科医院',
            'testimonial2-text': '与Shiabul合作是一种愉快的体验。他快速理解我们的需求，并为复杂问题实现了优雅的解决方案。一位真正的专业人士！',
            'testimonial2-name': 'Gizm 0dder',
            'testimonial2-position': '首席执行官，Agile Tech Solution',
            'education-title': '教育与认证',
            'copyright': '© 2025 Md. Shiabul Islam. 保留所有权利。',
        },
        'ja': {
            'name': 'Md. Shiabul Islam',
            'title': '<strong>ソフトウェア開発者 (PHP Laravel & Vue.js)</strong>',
            'passionate': 'エレガントなソリューション作成に情熱を持っています',
            'location': 'ダッカ、バングラデシュ',
            'summary-title': '経歴概要',
            'summary-content': 'スケーラブルな HMIS、POS、ビジネス Web の構築に豊富な経験を持つ、熟練したフルスタック Web 開発者 Vue.js、Laravel、CodeIgniter、MySQL を使用するアプリケーション。 Ubuntuサーバー管理に精通しており、GitHub Actions を使用した Docker および CI/CD パイプライン。クリーン、安全、メンテナンス可能なサービスの提供に重点を置く開発ライフサイクル全体にわたるコード。',
            'experience-title': '職務経験',
            'job1-title': 'IT責任者 – Vision Eye Hospital Pvt. Ltd',
            'job1-period': '2021年8月 – 現在',
            'job1-resp1': '病院のワークフローを効率化するERPソリューションとHMISを開発',
            'job1-resp2': '公式ウェブサイトの作成と保守',
            'job1-resp3': '100%のアップタイムを確保するUbuntu/Nginxサーバーの管理',
            'job1-resp4': 'システムを自動化し、手作業の負担を30%削減',
            'job2-title': 'ジュニアソフトウェア開発者 – Agile Tech Solution',
            'job2-period': '2020年1月 – 2021年8月',
            'job2-resp1': 'Laravel開発者として開始；バックエンドシステムとWebソリューションに貢献',
            'job2-resp2': 'シニア開発者と様々なクライアントプロジェクトで協力',
            'job2-resp3': 'レスポンシブデザインとユーザーインターフェースの実装',
            'skills-title': '技術スキル',
            'backend-title': 'バックエンド開発',
            'frontend-title': 'フロントエンド開発',
            'devops-title': 'DevOpsとインフラストラクチャ',
            'languages-title': '言語',
            'english': '英語 - 流暢',
            'bengali': 'ベンガル語 - ネイティブ',
            'projects-title': '主要プロジェクト',
            'project1-title': 'Vision Eye Hospital',
            'project1-desc': '患者記録、予約スケジュール、光学ショップのPOSシステム、人事管理、会計モジュールを含む総合病院管理システム。',
            'project2-title': 'Vision Aid Foundation',
            'project2-desc': '寄付管理システム、イベントスケジュール、ボランティア登録、コミュニティアウトリーチキャンペーン機能を備えた財団ウェブサイト。',
            'project3-title': 'Chasma World',
            'project3-desc': '眼鏡製品のための製品管理、ショッピングカート、決済処理、実店舗向け統合POSシステムを備えた総合的なeコマースプラットフォーム。（開発中）',
            'project4-title': 'Hexagon Global',
            'project4-desc': '現代的なUI/UXデザイン、レスポンシブレイアウト、インタラクティブな要素を備えた企業ウェブサイト。',
            'project5-title': 'BAVIS',
            'project5-desc': '自動評価、学生管理システム、結果処理、証明書生成機能を備えたオンライン試験プラットフォーム。',
            'project6-title': 'Dristi Eye Hospital',
            'project6-desc': '電子カルテ、予約スケジュール、オンライン予約機能を統合したウェブサイトを備えた総合病院管理システム。',
            'project7-title': 'Doctuch',
            'project7-desc': '医師のスケジュール管理、患者管理、請求、管理ツールを備えた総合病院管理ソリューション。',
            'project8-title': 'SearchDin',
            'project8-desc': '高度なインデックス作成、自然言語処理、洗練された検索アルゴリズムによる検索体験向上のための先進的検索エンジン。（開発中）',
            'project9-title': 'BGS Glaucoma',
            'project9-desc': '会員管理、リソース共有、イベント調整、教育コンテンツ配信機能を備えた緑内障専門医のための専門組織プラットフォーム。',
            'more-projects-title': 'その他のプロジェクト',
            'view-live': 'ライブで見る',
            'source-code': 'ソースコード',
            'view-more': 'もっと見る',
            'view-less': '閉じる',
            'testimonials-title': '推薦の声',
            'testimonial1-text': 'Shiabulは優れた開発者で、私たちの病院管理システムを期限通りに納品し、期待を超えました。彼の技術的スキルと細部への注意は印象的です。',
            'testimonial1-name': 'Philip lungu',
            'testimonial1-position': '医療ディレクター、Vision Eye Hospital',
            'testimonial2-text': 'Shiabulとの仕事は喜びでした。彼は私たちの要件を素早く理解し、複雑な問題に対してエレガントなソリューションを実装しました。真のプロフェッショナルです！',
            'testimonial2-name': 'Gizm 0dder',
            'testimonial2-position': 'CEO、Agile Tech Solution',
            'education-title': '教育と資格',
            'copyright': '© 2025 Md. Shiabul Islam. All rights reserved.',
        }
    };

    // Apply translations function
    function applyTranslations(lang) {
        const elements = document.querySelectorAll('[data-translate]');
        elements.forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[lang] && translations[lang][key]) {
                element.innerHTML = translations[lang][key];
            }
        });

        // Update active language button
        document.querySelectorAll('.language-btn').forEach(btn => {
            btn.classList.remove('active');
            if (btn.getAttribute('data-lang') === lang) {
                btn.classList.add('active');
            }
        });

        // Save language preference
        localStorage.setItem('language', lang);
    }

    // Language selector functionality
    document.querySelectorAll('.language-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const lang = btn.getAttribute('data-lang');
            applyTranslations(lang);
        });
    });

    // Back to top button functionality
    const backToTopButton = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });

    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Apply saved language or default to English
    const savedLanguage = localStorage.getItem('language') || 'en';
    applyTranslations(savedLanguage);

    // Progress bar on scroll
    window.addEventListener('scroll', () => {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight - windowHeight;
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollPercent = (scrollTop / documentHeight) * 100;

        document.querySelectorAll('.progress-bar').forEach(bar => {
            bar.style.width = `${scrollPercent}%`;
        });
    });
</script>
</body>
</html>
