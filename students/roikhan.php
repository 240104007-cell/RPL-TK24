<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Roikhan Nur Fauzi
// NIM       : 240104010
// Username  : roikhan
// Tema      : Persis Solo (Laskar Sambernyawa)
//
// Aturan: seluruh HTML, CSS, JavaScript, dan PHP tugas mahasiswa
//          ditempatkan pada SATU file ini.
// ============================================================

declare(strict_types=1);

$student = [
    'name' => 'Roikhan Nur Fauzi',
    'nim' => '240104010',
    'username' => 'roikhan',
];

$namaAplikasi = 'Sistem Inventaris Laboratorium';
$waktuServer = date('d-m-Y H:i:s');
$pageTitle = $namaAplikasi . ' - ' . $student['name'] . ' (Persis Solo Theme)';
$currentYear = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tugas interface web Rekayasa Perangkat Lunak - Persis Solo Theme">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root {
            /* Palette Warna Tema Persis Solo (Sambernyawa) */
            --bg: #121212;
            --surface: #1e1e1e;
            --surface-card: #252525;
            --text: #f5f5f5;
            --muted: #a0a0a0;
            --primary: #d31221;         /* Merah Persis */
            --primary-dark: #a80c18;    /* Merah Gelap */
            --accent: #d4af37;          /* Emas / Gold */
            --border: #333333;
            --radius: 16px;
            --shadow: 0 18px 40px rgba(0, 0, 0, .5);
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
            background: rgba(18, 18, 18, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 2px solid var(--primary);
        }
        .nav { min-height: 70px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { font-weight: 800; letter-spacing: -.02em; color: var(--accent); font-size: 1.2rem; }
        .nav-links { display: flex; gap: 18px; flex-wrap: wrap; }
        .nav a { color: var(--text); text-decoration: none; font-weight: 650; transition: color 0.2s; }
        .nav a:hover { color: var(--accent); }
        .hero { padding: 60px 0 30px; }
        .hero-grid { display: grid; grid-template-columns: 1.25fr .75fr; gap: 34px; align-items: center; }
        .eyebrow { color: var(--accent); font-weight: 800; text-transform: uppercase; letter-spacing: .08em; font-size: .85rem; }
        h1 { font-size: clamp(2rem, 5vw, 3.5rem); line-height: 1.1; letter-spacing: -.04em; margin: 10px 0 20px; color: var(--text); }
        h1 span { color: var(--primary); }
        h2 { font-size: clamp(1.55rem, 3vw, 2.25rem); letter-spacing: -.03em; margin-top: 0; color: var(--accent); }
        .lead { color: var(--muted); font-size: 1.08rem; max-width: 720px; }
        .actions { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 26px; }
        .btn { display: inline-block; padding: 12px 20px; border-radius: 12px; text-decoration: none; font-weight: 750; border: 1px solid var(--border); cursor: pointer; transition: all 0.2s; }
        .btn-primary { background: var(--primary); color: white; border-color: var(--primary); }
        .btn-primary:hover { background: var(--primary-dark); border-color: var(--primary-dark); }
        .btn-secondary { background: var(--surface-card); color: var(--accent); border-color: var(--accent); }
        .btn-secondary:hover { background: var(--accent); color: #121212; }
        
        .profile-card, .card { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius); box-shadow: var(--shadow); }
        .profile-card { padding: 26px; border-top: 4px solid var(--primary); }
        .avatar { width: 76px; height: 76px; border-radius: 22px; display: grid; place-items: center; background: var(--primary); color: var(--accent); font-size: 2rem; font-weight: 900; margin-bottom: 18px; border: 2px solid var(--accent); }
        .meta { display: grid; gap: 12px; }
        .meta-row { padding: 12px 0; border-bottom: 1px solid var(--border); }
        .meta-row:last-child { border-bottom: 0; }
        .label { display: block; color: var(--muted); font-size: .82rem; }
        .value { font-weight: 750; word-break: break-word; color: var(--text); }
        
        section { padding: 34px 0; }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .card { padding: 24px; background: var(--surface-card); border: 1px solid var(--border); }
        .card strong { color: var(--accent); display: block; margin-bottom: 8px; }
        .card p { color: var(--muted); margin-bottom: 0; }
        
        /* Style Tabel Inventaris Tema Persis */
        .table-responsive { overflow-x: auto; margin-top: 15px; }
        table { width: 100%; border-collapse: collapse; background: var(--surface); border-radius: var(--radius); overflow: hidden; border: 1px solid var(--border); }
        th, td { padding: 14px 18px; text-align: left; border-bottom: 1px solid var(--border); }
        th { background: var(--primary); color: white; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; }
        tr:hover { background: rgba(211, 18, 33, 0.08); }
        
        footer { padding: 46px 0; color: var(--muted); text-align: center; border-top: 1px solid var(--border); }
        @media (max-width: 780px) {
            .hero-grid, .grid-3 { grid-template-columns: 1fr; }
            .hero { padding-top: 40px; }
            .nav { align-items: flex-start; padding: 15px 0; flex-direction: column; gap: 8px; }
        }
    </style>
</head>
<body>
<header class="topbar">
    <div class="container nav">
        <div class="brand">PERSIS / <?= htmlspecialchars($student['username']) ?></div>
        <nav class="nav-links" aria-label="Navigasi utama">
            <a href="#home">Home</a>
            <a href="#inventaris">Inventaris</a>
            <a href="#tentang">Identitas</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero" id="home">
        <div class="container hero-grid">
            <div>
                <div class="eyebrow">Laskar Sambernyawa Edition 🔴🟡</div>
                <h1><span><?= htmlspecialchars($namaAplikasi) ?></span></h1>
                <p class="lead">Aplikasi praktikum Rekayasa Perangkat Lunak dengan antarmuka bertema Persis Solo. Menggunakan Git Bash untuk kontrol versi dan manajemen tampilan interface yang responsif.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="#inventaris">Lihat Data Barang</a>
                    <a class="btn btn-secondary" href="#tentang">Info Pembuat</a>
                </div>
            </div>
            <aside class="profile-card" id="tentang">
                <div class="avatar"><?= strtoupper(substr($student['username'], 0, 1)) ?></div>
                <h2><?= htmlspecialchars($student['name']) ?></h2>
                <div class="meta">
                    <div class="meta-row"><span class="label">NIM</span><span class="value"><?= htmlspecialchars($student['nim']) ?></span></div>
                    <div class="meta-row"><span class="label">Username</span><span class="value"><?= htmlspecialchars($student['username']) ?></span></div>
                    <div class="meta-row"><span class="label">Mata Kuliah</span><span class="value">Rekayasa Perangkat Lunak</span></div>
                    <div class="meta-row"><span class="label">Waktu Server</span><span class="value"><?= htmlspecialchars($waktuServer) ?></span></div>
                </div>
            </aside>
        </div>
    </section>

    <section id="inventaris">
        <div class="container">
            <h2>Data Inventaris Laboratorium</h2>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PC Workstation High-End</td>
                            <td>25 Unit</td>
                            <td>Baik</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Switch Cisco 24 Port</td>
                            <td>2 Unit</td>
                            <td>Baik</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Proyektor HD Smart Lab</td>
                            <td>1 Unit</td>
                            <td>Baik</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="fitur">
        <div class="container">
            <h2>Komponen Interface</h2>
            <div class="grid-3">
                <article class="card"><strong>01 · Theme Color</strong><p>Warna dasar menggunakan nuansa khas Persis Solo (Merah, Emas, & Hitam).</p></article>
                <article class="card"><strong>02 · Dark Mode UI</strong><p>Tampilan modern dark mode agar kontras warna merah dan emas terlihat makin tajam.</p></article>
                <article class="card"><strong>03 · Responsif</strong><p>Tata letak otomatis menyesuaikan ukuran layar PC maupun perangkat mobile.</p></article>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">&copy; <?= htmlspecialchars($currentYear) ?> <?= htmlspecialchars($student['name']) ?> · Sakjose! Persis Solo</div>
</footer>
</body>
</html>