<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zainab | Full-Stack Developer</title>
    <meta
        name="description"
        content="Neo-brutalist full-stack developer portfolio for Zainab featuring bold projects, tech stack, experience, and contact details."
    >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=JetBrains+Mono:wght@500;700&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet"
    >
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkR4j8R2R4MR0sA0FfDOMYMt2rt7NmBGG99g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    >
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brutal: {
                            yellow: '#FFD600',
                            cyan: '#00E5FF',
                            pink: '#FF3D81',
                            lime: '#76FF03',
                            ink: '#000000',
                            paper: '#FFFFFF',
                        },
                    },
                    fontFamily: {
                        sans: ['Space Grotesk', 'Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                },
            },
        };
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-black antialiased">
    <div class="portfolio-shell">
        <div class="absolute inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
            <span class="floating-shape shape-square top-[8rem] left-[4%]"></span>
            <span class="floating-shape shape-circle top-[14rem] right-[7%]"></span>
            <span class="floating-shape shape-zigzag bottom-[20rem] left-[8%]"></span>
            <span class="floating-shape shape-square bottom-[10rem] right-[12%]"></span>
        </div>

        <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-sm">
            <div class="header-inner mx-auto flex w-[min(1180px,calc(100%-1.25rem))] flex-wrap items-center justify-between gap-4 py-4 sm:py-5">
                <a class="brand-lockup brand-compact" href="#home"><span>ZAINAB.exe</span></a>
                <button type="button" class="nav-toggle js-nav-toggle" aria-label="Toggle menu" aria-expanded="false">
                    <span class="nav-toggle-bar"></span>
                    <span class="nav-toggle-bar"></span>
                    <span class="nav-toggle-bar"></span>
                </button>
                <nav class="header-nav-shell js-nav" aria-label="Primary navigation">
                    <div class="header-nav-list">
                        <a class="nav-chip is-active" href="#about">/ABOUT</a>
                        <a class="nav-chip" href="#skills">/SKILLS</a>
                        <a class="nav-chip" href="#experience">/LOGS</a>
                        <a class="nav-chip" href="#projects">/WORK</a>
                        <a class="nav-chip nav-chip-accent js-bounce" href="#contact">HIRE ME</a>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <section class="portfolio-section hero-reference section-pad overflow-hidden" id="home">
                <div class="hero-reference-code" aria-hidden="true">CODE</div>
                <div class="mx-auto w-[min(1180px,calc(100%-1.25rem))]">
                    <div class="hero-reference-inner">
                        <span class="hero-orb hero-orb-square" aria-hidden="true"></span>
                        <span class="hero-orb hero-orb-circle" aria-hidden="true"></span>
                        <span class="hero-dot hero-dot-left" aria-hidden="true"></span>
                        <span class="hero-dot hero-dot-right" aria-hidden="true"></span>

                        <div class="hero-status hero-badge">
                            <span class="status-led"></span>
                            <span>SYSTEM STATUS: ONLINE</span>
                        </div>

                        <div class="hero-title-wrap">
                            <h1 class="hero-title hero-title-primary">FULL STACK</h1>
                            <div class="hero-title-outline">DEVELOPER</div>
                        </div>

                        <div class="hero-note-card">
                            <p class="hero-note-copy">
                                I build digital products that refuse to be boring.
                            </p>
                            <p class="hero-note-stack">Laravel • Flutter • PHP • MySQL • Firebase</p>
                        </div>

                        <div class="hero-cta hero-cta-reference">
                            <a class="sticker-btn sticker-btn-dark js-bounce" href="#projects">View Projects</a>
                            <a class="sticker-btn sticker-btn-white js-bounce" href="{{ asset('build/assets/Zainab-CV.pdf') }}" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-file-pdf mr-1"></i>Get CV</a>
                            <a class="sticker-btn sticker-btn-white js-bounce" href="#contact">Contact Me</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio-section section-pad" id="about">
                <div class="mx-auto w-[min(1180px,calc(100%-1.25rem))]">
                    <div class="about-reference-shell">
                        <div class="about-reference-watermark" aria-hidden="true">FULL STACK</div>
                        <div class="about-reference-grid">
                            <div class="about-portrait-panel">
                                <div class="about-portrait-label">ZAINAB.exe</div>
                                <div class="about-portrait-frame">
                                    <img
                                        src="{{ asset('build/assets/girl.jpg') }}"
                                        alt="Portrait illustration of Zainab"
                                        class="about-portrait-image"
                                    >
                                </div>
                            </div>

                            <div class="about-reference-copy">
                                <h2 class="about-reference-title">WHO AM I?</h2>
                                <p class="about-reference-text">
                                    I am Zainab, a full-stack developer who builds bold digital experiences
                                    with clean structure, strong visuals, and practical backend thinking. I
                                    bring <span class="about-highlight">personality</span> to products while
                                    keeping the code scalable and dependable.
                                </p>

                                <div class="about-reference-list">
                                    <p>&gt; Specialized in designing and building modern web products.</p>
                                    <p>&gt; Focused on frontend polish, backend logic, and clean UX.</p>
                                    <p>&gt; Shipping interfaces and systems that actually work.</p>
                                </div>

                                <div class="about-reference-tags">
                                    <span class="about-info-chip about-info-chip-dark">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>Location: Worldwide</span>
                                    </span>
                                    <span class="about-info-chip about-info-chip-lime">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span>Status: Available</span>
                                    </span>
                                    <a href="{{ asset('build/assets/Zainab-CV.pdf') }}" target="_blank" rel="noopener noreferrer" class="about-info-chip about-info-chip-dark" style="text-decoration:none;color:inherit;">
                                        <i class="fa-solid fa-file-pdf"></i>
                                        <span>Get CV</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio-section section-pad" id="skills">
                <div class="mx-auto w-[min(1180px,calc(100%-1.25rem))]">
                    <div class="stack-reference-shell">
                        <div class="stack-reference-head">
                            <div>
                                <h2 class="stack-reference-title">TECH_<span>STACK</span></h2>
                                <div class="stack-reference-line"></div>
                            </div>
                            <div class="stack-reference-meta">
                                <strong>@ZAINAB_DEV</strong>
                                <span>Frontend • Backend • Database • Tools</span>
                            </div>
                        </div>

                        <div class="stack-reference-grid">
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Language</span><strong>PHP</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Language</span><strong>JavaScript</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Framework</span><strong>Laravel</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Markup</span><strong>HTML5</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Styling</span><strong>Tailwind</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Styling</span><strong>Bootstrap</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Library</span><strong>GSAP</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Mobile</span><strong>Flutter</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Database</span><strong>MySQL</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Database</span><strong>MongoDB</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Database</span><strong>Firebase</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Database</span><strong>Supabase</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">API</span><strong>REST</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Version</span><strong>Git</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Collab</span><strong>GitHub</strong></article>
                            <article class="stack-reference-item js-hover-lift"><span class="stack-highlight-dot" aria-hidden="true"></span><span class="stack-mini-label">Other</span><strong>jQuery</strong></article>
                        </div>

                        <div class="stack-reference-footer">
                            <span>STACK_STATUS: ACTIVE</span>
                            <span>MODE: BUILD</span>
                            <span>THEME: BRUTAL</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio-section section-pad" id="projects">
                <div class="mx-auto w-[min(1180px,calc(100%-1.25rem))]">
                    <div class="works-showcase-shell">
                        <div class="works-showcase-head">
                            <span class="works-mini-brand">ZAINAB.exe</span>
                            <h2 class="works-showcase-title">SELECTED WORKS</h2>
                        </div>

                        <div class="works-card-grid">
                            <article class="works-card">
                                <div class="works-frame">
                                    <div class="works-screen works-screen-trading"></div>
                                </div>
                                <div class="works-copy">
                                    <div>
                                        <h3>Restaurant Booking & Menu Management</h3>
                                        <p>Full-stack platform enabling customers to browse menus and reserve tables online. Reservation workflow with automated email confirmations, admin dashboard for menu and bookings, scalable APIs.</p>
                                    </div>
                                    <a class="works-arrow js-bounce" href="#" aria-label="Restaurant Booking project">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div class="works-tags">
                                    <span class="tag-chip">Laravel</span>
                                    <span class="tag-chip">MySQL</span>
                                    <span class="tag-chip">REST API</span>
                                </div>
                            </article>

                            <article class="works-card">
                                <div class="works-frame">
                                    <div class="works-screen works-screen-resume"></div>
                                </div>
                                <div class="works-copy">
                                    <div>
                                        <h3>FindUpNow – Service Discovery</h3>
                                        <p>On-demand platform connecting users with nearby service providers. Role-based dashboards, location-based ZIP search, secure auth with email/SMS verification, booking workflow.</p>
                                    </div>
                                    <a class="works-arrow js-bounce" href="#" aria-label="FindUpNow project">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div class="works-tags">
                                    <span class="tag-chip">Laravel</span>
                                    <span class="tag-chip">Firebase</span>
                                    <span class="tag-chip">API</span>
                                </div>
                            </article>

                            <article class="works-card">
                                <div class="works-frame">
                                    <div class="works-screen works-screen-trading"></div>
                                </div>
                                <div class="works-copy">
                                    <div>
                                        <h3>AI-Enhanced Online Examination</h3>
                                        <p>Web-based exam platform for institutions. Role-based access for admins and students, automated quiz generation and AI grading, real-time AJAX updates, secure auth and notifications.</p>
                                    </div>
                                    <a class="works-arrow js-bounce" href="#" aria-label="Exam System project">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div class="works-tags">
                                    <span class="tag-chip">Laravel</span>
                                    <span class="tag-chip">AJAX</span>
                                    <span class="tag-chip">MySQL</span>
                                </div>
                            </article>

                            <article class="works-card">
                                <div class="works-frame">
                                    <div class="works-screen works-screen-resume"></div>
                                </div>
                                <div class="works-copy">
                                    <div>
                                        <h3>Executive Dashboard – Student Finance</h3>
                                        <p>Financial management for tracking fee payments, outstanding balances, and transactions. Automated invoices, analytical reporting, intuitive admin interface for institutions.</p>
                                    </div>
                                    <a class="works-arrow js-bounce" href="#" aria-label="Executive Dashboard project">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div class="works-tags">
                                    <span class="tag-chip">Laravel</span>
                                    <span class="tag-chip">MySQL</span>
                                    <span class="tag-chip">Dashboard</span>
                                </div>
                            </article>

                            <article class="works-card">
                                <div class="works-frame">
                                    <div class="works-screen works-screen-trading"></div>
                                </div>
                                <div class="works-copy">
                                    <div>
                                        <h3>Student Assessment App (Flutter)</h3>
                                        <p>Cross-platform app for performance evaluation through quizzes and self-assessment. Role-based access for teachers and students, Firebase auth and real-time sync, performance dashboards.</p>
                                    </div>
                                    <a class="works-arrow js-bounce" href="#" aria-label="Flutter Assessment project">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div class="works-tags">
                                    <span class="tag-chip">Flutter</span>
                                    <span class="tag-chip">Firebase</span>
                                    <span class="tag-chip">REST API</span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio-section section-pad" id="experience">
                <div class="mx-auto w-[min(1180px,calc(100%-1.25rem))]">
                    <div class="experience-log-shell">
                        <div class="experience-log-head">
                            <h2 class="experience-log-title">EXPERIENCE_<span>LOG</span></h2>
                            <div class="experience-log-meta">@ZAINAB_DEV</div>
                        </div>

                        <div class="experience-log-track">
                            <article class="experience-log-card brutalist-card">
                                <div class="experience-log-marker experience-marker-yellow" aria-hidden="true"></div>
                                <div class="experience-log-top">
                                    <h3>Full Stack Developer</h3>
                                    <span class="experience-date-badge">Sep 2025 — Present</span>
                                </div>
                                <p class="experience-log-company experience-company-lime">@ Inverzo.Tech</p>
                                <p class="experience-log-meta-location">Nankana Sahib, Pakistan</p>
                                <ul class="experience-log-list">
                                    <li>Develop and maintain web and mobile applications using Laravel, Flutter, and REST APIs.</li>
                                    <li>Build responsive interfaces, integrate backend services, and collaborate with cross-functional teams.</li>
                                    <li>Deliver scalable, high-performance applications with clean, maintainable code.</li>
                                </ul>
                            </article>

                            <article class="experience-log-card brutalist-card">
                                <div class="experience-log-marker experience-marker-red" aria-hidden="true"></div>
                                <div class="experience-log-top">
                                    <h3>Full Stack Developer</h3>
                                    <span class="experience-date-badge">May 2024 — Feb 2026</span>
                                </div>
                                <p class="experience-log-company experience-company-pink">@ Brand Blur</p>
                                <p class="experience-log-meta-location">Abu Dhabi, United Arab Emirates</p>
                                <ul class="experience-log-list">
                                    <li>Developed and maintained web applications using Laravel, PHP, and JavaScript.</li>
                                    <li>Built responsive user interfaces and integrated APIs for client projects.</li>
                                    <li>Collaborated with team members to deliver efficient and scalable web solutions.</li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio-section section-pad" id="contact">
                <div class="mx-auto w-[min(1180px,calc(100%-1.25rem))]">
                    <div class="contact-panel-shell">
                        <div class="contact-panel-badge">Start A Project</div>

                        <div class="contact-panel-grid">
                            <div class="contact-panel-copy">
                                <h2 class="contact-panel-title">LET&apos;S<br>TALK<br>CODE.</h2>
                                <p class="contact-panel-text">
                                    I am currently available for freelance work and open to full-time opportunities.
                                </p>

                                <div class="contact-detail-list">
                                    <a class="contact-detail-item" href="mailto:zainabalirazaofficial@gmail.com">
                                        <span class="contact-detail-icon"><i class="fa-solid fa-envelope"></i></span>
                                        <span>zainabalirazaofficial@gmail.com</span>
                                    </a>
                                    <div class="contact-detail-item">
                                        <span class="contact-detail-icon"><i class="fa-solid fa-location-dot"></i></span>
                                        <span>Remote / Earth</span>
                                    </div>
                                    <div class="contact-social-inline">
                                        <a href="https://github.com/zainiali" target="_blank" rel="noreferrer" class="contact-detail-item" aria-label="GitHub">
                                            <span class="contact-detail-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                            </span>
                                            <span>GitHub</span>
                                        </a>
                                        <a href="https://www.linkedin.com/in/zainab-ali-09663931a" target="_blank" rel="noreferrer" class="contact-detail-item" aria-label="LinkedIn">
                                            <span class="contact-detail-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                            </span>
                                            <span>LinkedIn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <form class="contact-form-panel" id="contactForm"
                                data-emailjs-public-key="{{ config('services.emailjs.public_key') }}"
                                data-emailjs-service-id="{{ config('services.emailjs.service_id') }}"
                                data-emailjs-template-id="{{ config('services.emailjs.template_id') }}"
                                data-emailjs-autoreply-template-id="{{ config('services.emailjs.autoreply_template_id') }}">
                                <label class="contact-field">
                                    <span>Identity</span>
                                    <input class="contact-input contact-input-flat" type="text" name="name" placeholder="Name / Company" required>
                                </label>
                                <label class="contact-field">
                                    <span>Coordinates</span>
                                    <input class="contact-input contact-input-flat" type="email" name="email" placeholder="Email Address" required>
                                </label>
                                <label class="contact-field">
                                    <span>Transmission</span>
                                    <textarea class="contact-input contact-input-flat contact-textarea" name="message" placeholder="Project details..." required></textarea>
                                </label>
                                <button class="contact-submit-btn js-bounce" type="submit">Transmit Data</button>
                                <p class="mono-label text-sm" id="formStatus" aria-live="polite"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t-4 border-black bg-brutal-pink py-6">
            <div class="mx-auto flex w-[min(1180px,calc(100%-1.25rem))] flex-col gap-3 font-black uppercase md:flex-row md:items-center md:justify-between">
                <p>&copy; {{ date('Y') }} Zainab. Built loud, bold, and full stack.</p>
                <a class="underline decoration-[3px] underline-offset-4" href="#home">Back To Top</a>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
