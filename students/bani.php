<?php
declare(strict_types=1);

$student = [
    'name' => 'Bani Ismoyo',
    'nim' => '240104003',
    'username' => 'bani',
    'major' => 'D3 Teknik Komputer',
    'faculty' => 'Fakultas Ilmu Komputer',
    'university' => 'Universitas Duta Bangsa Surakarta',
];

$pageTitle = 'Bani Ismoyo | RPL Racing Profile';
$currentYear = date('Y');

$skills = [
    [
        'icon' => '01',
        'name' => 'Web Development',
        'desc' => 'HTML, CSS, PHP, dan JavaScript untuk membangun interface web.'
    ],
    [
        'icon' => '02',
        'name' => 'Computer',
        'desc' => 'Perangkat keras, sistem komputer, troubleshooting, dan konfigurasi.'
    ],
    [
        'icon' => '03',
        'name' => 'Networking',
        'desc' => 'Dasar jaringan, konfigurasi perangkat, dan konektivitas.'
    ],
];

$projects = [
    [
        'number' => '01',
        'title' => 'Website Interface',
        'desc' => 'Perancangan antarmuka web yang sederhana, responsif, dan mudah digunakan.'
    ],
    [
        'number' => '02',
        'title' => 'Sistem Informasi',
        'desc' => 'Pengembangan sistem berbasis web untuk membantu pengelolaan informasi.'
    ],
    [
        'number' => '03',
        'title' => 'Project RPL',
        'desc' => 'Implementasi konsep Rekayasa Perangkat Lunak dalam pengembangan aplikasi.'
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Profil mahasiswa <?= htmlspecialchars($student['name']) ?>"
    >

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <style>
        :root {
            --red: #e10600;
            --red-dark: #a90000;
            --red-light: #ff2b25;
            --black: #080808;
            --dark: #101010;
            --dark-2: #161616;
            --dark-3: #202020;
            --white: #f5f5f5;
            --gray: #a5a5a5;
            --border: #292929;
            --radius: 16px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family:
                Inter,
                ui-sans-serif,
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            background: var(--black);
            color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: .035;

            background-image:
                linear-gradient(
                    45deg,
                    #fff 25%,
                    transparent 25%
                ),
                linear-gradient(
                    -45deg,
                    #fff 25%,
                    transparent 25%
                ),
                linear-gradient(
                    45deg,
                    transparent 75%,
                    #fff 75%
                ),
                linear-gradient(
                    -45deg,
                    transparent 75%,
                    #fff 75%
                );

            background-size: 8px 8px;
            background-position:
                0 0,
                0 4px,
                4px -4px,
                -4px 0;
            z-index: 999;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1120px, calc(100% - 36px));
            margin: auto;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;

            background: rgba(8, 8, 8, .94);
            backdrop-filter: blur(16px);

            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 72px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 25px;
        }

        .logo {
            font-size: 1.15rem;
            font-weight: 900;
            letter-spacing: .04em;
            text-transform: uppercase;
        }

        .logo-mark {
            display: inline-block;
            margin-right: 8px;

            color: var(--red);
            font-weight: 1000;
        }

        .logo span {
            color: var(--red);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 26px;
        }

        .nav-links a {
            position: relative;

            color: #bdbdbd;
            font-size: .88rem;
            font-weight: 750;
            text-transform: uppercase;
            letter-spacing: .06em;

            transition: .2s;
        }

        .nav-links a::after {
            content: "";

            position: absolute;
            left: 0;
            bottom: -9px;

            width: 0;
            height: 2px;

            background: var(--red);

            transition: .2s;
        }

        .nav-links a:hover {
            color: white;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;
            min-height: 720px;

            display: flex;
            align-items: center;

            padding: 90px 0 80px;

            background:
                radial-gradient(
                    circle at 75% 40%,
                    rgba(225, 6, 0, .20),
                    transparent 34%
                ),
                linear-gradient(
                    135deg,
                    #080808 0%,
                    #111 55%,
                    #080808 100%
                );

            overflow: hidden;
        }

        .hero::before {
            content: "";

            position: absolute;
            right: -150px;
            top: 100px;

            width: 650px;
            height: 650px;

            border: 1px solid rgba(225, 6, 0, .25);
            border-radius: 50%;

            box-shadow:
                0 0 0 50px rgba(225, 6, 0, .025),
                0 0 0 100px rgba(225, 6, 0, .018);
        }

        .hero::after {
            content: "";

            position: absolute;
            left: -10%;
            bottom: 0;

            width: 120%;
            height: 5px;

            background:
                repeating-linear-gradient(
                    90deg,
                    var(--red) 0 80px,
                    #111 80px 160px
                );
        }

        .hero-grid {
            position: relative;
            z-index: 2;

            display: grid;
            grid-template-columns: 1.2fr .8fr;

            gap: 70px;
            align-items: center;
        }

        .race-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            padding: 7px 13px;

            border-left: 4px solid var(--red);
            background: #151515;

            color: #d7d7d7;

            font-size: .78rem;
            font-weight: 850;
            letter-spacing: .12em;
            text-transform: uppercase;

            margin-bottom: 22px;
        }

        .race-dot {
            width: 8px;
            height: 8px;

            border-radius: 50%;
            background: var(--red);

            box-shadow: 0 0 12px rgba(225, 6, 0, .9);
        }

        .hero h1 {
            max-width: 800px;

            font-size: clamp(3rem, 7vw, 6.3rem);
            line-height: .92;
            letter-spacing: -.065em;

            text-transform: uppercase;

            margin-bottom: 25px;
        }

        .hero h1 .red {
            display: block;
            color: var(--red);
        }

        .hero-description {
            max-width: 650px;

            color: #a9a9a9;
            font-size: 1.05rem;
        }

        .hero-description strong {
            color: white;
        }

        .buttons {
            display: flex;
            gap: 12px;

            flex-wrap: wrap;

            margin-top: 32px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-height: 48px;

            padding: 12px 21px;

            border-radius: 8px;

            font-size: .85rem;
            font-weight: 850;

            text-transform: uppercase;
            letter-spacing: .05em;

            transition: .2s;
        }

        .button-primary {
            background: var(--red);
            color: white;

            box-shadow:
                0 8px 25px rgba(225, 6, 0, .2);
        }

        .button-primary:hover {
            background: var(--red-light);
            transform: translateY(-3px);
        }

        .button-secondary {
            background: transparent;
            color: white;

            border: 1px solid #444;
        }

        .button-secondary:hover {
            border-color: var(--red);
            color: var(--red);
        }

        /* =========================
           RACE PROFILE CARD
        ========================= */

        .profile-card {
            position: relative;

            background:
                linear-gradient(
                    145deg,
                    #1b1b1b,
                    #0d0d0d
                );

            border: 1px solid #303030;
            border-top: 4px solid var(--red);

            padding: 30px;

            border-radius: var(--radius);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, .55);

            overflow: hidden;
        }

        .profile-card::before {
            content: "PROFILE";

            position: absolute;
            top: 20px;
            right: 25px;

            color: #333;

            font-size: .7rem;
            font-weight: 900;
            letter-spacing: .18em;
        }

        .avatar {
            width: 90px;
            height: 90px;

            display: grid;
            place-items: center;

            background:
                linear-gradient(
                    135deg,
                    var(--red),
                    var(--red-dark)
                );

            color: white;

            font-size: 2.2rem;
            font-weight: 950;

            border-radius: 12px;

            margin-bottom: 22px;

            box-shadow:
                0 12px 30px rgba(225, 6, 0, .2);
        }

        .profile-card h2 {
            font-size: 1.6rem;
            text-transform: uppercase;
            letter-spacing: -.02em;
        }

        .profile-role {
            color: var(--red);

            font-size: .8rem;
            font-weight: 850;

            text-transform: uppercase;
            letter-spacing: .1em;

            margin-top: 3px;
            margin-bottom: 25px;
        }

        .profile-info {
            display: grid;
            gap: 0;
        }

        .info-item {
            padding: 13px 0;

            border-bottom: 1px solid #292929;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            display: block;

            color: #777;

            font-size: .7rem;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: .1em;
        }

        .info-value {
            display: block;

            color: #ededed;

            font-size: .91rem;
            font-weight: 700;

            margin-top: 3px;

            word-break: break-word;
        }

        /* =========================
           GENERAL SECTIONS
        ========================= */

        section:not(.hero) {
            padding: 90px 0;
        }

        section:nth-child(even) {
            background: #0d0d0d;
        }

        .section-heading {
            max-width: 720px;
            margin-bottom: 35px;
        }

        .section-heading small {
            color: var(--red);

            font-size: .75rem;
            font-weight: 900;

            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .section-heading h2 {
            margin: 8px 0;

            font-size: clamp(2rem, 4vw, 3.1rem);
            line-height: 1;

            letter-spacing: -.05em;
            text-transform: uppercase;
        }

        .section-heading p {
            color: #929292;
        }

        /* =========================
           SKILLS
        ========================= */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .skill-card {
            position: relative;

            padding: 28px;

            background: #111;

            border: 1px solid var(--border);
            border-radius: var(--radius);

            overflow: hidden;

            transition: .25s;
        }

        .skill-card::before {
            content: "";

            position: absolute;
            top: 0;
            left: 0;

            width: 100%;
            height: 3px;

            background: var(--red);

            transform: scaleX(0);
            transform-origin: left;

            transition: .25s;
        }

        .skill-card:hover {
            transform: translateY(-6px);

            border-color: #3d3d3d;

            box-shadow:
                0 20px 45px rgba(0, 0, 0, .35);
        }

        .skill-card:hover::before {
            transform: scaleX(1);
        }

        .skill-number {
            color: var(--red);

            font-size: .78rem;
            font-weight: 900;

            letter-spacing: .1em;
        }

        .skill-card h3 {
            margin: 28px 0 8px;

            font-size: 1.15rem;

            text-transform: uppercase;
        }

        .skill-card p {
            color: #888;
            font-size: .92rem;
        }

        /* =========================
           PROJECTS
        ========================= */

        .projects {
            display: grid;
            gap: 14px;
        }

        .project {
            position: relative;

            display: grid;
            grid-template-columns: 80px 1fr auto;

            align-items: center;
            gap: 25px;

            padding: 25px 28px;

            background:
                linear-gradient(
                    90deg,
                    #151515,
                    #101010
                );

            border: 1px solid var(--border);
            border-radius: var(--radius);

            transition: .25s;
        }

        .project:hover {
            border-color: #454545;
            transform: translateX(5px);
        }

        .project-number {
            color: var(--red);

            font-size: 1.7rem;
            font-weight: 950;

            font-style: italic;
        }

        .project h3 {
            margin-bottom: 4px;

            font-size: 1.05rem;
            text-transform: uppercase;
        }

        .project p {
            color: #858585;
            font-size: .9rem;
        }

        .project-tag {
            padding: 7px 10px;

            border: 1px solid #333;
            border-radius: 6px;

            color: #999;

            font-size: .68rem;
            font-weight: 850;

            text-transform: uppercase;
            letter-spacing: .08em;
        }

        /* =========================
           ABOUT
        ========================= */

        .about-box {
            position: relative;

            display: grid;
            grid-template-columns: 1fr auto;

            gap: 35px;
            align-items: center;

            padding: 45px;

            background:
                linear-gradient(
                    125deg,
                    #1b1b1b,
                    #0d0d0d
                );

            border: 1px solid #303030;
            border-left: 5px solid var(--red);

            border-radius: var(--radius);

            overflow: hidden;
        }

        .about-box::after {
            content: "RPL";

            position: absolute;
            right: 35px;
            bottom: -55px;

            color: rgba(255, 255, 255, .025);

            font-size: 9rem;
            font-weight: 1000;
            font-style: italic;
        }

        .about-box h2 {
            position: relative;
            z-index: 2;

            font-size: 1.8rem;
            text-transform: uppercase;
        }

        .about-box p {
            position: relative;
            z-index: 2;

            max-width: 720px;

            color: #929292;

            margin-top: 8px;
        }

        .about-box button {
            position: relative;
            z-index: 3;

            border: 1px solid var(--red);

            background: transparent;
            color: white;

            padding: 13px 20px;

            border-radius: 7px;

            font-weight: 850;

            text-transform: uppercase;
            letter-spacing: .06em;

            cursor: pointer;

            transition: .2s;
        }

        .about-box button:hover {
            background: var(--red);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            padding: 30px 0;

            background: #050505;

            border-top: 1px solid #202020;

            color: #666;

            text-align: center;

            font-size: .82rem;
        }

        footer strong {
            color: #aaa;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 820px) {

            .nav-inner {
                min-height: auto;

                flex-direction: column;

                padding: 16px 0;
            }

            .nav-links {
                gap: 17px;

                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                min-height: auto;
                padding: 70px 0;
            }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 45px;
            }

            .hero h1 {
                font-size: clamp(3rem, 13vw, 5rem);
            }

            .profile-card {
                max-width: 600px;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .project {
                grid-template-columns: 55px 1fr;
            }

            .project-tag {
                display: none;
            }

            .about-box {
                grid-template-columns: 1fr;
                padding: 32px;
            }
        }

        @media (max-width: 500px) {

            .container {
                width: min(100% - 24px, 1120px);
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: .72rem;
            }

            .hero {
                padding-top: 55px;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero-description {
                font-size: .95rem;
            }

            .profile-card {
                padding: 23px;
            }

            section:not(.hero) {
                padding: 65px 0;
            }

            .project {
                padding: 20px;
                gap: 15px;
            }

            .project-number {
                font-size: 1.35rem;
            }
        }
    </style>
</head>

<body>

<header class="navbar">
    <div class="container nav-inner">

        <a href="#home" class="logo">
            <span class="logo-mark">◆</span>
            RPL<span>/</span><?= htmlspecialchars($student['username']) ?>
        </a>

        <nav class="nav-links">
            <a href="#home">Home</a>
            <a href="#skills">Keahlian</a>
            <a href="#projects">Proyek</a>
            <a href="#about">Tentang</a>
        </nav>

    </div>
</header>

<main>

    <!-- HERO -->

    <section class="hero" id="home">

        <div class="container hero-grid">

            <div>

                <div class="race-label">
                    <span class="race-dot"></span>
                    Student Racing Profile
                </div>

                <h1>
                    Bani
                    <span class="red">Ismoyo</span>
                </h1>

                <p class="hero-description">
                    Mahasiswa <strong>D3 Teknik Komputer</strong> yang
                    mempelajari pengembangan web, komputer, dan networking
                    melalui berbagai project Rekayasa Perangkat Lunak.
                </p>

                <div class="buttons">

                    <a
                        href="#projects"
                        class="button button-primary"
                    >
                        Lihat Proyek
                    </a>

                    <a
                        href="#about"
                        class="button button-secondary"
                    >
                        Tentang Saya
                    </a>

                </div>

            </div>

            <aside class="profile-card">

                <div class="avatar">
                    <?= strtoupper(substr($student['username'], 0, 1)) ?>
                </div>

                <h2>
                    <?= htmlspecialchars($student['name']) ?>
                </h2>

                <div class="profile-role">
                    Computer Engineering Student
                </div>

                <div class="profile-info">

                    <div class="info-item">
                        <span class="info-label">Driver ID / NIM</span>

                        <span class="info-value">
                            <?= htmlspecialchars($student['nim']) ?>
                        </span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Program</span>

                        <span class="info-value">
                            <?= htmlspecialchars($student['major']) ?>
                        </span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Faculty</span>

                        <span class="info-value">
                            <?= htmlspecialchars($student['faculty']) ?>
                        </span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">University</span>

                        <span class="info-value">
                            <?= htmlspecialchars($student['university']) ?>
                        </span>
                    </div>

                </div>

            </aside>

        </div>

    </section>


    <!-- SKILLS -->

    <section id="skills">

        <div class="container">

            <div class="section-heading">

                <small>01 / Skill Set</small>

                <h2>
                    Racing the Technology
                </h2>

                <p>
                    Beberapa bidang teknologi yang sedang dipelajari
                    dalam perjalanan sebagai mahasiswa Teknik Komputer.
                </p>

            </div>


            <div class="skills-grid">

                <?php foreach ($skills as $skill): ?>

                    <article class="skill-card">

                        <div class="skill-number">
                            <?= htmlspecialchars($skill['icon']) ?>
                        </div>

                        <h3>
                            <?= htmlspecialchars($skill['name']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($skill['desc']) ?>
                        </p>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- PROJECTS -->

    <section id="projects">

        <div class="container">

            <div class="section-heading">

                <small>02 / Portfolio</small>

                <h2>
                    Project Garage
                </h2>

                <p>
                    Kumpulan area project yang berkaitan dengan
                    pembelajaran Rekayasa Perangkat Lunak.
                </p>

            </div>


            <div class="projects">

                <?php foreach ($projects as $project): ?>

                    <article class="project">

                        <div class="project-number">
                            <?= htmlspecialchars($project['number']) ?>
                        </div>

                        <div>

                            <h3>
                                <?= htmlspecialchars($project['title']) ?>
                            </h3>

                            <p>
                                <?= htmlspecialchars($project['desc']) ?>
                            </p>

                        </div>

                        <div class="project-tag">
                            RPL Project
                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- ABOUT -->

    <section id="about">

        <div class="container">

            <div class="about-box">

                <div>

                    <h2>
                        About The Project
                    </h2>

                    <p>
                        Interface ini dibuat sebagai implementasi konsep
                        Rekayasa Perangkat Lunak dengan pendekatan desain
                        bertema motorsport. Tampilan dirancang agar tetap
                        terstruktur, responsif, dan mudah digunakan.
                    </p>

                </div>

                <button onclick="showMessage()">
                    Start Engine
                </button>

            </div>

        </div>

    </section>

</main>


<footer>

    <div class="container">

        &copy;
        <?= htmlspecialchars((string)$currentYear) ?>

        <strong>
            <?= htmlspecialchars($student['name']) ?>
        </strong>

        · Rekayasa Perangkat Lunak

    </div>

</footer>


<script>

    function showMessage() {

        alert(
            "Welcome to Bani Ismoyo's RPL Racing Profile!"
        );

    }

</script>

</body>
</html>