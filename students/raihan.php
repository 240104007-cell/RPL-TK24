<?php
declare(strict_types=1);

$student = [
    'name' => 'Muhammad Raihan Hibatullah',
    'nim' => '240104006',
    'username' => 'raihan',
];

// Integrasi variabel dari file kedua[cite: 3]
$namaAplikasi = 'Sistem Inventaris Laboratorium A';
$waktu = date('d-m-Y H:i:s');
$status = 'Sistem siap digunakan';
$versi = 'Versi 1.0';

$pageTitle = $namaAplikasi . ' - ' . $student['name'];
$currentYear = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tugas interface web Rekayasa Perangkat Lunak - Tema Real Madrid">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root {
            /* Warna khas Real Madrid */
            --bg: #0b0e14;
            --surface: #121824;
            --surface-card: #1a2332;
            --text: #f0f4f9;
            --muted: #94a3b8;
            --primary: #d4af37; /* Real Madrid Gold */
            --primary-dark: #b89628;
            --accent-purple: #582896; /* Real Madrid Purple Accent */
            --white: #ffffff;
            --border: #2a364f;
            --radius: 18px;
            --shadow: 0 18px 50px rgba(0, 0, 0, .4);
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
            background: rgba(11, 14, 20, 0.9);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }
        .nav { min-height: 70px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { font-weight: 800; letter-spacing: -.02em; color: var(--primary); display: flex; align-items: center; gap: 8px; }
        .nav-links { display: flex; gap: 18px; flex-wrap: wrap; }
        .nav a { color: var(--text); text-decoration: none; font-weight: 650; transition: color 0.2s; }
        .nav a:hover { color: var(--primary); }
        .hero { padding: 80px 0 42px; }
        .hero-grid { display: grid; grid-template-columns: 1.25fr .75fr; gap: 34px; align-items: center; }
        .eyebrow { color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: .08em; font-size: .82rem; }
        h1 { font-size: clamp(2.25rem, 6vw, 4.2rem); line-height: 1.05; letter-spacing: -.04em; margin: 10px 0 20px; color: var(--white); }
        h2 { font-size: clamp(1.55rem, 3vw, 2.25rem); letter-spacing: -.03em; margin-top: 0; color: var(--primary); }
        .lead { color: var(--muted); font-size: 1.08rem; max-width: 720px; }
        .actions { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 26px; }
        .btn { display: inline-block; padding: 12px 22px; border-radius: 12px; text-decoration: none; font-weight: 750; border: 1px solid var(--border); transition: all 0.2s ease; }
        .btn-primary { background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: #0b0e14; border-color: var(--primary); }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(212, 175, 55, 0.3); }
        .btn-secondary { background: var(--surface-card); color: var(--white); border-color: var(--border); }
        .btn-secondary:hover { border-color: var(--primary); color: var(--primary); }
        .profile-card, .card { background: var(--surface-card); border: 1px solid var(--border); border-radius: var(--radius); box-shadow: var(--shadow); }
        .profile-card { padding: 26px; position: relative; overflow: hidden; }
        .profile-card::before { content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, var(--primary), var(--accent-purple)); }
        .avatar { width: 76px; height: 76px; border-radius: 22px; display: grid; place-items: center; background: linear-gradient(135deg, var(--primary), var(--accent-purple)); color: white; font-size: 1.8rem; font-weight: 850; margin-bottom: 18px; box-shadow: 0 8px 20px rgba(88, 40, 150, 0.4); }
        .meta { display: grid; gap: 12px; }
        .meta-row { padding: 12px 0; border-bottom: 1px solid var(--border); }
        .meta-row:last-child { border-bottom: 0; }
        .label { display: block; color: var(--muted); font-size: .82rem; }
        .value { font-weight: 750; word-break: break-word; color: var(--white); }
        section { padding: 34px 0; }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .card { padding: 24px; transition: transform 0.2s, border-color 0.2s; }
        .card:hover { transform: translateY(-4px); border-color: var(--primary); }
        .card p { color: var(--muted); margin-bottom: 0; }
        .card strong { color: var(--primary); font-size: 1.1rem; }
        footer { padding: 46px 0; color: var(--muted); text-align: center; border-top: 1px solid var(--border); margin-top: 40px; }
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
        <div class="brand">👑 RPL / <?= htmlspecialchars($student['username']) ?></div>
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
                <div class="eyebrow">👑 <?= htmlspecialchars($namaAplikasi) ?></div>
                <h1>Hala Madrid! Interface Berkelas & Responsif.</h1>
                <p class="lead">Aplikasi praktikum Rekayasa Perangkat Lunak. Waktu server: <?= htmlspecialchars($waktu) ?></p>
                <div class="actions">
                    <a class="btn btn-primary" href="#fitur">Lihat Komponen</a>
                    <a class="btn btn-secondary" href="#tentang">Identitas</a>
                </div>
            </div>
            <aside class="profile-card" id="tentang">
                <div class="avatar"><?= strtoupper(substr($student['username'], 0, 1)) ?></div>
                <h2><?= htmlspecialchars($student['name']) ?></h2>
                <div class="meta">
                    <div class="meta-row"><span class="label">NIM</span><span class="value"><?= htmlspecialchars($student['nim']) ?></span></div>
                    <div class="meta-row"><span class="label">Username</span><span class="value"><?= htmlspecialchars($student['username']) ?></span></div>
                    <div class="meta-row"><span class="label">Status System</span><span class="value"><?= htmlspecialchars($status) ?> (<?= htmlspecialchars($versi) ?>)</span></div>
                </div>
            </aside>
        </div>
    </section>

    <section id="fitur">
        <div class="container">
            <h2>Contoh Area Interface</h2>
            <div class="grid-3">
                <article class="card">
                    <strong>01 · Informasi</strong>
                    <p>Gunakan hierarki visual agar informasi utama mudah ditemukan pengguna.</p>
                </article>
                <article class="card">
                    <strong>02 · Interaksi</strong>
                    <p>Tambahkan form, tombol, modal, filter, atau interaksi JavaScript sesuai kebutuhan.</p>
                </article>
                <article class="card">
                    <strong>03 · Responsif</strong>
                    <p>Pastikan halaman tetap nyaman digunakan pada desktop maupun perangkat mobile.</p>
                </article>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">&copy; <?= htmlspecialchars($currentYear) ?> <?= htmlspecialchars($student['name']) ?> · Real Madrid Theme Edition</div>
</footer>
</body>
</html>