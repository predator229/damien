<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damien Z. Padonou – FullStack Developer, AI Engineer & Cybersecurity MSc</title>
    <meta name="description" content="Damien Z. Padonou – FullStack Developer, AI Engineer, MSc in Cybersecurity. Expert in distributed systems, autonomous AI agents, and secure cloud solutions.">
    <meta name="keywords" content="Damien Z. Padonou, FullStack Developer, AI Engineer, Cybersecurity, Distributed Systems, LLM, Cloud, Python, React, DevOps, Romania, France, Bénin">
    <meta name="author" content="Damien Z. Padonou">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
            color: #ffffff;
            overflow-x: hidden;
            line-height: 1.6;
        }

        .cursor-glow {
            position: fixed;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0, 255, 255, 0.1) 0%, transparent 70%);
            pointer-events: none;
            z-index: 1;
            transition: all 0.1s ease;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1rem 2rem;
            backdrop-filter: blur(20px);
            background: rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #00ffff, #0080ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #00ffff;
            transform: translateY(-1px);
        }

        .language-selector {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .lang-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-weight: 600;
        }

        .lang-btn:hover {
            background: rgba(0, 255, 255, 0.2);
            border-color: rgba(0, 255, 255, 0.4);
            transform: scale(1.05);
        }

        .lang-btn.active {
            background: linear-gradient(45deg, #00ffff, #0080ff);
            color: #000;
            border-color: transparent;
        }

        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            z-index: 10;
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ffffff, #00ffff, #0080ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 3s infinite;
        }

        .hero .subtitle {
            font-size: 1.5rem;
            color: #b0b0b0;
            margin-bottom: 2rem;
            font-weight: 300;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .floating-element {
            position: absolute;
            background: linear-gradient(45deg, rgba(0, 255, 255, 0.1), rgba(0, 128, 255, 0.1));
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: -2s;
        }

        .floating-element:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: -4s;
        }

        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: -1s;
        }

        .section {
            padding: 6rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 4rem;
            background: linear-gradient(45deg, #ffffff, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #e0e0e0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            text-align: center;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: rgba(0, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 255, 255, 0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #00ffff;
            display: block;
        }

        .stat-label {
            color: #b0b0b0;
            margin-top: 0.5rem;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .skill-category {
            background: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .skill-category:hover {
            transform: translateY(-10px);
            border-color: rgba(0, 255, 255, 0.3);
            box-shadow: 0 25px 50px rgba(0, 255, 255, 0.1);
        }

        .skill-category h3 {
            color: #00ffff;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-tag {
            background: rgba(0, 255, 255, 0.1);
            color: #00ffff;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.9rem;
            border: 1px solid rgba(0, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .skill-tag:hover {
            background: rgba(0, 255, 255, 0.2);
            transform: scale(1.05);
        }

        .experience-timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline-line {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #00ffff, #0080ff);
        }

        .timeline-item {
            margin-bottom: 3rem;
            position: relative;
        }

        .timeline-dot {
            position: absolute;
            left: -2rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: #00ffff;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
        }

        .timeline-content {
            background: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .timeline-content:hover {
            transform: translateX(10px);
            border-color: rgba(0, 255, 255, 0.3);
        }

        .job-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #00ffff;
            margin-bottom: 0.5rem;
        }

        .company {
            color: #b0b0b0;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .achievements {
            list-style: none;
        }

        .achievements li {
            margin-bottom: 0.5rem;
            padding-left: 1rem;
            position: relative;
            color: #e0e0e0;
        }

        .achievements li:before {
            content: "▶";
            color: #00ffff;
            position: absolute;
            left: 0;
        }

        .cta-section {
            text-align: center;
            padding: 6rem 2rem;
            background: linear-gradient(135deg, rgba(0, 255, 255, 0.1), rgba(0, 128, 255, 0.1));
            border-radius: 30px;
            margin: 4rem 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(45deg, #00ffff, #0080ff);
            color: #000;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin: 0 1rem;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 255, 255, 0.3);
        }

        .footer {
            text-align: center;
            padding: 3rem 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #666;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes shimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .hero .subtitle { font-size: 1.2rem; }
            .about-content { grid-template-columns: 1fr; }
            .stats-grid { grid-template-columns: 1fr; }
            .nav-links { display: none; }
            .section { padding: 4rem 1rem; }
            .nav-right { gap: 1rem; }
            .language-selector { gap: 0.3rem; }
            .lang-btn { padding: 0.3rem 0.6rem; font-size: 0.8rem; }
        }
    </style>
</head>
<body>
    <div class="cursor-glow" id="cursorGlow"></div>

    <nav class="navbar">
        <div class="nav-content">
            <div class="logo">DP.</div>
            <div class="nav-right">
                <div class="nav-links">
                    <a href="#about" data-translate="nav.about">À Propos</a>
                    <a href="#skills" data-translate="nav.skills">Compétences</a>
                    <a href="#experience" data-translate="nav.experience">Expérience</a>
                    <a href="#contact" data-translate="nav.contact">Contact</a>
                </div>
                <div class="language-selector">
                    <button class="lang-btn" data-lang="fr">🇫🇷 FR</button>
                    <button class="lang-btn" data-lang="en">🇺🇸 EN</button>
                    <button class="lang-btn" data-lang="ro">🇷🇴 RO</button>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        <div class="hero-content">
            <h1>Damien Z. Padonou</h1>
            <p class="subtitle" data-translate="hero.subtitle">FullStack Developer & AI Engineer</p>
            <p style="color: #888; margin-bottom: 2rem;" data-translate="hero.description">🚀 Architecte de solutions autonomes & systèmes distribués</p>
            <a href="#about" class="cta-button" data-translate="hero.cta">Découvrir mon profil</a>
        </div>
    </section>

    <section id="about" class="section">
        <h2 class="section-title" data-translate="about.title">À Propos</h2>
        <div class="about-content">
            <div class="about-text">
                <p data-translate="about.text1">Ingénieur en sécurité informatique et systèmes distribués avec une expertise approfondie en développement full-stack et intelligence artificielle embarquée.</p>
                <p data-translate="about.text2">Je conçois des plateformes robustes et sécurisées combinant cloud, IA locale, automation et UX moderne. Ma passion pour l'innovation me pousse à maîtriser l'ensemble du cycle projet, de la conception au déploiement.</p>
                <p><span data-translate="about.specialty">🎯 <strong>Spécialité :</strong> Agents autonomes IA, LLM on-premises, architectures distribuées</span></p>
            </div>
            <div class="stats-grid">
                <div class="stat-card">
                    <span class="stat-number">5+</span>
                    <div class="stat-label" data-translate="stats.experience">Années d'expérience</div>
                </div>
                <div class="stat-card">
                    <span class="stat-number">15+</span>
                    <div class="stat-label" data-translate="stats.technologies">Technologies maîtrisées</div>
                </div>
                <div class="stat-card">
                    <span class="stat-number">3</span>
                    <div class="stat-label" data-translate="stats.languages">Langues parlées</div>
                </div>
                <div class="stat-card">
                    <span class="stat-number">100%</span>
                    <div class="stat-label" data-translate="stats.ai">Solutions locales IA</div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="section">
        <h2 class="section-title" data-translate="skills.title">Compétences Techniques</h2>
        <div class="skills-grid">
            <div class="skill-category">
                <h3 data-translate="skills.backend">🚀 Backend & APIs</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Python (FastAPI)</span>
                    <span class="skill-tag">Django</span>
                    <span class="skill-tag">PHP 5 to 8</span>
                    <span class="skill-tag">Symfony</span>
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">Java EE</span>
                    <span class="skill-tag">REST APIs</span>
                    <span class="skill-tag">WebSocket</span>
                </div>
            </div>
            <div class="skill-category">
                <h3 data-translate="skills.frontend">💎 Frontend & Mobile</h3>
                <div class="skill-tags">
                    <span class="skill-tag">React.js</span>
                    <span class="skill-tag">Vue.js</span>
                    <span class="skill-tag">Angular</span>
                    <span class="skill-tag">Swift</span>
                    <span class="skill-tag">Flutter</span>
                    <span class="skill-tag">HTML5/CSS3</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">TypeScript</span>
                </div>
            </div>
            <div class="skill-category">
                <h3 data-translate="skills.ai">🤖 IA & LLM</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Ollama</span>
                    <span class="skill-tag">Llama3</span>
                    <span class="skill-tag">CrewAI</span>
                    <span class="skill-tag">SQLCoder</span>
                    <span class="skill-tag">Text-to-SQL</span>
                    <span class="skill-tag" data-translate="skills.autonomous">Agents autonomes</span>
                </div>
            </div>
            <div class="skill-category">
                <h3 data-translate="skills.devops">🛠️ DevOps & Cloud</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">GitHub Actions</span>
                    <span class="skill-tag">CI/CD</span>
                    <span class="skill-tag">Git</span>
                </div>
            </div>
            <div class="skill-category">
                <h3 data-translate="skills.database">🛠️ DataBase management</h3>
                <div class="skill-tags">
                    <span class="skill-tag">PostgreSQL</span>
                    <span class="skill-tag">MySql</span>
                    <span class="skill-tag">MongoDB</span>
                </div>
            </div>
            <div class="skill-category">
                <h3 data-translate="skills.security">🔒 Sécurité & Architecture</h3>
                <div class="skill-tags">
                    <span class="skill-tag" data-translate="skills.appsec">Sécurité applicative</span>
                    <span class="skill-tag">GDPR</span>
                    <span class="skill-tag" data-translate="skills.distributed">Architecture distribuée</span>
                    <span class="skill-tag">Microservices</span>
                    <span class="skill-tag">OpenAPI</span>
                </div>
            </div>
            <div class="skill-category">
                <h3 data-translate="skills.langs">🌍 Langues</h3>
                <div class="skill-tags">
                    <span class="skill-tag" data-translate="skills.french">🇫🇷 Français (Natif)</span>
                    <span class="skill-tag" data-translate="skills.english">🇬🇧 Anglais (Pro)</span>
                    <span class="skill-tag" data-translate="skills.romanian">🇷🇴 Roumain (Inter)</span>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="section">
        <h2 class="section-title" data-translate="experience.title">Expérience Professionnelle</h2>
        <div class="experience-timeline">
            <div class="timeline-line"></div>
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="job-title">FullStack Developer</div>
                    <div class="company" data-translate="experience.cbms.company">CBMS SOFTWARE • Cluj-Napoca, Roumanie • Août 2022 - Présent</div>
                    <ul class="achievements">
                        <ul class="achievements">
                            <li data-translate="experience.cbms.task1"> Conception et développement d'applications web interactives en utilisant les technologies HTML, CSS, JavaScript et PHP. </li>
                            <li data-translate="experience.cbms.task2"> Création de modules sur mesure et personnalisation avancée des fonctionnalités selon les exigences spécifiques des clients. </li>
                            <li data-translate="experience.cbms.task3"> Développement de services distants en Python pour automatiser les processus métier et assurer la scalabilité des solutions. </li>
                            <li data-translate="experience.cbms.task4"> Maintenance et optimisation d’APIs pour l’échange de données en temps réel, garantissant performance et fiabilité. </li>
                            <li data-translate="experience.cbms.task5"> Intégration d’API tierces, notamment avec les services logistiques tels que Glovo, Tazz, etc., pour enrichir les fonctionnalités des plateformes. </li>
                            <li data-translate="experience.cbms.task6"> Déploiement et intégration de solutions cloud afin d’assurer la disponibilité, la sécurité et l’évolutivité des services. </li> 
                        </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="job-title" data-translate="experience.cyberdev.title">FullStack Developer & Founder (Personal project)</div>
                    <div class="company" data-translate="experience.cyberdev.company">CYBERDEV SOLUTIONS • Cluj-Napoca, Roumanie • Juin 2020 - Présent</div>
                    <ul class="achievements">
                        <li data-translate="experience.cyberdev.task1">🏥 Conception d’une architecture sécurisée et évolutive pour une plateforme de livraison pharmaceutique (ctmPharma), incluant la gestion des commandes, un panneau de gestion pour chaque acteur du projet (Livreur - Client - Admin - Pharmacie), les paiements, la géolocalisation et la conformité au RGPD.</li>
                        <li data-translate="experience.cyberdev.task2">🤖 Intégration de modèles de langage locaux (LLM) pour la génération automatique de schémas de base de données, code backend (API Python) et interfaces React, orchestrés en local avec Ollama.</li>
                        <li data-translate="experience.cyberdev.task3">📊 Développement d'une plateforme complète de gestion d’activité (izyStock) : gestion des utilisateurs, produits, inventaire, droits d’accès, statistiques et logs d’activité en temps réel.</li>
                        <li data-translate="experience.cyberdev.task4">🔧 Implémentation de microservices interconnectés pour la gestion des tâches métiers critiques (authentification, synchronisation de données, notification, calculs distribués).</li>
                        <li data-translate="experience.cyberdev.task5">🚀 Déploiement d’agents autonomes intelligents, capables de générer, vérifier et corriger automatiquement du code (back/frontend, tests, docs) via une coordination entre Llama3, Ollama et CrewAI.</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="job-title">Software Developer</div>
                    <div class="company" data-translate="experience.luz.company">LUZ TIC • Calavi, Bénin • Juin 2019 - Mai 2020</div>
                    <ul class="achievements">
                        <li data-translate="experience.luz.task1">Backend developer pour système de gestion clinique</li>
                        <li data-translate="experience.luz.task2">Application web de gestion d'auberge</li>
                        <li data-translate="experience.luz.task3">Optimisation des performances et sécurité</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="job-title" data-translate="experience.guerra.title">Web/Desktop Application Developer</div>
                    <div class="company" data-translate="experience.guerra.company">GUERRA HUB • Parakou, Bénin • Janvier - Mai 2019</div>
                    <ul class="achievements">
                        <li data-translate="experience.guerra.task1">Création d'outils hybrides web/desktop</li>
                        <li data-translate="experience.guerra.task2">Gestion d'activités locales</li>
                        <li data-translate="experience.guerra.task3">Solutions sur mesure pour PME</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <h2 style="margin-bottom: 2rem; font-size: 2.5rem;" data-translate="cta.title">Prêt à collaborer ?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 3rem; color: #b0b0b0;" data-translate="cta.subtitle">
            Parlons de votre prochain projet d'innovation technologique
        </p>
        <a href="mailto:damienzpadonou@gmail.com" class="cta-button" data-translate="cta.email">📧 Me Contacter</a>
        <a href="https://www.linkedin.com/in/damien-padonou-493658181" class="cta-button">💼 LinkedIn</a>
        <a href="https://github.com/predator229" class="cta-button">💻 GitHub</a>
    </section>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Damien Padonou • Cluj-Napoca, Roumanie • all rights reserved</p>
        <p style="margin-top: 1rem; color: #00ffff;" data-translate="footer.education">Master en Sécurité Informatique • UTCN 2024</p>
    </footer>

    <script>
        const translations = {
            fr: {
                'nav.about': 'À Propos',
                'nav.skills': 'Compétences',
                'nav.experience': 'Expérience',
                'nav.contact': 'Contact',
                'hero.subtitle': 'FullStack Developer & AI Engineer',
                'hero.description': '🚀 Architecte de solutions autonomes & systèmes distribués',
                'hero.cta': 'Découvrir mon profil',
                'about.title': 'À Propos',
                'about.text1': 'Ingénieur en sécurité informatique et systèmes distribués avec une expertise approfondie en développement full-stack et intelligence artificielle embarquée.',
                'about.text2': 'Je conçois des plateformes robustes et sécurisées combinant cloud, IA locale, automation et UX moderne. Ma passion pour l\'innovation me pousse à maîtriser l\'ensemble du cycle projet, de la conception au déploiement.',
                'about.specialty': '🎯 <strong>Spécialité :</strong> Agents autonomes IA, LLM on-premises, architectures distribuées',
                'stats.experience': 'Années d\'expérience',
                'stats.technologies': 'Technologies maîtrisées',
                'stats.languages': 'Langues parlées',
                'stats.ai': 'Solutions locales IA',
                'skills.title': 'Compétences Techniques',
                'skills.backend': '🚀 Backend & APIs',
                'skills.frontend': '💎 Frontend & Mobile',
                'skills.ai': '🤖 IA & LLM',
                'skills.devops': '🛠️ DevOps & Cloud',
                'skills.database': '🛠️ Gestion de Base de Données',
                'skills.security': '🔒 Sécurité & Architecture',
                'skills.langs': '🌍 Langues',
                'skills.autonomous': 'Agents autonomes',
                'skills.appsec': 'Sécurité applicative',
                'skills.distributed': 'Architecture distribuée',
                'skills.french': '🇫🇷 Français (Natif)',
                'skills.english': '🇬🇧 Anglais (Pro)',
                'skills.romanian': '🇷🇴 Roumain (Inter)',
                'experience.title': 'Expérience Professionnelle',
                'experience.cbms.company': 'CBMS SOFTWARE • Cluj-Napoca, Roumanie • Août 2022 - Présent',
                'experience.cbms.task1': 'Création d\'applications web interactives (HTML, CSS, JavaScript, PHP)',
                'experience.cbms.task2': 'Développement de services distants en Python',
                'experience.cbms.task3': 'Maintenance d\'APIs pour échange de données temps réel',
                'experience.cbms.task4': 'Intégration de solutions cloud et on-premises',
                'experience.cyberdev.title': 'FullStack Developer & Founder  (Projet personnel)',
                'experience.cyberdev.company': 'CYBERDEV SOLUTIONS • Cluj-Napoca, Roumanie • Juin 2020 - Présent',
                "experience.cyberdev.task1": "🏥 Conception d’une architecture sécurisée et évolutive pour une plateforme de livraison pharmaceutique (ctmPharma), incluant la gestion des commandes, un panneau de gestion pour chaque acteur du projet (Livreur - Client - Admin - Pharmacie), les paiements, la géolocalisation et la conformité au RGPD.",
                "experience.cyberdev.task2": "🤖 Intégration de modèles de langage locaux (LLM) pour la génération automatique de schémas de base de données, code backend (API Python) et interfaces React, orchestrés en local avec Ollama.",
                "experience.cyberdev.task3": "📊 Développement d'une plateforme complète de gestion d’activité (izyStock) : gestion des utilisateurs, produits, inventaire, droits d’accès, statistiques et logs d’activité en temps réel.",
                "experience.cyberdev.task4": "🔧 Implémentation de microservices interconnectés pour la gestion des tâches métiers critiques (authentification, synchronisation de données, notification, calculs distribués).",
                "experience.cyberdev.task5": "🚀 Déploiement d’agents autonomes intelligents, capables de générer, vérifier et corriger automatiquement du code (back/frontend, tests, docs) via une coordination entre Llama3, Ollama et CrewAI.",
                'experience.luz.company': 'LUZ TIC • Calavi, Bénin • Juin 2019 - Mai 2020',
                'experience.luz.task1': 'Backend developer pour système de gestion clinique',
                'experience.luz.task2': 'Application web de gestion d\'auberge',
                'experience.luz.task3': 'Optimisation des performances et sécurité',
                'experience.guerra.title': 'Web/Desktop Application Developer',
                'experience.guerra.company': 'GUERRA HUB • Parakou, Bénin • Janvier - Mai 2019',
                'experience.guerra.task1': 'Création d\'outils hybrides web/desktop',
                'experience.guerra.task2': 'Gestion d\'activités locales',
                'experience.guerra.task3': 'Solutions sur mesure pour PME',
                'cta.title': 'Prêt à collaborer ?',
                'cta.subtitle': 'Parlons de votre prochain projet d\'innovation technologique',
                'cta.email': '📧 Me Contacter',
                'footer.education': 'Master en Sécurité Informatique • UTCN 2024'
            },
            en: {
                'nav.about': 'About',
                'nav.skills': 'Skills',
                'nav.experience': 'Experience',
                'nav.contact': 'Contact',
                'hero.subtitle': 'FullStack Developer & AI Engineer',
                'hero.description': '🚀 Architect of autonomous solutions & distributed systems',
                'hero.cta': 'Discover my profile',
                'about.title': 'About Me',
                'about.text1': 'Computer security and distributed systems engineer with deep expertise in full-stack development and embedded artificial intelligence.',
                'about.text2': 'I design robust and secure platforms combining cloud, local AI, automation and modern UX. My passion for innovation drives me to master the entire project cycle, from design to deployment.',
                'about.specialty': '🎯 <strong>Specialty:</strong> Autonomous AI agents, on-premises LLM, distributed architectures',
                'stats.experience': 'Years of experience',
                'stats.technologies': 'Mastered technologies',
                'stats.languages': 'Spoken languages',
                'stats.ai': 'Local AI solutions',
                'skills.title': 'Technical Skills',
                'skills.backend': '🚀 Backend & APIs',
                'skills.frontend': '💎 Frontend & Mobile',
                'skills.ai': '🤖 AI & LLM',
                'skills.devops': '🛠️ DevOps & Cloud',
                'skills.database': '🛠️ Database management',
                'skills.security': '🔒 Security & Architecture',
                'skills.langs': '🌍 Languages',
                'skills.autonomous': 'Autonomous agents',
                'skills.appsec': 'Application security',
                'skills.distributed': 'Distributed architecture',
                'skills.french': '🇫🇷 French (Native)',
                'skills.english': '🇬🇧 English (Pro)',
                'skills.romanian': '🇷🇴 Romanian (Inter)',
                'experience.title': 'Professional Experience',
                'experience.cbms.company': 'CBMS SOFTWARE • Cluj-Napoca, Romania • August 2022 - Present',
                "experience.cbms.task1": "Design and development of interactive web applications using HTML, CSS, JavaScript, and PHP.",
                "experience.cbms.task2": "Creation of custom modules and advanced feature customization based on specific client requirements.",
                "experience.cbms.task3": "Development of remote services in Python to automate business processes and ensure solution scalability.",
                "experience.cbms.task4": "Maintenance and optimization of APIs for real-time data exchange, ensuring performance and reliability.",
                "experience.cbms.task5": "Integration of third-party APIs, including logistics services like Glovo, Tazz, etc., to enhance platform functionality.",
                "experience.cbms.task6": "Deployment and integration of cloud solutions to ensure service availability, security, and scalability.",
                'experience.cyberdev.title': 'FullStack Developer & Founder (Personal project)',
                'experience.cyberdev.company': 'CYBERDEV SOLUTIONS • Cluj-Napoca, Romania • June 2020 - Present',
                "experience.cyberdev.task1": "🏥 Design of a secure and scalable architecture for a pharmaceutical delivery platform (ctmPharma), including order management, an admin dashboard for each project actor (Courier - Client - Admin - Pharmacy), payments, geolocation, and GDPR compliance.",
                "experience.cyberdev.task2": "🤖 Integration of local language models (LLMs) for automatic generation of database schemas, backend code (Python APIs), and React frontends, orchestrated locally using Ollama.",
                "experience.cyberdev.task3": "📊 Development of a complete business management platform (izystock): user, product and inventory management, access rights, real-time stats, and activity logs.",
                "experience.cyberdev.task4": "🔧 Implementation of interconnected microservices handling critical business logic (authentication, data sync, notifications, distributed computing).",
                "experience.cyberdev.task5": "🚀 Deployment of intelligent autonomous agents capable of generating, validating, and correcting backend/frontend code, tests, and documentation, powered by Llama3, Ollama, and CrewAI coordination.",
                'experience.luz.company': 'LUZ TIC • Calavi, Benin • June 2019 - May 2020',
                'experience.luz.task1': 'Backend developer for clinical management system',
                'experience.luz.task2': 'Web application for hostel management',
                'experience.luz.task3': 'Performance optimization and security',
                'experience.guerra.title': 'Web/Desktop Application Developer',
                'experience.guerra.company': 'GUERRA HUB • Parakou, Benin • January - May 2019',
                'experience.guerra.task1': 'Creation of hybrid web/desktop tools',
                'experience.guerra.task2': 'Local activities management',
                'experience.guerra.task3': 'Custom solutions for SMEs',
                'cta.title': 'Ready to collaborate?',
                'cta.subtitle': 'Let\'s talk about your next technological innovation project',
                'cta.email': '📧 Contact Me',
                'footer.education': 'Master in Computer Security • UTCN 2024'
            },
            ro: {
                'nav.about': 'Despre Mine',
                'nav.skills': 'Competențe',
                'nav.experience': 'Experiență',
                'nav.contact': 'Contact',
                'hero.subtitle': 'Dezvoltator FullStack & Inginer AI',
                'hero.description': '🚀 Arhitect de soluții autonome & sisteme distribuite',
                'hero.cta': 'Descoperă profilul meu',
                'about.title': 'Despre Mine',
                'about.text1': 'Inginer în securitatea computerelor și sisteme distribuite cu expertiză profundă în dezvoltarea full-stack și inteligența artificială încorporată.',
                'about.text2': 'Proiectez platforme robuste și sigure care combină cloud, AI local, automatizare și UX modern. Pasiunea mea pentru inovare mă determină să stăpânesc întregul ciclu de proiect, de la design la implementare.',
                'about.specialty': '🎯 <strong>Specialitate:</strong> Agenți autonomi AI, LLM on-premises, arhitecturi distribuite',
                'stats.experience': 'Ani de experiență',
                'stats.technologies': 'Tehnologii stăpânite',
                'stats.languages': 'Limbi vorbite',
                'stats.ai': 'Soluții AI locale',
                'skills.title': 'Competențe Tehnice',
                'skills.backend': '🚀 Backend & API-uri',
                'skills.frontend': '💎 Frontend & Mobile',
                'skills.ai': '🤖 AI & LLM',
                'skills.devops': '🛠️ DevOps & Cloud',
                'skills.database': '🛠️ Managementul bazelor de date',
                'skills.security': '🔒 Securitate & Arhitectură',
                'skills.langs': '🌍 Limbi',
                'skills.autonomous': 'Agenți autonomi',
                'skills.appsec': 'Securitatea aplicațiilor',
                'skills.distributed': 'Arhitectură distribuită',
                'skills.french': '🇫🇷 Franceză (Nativ)',
                'skills.english': '🇬🇧 Engleză (Pro)',
                'skills.romanian': '🇷🇴 Română (Inter)',
                'experience.title': 'Experiența Profesională',
                'experience.cbms.company': 'CBMS SOFTWARE • Cluj-Napoca, România • August 2022 - Prezent',
                "experience.cbms.task1": "Conceperea și dezvoltarea aplicațiilor web interactive utilizând tehnologiile HTML, CSS, JavaScript și PHP.",
                "experience.cbms.task2": "Crearea de module personalizate și adaptarea avansată a funcționalităților conform cerințelor specifice ale clienților.",
                "experience.cbms.task3": "Dezvoltarea serviciilor la distanță în Python pentru automatizarea proceselor de afaceri și asigurarea scalabilității soluțiilor.",
                "experience.cbms.task4": "Mentenanță și optimizare a API-urilor pentru schimbul de date în timp real, asigurând performanță și fiabilitate.",
                "experience.cbms.task5": "Integrarea API-urilor terțe, inclusiv servicii logistice precum Glovo, Tazz etc., pentru a extinde funcționalitățile platformelor.",
                "experience.cbms.task6": "Implementarea și integrarea soluțiilor cloud pentru a asigura disponibilitatea, securitatea și scalabilitatea serviciilor.",
                'experience.cyberdev.title': 'Dezvoltator FullStack & Fondator (Proiect personal)',
                'experience.cyberdev.company': 'CYBERDEV SOLUTIONS • Cluj-Napoca, România • Iunie 2020 - Prezent',
                "experience.cyberdev.task1": "🏥 Proiectarea unei arhitecturi sigure și scalabile pentru o platformă de livrare farmaceutică (ctmPharma), incluzând gestionarea comenzilor, o platformă de administrare pentru fiecare actor implicat (Livrator - Client - Admin - Farmacie), plăți, geolocalizare și conformitate cu GDPR.",
                "experience.cyberdev.task2": "🤖 Integrarea modelelor locale de limbaj (LLM) pentru generarea automată a schemelor de baze de date, codului backend (API Python) și interfețelor React, orchestrate local cu Ollama.",
                "experience.cyberdev.task3": "📊 Dezvoltarea unei platforme complete de gestionare a afacerii: utilizatori, produse, inventar, drepturi de acces, statistici și jurnale de activitate în timp real.",
                "experience.cyberdev.task4": "🔧 Implementarea microserviciilor interconectate pentru gestionarea logicii de afaceri critice (autentificare, sincronizare de date, notificări, calcule distribuite).",
                "experience.cyberdev.task5": "🚀 Implementarea agenților autonomi inteligenți capabili să genereze, verifice și corecteze automat codul (backend/frontend, teste, documentație) prin coordonarea dintre Llama3, Ollama și CrewAI.",
                'experience.luz.company': 'LUZ TIC • Calavi, Benin • Iunie 2019 - Mai 2020',
                'experience.luz.task1': 'Dezvoltator backend pentru sistem de management clinic',
                'experience.luz.task2': 'Aplicație web pentru managementul pensiunii',
                'experience.luz.task3': 'Optimizarea performanței și securității',
                'experience.guerra.title': 'Dezvoltator Aplicații Web/Desktop',
                'experience.guerra.company': 'GUERRA HUB • Parakou, Benin • Ianuarie - Mai 2019',
                'experience.guerra.task1': 'Crearea instrumentelor hibride web/desktop',
                'experience.guerra.task2': 'Managementul activităților locale',
                'experience.guerra.task3': 'Soluții personalizate pentru IMM-uri',
                'cta.title': 'Gata să colaborăm?',
                'cta.subtitle': 'Să vorbim despre următorul tău proiect de inovare tehnologică',
                'cta.email': '📧 Contactează-mă',
                'footer.education': 'Master în Securitatea Computerelor • UTCN 2024'
            }
        };

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
    </script>