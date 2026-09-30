<?php
declare(strict_types=1);

// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Rizki Dwi Lestari
// NIM       : 240104007
// Username  : rizki
//
// Seluruh HTML, CSS, JavaScript, dan PHP berada dalam
// satu file.
// ============================================================

$student = [
    'name' => 'Rizki Dwi Lestari',
    'nim' => '240104007',
    'username' => 'rizki',
];

$pageTitle = 'Interface Web - ' . $student['name'];
$currentYear = date('Y');
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Tugas Interface Web Rekayasa Perangkat Lunak">

    <title>
        <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>
    </title>


    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =====================================================
           VARIABLE
        ===================================================== */

        :root {

            --primary: #4f46e5;
            --secondary: #7c3aed;
            --primary-dark: #3730a3;

            --background: #f5f7ff;
            --white: #ffffff;

            --text: #172033;
            --muted: #68738a;

            --border: #e3e7f0;

            --radius: 20px;

            --shadow:
                0 15px 40px rgba(30, 35, 70, 0.10);

        }


        /* =====================================================
           BODY
        ===================================================== */

        html {
            scroll-behavior: smooth;
        }

        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #f8f9ff,
                    #eef1ff
                );

            color: var(--text);

            line-height: 1.6;

            overflow-x: hidden;

        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {

            width: min(
                1100px,
                calc(100% - 32px)
            );

            margin: auto;

        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .topbar {

            position: sticky;

            top: 0;

            z-index: 100;

            background:
                rgba(255, 255, 255, 0.90);

            backdrop-filter:
                blur(12px);

            border-bottom:
                1px solid var(--border);

        }


        .nav {

            min-height: 70px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

        }


        .brand {

            font-size: 1.1rem;

            font-weight: 800;

            background:
                linear-gradient(
                    90deg,
                    var(--primary),
                    var(--secondary)
                );

            -webkit-background-clip: text;

            -webkit-text-fill-color:
                transparent;

        }


        .nav-links {

            display: flex;

            gap: 8px;

        }


        .nav-links a {

            color: var(--text);

            text-decoration: none;

            font-weight: 600;

            padding:
                8px 14px;

            border-radius: 10px;

            transition:
                all 0.3s ease;

        }


        .nav-links a:hover {

            color: white;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );

            transform:
                translateY(-2px);

        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            position: relative;

            padding:
                90px 0 60px;

            overflow: hidden;

        }


        .hero::before {

            content: "";

            position: absolute;

            width: 350px;

            height: 350px;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    rgba(79, 70, 229, 0.15),
                    rgba(124, 58, 237, 0.08)
                );

            top: -130px;

            right: -100px;

            animation:
                floating 6s ease-in-out infinite;

        }


        .hero::after {

            content: "";

            position: absolute;

            width: 180px;

            height: 180px;

            border-radius: 50%;

            background:
                rgba(124, 58, 237, 0.08);

            bottom: -80px;

            left: -60px;

            animation:
                floating 7s ease-in-out infinite reverse;

        }


        .hero-grid {

            position: relative;

            z-index: 2;

            display: grid;

            grid-template-columns:
                1.25fr 0.75fr;

            gap: 45px;

            align-items: center;

        }


        /* =====================================================
           HERO CONTENT
        ===================================================== */

        .hero-content {

            animation:
                fadeUp 0.8s ease forwards;

        }


        .eyebrow {

            display: inline-block;

            color:
                var(--primary);

            background:
                rgba(79, 70, 229, 0.10);

            padding:
                7px 14px;

            border-radius:
                50px;

            font-size:
                0.78rem;

            font-weight:
                800;

            letter-spacing:
                0.08em;

            text-transform:
                uppercase;

        }


        h1 {

            font-size:
                clamp(
                    2.5rem,
                    6vw,
                    4.5rem
                );

            line-height:
                1.05;

            letter-spacing:
                -0.05em;

            margin:
                18px 0;

        }


        h1 span {

            background:
                linear-gradient(
                    90deg,
                    var(--primary),
                    var(--secondary)
                );

            -webkit-background-clip:
                text;

            -webkit-text-fill-color:
                transparent;

        }


        .lead {

            max-width:
                680px;

            color:
                var(--muted);

            font-size:
                1.08rem;

        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .actions {

            display: flex;

            gap: 12px;

            flex-wrap: wrap;

            margin-top: 28px;

        }


        .btn {

            display: inline-block;

            padding:
                12px 20px;

            border-radius:
                12px;

            text-decoration:
                none;

            font-weight:
                700;

            transition:
                all 0.3s ease;

        }


        .btn-primary {

            color: white;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );

            box-shadow:
                0 8px 20px
                rgba(79, 70, 229, 0.25);

        }


        .btn-primary:hover {

            transform:
                translateY(-4px);

            box-shadow:
                0 14px 28px
                rgba(79, 70, 229, 0.35);

        }


        .btn-secondary {

            color:
                var(--text);

            background:
                white;

            border:
                1px solid var(--border);

        }


        .btn-secondary:hover {

            color:
                var(--primary);

            border-color:
                var(--primary);

            transform:
                translateY(-4px);

        }


        /* =====================================================
           PROFILE CARD
        ===================================================== */

        .profile-card {

            background:
                rgba(255, 255, 255, 0.94);

            border:
                1px solid var(--border);

            border-radius:
                var(--radius);

            padding:
                28px;

            box-shadow:
                var(--shadow);

            animation:
                fadeUp 1s ease forwards;

            transition:
                all 0.3s ease;

        }


        .profile-card:hover {

            transform:
                translateY(-8px);

            box-shadow:
                0 25px 55px
                rgba(30, 35, 70, 0.14);

        }


        .avatar {

            width: 80px;

            height: 80px;

            border-radius:
                22px;

            display:
                grid;

            place-items:
                center;

            color:
                white;

            font-size:
                2rem;

            font-weight:
                800;

            background:
                linear-gradient(
                    135deg,
                    var(--primary),
                    var(--secondary)
                );

            box-shadow:
                0 10px 25px
                rgba(79, 70, 229, 0.25);

            margin-bottom:
                18px;

            animation:
                pulse 3s ease-in-out infinite;

        }


        .profile-card h2 {

            font-size:
                1.5rem;

            margin-bottom:
                18px;

        }


        .meta {

            display:
                grid;

            gap:
                10px;

        }


        .meta-row {

            padding:
                12px 0;

            border-bottom:
                1px solid var(--border);

        }


        .meta-row:last-child {

            border-bottom:
                none;

        }


        .label {

            display:
                block;

            color:
                var(--muted);

            font-size:
                0.82rem;

        }


        .value {

            font-weight:
                700;

            word-break:
                break-word;

        }


        /* =====================================================
           SECTION
        ===================================================== */

        section {

            padding:
                50px 0;

        }


        .section-title {

            margin-bottom:
                25px;

        }


        .section-title h2 {

            font-size:
                2rem;

            margin-bottom:
                5px;

        }


        .section-title p {

            color:
                var(--muted);

        }


        /* =====================================================
           CARD FITUR
        ===================================================== */

        .grid-3 {

            display:
                grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap:
                18px;

        }


        .card {

            background:
                rgba(255, 255, 255, 0.95);

            border:
                1px solid var(--border);

            border-radius:
                var(--radius);

            padding:
                25px;

            box-shadow:
                0 8px 25px
                rgba(30, 35, 70, 0.05);

            transition:
                all 0.3s ease;

            animation:
                fadeUp 1s ease forwards;

        }


        .card:hover {

            transform:
                translateY(-8px);

            border-color:
                rgba(79, 70, 229, 0.30);

            box-shadow:
                0 18px 40px
                rgba(30, 35, 70, 0.10);

        }


        .card-number {

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            width:
                42px;

            height:
                42px;

            border-radius:
                12px;

            background:
                rgba(79, 70, 229, 0.10);

            color:
                var(--primary);

            font-weight:
                800;

            margin-bottom:
                16px;

        }


        .card strong {

            display:
                block;

            font-size:
                1.05rem;

            margin-bottom:
                8px;

        }


        .card p {

            color:
                var(--muted);

        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            margin-top:
                30px;

            padding:
                40px 0;

            text-align:
                center;

            color:
                var(--muted);

            background:
                rgba(255, 255, 255, 0.65);

            border-top:
                1px solid var(--border);

        }


        /* =====================================================
           ANIMASI
        ===================================================== */

        @keyframes fadeUp {

            from {

                opacity:
                    0;

                transform:
                    translateY(25px);

            }

            to {

                opacity:
                    1;

                transform:
                    translateY(0);

            }

        }


        @keyframes floating {

            0% {

                transform:
                    translateY(0);

            }

            50% {

                transform:
                    translateY(20px);

            }

            100% {

                transform:
                    translateY(0);

            }

        }


        @keyframes pulse {

            0% {

                transform:
                    scale(1);

            }

            50% {

                transform:
                    scale(1.05);

            }

            100% {

                transform:
                    scale(1);

            }

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 780px) {

            .hero-grid {

                grid-template-columns:
                    1fr;

            }


            .grid-3 {

                grid-template-columns:
                    1fr;

            }


            .hero {

                padding-top:
                    60px;

            }


            .nav {

                flex-direction:
                    column;

                align-items:
                    flex-start;

                padding:
                    15px 0;

            }


            .nav-links {

                width:
                    100%;

                overflow-x:
                    auto;

            }


            h1 {

                font-size:
                    2.7rem;

            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     NAVBAR
========================================================= -->

<header class="topbar">

    <div class="container nav">

        <div class="brand">

            RPL /
            <?= htmlspecialchars(
                $student['username'],
                ENT_QUOTES,
                'UTF-8'
            ) ?>

        </div>


        <nav class="nav-links"
             aria-label="Navigasi utama">

            <a href="#home">
                Home
            </a>

            <a href="#fitur">
                Fitur
            </a>

            <a href="#tentang">
                Tentang
            </a>

        </nav>

    </div>

</header>



<!-- =========================================================
     MAIN
========================================================= -->

<main>


    <!-- =====================================================
         HOME / HERO
    ====================================================== -->

    <section
        class="hero"
        id="home"
    >

        <div class="container hero-grid">


            <!-- TEKS UTAMA -->

            <div class="hero-content">

                <div class="eyebrow">

                    Tugas Interface Web

                </div>


                <h1>

                    Interface Web yang

                    <span>
                        modern & sederhana.
                    </span>

                </h1>


                <p class="lead">

                    Ini adalah tugas interface web
                    Rekayasa Perangkat Lunak yang
                    dirancang dengan tampilan sederhana,
                    bersih, responsif, dan mudah digunakan.

                </p>


                <div class="actions">

                    <a
                        class="btn btn-primary"
                        href="#fitur"
                    >
                        Lihat Fitur
                    </a>


                    <a
                        class="btn btn-secondary"
                        href="#tentang"
                    >
                        Profil Saya
                    </a>

                </div>

            </div>



            <!-- =================================================
                 PROFIL MAHASISWA
            ================================================== -->

            <aside
                class="profile-card"
                id="tentang"
            >

                <div class="avatar">

                    <?= strtoupper(
                        substr(
                            $student['username'],
                            0,
                            1
                        )
                    ) ?>

                </div>


                <h2>

                    <?= htmlspecialchars(
                        $student['name'],
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>

                </h2>


                <div class="meta">


                    <!-- NIM -->

                    <div class="meta-row">

                        <span class="label">
                            NIM
                        </span>

                        <span class="value">

                            <?= htmlspecialchars(
                                $student['nim'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>

                        </span>

                    </div>



                    <!-- USERNAME -->

                    <div class="meta-row">

                        <span class="label">
                            Username
                        </span>

                        <span class="value">

                            <?= htmlspecialchars(
                                $student['username'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>

                        </span>

                    </div>



                    <!-- MATA KULIAH -->

                    <div class="meta-row">

                        <span class="label">
                            Mata Kuliah
                        </span>

                        <span class="value">
                            Rekayasa Perangkat Lunak
                        </span>

                    </div>


                </div>

            </aside>

        </div>

    </section>



    <!-- =====================================================
         FITUR
    ====================================================== -->

    <section id="fitur">

        <div class="container">


            <div class="section-title">

                <h2>
                    Contoh Area Interface
                </h2>

                <p>
                    Beberapa prinsip yang digunakan
                    dalam tampilan website ini.
                </p>

            </div>



            <div class="grid-3">


                <!-- CARD 1 -->

                <article class="card">

                    <div class="card-number">
                        01
                    </div>

                    <strong>
                        Informasi
                    </strong>

                    <p>

                        Informasi utama dibuat jelas
                        menggunakan hierarki visual
                        sehingga mudah ditemukan
                        oleh pengguna.

                    </p>

                </article>



                <!-- CARD 2 -->

                <article class="card">

                    <div class="card-number">
                        02
                    </div>

                    <strong>
                        Interaksi
                    </strong>

                    <p>

                        Tombol dan navigasi diberikan
                        efek sederhana agar halaman
                        terasa lebih interaktif.

                    </p>

                </article>



                <!-- CARD 3 -->

                <article class="card">

                    <div class="card-number">
                        03
                    </div>

                    <strong>
                        Responsif
                    </strong>

                    <p>

                        Tampilan dapat menyesuaikan
                        ukuran layar desktop maupun
                        perangkat mobile.

                    </p>

                </article>


            </div>

        </div>

    </section>


</main>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <div class="container">

        &copy;

        <?= htmlspecialchars(
            $currentYear,
            ENT_QUOTES,
            'UTF-8'
        ) ?>

        <?= htmlspecialchars(
            $student['name'],
            ENT_QUOTES,
            'UTF-8'
        ) ?>

        · RPL

    </div>

</footer>



</body>

</html>