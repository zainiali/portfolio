import './bootstrap';

const runPortfolio = () => {
    const navLinks = Array.from(document.querySelectorAll('.nav-chip'));
    const sections = Array.from(document.querySelectorAll('.portfolio-section[id]'));
    const contactForm = document.getElementById('contactForm');
    const formStatus = document.getElementById('formStatus');
    const skillBars = Array.from(document.querySelectorAll('.skill-meter-fill'));
    const hoverCards = Array.from(document.querySelectorAll('.js-hover-lift'));
    const bounceButtons = Array.from(document.querySelectorAll('.js-bounce'));
    const gsapInstance = window.gsap;
    const scrollTrigger = window.ScrollTrigger;

    if (gsapInstance && scrollTrigger) {
        gsapInstance.registerPlugin(scrollTrigger);

        gsapInstance.from('.hero-status', {
            opacity: 0,
            y: 28,
            rotation: -5,
            duration: 0.7,
            ease: 'back.out(1.8)',
        });

        gsapInstance.from('.hero-title-primary, .hero-title-outline, .hero-note-card, .hero-cta-reference', {
            opacity: 0,
            y: 42,
            duration: 0.85,
            stagger: 0.12,
            ease: 'power3.out',
            delay: 0.12,
        });

        gsapInstance.from('.hero-orb, .hero-dot', {
            opacity: 0,
            scale: 0.6,
            duration: 0.8,
            stagger: 0.08,
            ease: 'back.out(1.5)',
            delay: 0.2,
        });

        gsapInstance.utils.toArray('.floating-shape, .hero-orb').forEach((shape, index) => {
            gsapInstance.to(shape, {
                y: index % 2 === 0 ? -18 : 18,
                rotation: index % 2 === 0 ? 16 : -16,
                duration: 2.8 + index * 0.35,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut',
            });
        });

        gsapInstance.utils.toArray('.portfolio-section').forEach((section) => {
            const targets = section.querySelectorAll('.brutalist-card, .section-kicker');

            if (!targets.length) {
                return;
            }

            gsapInstance.from(targets, {
                opacity: 0,
                y: 44,
                rotation: 1.5,
                duration: 0.8,
                stagger: 0.1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: section,
                    start: 'top 78%',
                },
            });
        });

        skillBars.forEach((bar) => {
            gsapInstance.to(bar, {
                width: bar.dataset.width || '0%',
                duration: 1,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: bar,
                    start: 'top 85%',
                    once: true,
                },
            });
        });

        gsapInstance.to('.hero-dot', {
            y: -10,
            duration: 1.4,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
        });
    } else {
        skillBars.forEach((bar) => {
            bar.style.width = bar.dataset.width || '0%';
        });
    }

    if (sections.length && navLinks.length) {
        const sectionObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    navLinks.forEach((link) => {
                        link.classList.toggle(
                            'is-active',
                            link.getAttribute('href') === `#${entry.target.id}`
                        );
                    });
                });
            },
            {
                rootMargin: '-35% 0px -45% 0px',
                threshold: 0.12,
            }
        );

        sections.forEach((section) => sectionObserver.observe(section));
    }

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (event) => {
            const targetId = anchor.getAttribute('href');

            if (!targetId || targetId === '#') {
                return;
            }

            const target = document.querySelector(targetId);

            if (!target) {
                return;
            }

            event.preventDefault();
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start',
            });
        });
    });

    if (gsapInstance) {
        hoverCards.forEach((card) => {
            card.addEventListener('mouseenter', () => {
                gsapInstance.to(card, {
                    x: -6,
                    y: -6,
                    duration: 0.18,
                    ease: 'power2.out',
                });
            });

            card.addEventListener('mouseleave', () => {
                gsapInstance.to(card, {
                    x: 0,
                    y: 0,
                    duration: 0.2,
                    ease: 'power2.out',
                });
            });
        });

        bounceButtons.forEach((button) => {
            button.addEventListener('mouseenter', () => {
                gsapInstance.to(button, {
                    y: -4,
                    rotation: -2,
                    duration: 0.18,
                    ease: 'back.out(2.4)',
                });
            });

            button.addEventListener('mouseleave', () => {
                gsapInstance.to(button, {
                    y: 0,
                    rotation: 0,
                    duration: 0.18,
                    ease: 'power2.out',
                });
            });
        });
    }

    contactForm?.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(contactForm);
        const name = (formData.get('name') || '').toString().trim();
        const email = (formData.get('email') || '').toString().trim();
        const message = (formData.get('message') || '').toString().trim();

        if (!name || !email || !message) {
            if (formStatus) {
                formStatus.textContent = 'Please fill in your name, email, and message.';
            }
            return;
        }

        const submitBtn = contactForm?.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
        }
        if (formStatus) formStatus.textContent = '';

        try {
            const token = document.querySelector('input[name="_token"]')?.value;
            const response = await fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': token,
                },
            });

            const data = await response.json().catch(() => ({}));

            if (response.ok && data.success) {
                if (formStatus) formStatus.textContent = data.message || 'Message sent. I\'ll get back to you soon!';
                contactForm.reset();
            } else {
                if (formStatus) formStatus.textContent = data.message || data.errors ? Object.values(data.errors).flat().join(' ') : 'Something went wrong. Try again.';
            }
        } catch {
            if (formStatus) formStatus.textContent = 'Network error. Please try again.';
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Transmit Data';
            }
        }
    });
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', runPortfolio);
} else {
    runPortfolio();
}
