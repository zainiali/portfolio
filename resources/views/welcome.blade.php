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

        <header class="sticky top-0 z-50 bg-white/90">
            <div class="mx-auto flex w-[min(1180px,calc(100%-1.25rem))] flex-wrap items-center justify-between gap-4 py-5">
                <a class="brand-lockup brand-compact" href="#home">
                    <span>ZAINAB.exe</span>
                </a>

                <nav class="header-nav-shell" aria-label="Primary navigation">
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
                            <p class="hero-note-stack">React • Node • Laravel • MongoDB</p>
                        </div>

                        <div class="hero-cta hero-cta-reference">
                            <a class="sticker-btn sticker-btn-dark js-bounce" href="#projects">View Projects</a>
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
                                        src="{{ asset('assets/girl.jpg') }}"
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
                            <article class="stack-reference-item"><span class="stack-mini-label">Library</span><strong>React</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Framework</span><strong>Next.js</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Language</span><strong>Python</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Runtime</span><strong>Node.js</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Styling</span><strong>Tailwind</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Database</span><strong>MySQL</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Markup</span><strong>HTML5</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Version</span><strong>Git</strong></article>

                            <article class="stack-reference-item"><span class="stack-mini-label">API</span><strong>GraphQL</strong></article>
                            <article class="stack-reference-item stack-reference-item-highlight js-hover-lift">
                                <span class="stack-highlight-dot" aria-hidden="true"></span>
                                <span class="stack-mini-label">Collab</span>
                                <strong>GitHub</strong>
                            </article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Language</span><strong>JavaScript</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Database</span><strong>MongoDB</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Language</span><strong>PHP</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Framework</span><strong>Laravel</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Library</span><strong>GSAP</strong></article>
                            <article class="stack-reference-item"><span class="stack-mini-label">Language</span><strong>C++</strong></article>
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
                                        <h3>StockEasy</h3>
                                        <p>
                                            An online stock market platform with stock analysis, chatbot,
                                            and real-time market support.
                                        </p>
                                    </div>
                                    <a class="works-arrow js-bounce" href="https://example.com" target="_blank" rel="noreferrer" aria-label="Open StockEasy project">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div class="works-tags">
                                    <span class="tag-chip">Django</span>
                                    <span class="tag-chip">Python</span>
                                    <span class="tag-chip">Firebase</span>
                                    <span class="tag-chip">Websocket</span>
                                    <span class="tag-chip">MySQL</span>
                                </div>
                            </article>

                            <article class="works-card">
                                <div class="works-frame">
                                    <div class="works-screen works-screen-resume"></div>
                                </div>
                                <div class="works-copy">
                                    <div>
                                        <h3>ResumeIQ</h3>
                                        <p>
                                            A resume analyzer and builder that helps users check resume
                                            quality, improve structure, and build stronger profiles.
                                        </p>
                                    </div>
                                    <a class="works-arrow js-bounce" href="https://example.com" target="_blank" rel="noreferrer" aria-label="Open ResumeIQ project">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                                <div class="works-tags">
                                    <span class="tag-chip">Firebase</span>
                                    <span class="tag-chip">MySQL</span>
                                    <span class="tag-chip">Gemini API</span>
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
                                    <h3>Freelance Full-Stack Developer</h3>
                                    <span class="experience-date-badge">Nov 2025 - Present</span>
                                </div>
                                <p class="experience-log-company experience-company-lime">@ Self-Employed</p>
                                <ul class="experience-log-list">
                                    <li>Building responsive and interactive web applications using HTML, CSS, JavaScript, Laravel, and Node.js.</li>
                                    <li>Developing modern interfaces and backend flows tailored to client requirements.</li>
                                    <li>Creating custom digital solutions with a strong focus on usability and clean structure.</li>
                                </ul>
                            </article>

                            <article class="experience-log-card brutalist-card">
                                <div class="experience-log-marker experience-marker-red" aria-hidden="true"></div>
                                <div class="experience-log-top">
                                    <h3>Data Entry Contract</h3>
                                    <span class="experience-date-badge">Aug 2025 - Nov 2025</span>
                                </div>
                                <p class="experience-log-company experience-company-pink">@ Tejola India</p>
                                <ul class="experience-log-list">
                                    <li>Processed and entered large volumes of data with strong attention to detail and accuracy.</li>
                                    <li>Maintained data quality standards and performed regular reviews across submissions.</li>
                                    <li>Collaborated with team members to meet daily and weekly delivery targets.</li>
                                </ul>
                            </article>

                            <article class="experience-log-card brutalist-card">
                                <div class="experience-log-marker experience-marker-green" aria-hidden="true"></div>
                                <div class="experience-log-top">
                                    <h3>Project Manager</h3>
                                    <span class="experience-date-badge">Dec 2024 - Aug 2025</span>
                                </div>
                                <p class="experience-log-company experience-company-lime">@ Self-Employed</p>
                                <ul class="experience-log-list">
                                    <li>Managed digital project timelines, milestones, and communication across multiple builds.</li>
                                    <li>Coordinated task flow between design, content, and development requirements.</li>
                                    <li>Ensured projects shipped on time while keeping execution organized and client-focused.</li>
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
                                    <a class="contact-detail-item" href="mailto:zainab@example.com">
                                        <span class="contact-detail-icon"><i class="fa-solid fa-envelope"></i></span>
                                        <span>zainab@example.com</span>
                                    </a>
                                    <div class="contact-detail-item">
                                        <span class="contact-detail-icon"><i class="fa-solid fa-location-dot"></i></span>
                                        <span>Remote / Earth</span>
                                    </div>
                                    <div class="contact-social-inline">
                                        <a href="https://github.com" target="_blank" rel="noreferrer">GitHub</a>
                                        <a href="https://linkedin.com" target="_blank" rel="noreferrer">LinkedIn</a>
                                        <a href="https://instagram.com" target="_blank" rel="noreferrer">Instagram</a>
                                    </div>
                                </div>
                            </div>

                            <form class="contact-form-panel" id="contactForm" action="{{ route('contact.store') }}" method="POST">
                                @csrf
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
