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

$pageTitle = 'Profil Mahasiswa - ' . $student['name'];
$currentYear = date('Y');

$skills = [
    ['icon' => '💻', 'name' => 'Web Development', 'desc' => 'HTML, CSS, PHP, dan JavaScript'],
    ['icon' => '🖥️', 'name' => 'Computer', 'desc' => 'Perangkat keras dan sistem komputer'],
    ['icon' => '🌐', 'name' => 'Networking', 'desc' => 'Dasar jaringan dan konfigurasi'],
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
    <meta name="description" content="Profil mahasiswa <?= htmlspecialchars($student['name']) ?>">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <style>
        :root {
            --bg: #f6f8fc;
            --surface: #ffffff;
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --text: #172033;
            --muted: #68738a;
            --border: #e4e8f0;
            --soft: #eff5ff;
            --radius: 20px;
            --shadow: 0 12px 35px rgba(23, 32, 51, .08);
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
            font-family: Inter, ui-sans-serif, system-ui, -apple-system,
                BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1100px, calc(100% - 32px));
            margin: auto;
        }

        /* NAVBAR */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255,255,255,.92);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            font-size: 1.15rem;
            font-weight: 850;
            letter-spacing: -.03em;
        }

        .logo span {
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .nav-links a {
            color: var(--muted);
            font-weight: 650;
            transition: .2s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* HERO */
        .hero {
            padding: 90px 0 70px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.25fr .75fr;
            gap: 55px;
            align-items: center;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--soft);
            color: var(--primary);
            border: 1px solid #d8e5ff;
            padding: 8px 14px;
            border-radius: 999px;
            font-size: .85rem;
            font-weight: 750;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.8rem);
            line-height: 1.02;
            letter-spacing: -.06em;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero-description {
            color: var(--muted);
            max-width: 650px;
            font-size: 1.08rem;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 28px;
            flex-wrap: wrap;
        }

        .button {
            padding: 12px 19px;
            border-radius: 12px;
            font-weight: 750;
            transition: .2s;
            border: 1px solid var(--border);
        }

        .button-primary {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .button-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .button-secondary {
            background: white;
        }

        .button-secondary:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        /* PROFILE CARD */
        .profile-card {
            background: var(--surface);
            padding: 30px;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .avatar {
            width: 92px;
            height: 92px;
            border-radius: 25px;
            display: grid;
            place-items: center;
            background: var(--primary);
            color: white;
            font-size: 2.2rem;
            font-weight: 850;
            margin-bottom: 20px;
        }

        .profile-card h2 {
            margin-bottom: 4px;
            font-size: 1.5rem;
        }

        .profile-role {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 22px;
        }

        .profile-info {
            display: grid;
            gap: 12px;
        }

        .info-item {
            padding: 12px 0;
            border-bottom: 1px solid var(--border);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            display: block;
            color: var(--muted);
            font-size: .78rem;
            margin-bottom: 2px;
        }

        .info-value {
            font-weight: 700;
            word-break: break-word;
        }

        /* SECTION */
        section {
            padding: 70px 0;
        }

        .section-heading {
            max-width: 650px;
            margin-bottom: 30px;
        }

        .section-heading small {
            color: var(--primary);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .section-heading h2 {
            font-size: clamp(1.8rem, 4vw, 2.7rem);
            letter-spacing: -.04em;
            margin: 7px 0;
        }

        .section-heading p {
            color: var(--muted);
        }

        /* SKILLS */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .skill-card {
            background: white;
            border: 1px solid var(--border);
            padding: 25px;
            border-radius: var(--radius);
            transition: .25s;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
            border-color: #cddcff;
        }

        .skill-icon {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .skill-card h3 {
            margin-bottom: 7px;
        }

        .skill-card p {
            color: var(--muted);
            font-size: .95rem;
        }

        /* PROJECTS */
        .projects {
            display: grid;
            gap: 15px;
        }

        .project {
            background: white;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 23px;
            display: grid;
            grid-template-columns: 70px 1fr;
            gap: 20px;
            align-items: start;
            transition: .2s;
        }

        .project:hover {
            box-shadow: var(--shadow);
        }

        .project-number {
            color: var(--primary);
            font-weight: 850;
            font-size: 1.2rem;
        }

        .project h3 {
            margin-bottom: 5px;
        }

        .project p {
            color: var(--muted);
        }

        /* ABOUT */
        .about-box {
            background: var(--primary);
            color: white;
            border-radius: 25px;
            padding: 38px;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 30px;
            align-items: center;
        }

        .about-box p {
            opacity: .88;
            margin-top: 8px;
            max-width: 700px;
        }

        .about-box button {
            border: none;
            background: white;
            color: var(--primary);
            padding: 12px 18px;
            border-radius: 12px;
            font-weight: 800;
            cursor: pointer;
        }

        /* FOOTER */
        footer {
            padding: 35px 0;
            color: var(--muted);
            text-align: center;
            border-top: 1px solid var(--border);
        }

        /* MOBILE */
        @media (max-width: 780px) {
            .nav-inner {
                flex-direction: column;
                padding: 15px 0;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                padding-top: 55px;
            }

            .hero-grid,
            .skills-grid,
            .about-box {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 2.7rem;
            }

            .profile-card {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

<header class="navbar">
    <div class="container nav-inner">
        <a href="#home" class="logo">RPL<span>/</span><?= htmlspecialchars($student['username']) ?></a>

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
                <div class="badge">✦ Mahasiswa Teknik Komputer</div>

                <h1>
                    Halo, saya <span><?= htmlspecialchars($student['name']) ?></span>
                </h1>

                <p class="hero-description">
                    Selamat datang di halaman interface web saya.
                    Website ini merupakan bagian dari tugas mata kuliah
                    Rekayasa Perangkat Lunak yang berfokus pada desain
                    antarmuka yang sederhana, responsif, dan mudah digunakan.
                </p>

                <div class="buttons">
                    <a href="#projects" class="button button-primary">
                        Lihat Proyek
                    </a>

                    <a href="#about" class="button button-secondary">
                        Tentang Saya
                    </a>
                </div>
            </div>

            <aside class="profile-card">

                <div class="avatar">
                    <?= strtoupper(substr($student['username'], 0, 1)) ?>
                </div>

                <h2><?= htmlspecialchars($student['name']) ?></h2>

                <div class="profile-role">
                    Mahasiswa
                </div>

                <div class="profile-info">

                    <div class="info-item">
                        <span class="info-label">NIM</span>
                        <span class="info-value">
                            <?= htmlspecialchars($student['nim']) ?>
                        </span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Program Studi</span>
                        <span class="info-value">
                            <?= htmlspecialchars($student['major']) ?>
                        </span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Universitas</span>
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
                <small>Keahlian</small>
                <h2>Bidang yang saya pelajari</h2>
                <p>
                    Beberapa bidang yang berkaitan dengan pembelajaran
                    saya di program studi Teknik Komputer.
                </p>
            </div>

            <div class="skills-grid">

                <?php foreach ($skills as $skill): ?>

                    <article class="skill-card">

                        <div class="skill-icon">
                            <?= $skill['icon'] ?>
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

    <!-- PROJECT -->
    <section id="projects">
        <div class="container">

            <div class="section-heading">
                <small>Portfolio</small>
                <h2>Contoh proyek</h2>
                <p>
                    Beberapa contoh area proyek yang dapat dikembangkan
                    menggunakan teknologi yang dipelajari.
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
                    <h2>Tentang tugas ini</h2>

                    <p>
                        Interface ini dibuat sebagai implementasi konsep
                        Rekayasa Perangkat Lunak, khususnya dalam perancangan
                        tampilan web yang terstruktur, responsif, dan
                        memperhatikan pengalaman pengguna.
                    </p>
                </div>

                <button onclick="showMessage()">
                    Klik Saya
                </button>

            </div>

        </div>
    </section>

</main>

<footer>
    <div class="container">
        &copy; <?= htmlspecialchars((string)$currentYear) ?>
        <?= htmlspecialchars($student['name']) ?>
        · Rekayasa Perangkat Lunak
    </div>
</footer>

<script>
    function showMessage() {
        alert(
            "Halo! Terima kasih sudah mengunjungi interface web Bani."
        );
    }
</script>

</body>
</html>