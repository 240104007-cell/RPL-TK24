<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Novi Ardianto
// NIM       : 240104012
// Username  : novi
//
// Ketentuan: seluruh HTML, CSS, JavaScript, dan PHP berada
//            di satu file students/novi.php
// ============================================================

declare(strict_types=1);

$student = [
    'name' => 'Novi Ardianto',
    'nim' => '240104012',
    'username' => 'novi',
];

$pageTitle = 'Novi Ardianto | Computer Technology Portfolio';
$currentYear = date('Y');

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio Novi Ardianto, mahasiswa Teknik Komputer yang tertarik pada jaringan, web development, dan sistem komputer.">
    <meta name="theme-color" content="#07111f">
    <title><?= e($pageTitle) ?></title>

    <style>
        /* ===================== RESET & THEME ===================== */
        :root {
            --bg: #07111f;
            --bg-soft: #0b1728;
            --surface: #101f33;
            --surface-light: #14263d;
            --text: #f3f7fc;
            --muted: #a6b5c9;
            --primary: #22d3ee;
            --primary-dark: #0891b2;
            --accent: #818cf8;
            --border: rgba(148, 163, 184, .18);
            --radius: 22px;
            --shadow: 0 22px 60px rgba(0, 0, 0, .25);
            --max-width: 1120px;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; scroll-padding-top: 90px; }
        body {
            margin: 0;
            color: var(--text);
            background:
                radial-gradient(ellipse at 15% 0%, rgba(34, 211, 238, .10), transparent 38%),
                radial-gradient(ellipse at 90% 35%, rgba(129, 140, 248, .09), transparent 35%),
                var(--bg);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.7;
            overflow-x: hidden;
        }
        a { color: inherit; }
        button, a { -webkit-tap-highlight-color: transparent; }
        .container { width: min(var(--max-width), calc(100% - 40px)); margin-inline: auto; }
        .section { padding: 90px 0; }
        .section-head { max-width: 680px; margin-bottom: 38px; }
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--primary);
            font-size: .78rem;
            font-weight: 800;
            letter-spacing: .14em;
            text-transform: uppercase;
        }
        .eyebrow::before {
            content: "";
            width: 25px;
            height: 2px;
            background: var(--primary);
            border-radius: 5px;
        }
        h1, h2, h3, p { margin-top: 0; }
        h1 {
            margin-bottom: 22px;
            font-size: clamp(2.7rem, 6.7vw, 5.4rem);
            line-height: 1.04;
            letter-spacing: -.065em;
        }
        h2 {
            margin: 12px 0 14px;
            font-size: clamp(2rem, 4vw, 3.1rem);
            line-height: 1.15;
            letter-spacing: -.045em;
        }
        h3 { line-height: 1.3; }
        .gradient-text {
            color: var(--primary);
            background: linear-gradient(100deg, #22d3ee, #818cf8);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .muted { color: var(--muted); }
        .lead { max-width: 650px; color: var(--muted); font-size: 1.08rem; }
        .section-description { color: var(--muted); max-width: 620px; margin-bottom: 0; }

        /* ===================== NAVBAR ===================== */
        .topbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(7, 17, 31, .82);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(18px);
        }
        .nav {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }
        .brand {
            display: inline-flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            font-weight: 850;
            letter-spacing: -.03em;
            white-space: nowrap;
        }
        .brand-mark {
            display: grid;
            place-items: center;
            width: 40px;
            height: 40px;
            border-radius: 13px;
            color: #06111d;
            background: linear-gradient(135deg, var(--primary), #818cf8);
            font-weight: 950;
        }
        .nav-links { display: flex; align-items: center; gap: 27px; }
        .nav-links a {
            color: var(--muted);
            text-decoration: none;
            font-size: .92rem;
            font-weight: 650;
            transition: color .2s ease;
        }
        .nav-links a:hover, .nav-links a.active { color: var(--primary); }
        .nav-cta {
            padding: 10px 16px;
            border: 1px solid rgba(34, 211, 238, .4);
            border-radius: 12px;
            color: var(--primary) !important;
        }
        .menu-toggle {
            display: none;
            width: 44px;
            height: 44px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: var(--surface);
            color: var(--text);
            font-size: 1.35rem;
            cursor: pointer;
        }

        /* ===================== HERO ===================== */
        .hero { padding: 95px 0 70px; min-height: 650px; display: flex; align-items: center; }
        .hero-grid { display: grid; grid-template-columns: 1.2fr .8fr; align-items: center; gap: 60px; }
        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 8px 13px;
            margin-bottom: 25px;
            border: 1px solid var(--border);
            border-radius: 999px;
            background: rgba(16, 31, 51, .72);
            color: var(--muted);
            font-size: .84rem;
        }
        .status-dot {
            width: 8px;
            height: 8px;
            background: #4ade80;
            border-radius: 50%;
            box-shadow: 0 0 14px rgba(74, 222, 128, .8);
        }
        .hero h1 .name { display: block; }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 13px; margin-top: 30px; }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 48px;
            padding: 12px 19px;
            border: 1px solid var(--border);
            border-radius: 13px;
            text-decoration: none;
            font-weight: 750;
            transition: transform .2s ease, background .2s ease, border-color .2s ease;
            cursor: pointer;
        }
        .btn:hover { transform: translateY(-3px); }
        .btn-primary { color: #04121e; background: var(--primary); border-color: var(--primary); }
        .btn-primary:hover { background: #67e8f9; }
        .btn-ghost { color: var(--text); background: rgba(16, 31, 51, .7); }
        .btn-ghost:hover { border-color: var(--primary); }
        .hero-note { margin-top: 25px; color: var(--muted); font-size: .88rem; }
        .hero-visual { position: relative; display: grid; place-items: center; min-height: 420px; }
        .orbit {
            position: absolute;
            width: min(390px, 100%);
            aspect-ratio: 1;
            border: 1px solid rgba(34, 211, 238, .2);
            border-radius: 50%;
            animation: rotate 28s linear infinite;
        }
        .orbit::before, .orbit::after {
            content: "";
            position: absolute;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: var(--primary);
            box-shadow: 0 0 25px var(--primary);
        }
        .orbit::before { top: 13%; left: 18%; }
        .orbit::after { bottom: 14%; right: 12%; background: var(--accent); box-shadow: 0 0 25px var(--accent); }
        .profile-art {
            position: relative;
            display: grid;
            place-items: center;
            width: 265px;
            height: 300px;
            border: 1px solid rgba(34, 211, 238, .3);
            border-radius: 36px;
            background: linear-gradient(145deg, rgba(34, 211, 238, .15), rgba(129, 140, 248, .08) 55%, rgba(16, 31, 51, .9));
            box-shadow: 0 0 80px rgba(34, 211, 238, .12), var(--shadow);
            transform: rotate(3deg);
        }
        .profile-art::before {
            content: "";
            position: absolute;
            inset: 12px;
            border: 1px dashed rgba(148, 163, 184, .25);
            border-radius: 27px;
        }
        .avatar-big {
            display: grid;
            place-items: center;
            width: 150px;
            height: 150px;
            border: 1px solid rgba(255,255,255,.25);
            border-radius: 42px;
            background: linear-gradient(135deg, #22d3ee, #6366f1);
            color: #06111d;
            font-size: 5rem;
            font-weight: 950;
            box-shadow: 0 18px 55px rgba(34, 211, 238, .2);
        }
        .floating-chip {
            position: absolute;
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: 13px;
            background: #101f33;
            color: var(--text);
            font-size: .82rem;
            font-weight: 750;
            box-shadow: var(--shadow);
        }
        .chip-one { top: 14%; right: -2%; }
        .chip-two { bottom: 13%; left: -3%; }
        .scroll-cue { display: inline-flex; align-items: center; gap: 10px; color: var(--muted); font-size: .85rem; margin-top: 42px; }
        .scroll-cue span { color: var(--primary); font-size: 1.2rem; }

        /* ===================== PROFILE / STATS ===================== */
        .profile-strip {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: var(--border);
        }
        .profile-item { padding: 25px 28px; background: var(--surface); }
        .profile-label { display: block; margin-bottom: 5px; color: var(--muted); font-size: .82rem; }
        .profile-value { font-weight: 800; overflow-wrap: anywhere; }

        /* ===================== SKILLS ===================== */
        .skills-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .skill-card {
            position: relative;
            padding: 28px;
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: linear-gradient(145deg, rgba(16, 31, 51, .95), rgba(11, 23, 40, .95));
            transition: transform .25s ease, border-color .25s ease;
        }
        .skill-card:hover { transform: translateY(-7px); border-color: rgba(34, 211, 238, .55); }
        .skill-icon {
            display: grid;
            place-items: center;
            width: 54px;
            height: 54px;
            margin-bottom: 22px;
            border: 1px solid rgba(34, 211, 238, .2);
            border-radius: 16px;
            background: rgba(34, 211, 238, .09);
            color: var(--primary);
            font-size: 1.5rem;
        }
        .skill-card h3 { margin-bottom: 10px; font-size: 1.15rem; }
        .skill-card p { margin-bottom: 0; color: var(--muted); font-size: .94rem; }
        .tag-list { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 20px; }
        .tag { padding: 5px 10px; border: 1px solid var(--border); border-radius: 999px; color: #c6d3e4; font-size: .75rem; }

        /* ===================== PROJECTS ===================== */
        .projects-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
        .project-card {
            overflow: hidden;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: var(--surface);
            transition: transform .25s ease, border-color .25s ease;
        }
        .project-card:hover { transform: translateY(-5px); border-color: rgba(129, 140, 248, .55); }
        .project-banner {
            min-height: 175px;
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at 25% 20%, rgba(34, 211, 238, .25), transparent 38%),
                linear-gradient(135deg, #122d48, #171b3b);
            color: var(--primary);
            font-size: 3.5rem;
        }
        .project-content { padding: 25px; }
        .project-content h3 { margin-bottom: 9px; }
        .project-content p { color: var(--muted); font-size: .93rem; }
        .project-type { color: var(--primary); font-size: .75rem; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; }

        /* ===================== CONTACT & FOOTER ===================== */
        .contact-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            padding: clamp(28px, 5vw, 55px);
            border: 1px solid rgba(34, 211, 238, .25);
            border-radius: 28px;
            background:
                radial-gradient(ellipse at 100% 0%, rgba(129, 140, 248, .15), transparent 45%),
                linear-gradient(135deg, rgba(16, 31, 51, .98), rgba(11, 23, 40, .98));
        }
        .contact-box h2 { max-width: 600px; }
        .contact-box p { max-width: 590px; color: var(--muted); margin-bottom: 0; }
        footer { padding: 28px 0; border-top: 1px solid var(--border); color: var(--muted); font-size: .88rem; }
        .footer-inner { display: flex; justify-content: space-between; align-items: center; gap: 15px; flex-wrap: wrap; }
        .back-top { color: var(--primary); text-decoration: none; font-weight: 750; }

        /* ===================== ANIMATIONS ===================== */
        .reveal { opacity: 0; transform: translateY(22px); transition: opacity .7s ease, transform .7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        @keyframes rotate { to { transform: rotate(360deg); } }
        @keyframes pulse { 50% { box-shadow: 0 0 0 7px rgba(74, 222, 128, .08); } }
        .status-dot { animation: pulse 2s infinite; }

        /* ===================== RESPONSIVE ===================== */
        @media (max-width: 900px) {
            .hero-grid { grid-template-columns: 1fr .8fr; gap: 25px; }
            .hero-visual { min-height: 350px; }
            .orbit { width: 310px; }
            .profile-art { width: 220px; height: 260px; }
            .avatar-big { width: 125px; height: 125px; font-size: 4rem; }
            .skills-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 720px) {
            .container { width: min(var(--max-width), calc(100% - 30px)); }
            .nav { min-height: 68px; }
            .menu-toggle { display: inline-grid; place-items: center; }
            .nav-links {
                position: absolute;
                top: 68px;
                left: 15px;
                right: 15px;
                display: none;
                align-items: stretch;
                gap: 0;
                padding: 12px;
                border: 1px solid var(--border);
                border-radius: 16px;
                background: #0b1728;
                box-shadow: var(--shadow);
            }
            .nav-links.open { display: flex; flex-direction: column; }
            .nav-links a { padding: 12px; }
            .nav-cta { text-align: center; }
            .hero { padding: 65px 0 45px; min-height: auto; }
            .hero-grid { grid-template-columns: 1fr; }
            .hero-visual { min-height: 340px; margin-top: 15px; }
            .orbit { width: 300px; }
            .section { padding: 65px 0; }
            .profile-strip { grid-template-columns: 1fr; }
            .profile-item { padding: 18px 22px; }
            .skills-grid, .projects-grid { grid-template-columns: 1fr; }
            .contact-box { align-items: flex-start; flex-direction: column; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; transition-duration: .01ms !important; }
            .reveal { opacity: 1; transform: none; }
        }
    </style>
</head>
<body id="home">
<header class="topbar">
    <div class="container nav">
        <a class="brand" href="#home" aria-label="Novi Portfolio, kembali ke beranda">
            <span class="brand-mark">N</span>
            <span>novi<span class="gradient-text">.dev</span></span>
        </a>

        <button class="menu-toggle" id="menuToggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false">☰</button>

        <nav class="nav-links" id="navLinks" aria-label="Navigasi utama">
            <a href="#home">Home</a>
            <a href="#profil">Profil</a>
            <a href="#keahlian">Keahlian</a>
            <a href="#proyek">Proyek</a>
            <a class="nav-cta" href="#kontak">Kontak ↗</a>
        </nav>
    </div>
</header>

<main>
    <!-- HERO -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-copy">
                <div class="status-pill"><span class="status-dot"></span> Mahasiswa Teknik Komputer</div>
                <div class="eyebrow">Portfolio Mahasiswa · RPL</div>
                <h1>Halo, saya <span class="name gradient-text"><?= e($student['name']) ?>.</span></h1>
                <p class="lead">
                    Saya tertarik pada dunia jaringan komputer, pengembangan web,
                    dan sistem komputer. Saya senang mempelajari teknologi baru
                    dan mengubah ide menjadi solusi digital yang bermanfaat.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="#proyek">Lihat Proyek <span aria-hidden="true">↘</span></a>
                    <a class="btn btn-ghost" href="#profil">Kenali Saya</a>
                </div>
                <p class="hero-note">📍 Surakarta, Indonesia <span aria-hidden="true">·</span> <span id="liveClock">Memuat waktu...</span></p>
                <a class="scroll-cue" href="#profil"><span>↓</span> Gulir untuk mengenal saya</a>
            </div>

            <div class="hero-visual" aria-label="Ilustrasi inisial Novi">
                <div class="orbit"></div>
                <div class="profile-art">
                    <div class="avatar-big"><?= e(strtoupper(substr($student['name'], 0, 1))) ?></div>
                </div>
                <div class="floating-chip chip-one">⌘ Computer Tech</div>
                <div class="floating-chip chip-two">✦ Keep Learning</div>
            </div>
        </div>
    </section>

    <!-- PROFILE -->
    <section class="section" id="profil">
        <div class="container">
            <div class="section-head reveal">
                <div class="eyebrow">Tentang Saya</div>
                <h2>Mengenal lebih dekat <span class="gradient-text">profil saya.</span></h2>
                <p class="section-description">
                    Halaman portfolio sederhana untuk memperkenalkan identitas,
                    minat, dan perjalanan belajar saya di bidang teknologi komputer.
                </p>
            </div>

            <div class="profile-strip reveal">
                <div class="profile-item">
                    <span class="profile-label">Nama Lengkap</span>
                    <span class="profile-value"><?= e($student['name']) ?></span>
                </div>
                <div class="profile-item">
                    <span class="profile-label">Nomor Induk Mahasiswa</span>
                    <span class="profile-value"><?= e($student['nim']) ?></span>
                </div>
                <div class="profile-item">
                    <span class="profile-label">Username GitHub</span>
                    <span class="profile-value">@<?= e($student['username']) ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="section" id="keahlian">
        <div class="container">
            <div class="section-head reveal">
                <div class="eyebrow">Keahlian & Minat</div>
                <h2>Teknologi yang sedang <span class="gradient-text">saya pelajari.</span></h2>
                <p class="section-description">Beberapa bidang yang menjadi fokus belajar dan pengembangan kemampuan saya.</p>
            </div>

            <div class="skills-grid">
                <article class="skill-card reveal">
                    <div class="skill-icon" aria-hidden="true">⌘</div>
                    <h3>Jaringan Komputer</h3>
                    <p>Mempelajari konfigurasi jaringan, pengalamatan IP, routing, dan troubleshooting konektivitas.</p>
                    <div class="tag-list"><span class="tag">MikroTik</span><span class="tag">TCP/IP</span><span class="tag">Routing</span></div>
                </article>
                <article class="skill-card reveal">
                    <div class="skill-icon" aria-hidden="true">⌨</div>
                    <h3>Web Development</h3>
                    <p>Membangun halaman web yang responsif dengan struktur rapi dan pengalaman pengguna yang nyaman.</p>
                    <div class="tag-list"><span class="tag">HTML</span><span class="tag">CSS</span><span class="tag">PHP</span><span class="tag">JavaScript</span></div>
                </article>
                <article class="skill-card reveal">
                    <div class="skill-icon" aria-hidden="true">▣</div>
                    <h3>Sistem Komputer</h3>
                    <p>Mengenal sistem operasi, virtualisasi, Linux, serta dasar pengelolaan server dan layanan komputer.</p>
                    <div class="tag-list"><span class="tag">Linux</span><span class="tag">VirtualBox</span><span class="tag">Server</span></div>
                </article>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="section" id="proyek">
        <div class="container">
            <div class="section-head reveal">
                <div class="eyebrow">Karya & Praktikum</div>
                <h2>Proyek yang <span class="gradient-text">saya pelajari.</span></h2>
                <p class="section-description">Contoh area untuk menampilkan tugas, latihan, dan proyek selama belajar Teknik Komputer.</p>
            </div>

            <div class="projects-grid">
                <article class="project-card reveal">
                    <div class="project-banner" aria-hidden="true">⌘</div>
                    <div class="project-content">
                        <span class="project-type">Networking</span>
                        <h3>Praktikum Jaringan Komputer</h3>
                        <p>Latihan konfigurasi perangkat jaringan, pengalamatan IP, routing, serta pengujian koneksi antarperangkat.</p>
                        <div class="tag-list"><span class="tag">MikroTik</span><span class="tag">Network Lab</span></div>
                    </div>
                </article>
                <article class="project-card reveal">
                    <div class="project-banner" aria-hidden="true">〈/〉</div>
                    <div class="project-content">
                        <span class="project-type">Web Interface</span>
                        <h3>Portfolio Web Mahasiswa</h3>
                        <p>Website portfolio satu file yang memadukan PHP, HTML, CSS, dan JavaScript dengan desain responsif.</p>
                        <div class="tag-list"><span class="tag">PHP</span><span class="tag">CSS</span><span class="tag">JavaScript</span></div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section" id="kontak">
        <div class="container">
            <div class="contact-box reveal">
                <div>
                    <div class="eyebrow">Hubungi Saya</div>
                    <h2>Mari terhubung dan <span class="gradient-text">belajar bersama.</span></h2>
                    <p>Terima kasih sudah mengunjungi portfolio saya. Saya terbuka untuk berbagi pengetahuan, berdiskusi, dan belajar hal baru seputar teknologi.</p>
                </div>
                <a class="btn btn-primary" href="https://github.com/<?= e($student['username']) ?>" target="_blank" rel="noopener noreferrer">Kunjungi GitHub ↗</a>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container footer-inner">
        <span>© <?= e($currentYear) ?> <?= e($student['name']) ?> · Tugas Interface Web RPL</span>
        <a class="back-top" href="#home">Kembali ke atas ↑</a>
    </div>
</footer>

<script>
    // Menu navigasi untuk tampilan mobile
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi');
        menuToggle.textContent = isOpen ? '×' : '☰';
    });

    // Tutup menu setelah salah satu tautan dipilih
    navLinks.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'Buka menu navigasi');
            menuToggle.textContent = '☰';
        });
    });

    // Jam digital lokal yang diperbarui setiap detik
    function updateClock() {
        const clock = document.getElementById('liveClock');
        const now = new Date();
        clock.textContent = now.toLocaleTimeString('id-ID', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        });
    }
    updateClock();
    setInterval(updateClock, 1000);

    // Animasi elemen saat masuk ke area layar
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach((element) => {
        revealObserver.observe(element);
    });

    // Penanda menu aktif berdasarkan bagian yang sedang terlihat
    const sections = document.querySelectorAll('main section[id]');
    const navAnchors = document.querySelectorAll('.nav-links a[href^="#"]');

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                navAnchors.forEach((anchor) => {
                    anchor.classList.toggle(
                        'active',
                        anchor.getAttribute('href') === '#' + entry.target.id
                    );
                });
            }
        });
    }, { rootMargin: '-35% 0px -55% 0px' });

    sections.forEach((section) => sectionObserver.observe(section));
</script>
</body>
</html>
