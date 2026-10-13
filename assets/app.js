const translations = window.TRANSLATIONS;
let currentLang = 'fr';

document.addEventListener('DOMContentLoaded', function() {
    initializeLanguage();
    initializeCursorGlow();
    initializeNavbar();
    initializeSmoothScrolling();
    initializeAnimations();
});

function initializeLanguage() {
    // Détecter la langue du navigateur
    const browserLang = navigator.language.slice(0, 2);
    if (translations[browserLang]) {
        currentLang = browserLang;
    }

    // Activer le bouton de langue correspondant
    updateLanguageButtons();

    // Appliquer les traductions
    translatePage();

    // Ajouter les événements aux boutons de langue
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const lang = this.getAttribute('data-lang');
            switchLanguage(lang);
        });
    });
}

function switchLanguage(lang) {
    if (translations[lang]) {
        currentLang = lang;
        updateLanguageButtons();
        translatePage();
    }
}

function updateLanguageButtons() {
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
        if (btn.getAttribute('data-lang') === currentLang) {
            btn.classList.add('active');
        }
    });
}

function translatePage() {
    const elements = document.querySelectorAll('[data-translate]');
    elements.forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[currentLang] && translations[currentLang][key]) {
            element.innerHTML = translations[currentLang][key];
        }
    });
}

function initializeCursorGlow() {
    const cursorGlow = document.getElementById('cursorGlow');

    document.addEventListener('mousemove', function(e) {
        cursorGlow.style.left = e.clientX - 150 + 'px';
        cursorGlow.style.top = e.clientY - 150 + 'px';
    });

    // Masquer sur mobile
    if (window.innerWidth <= 768) {
        cursorGlow.style.display = 'none';
    }
}

function initializeNavbar() {
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(0, 0, 0, 0.9)';
            navbar.style.backdropFilter = 'blur(30px)';
        } else {
            navbar.style.background = 'rgba(0, 0, 0, 0.3)';
            navbar.style.backdropFilter = 'blur(20px)';
        }
    });
}

function initializeSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

function initializeAnimations() {
    // Intersection Observer pour les animations d'entrée
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observer les sections
    document.querySelectorAll('.section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'all 0.8s ease-out';
        observer.observe(section);
    });

    // Observer les cartes
    document.querySelectorAll('.stat-card, .skill-category, .timeline-item').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.6s ease-out';
        observer.observe(card);
    });

    // Animation des compteurs
    animateCounters();
}

function animateCounters() {
    const counters = document.querySelectorAll('.stat-number');

    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    });

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

function animateCounter(element) {
    const target = parseInt(element.textContent);
    const duration = 2000;
    const start = Date.now();

    function update() {
        const now = Date.now();
        const progress = Math.min((now - start) / duration, 1);
        const current = Math.floor(progress * target);

        if (element.textContent.includes('%')) {
            element.textContent = current + '%';
        } else if (element.textContent.includes('+')) {
            element.textContent = current + '+';
        } else {
            element.textContent = current;
        }

        if (progress < 1) {
            requestAnimationFrame(update);
        }
    }

    update();
}

window.addEventListener('resize', function() {
    const cursorGlow = document.getElementById('cursorGlow');
    if (window.innerWidth <= 768) {
        cursorGlow.style.display = 'none';
    } else {
        cursorGlow.style.display = 'block';
    }
});

if ('ontouchstart' in window) {
    document.querySelectorAll('.skill-tag, .cta-button, .lang-btn').forEach(element => {
        element.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.95)';
        });

        element.addEventListener('touchend', function() {
            this.style.transform = '';
        });
    });
}

let ticking = false;

function updateOnScroll() {
    // Mettre à jour la position des éléments flottants
    const scrolled = window.pageYOffset;
    const parallax = document.querySelectorAll('.floating-element');

    parallax.forEach((element, index) => {
        const speed = 0.5 + (index * 0.1);
        element.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
    });

    ticking = false;
}

window.addEventListener('scroll', function() {
    if (!ticking) {
        requestAnimationFrame(updateOnScroll);
        ticking = true;
    }
});

window.addEventListener('load', function() {
    document.body.classList.add('loaded');
});

console.log(`
🚀 Salut ! Tu inspectés le code ?
👨‍💻 Je suis Damien Z. Padonou - FullStack Developer & AI Engineer
💡 Si tu veux collaborer, contacte-moi : damienzipadonou@gmail.com
🌟 GitHub: https://github.com/predator229
`);
