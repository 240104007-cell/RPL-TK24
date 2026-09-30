<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Muhammad Soffin Halim Sampurna
// NIM       : 240104019
// Username  : soffin
//
// Tema      : Manchester United - The Red Devils
// ============================================================

declare(strict_types=1);

$student = [
    'name' => 'Muhammad Soffin Halim Sampurna',
    'nim' => '240104019',
    'username' => 'soffin',
];

$pageTitle = 'Manchester United - The Red Devils | ' . $student['name'];
$currentYear = date('Y');

// Data Pencapaian Manchester United
$trophies = [
    ['icon' => '🏆', 'title' => 'Liga Inggris', 'count' => 20, 'detail' => '7 First Division + 13 Premier League'],
    ['icon' => '🏆', 'title' => 'FA Cup', 'count' => 13, 'detail' => 'Rekor bersama terbanyak sepanjang masa'],
    ['icon' => '🏆', 'title' => 'League Cup', 'count' => 6, 'detail' => 'Terakhir 2022/23'],
    ['icon' => '⭐', 'title' => 'UEFA Champions League', 'count' => 3, 'detail' => '1968, 1999, 2008'],
    ['icon' => '⭐', 'title' => 'UEFA Europa League', 'count' => 1, 'detail' => '2016/17'],
    ['icon' => '⭐', 'title' => 'Cup Winners\' Cup', 'count' => 1, 'detail' => '1990/91'],
    ['icon' => '🌍', 'title' => 'FIFA Club World Cup', 'count' => 1, 'detail' => '2008'],
    ['icon' => '🌍', 'title' => 'Intercontinental Cup', 'count' => 1, 'detail' => '1999'],
    ['icon' => '🛡️', 'title' => 'Community Shield', 'count' => 21, 'detail' => 'Rekor terbanyak di Inggris'],
    ['icon' => '⭐', 'title' => 'UEFA Super Cup', 'count' => 1, 'detail' => '1991'],
];

$legends = [
    ['name' => 'Sir Alex Ferguson', 'role' => 'Manajer Terhebat', 'years' => '1986–2013', 'desc' => '38 trofi dalam 26 tahun, termasuk Treble 1999 dan 13 gelar Premier League.'],
    ['name' => 'Sir Bobby Charlton', 'role' => 'Legenda Abadi', 'years' => '1956–1973', 'desc' => '249 gol dalam 758 penampilan. Penyintas tragedi Munich 1958 dan pemenang Piala Eropa 1968.'],
    ['name' => 'George Best', 'role' => 'Pesepakbola Terhebat', 'years' => '1963–1974', 'desc' => '179 gol dalam 470 penampilan. Ballon d\'Or 1968. Dribbler paling berbakat dalam sejarah.'],
    ['name' => 'Ryan Giggs', 'role' => 'Pemain Terbanyak', 'years' => '1990–2014', 'desc' => '963 penampilan, 168 gol, 35 trofi. Pemain paling banyak meraih gelar dalam sejarah klub.'],
    ['name' => 'Wayne Rooney', 'role' => 'Top Skor Sepanjang Masa', 'years' => '2004–2017', 'desc' => '253 gol dalam 559 penampilan. Pencetak gol terbanyak dalam sejarah Manchester United.'],
    ['name' => 'Eric Cantona', 'role' => 'The King', 'years' => '1992–1997', 'desc' => 'Katalis era keemasan Ferguson. 4 gelar Premier League dalam 5 musim. Karisma tak tertandingi.'],
    ['name' => 'David Beckham', 'role' => 'Maestro Crossing', 'years' => '1992–2003', 'desc' => 'Bagian dari "Class of 92". Tendangan bebasnya legendaris. Ikon Treble 1999.'],
    ['name' => 'Roy Keane', 'role' => 'Kapten Pemberani', 'years' => '1993–2005', 'desc' => '479 penampilan. Jiwa dari tim Treble 1999. Kapten paling menginspirasi di era modern.'],
];

$eras = [
    [
        'title' => 'The Busby Babes (1945–1958)',
        'desc' => 'Sir Matt Busby membangun tim muda legendaris yang meraih 3 gelar liga. Tragedi pesawat Munich 1958 merenggut 8 pemain, namun semangat mereka hidup selamanya.',
        'color' => '#c4161c',
    ],
    [
        'title' => 'Piala Eropa 1968',
        'desc' => '10 tahun setelah Munich, Busby mewujudkan mimpinya. United mengalahkan Benfica 4-1 di Wembley dengan gol Charlton, Best, dan Kidd. Klub Inggris pertama meraih Piala Eropa.',
        'color' => '#d4a843',
    ],
    [
        'title' => 'Era Ferguson & Treble 1999',
        'desc' => 'Musim paling epik: Premier League, FA Cup, dan Champions League dalam satu musim. Gol Sheringham dan Solskjaer di injury time final melawan Bayern Munich menjadi momen paling dramatis dalam sejarah sepakbola.',
        'color' => '#c4161c',
    ],
    [
        'title' => 'Dominasi 2006–2013',
        'desc' => '5 gelar Premier League, 2 final Champions League (juara 2008 di Moskow). Ronaldo, Rooney, Vidic, Ferdinand, dan Scholes membentuk dinasti terakhir Ferguson.',
        'color' => '#1a1a2e',
    ],
    [
        'title' => 'Era Baru & FA Cup 2024',
        'desc' => 'Setelah era transisi pasca-Ferguson, United terus berjuang. Trofi FA Cup 2024 menjadi bukti semangat The Red Devils tak pernah padam. Masa depan terus dibangun.',
        'color' => '#c4161c',
    ],
];

// Gambar dari Wikimedia Commons (Creative Commons / Public Domain)
$images = [
    [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Manchester_United_Old_Trafford_%28cropped%29.jpg/1280px-Manchester_United_Old_Trafford_%28cropped%29.jpg',
        'alt' => 'Old Trafford Stadium - Theatre of Dreams, foto udara',
        'caption' => 'Old Trafford — Theatre of Dreams (Kapasitas: 74.310)',
        'credit' => 'Foto: Arne Müseler, CC BY-SA 3.0 DE',
    ],
    [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Old_Trafford_Stadium_-_geograph.org.uk_-_7293664.jpg/1024px-Old_Trafford_Stadium_-_geograph.org.uk_-_7293664.jpg',
        'alt' => 'Old Trafford dari luar stadion',
        'caption' => 'Tampak luar Old Trafford, rumah MU sejak 1910',
        'credit' => 'Foto: David Dixon, CC BY-SA 2.0',
    ],
    [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Sir_Matt_Busby_Statue%2C_Old_Trafford_-_geograph.org.uk_-_5674974.jpg/640px-Sir_Matt_Busby_Statue%2C_Old_Trafford_-_geograph.org.uk_-_5674974.jpg',
        'alt' => 'Patung Sir Matt Busby di depan Old Trafford',
        'caption' => 'Patung Sir Matt Busby — Legenda yang membangun United',
        'credit' => 'Foto: David Dixon, CC BY-SA 2.0',
    ],
    [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/The_United_Trinity_statue_outside_Manchester_United_football_ground_-_geograph.org.uk_-_8107597.jpg/1024px-The_United_Trinity_statue_outside_Manchester_United_football_ground_-_geograph.org.uk_-_8107597.jpg',
        'alt' => 'Patung United Trinity: Best, Law, Charlton',
        'caption' => 'United Trinity — Best, Law & Charlton',
        'credit' => 'Foto: Gerald England, CC BY-SA 2.0',
    ],
    [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Old_Trafford%2C_The_Munich_Tunnel_and_Memorial_Clock_-_geograph.org.uk_-_5671550.jpg/640px-Old_Trafford%2C_The_Munich_Tunnel_and_Memorial_Clock_-_geograph.org.uk_-_5671550.jpg',
        'alt' => 'Munich Memorial Clock di Old Trafford',
        'caption' => 'Munich Clock — Mengenang Tragedi 6 Februari 1958',
        'credit' => 'Foto: David Dixon, CC BY-SA 2.0',
    ],
    [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Stretford_End_2019.jpg/1024px-Stretford_End_2019.jpg',
        'alt' => 'Stretford End di Old Trafford',
        'caption' => 'Stretford End — Jantung supporter United',
        'credit' => 'CC BY-SA 4.0',
    ],
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Halaman Manchester United - Pencapaian, Legenda, dan Sejarah The Red Devils">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --mu-red: #c4161c;
            --mu-red-dark: #8b0000;
            --mu-red-deep: #6b0f14;
            --mu-black: #1a1a2e;
            --mu-gold: #d4a843;
            --mu-gold-light: #f0d78c;
            --mu-white: #ffffff;
            --mu-gray: #f5f5f5;
            --mu-gray-dark: #2a2a3e;
            --mu-text: #1a1a2e;
            --mu-text-muted: #6b7280;
            --radius: 16px;
            --shadow: 0 20px 60px rgba(26, 26, 46, 0.15);
            --shadow-sm: 0 4px 20px rgba(26, 26, 46, 0.08);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
            background: var(--mu-gray);
            color: var(--mu-text);
            line-height: 1.7;
        }

        .container { width: min(1200px, calc(100% - 32px)); margin-inline: auto; }

        /* ===== NAVBAR ===== */
        .navbar {
            position: sticky; top: 0; z-index: 100;
            background: rgba(26, 26, 46, 0.97);
            backdrop-filter: blur(16px);
            border-bottom: 3px solid var(--mu-red);
        }
        .nav-inner {
            display: flex; align-items: center; justify-content: space-between;
            min-height: 70px; gap: 20px;
        }
        .nav-brand {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.6rem; color: var(--mu-white);
            letter-spacing: 0.05em;
            display: flex; align-items: center; gap: 10px;
            text-decoration: none;
        }
        .nav-brand .devil { font-size: 1.8rem; }
        .nav-links { display: flex; gap: 6px; flex-wrap: wrap; }
        .nav-links a {
            color: rgba(255,255,255,0.8); text-decoration: none;
            font-weight: 600; font-size: 0.9rem;
            padding: 8px 16px; border-radius: 8px;
            transition: all 0.3s;
        }
        .nav-links a:hover {
            color: var(--mu-white); background: var(--mu-red);
        }
        .nav-toggle { display: none; background: none; border: none; color: white; font-size: 1.5rem; cursor: pointer; }

        /* ===== HERO ===== */
        .hero {
            background: linear-gradient(135deg, var(--mu-black) 0%, var(--mu-red-deep) 40%, var(--mu-red) 70%, var(--mu-red-dark) 100%);
            padding: 100px 0 80px;
            position: relative; overflow: hidden;
        }
        .hero::before {
            content: ''; position: absolute; inset: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><text y="50" x="20" font-size="80" opacity="0.03" fill="white">⚽</text></svg>') repeat;
            background-size: 200px; opacity: 0.5;
        }
        .hero-content {
            position: relative; z-index: 2;
            display: grid; grid-template-columns: 1.3fr 0.7fr; gap: 40px; align-items: center;
        }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(212, 168, 67, 0.2);
            border: 1px solid var(--mu-gold);
            color: var(--mu-gold-light); font-weight: 700;
            padding: 8px 18px; border-radius: 30px;
            font-size: 0.82rem; text-transform: uppercase;
            letter-spacing: 0.08em; margin-bottom: 20px;
        }
        .hero h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(3rem, 7vw, 5.5rem);
            color: var(--mu-white);
            line-height: 0.95; letter-spacing: 0.02em;
            margin-bottom: 20px;
        }
        .hero h1 span { color: var(--mu-gold); }
        .hero-desc {
            color: rgba(255,255,255,0.8); font-size: 1.1rem;
            max-width: 600px; margin-bottom: 30px;
        }
        .hero-stats {
            display: flex; gap: 30px; flex-wrap: wrap;
        }
        .hero-stat {
            text-align: center;
        }
        .hero-stat-num {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 3rem; color: var(--mu-gold);
            line-height: 1;
        }
        .hero-stat-label {
            color: rgba(255,255,255,0.7); font-size: 0.82rem;
            font-weight: 600; text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .hero-image {
            border-radius: var(--radius); overflow: hidden;
            box-shadow: 0 30px 80px rgba(0,0,0,0.4);
            border: 3px solid rgba(212, 168, 67, 0.3);
        }
        .hero-image img { width: 100%; height: 350px; object-fit: cover; display: block; }

        /* ===== SECTION ===== */
        .section { padding: 70px 0; }
        .section-dark { background: var(--mu-black); color: var(--mu-white); }
        .section-red { background: linear-gradient(135deg, var(--mu-red) 0%, var(--mu-red-dark) 100%); color: var(--mu-white); }
        .section-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(2rem, 4vw, 3rem);
            letter-spacing: 0.02em; margin-bottom: 12px;
        }
        .section-subtitle {
            color: var(--mu-text-muted); font-size: 1.05rem; margin-bottom: 40px;
            max-width: 700px;
        }
        .section-dark .section-subtitle,
        .section-red .section-subtitle { color: rgba(255,255,255,0.7); }
        .section-line {
            width: 60px; height: 4px; background: var(--mu-red);
            border-radius: 2px; margin-bottom: 16px;
        }
        .section-dark .section-line,
        .section-red .section-line { background: var(--mu-gold); }

        /* ===== TROPHY GRID ===== */
        .trophy-grid {
            display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 16px;
        }
        .trophy-card {
            background: var(--mu-white); border-radius: var(--radius);
            padding: 24px 20px; text-align: center;
            border: 1px solid #e5e7eb;
            transition: all 0.3s; cursor: default;
        }
        .trophy-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow);
            border-color: var(--mu-red);
        }
        .trophy-icon { font-size: 2rem; margin-bottom: 8px; }
        .trophy-count {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.8rem; color: var(--mu-red);
            line-height: 1;
        }
        .trophy-name { font-weight: 800; font-size: 0.92rem; margin: 4px 0; }
        .trophy-detail { color: var(--mu-text-muted); font-size: 0.78rem; }
        .trophy-total {
            grid-column: 1 / -1;
            background: linear-gradient(135deg, var(--mu-red), var(--mu-red-dark));
            color: var(--mu-white); border-radius: var(--radius);
            padding: 30px; text-align: center;
            border: none;
        }
        .trophy-total .trophy-count { color: var(--mu-gold); font-size: 4rem; }
        .trophy-total .trophy-name { font-size: 1.1rem; color: rgba(255,255,255,0.9); }

        /* ===== TIMELINE ===== */
        .timeline { position: relative; padding-left: 40px; }
        .timeline::before {
            content: ''; position: absolute; left: 15px; top: 0; bottom: 0;
            width: 3px; background: rgba(255,255,255,0.2); border-radius: 2px;
        }
        .timeline-item { position: relative; margin-bottom: 36px; }
        .timeline-item::before {
            content: ''; position: absolute; left: -32px; top: 6px;
            width: 16px; height: 16px; border-radius: 50%;
            border: 3px solid var(--mu-gold); background: var(--mu-black);
        }
        .timeline-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.5rem; color: var(--mu-gold);
            margin-bottom: 6px;
        }
        .timeline-desc { color: rgba(255,255,255,0.8); font-size: 0.95rem; line-height: 1.7; }

        /* ===== LEGENDS ===== */
        .legend-grid {
            display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;
        }
        .legend-card {
            background: var(--mu-gray-dark); border-radius: var(--radius);
            padding: 28px; position: relative; overflow: hidden;
            border-left: 4px solid var(--mu-red);
            transition: all 0.3s;
        }
        .legend-card:hover {
            transform: translateY(-3px);
            border-left-color: var(--mu-gold);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        }
        .legend-name {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.4rem; color: var(--mu-white);
            margin-bottom: 2px;
        }
        .legend-role {
            color: var(--mu-gold); font-weight: 700;
            font-size: 0.82rem; text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .legend-years {
            display: inline-block; margin: 8px 0 12px;
            background: rgba(196, 22, 28, 0.3);
            color: rgba(255,255,255,0.8); padding: 3px 12px;
            border-radius: 20px; font-size: 0.78rem; font-weight: 600;
        }
        .legend-desc { color: rgba(255,255,255,0.7); font-size: 0.88rem; line-height: 1.6; }

        /* ===== GALLERY ===== */
        .gallery-grid {
            display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 20px;
        }
        .gallery-item {
            border-radius: var(--radius); overflow: hidden;
            background: var(--mu-white); box-shadow: var(--shadow-sm);
            transition: all 0.3s;
        }
        .gallery-item:hover {
            transform: translateY(-4px); box-shadow: var(--shadow);
        }
        .gallery-item img {
            width: 100%; height: 240px; object-fit: cover; display: block;
            transition: transform 0.4s;
        }
        .gallery-item:hover img { transform: scale(1.05); }
        .gallery-caption {
            padding: 16px 20px;
        }
        .gallery-caption strong { display: block; font-size: 0.92rem; margin-bottom: 4px; }
        .gallery-caption small { color: var(--mu-text-muted); font-size: 0.75rem; }

        /* ===== PROFIL MAHASISWA ===== */
        .student-card {
            background: var(--mu-white); border-radius: var(--radius);
            padding: 40px; box-shadow: var(--shadow);
            display: grid; grid-template-columns: auto 1fr; gap: 30px;
            align-items: center; max-width: 600px;
            border-top: 4px solid var(--mu-red);
        }
        .student-avatar {
            width: 90px; height: 90px; border-radius: 20px;
            background: linear-gradient(135deg, var(--mu-red), var(--mu-red-dark));
            display: grid; place-items: center;
            color: var(--mu-white); font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
        }
        .student-info h3 { font-size: 1.3rem; margin-bottom: 4px; }
        .student-meta { color: var(--mu-text-muted); font-size: 0.88rem; }
        .student-meta span {
            display: inline-block; background: #fef2f2;
            color: var(--mu-red); padding: 3px 12px; border-radius: 20px;
            font-weight: 700; font-size: 0.78rem; margin-top: 8px;
        }

        /* ===== FOOTER ===== */
        .footer {
            background: var(--mu-black); color: rgba(255,255,255,0.5);
            padding: 40px 0; text-align: center; font-size: 0.88rem;
        }
        .footer-brand {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.3rem; color: var(--mu-white);
            margin-bottom: 8px;
        }
        .footer a { color: var(--mu-gold); text-decoration: none; }
        .footer a:hover { text-decoration: underline; }

        /* ===== SCROLL TOP ===== */
        .scroll-top {
            position: fixed; bottom: 30px; right: 30px;
            width: 50px; height: 50px; border-radius: 50%;
            background: var(--mu-red); color: white; border: none;
            font-size: 1.3rem; cursor: pointer;
            box-shadow: 0 8px 25px rgba(196, 22, 28, 0.4);
            opacity: 0; transform: translateY(20px);
            transition: all 0.3s; z-index: 99;
        }
        .scroll-top.show { opacity: 1; transform: translateY(0); }
        .scroll-top:hover { background: var(--mu-red-dark); transform: translateY(-3px); }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero-content { grid-template-columns: 1fr; text-align: center; }
            .hero-desc { margin-inline: auto; }
            .hero-stats { justify-content: center; }
            .hero-image { max-width: 500px; margin-inline: auto; }
            .hero-image img { height: 250px; }
            .nav-links { display: none; flex-direction: column; width: 100%;
                position: absolute; top: 70px; left: 0;
                background: rgba(26, 26, 46, 0.98); padding: 16px;
                border-top: 2px solid var(--mu-red);
            }
            .nav-links.active { display: flex; }
            .nav-toggle { display: block; }
            .trophy-grid { grid-template-columns: repeat(2, 1fr); }
            .gallery-grid { grid-template-columns: 1fr; }
            .student-card { grid-template-columns: 1fr; text-align: center; }
            .legend-grid { grid-template-columns: 1fr; }
            .timeline { padding-left: 30px; }
        }

        @media (max-width: 480px) {
            .trophy-grid { grid-template-columns: 1fr; }
            .hero-stats { gap: 20px; }
        }

        /* ===== ANIMATIONS ===== */
        .fade-in {
            opacity: 0; transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        .fade-in.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
    <div class="container nav-inner">
        <a href="#home" class="nav-brand">
            <span class="devil">😈</span> MANCHESTER UNITED
        </a>
        <button class="nav-toggle" onclick="document.querySelector('.nav-links').classList.toggle('active')" aria-label="Menu">☰</button>
        <nav class="nav-links" aria-label="Navigasi utama">
            <a href="#home">Home</a>
            <a href="#trophies">Trofi</a>
            <a href="#sejarah">Sejarah</a>
            <a href="#legenda">Legenda</a>
            <a href="#galeri">Galeri</a>
            <a href="#profil">Profil</a>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="hero" id="home">
    <div class="container hero-content">
        <div>
            <div class="hero-badge">⚽ Est. 1878 · Newton Heath → Manchester United</div>
            <h1>THE <span>RED DEVILS</span><br>GLORY GLORY<br>MAN UNITED</h1>
            <p class="hero-desc">
                Dari Newton Heath 1878 hingga menjadi klub paling sukses di Inggris.
                20 gelar liga, 3 Champions League, dan semangat yang tak pernah padam.
                Ini adalah Theatre of Dreams.
            </p>
            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="hero-stat-num">68</div>
                    <div class="hero-stat-label">Total Trofi</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-num">20</div>
                    <div class="hero-stat-label">Gelar Liga</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-num">3</div>
                    <div class="hero-stat-label">Champions League</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-num">1878</div>
                    <div class="hero-stat-label">Didirikan</div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?= htmlspecialchars($images[0]['url']) ?>"
                 alt="<?= htmlspecialchars($images[0]['alt']) ?>"
                 loading="eager">
        </div>
    </div>
</section>

<!-- TROPHY CABINET -->
<section class="section" id="trophies">
    <div class="container">
        <div class="section-line"></div>
        <h2 class="section-title">🏆 LEMARI TROFI</h2>
        <p class="section-subtitle">Koleksi lengkap trofi Manchester United — klub paling sukses di Inggris dengan total 68 trofi senior.</p>
        <div class="trophy-grid">
            <?php foreach ($trophies as $t): ?>
            <div class="trophy-card fade-in">
                <div class="trophy-icon"><?= $t['icon'] ?></div>
                <div class="trophy-count"><?= $t['count'] ?></div>
                <div class="trophy-name"><?= htmlspecialchars($t['title']) ?></div>
                <div class="trophy-detail"><?= htmlspecialchars($t['detail']) ?></div>
            </div>
            <?php endforeach; ?>
            <div class="trophy-card trophy-total fade-in">
                <div class="trophy-icon">👑</div>
                <div class="trophy-count">68</div>
                <div class="trophy-name">TOTAL TROFI SENIOR SEPANJANG MASA</div>
                <div class="trophy-detail">Klub paling banyak meraih trofi di Inggris</div>
            </div>
        </div>
    </div>
</section>

<!-- SEJARAH / TIMELINE -->
<section class="section section-dark" id="sejarah">
    <div class="container">
        <div class="section-line"></div>
        <h2 class="section-title">📜 PERJALANAN SEJARAH</h2>
        <p class="section-subtitle">Dari Busby Babes hingga era modern — setiap era meninggalkan jejak tak terlupakan.</p>
        <div class="timeline">
            <?php foreach ($eras as $era): ?>
            <div class="timeline-item fade-in">
                <div class="timeline-title"><?= htmlspecialchars($era['title']) ?></div>
                <p class="timeline-desc"><?= htmlspecialchars($era['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- LEGENDA -->
<section class="section section-dark" id="legenda" style="padding-top: 0;">
    <div class="container">
        <div class="section-line"></div>
        <h2 class="section-title">⭐ LEGENDA ABADI</h2>
        <p class="section-subtitle">Pemain dan manajer yang mengukir sejarah Manchester United.</p>
        <div class="legend-grid">
            <?php foreach ($legends as $l): ?>
            <div class="legend-card fade-in">
                <div class="legend-name"><?= htmlspecialchars($l['name']) ?></div>
                <div class="legend-role"><?= htmlspecialchars($l['role']) ?></div>
                <div class="legend-years"><?= htmlspecialchars($l['years']) ?></div>
                <p class="legend-desc"><?= htmlspecialchars($l['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- GALERI -->
<section class="section" id="galeri">
    <div class="container">
        <div class="section-line"></div>
        <h2 class="section-title">📸 GALERI OLD TRAFFORD</h2>
        <p class="section-subtitle">Foto-foto dari Theatre of Dreams — stadion kebanggaan Manchester United sejak 1910.</p>
        <div class="gallery-grid">
            <?php foreach ($images as $img): ?>
            <div class="gallery-item fade-in">
                <img src="<?= htmlspecialchars($img['url']) ?>"
                     alt="<?= htmlspecialchars($img['alt']) ?>"
                     loading="lazy">
                <div class="gallery-caption">
                    <strong><?= htmlspecialchars($img['caption']) ?></strong>
                    <small><?= htmlspecialchars($img['credit']) ?></small>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PROFIL MAHASISWA -->
<section class="section section-red" id="profil">
    <div class="container">
        <div class="section-line"></div>
        <h2 class="section-title">👤 PROFIL MAHASISWA</h2>
        <p class="section-subtitle">Tugas Interface Web — Rekayasa Perangkat Lunak</p>
        <div class="student-card">
            <div class="student-avatar"><?= strtoupper(substr($student['username'], 0, 1)) ?></div>
            <div class="student-info">
                <h3><?= htmlspecialchars($student['name']) ?></h3>
                <div class="student-meta">
                    NIM: <?= htmlspecialchars($student['nim']) ?><br>
                    Username: <?= htmlspecialchars($student['username']) ?><br>
                    <span>😈 GGMU — Glory Glory Man United</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="footer-brand">😈 GLORY GLORY MAN UNITED</div>
        <p>&copy; <?= htmlspecialchars($currentYear) ?> <?= htmlspecialchars($student['name']) ?> · RPL · Tugas Interface Web</p>
        <p style="margin-top: 8px;">Foto-foto dari <a href="https://commons.wikimedia.org/" target="_blank" rel="noopener">Wikimedia Commons</a> (Creative Commons)</p>
    </div>
</footer>

<!-- SCROLL TO TOP -->
<button class="scroll-top" id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Scroll ke atas">↑</button>

<script>
    // Scroll-to-top button
    const scrollBtn = document.getElementById('scrollTop');
    window.addEventListener('scroll', () => {
        scrollBtn.classList.toggle('show', window.scrollY > 400);
    });

    // Fade-in on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

    // Mobile nav auto-close
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            document.querySelector('.nav-links').classList.remove('active');
        });
    });

    // Smooth counter animation for hero stats
    document.querySelectorAll('.hero-stat-num').forEach(el => {
        const target = parseInt(el.textContent);
        if (isNaN(target)) return;
        let current = 0;
        const step = Math.ceil(target / 60);
        const interval = setInterval(() => {
            current += step;
            if (current >= target) { current = target; clearInterval(interval); }
            el.textContent = current;
        }, 25);
    });
</script>

</body>
</html>
