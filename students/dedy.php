<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa  : Dedy Nurcahya
// NIM        : 240104017
// Username   : dedy
// Prodi      : D3 Teknik Komputer
// Kampus     : Universitas Duta Bangsa Surakarta
// ============================================================

declare(strict_types=1);

$student = [
    'name'       => 'Dedy Nurcahya',
    'nim'        => '240104017',
    'username'   => 'dedy nurcahya',
    'role'       => 'Mahasiswa Teknik Komputer',
    'prodi'      => 'D3 Teknik Komputer',
    'university' => 'Universitas Duta Bangsa Surakarta',
    'course'     => 'Rekayasa Perangkat Lunak',
    'interest'   => 'Internet of Things (IoT) & Web Development',
    'email'      => '240104017@mhs.udb.ac.id',
    'location'   => 'Surakarta, Jawa Tengah',
];

$pageTitle = 'Portfolio ' . $student['name'] . ' - ' . $student['course'];
$currentYear = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio Interface Rekayasa Perangkat Lunak - <?= htmlspecialchars($student['name']) ?> (NIM: <?= htmlspecialchars($student['nim']) ?>)">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #090e17;
            --surface: #111827;
            --surface-hover: #172238;
            --surface-card: #0f172a;
            --text: #f8fafc;
            --muted: #94a3b8;
            --primary: #2563eb;
            --primary-light: #3b82f6;
            --soft: rgba(37, 99, 235, 0.12);
            --border: #1e293b;
            --border-hover: #334155;
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 20px;
            --shadow: 0 16px 36px -10px rgba(0, 0, 0, 0.5);
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            width: min(1120px, calc(100% - 40px));
            margin-inline: auto;
        }

        /* NAVBAR */
        .topbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(9, 14, 23, 0.85);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border);
        }

        .nav {
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            font-weight: 800;
            letter-spacing: -0.02em;
            font-size: 1.15rem;
            color: var(--text);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .brand span {
            color: var(--primary-light);
        }

        .nav-links {
            display: flex;
            gap: 24px;
            align-items: center;
        }

        .nav-links a {
            color: var(--muted);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.92rem;
            transition: color .2s ease;
        }

        .nav-links a:hover {
            color: var(--text);
        }

        /* HERO */
        .hero {
            padding: 85px 0 65px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.25fr 0.75fr;
            gap: 48px;
            align-items: center;
        }

        .eyebrow {
            color: var(--primary-light);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            font-size: .8rem;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .eyebrow::before {
            content: "";
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: var(--primary-light);
        }

        h1 {
            font-size: clamp(2.4rem, 5.2vw, 4rem);
            line-height: 1.1;
            letter-spacing: -.04em;
            font-weight: 800;
            margin-bottom: 20px;
            text-wrap: balance;
        }

        h1 span {
            color: var(--primary-light);
        }

        .lead {
            color: var(--muted);
            font-size: 1.08rem;
            max-width: 620px;
            line-height: 1.7;
        }

        .actions {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 22px;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all .2s ease;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
            border: 1px solid var(--primary);
            box-shadow: 0 4px 14px rgba(37, 99, 235, 0.35);
        }

        .btn-primary:hover {
            background: var(--primary-light);
            border-color: var(--primary-light);
        }

        .btn-secondary {
            background: var(--surface);
            color: var(--text);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background: var(--surface-hover);
            border-color: var(--border-hover);
        }

        /* PROFILE CARD (NO IMAGES) */
        .profile-card {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 30px;
            box-shadow: var(--shadow);
            position: relative;
        }

        /* PURE CSS MONOGRAM AVATAR */
        .avatar-monogram {
            width: 76px;
            height: 76px;
            border-radius: 18px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            color: #ffffff;
            font-size: 1.8rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            margin-bottom: 20px;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.35);
            border: 2px solid rgba(255, 255, 255, 0.15);
        }

        .profile-card h2 {
            font-size: 1.45rem;
            font-weight: 800;
            margin-bottom: 4px;
        }

        .role {
            color: var(--primary-light);
            font-weight: 600;
            font-size: 0.88rem;
            margin-bottom: 20px;
        }

        .meta {
            display: grid;
            gap: 12px;
            border-top: 1px solid var(--border);
            padding-top: 16px;
        }

        .meta-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
            font-size: 0.88rem;
        }

        .meta-row:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .label {
            color: var(--muted);
            font-size: 0.82rem;
        }

        .value {
            font-weight: 600;
            color: var(--text);
            text-align: right;
        }

        .value.mono {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.85rem;
        }

        /* SECTIONS */
        section {
            padding: 70px 0;
        }

        .section-title {
            margin-bottom: 32px;
        }

        .section-title h2 {
            font-size: clamp(1.8rem, 3.5vw, 2.3rem);
            font-weight: 800;
            letter-spacing: -.03em;
            margin-bottom: 6px;
        }

        .section-title p {
            color: var(--muted);
            font-size: 0.95rem;
        }

        /* ABOUT CARD */
        .about-card {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 32px;
            box-shadow: var(--shadow);
            display: grid;
            gap: 18px;
        }

        .about-card p {
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.75;
        }

        .about-card strong {
            color: var(--text);
        }

        /* SKILLS GRID (NO IMAGES) */
        .skills {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .skill {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            padding: 26px;
            transition: all .25s ease;
        }

        .skill:hover {
            transform: translateY(-4px);
            border-color: var(--border-hover);
            background: var(--surface-hover);
        }

        /* PURE CSS STYLED BADGE (NO IMAGES) */
        .skill-badge {
            width: fit-content;
            padding: 4px 10px;
            border-radius: var(--radius-sm);
            background: var(--soft);
            color: var(--primary-light);
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            margin-bottom: 16px;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .skill h3 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .skill p {
            color: var(--muted);
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* CONTACT CARD */
        .contact {
            background: linear-gradient(145deg, #111827, #090e17);
            border: 1px solid var(--border);
            color: white;
            border-radius: var(--radius-lg);
            padding: 44px;
            text-align: center;
        }

        .contact h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .contact p {
            color: var(--muted);
            max-width: 580px;
            margin: 0 auto 24px;
            font-size: 0.95rem;
        }

        /* FOOTER */
        footer {
            border-top: 1px solid var(--border);
            padding: 36px 0;
            color: var(--muted);
            text-align: center;
            font-size: 0.88rem;
        }

        /* SCROLL REVEAL ANIMATION */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .6s cubic-bezier(0.16, 1, 0.3, 1), transform .6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* RESPONSIVE */
        @media (max-width: 820px) {
            .nav {
                flex-direction: column;
                align-items: flex-start;
                padding: 16px 0;
                gap: 12px;
            }

            .hero-grid,
            .skills {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            h1 {
                font-size: 2.6rem;
            }

            .contact {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<header class="topbar">
    <div class="container nav">
        <a href="#home" class="brand">
            <?= htmlspecialchars(strtoupper($student['username'])) ?><span>.</span>
        </a>

        <nav class="nav-links" aria-label="Navigasi utama">
            <a href="#home">Home</a>
            <a href="#tentang">Tentang</a>
            <a href="#keahlian">Keahlian</a>
            <a href="#kontak">Kontak</a>
        </nav>
    </div>
</header>

<main>

    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <div class="container hero-grid">

            <div class="reveal">
                <div class="eyebrow">
                    <?= htmlspecialchars($student['course']) ?> · <?= htmlspecialchars($student['prodi']) ?>
                </div>

                <h1>
                    Halo, saya
                    <span><?= htmlspecialchars($student['name']) ?>.</span>
                </h1>

                <p class="lead">
                    Saya adalah <?= htmlspecialchars($student['role']) ?> di <?= htmlspecialchars($student['university']) ?> yang mendalami
                    <?= htmlspecialchars($student['interest']) ?>. Saya berfokus pada perancangan sistem perangkat keras terintegrasi dan kode perangkat lunak yang bersih.
                </p>

                <div class="actions">
                    <a class="btn btn-primary" href="#tentang">
                        Tentang Saya
                    </a>

                    <a class="btn btn-secondary" href="#keahlian">
                        Lihat Keahlian
                    </a>
                </div>
            </div>

            <!-- PROFILE CARD (PURE CSS MONOGRAM, ZERO IMAGES) -->
            <aside class="profile-card reveal" id="profil-ringkas">
                <div class="avatar-monogram" aria-label="Inisial Dedy Nurcahya">
                    DN
                </div>

                <h2><?= htmlspecialchars($student['name']) ?></h2>
                <div class="role"><?= htmlspecialchars($student['role']) ?></div>

                <div class="meta">
                    <div class="meta-row">
                        <span class="label">NIM</span>
                        <span class="value mono"><?= htmlspecialchars($student['nim']) ?></span>
                    </div>

                    <div class="meta-row">
                        <span class="label">Username</span>
                        <span class="value mono">@<?= htmlspecialchars($student['username']) ?></span>
                    </div>

                    <div class="meta-row">
                        <span class="label">Program Studi</span>
                        <span class="value"><?= htmlspecialchars($student['prodi']) ?></span>
                    </div>

                    <div class="meta-row">
                        <span class="label">Universitas</span>
                        <span class="value"><?= htmlspecialchars($student['university']) ?></span>
                    </div>

                    <div class="meta-row">
                        <span class="label">Bidang Minat</span>
                        <span class="value"><?= htmlspecialchars($student['interest']) ?></span>
                    </div>

                    <div class="meta-row">
                        <span class="label">Email Resmi</span>
                        <span class="value mono"><?= htmlspecialchars($student['email']) ?></span>
                    </div>
                </div>
            </aside>

        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="tentang">
        <div class="container">

            <div class="section-title reveal">
                <h2>Tentang Saya</h2>
                <p>Profil akademik dan pendekatan pembelajaran rekayasa sistem.</p>
            </div>

            <div class="about-card reveal">
                <p>
                    Saya <strong><?= htmlspecialchars($student['name']) ?></strong>, mahasiswa <strong><?= htmlspecialchars($student['prodi']) ?></strong> di <strong><?= htmlspecialchars($student['university']) ?></strong>. Saya memiliki ketertarikan mendalam dalam integrasi sistem komputer fisik, Internet of Things (IoT), dan pengembangan antarmuka web modern.
                </p>

                <p>
                    Melalui pembelajaran mata kuliah <strong><?= htmlspecialchars($student['course']) ?></strong>, saya mempelajari metodologi pembangunan perangkat lunak secara terstruktur—mulai dari perancangan arsitektur, kepatuhan standar kode bersih, version control terarah dengan Git, hingga penerapan logika backend menggunakan PHP.
                </p>
            </div>

        </div>
    </section>

    <!-- SKILLS SECTION (NO IMAGES, USING CSS MONOGRAM BADGES) -->
    <section id="keahlian">
        <div class="container">

            <div class="section-title reveal">
                <h2>Keahlian & Minat</h2>
                <p>Domain teknologi yang sedang dipelajari dan dikembangkan secara aktif.</p>
            </div>

            <div class="skills">

                <article class="skill reveal">
                    <div class="skill-badge">EMBEDDED // IOT</div>
                    <h3>Internet of Things</h3>
                    <p>
                        Rancang bangun sistem penginderaan sensor mikrokontroler ESP32, komunikasi data serial nirkabel, dan protokol MQTT.
                    </p>
                </article>

                <article class="skill reveal">
                    <div class="skill-badge">BACKEND // PHP</div>
                    <h3>Web Engineering</h3>
                    <p>
                        Membangun aplikasi antarmuka web modular menggunakan PHP 8 modern, semantic HTML5, CSS Grid responsif, dan basis data.
                    </p>
                </article>

                <article class="skill reveal">
                    <div class="skill-badge">VCS // GITHUB</div>
                    <h3>Git & Version Control</h3>
                    <p>
                        Pemanfaatan Git untuk version control terstruktur, branching alur kerja tugas, commit convention, dan repositori GitHub.
                    </p>
                </article>

            </div>

        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="kontak">
        <div class="container">

            <div class="contact reveal">
                <h2>Terima kasih sudah berkunjung.</h2>
                <p>
                    Halaman antarmuka ini dikerjakan oleh <?= htmlspecialchars($student['name']) ?> (NIM: <?= htmlspecialchars($student['nim']) ?>) untuk memenuhi tugas mata kuliah <?= htmlspecialchars($student['course']) ?>.
                </p>

                <a class="btn btn-primary" href="#home" onclick="scrollToTop(event)">
                    Kembali ke Atas
                </a>
            </div>

        </div>
    </section>

</main>

<footer>
    <div class="container">
        &copy; <?= htmlspecialchars((string)$currentYear) ?> <?= htmlspecialchars($student['name']) ?> · NIM <?= htmlspecialchars($student['nim']) ?> · <?= htmlspecialchars($student['prodi']) ?> · <?= htmlspecialchars($student['university']) ?>
    </div>
</footer>

<script>
    // Animasi scroll reveal saat elemen masuk ke viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));

    // Navigasi kembali ke atas dengan smooth scroll
    function scrollToTop(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

</body>
</html>