<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Prihatin Puji Ayu Lestari
// NIM       : 240104014
// Username  : ayu
//
// Aturan: seluruh HTML, CSS, JavaScript, dan PHP tugas mahasiswa
//          ditempatkan pada SATU file ini.
// ============================================================

declare(strict_types=1);

$student = [
    'name' => 'Prihatin Puji Ayu Lestari',
    'nim' => '240104014',
    'username' => 'ayu',
];

$pageTitle = 'Interface Web - ' . $student['name'];
$currentYear = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tugas interface web Rekayasa Perangkat Lunak">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root {
            --bg: #f0f4ff;
            --surface: #ffffff;
            --text: #172033;
            --muted: #657089;
            --primary: #6c63d9;
            --primary-dark: #5148b8;
            --border: #e0e4f2;
            --radius: 18px;
            --shadow: 0 12px 30px rgba(108, 99, 217, .10);
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        .container { width: min(1100px, calc(100% - 32px)); margin-inline: auto; }
        .topbar {
            position: sticky;
            top: 0;
            z-index: 20;
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }
        .nav { min-height: 76px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { font-weight: 800; letter-spacing: -.02em; }
        .nav-links { display: flex; gap: 18px; flex-wrap: wrap; }
        .nav a { color: var(--text); text-decoration: none; font-weight: 650; }
        .nav a:hover { color: var(--primary); }
        .hero { padding: 80px 0 42px; }
        .hero-grid { display: grid; grid-template-columns: 1.25fr .75fr; gap: 34px; align-items: center; }
        .eyebrow { color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: .08em; font-size: .82rem; }
        h1 { font-size: clamp(2.25rem, 6vw, 4.7rem); line-height: 1.02; letter-spacing: -.055em; margin: 10px 0 20px; }
        h2 { font-size: clamp(1.55rem, 3vw, 2.25rem); letter-spacing: -.03em; margin-top: 0; }
        .lead { color: var(--muted); font-size: 1.08rem; max-width: 720px; }
        .actions { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 26px; }
        .btn { display: inline-block; padding: 13px 20px; border-radius: 13px; text-decoration: none; font-weight: 750; border: 1px solid var(--border); transition: all .25s ease; }
        .btn-primary { background: var(--primary); color: white; border-color: var(--primary); box-shadow: 0 6px 15px rgba(83, 105, 217, .2) }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-2px); }
        .btn-secondary { background: white; color: var(--text); }
        .profile-card, .card { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius); box-shadow: var(--shadow); }
        .profile-card { padding: 26px; }
        .avatar { width: 76px; height: 76px; border-radius: 50%; display: grid; place-items: center; background: linear-gradient(135deg, #6c63d9, #a29bfe); color: white; font-size: 1.8rem; font-weight: 850; margin-bottom: 18px; box-shadow: 0 8px 20px rgba(108, 99, 217, .25); }
        .meta { display: grid; gap: 12px; }
        .meta-row { padding: 12px 0; border-bottom: 1px solid var(--border); }
        .meta-row:last-child { border-bottom: 0; }
        .label { display: block; color: var(--muted); font-size: .82rem; }
        .value { font-weight: 750; word-break: break-word; }
        section { padding: 34px 0; }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .card { padding: 24px; box-shadow: none; }
        .card p { color: var(--muted); margin-bottom: 0; }
        footer { padding: 46px 0; color: var(--muted); text-align: center; }
        @media (max-width: 780px) {
            .hero-grid, .grid-3 { grid-template-columns: 1fr; }
            .hero { padding-top: 54px; }
            .nav { align-items: flex-start; padding: 15px 0; flex-direction: column; gap: 8px; }
        }
    </style>
</head>
<body>
<header class="topbar">
    <div class="container nav">
        <div class="brand">RPL / <?= htmlspecialchars($student['username']) ?></div>
        <nav class="nav-links" aria-label="Navigasi utama">
            <a href="#home">Home</a>
            <a href="#fitur">Fitur</a>
            <a href="#tentang">Tentang</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero" id="home">
        <div class="container hero-grid">
            <div>
                <div class="eyebrow">WELCOME TO MY WEBSITE</div>
                <h1>Halo, Saya Ayu! Selamat Datang di Website Saya</h1>
                <p class="lead">Website ini merupakan halaman personal saya sebagai mahasiswa Rekayasa Perangkat Lunak. Saya sedang belajar membuat tampilan website yang menarik, sederhana, dan responsif.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="#fitur">Kenali saya</a>
                    <a class="btn btn-secondary" href="#tentang">Tentang saya</a>
                </div>
            </div>
            <aside class="profile-card" id="tentang">
                <div class="avatar"><?= strtoupper(substr($student['username'], 0, 1)) ?></div>
                <h2><?= htmlspecialchars($student['name']) ?></h2>
                <div class="meta">
                    <div class="meta-row"><span class="label">NIM</span><span class="value"><?= htmlspecialchars($student['nim']) ?></span></div>
                    <div class="meta-row"><span class="label">Username</span><span class="value"><?= htmlspecialchars($student['username']) ?></span></div>
                    <div class="meta-row"><span class="label">Mata Kuliah</span><span class="value">Rekayasa Perangkat Lunak</span></div>
                </div>
            </aside>
        </div>
    </section>

    <section id="fitur">
        <div class="container">
            <h2>Apa yang saya pelajari?</h2>
            <div class="grid-3">
                <article class="card"><strong>01 · Web Design</strong><p>Belajar membuat tampilan website yang menarik dan nyaman digunakan.</p></article>
                <article class="card"><strong>02 · Programming</strong><p>Mengenal HTML, CSS, JavaScript, dan PHP untuk membangun website.</p></article>
                <article class="card"><strong>03 · Responsive Design</strong><p>Mempelajari cara membuat website yang dapat dibuka melalui laptop maupun HP.</p></article>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">&copy; <?= htmlspecialchars($currentYear) ?> <?= htmlspecialchars($student['name']) ?> · RPL</div>
</footer>
</body>
</html>
