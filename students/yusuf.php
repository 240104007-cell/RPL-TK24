<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Yusuf Rizal Indrianto
// NIM       : 240104013
// Username  : yusuf
//
// Aturan: seluruh HTML, CSS, JavaScript, dan PHP tugas mahasiswa
//         ditempatkan pada SATU file ini.
// ============================================================

declare(strict_types=1);

$student = [
    'name' => 'Yusuf Rizal Indrianto',
    'nim' => '240104013',
    'username' => 'yusuf',
];

$pageTitle = 'RaceLab - ' . $student['name'];
$currentYear = date('Y');
$serverTime = date('d-m-Y H:i:s');
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta
        name="description"
        content="Tugas Interface Web Rekayasa Perangkat Lunak - Yusuf Rizal Indrianto"
    >

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <style>
        /* =====================================================
           RESET
        ===================================================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.78),
                    rgba(0, 0, 0, 0.90)
                ),
                linear-gradient(
                    135deg,
                    #111 25%,
                    #222 25%,
                    #222 50%,
                    #111 50%,
                    #111 75%,
                    #222 75%
                );
            background-size: cover, 40px 40px;
            background-attachment: fixed;
            color: white;
            line-height: 1.6;
        }

        /* =====================================================
           NAVBAR
        ===================================================== */
        nav {
            min-height: 70px;
            background: rgba(5, 5, 5, 0.95);
            border-bottom: 3px solid #e10600;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 7%;

            position: sticky;
            top: 0;
            z-index: 100;

            backdrop-filter: blur(10px);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #e10600;
            letter-spacing: 2px;
        }

        .logo span {
            color: white;
        }

        .nav-menu {
            display: flex;
            gap: 25px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #e10600;
        }

        /* =====================================================
           HERO
        ===================================================== */
        .hero {
            min-height: 560px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 60px 8%;

            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 500px;
            height: 500px;

            background: #e10600;
            opacity: 0.08;

            border-radius: 50%;

            right: -120px;
            top: 30px;
        }

        .hero-text {
            max-width: 620px;
            z-index: 2;
        }

        .small-title {
            color: #e10600;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 4px;
            margin-bottom: 15px;
        }

        .hero h1 {
            font-size: clamp(40px, 6vw, 70px);
            line-height: 1.05;
            text-transform: uppercase;
            font-style: italic;
        }

        .hero h1 span {
            color: #e10600;
        }

        .hero p {
            margin-top: 20px;
            color: #ccc;
            font-size: 18px;
            line-height: 1.7;
        }

        /* =====================================================
           BUTTON
        ===================================================== */
        .button {
            display: inline-block;

            margin-top: 30px;
            padding: 14px 30px;

            background: #e10600;
            color: white;

            text-decoration: none;
            font-weight: bold;

            border-radius: 5px;

            border: 1px solid #e10600;

            transition: 0.3s;
        }

        .button:hover {
            background: white;
            color: #e10600;
            transform: translateY(-3px);
        }

        .button-secondary {
            margin-left: 10px;
            background: transparent;
            border: 1px solid #555;
        }

        .button-secondary:hover {
            background: #e10600;
            color: white;
            border-color: #e10600;
        }

        /* =====================================================
           MOBIL BALAP CSS
        ===================================================== */
        .car {
            width: 420px;
            height: 180px;

            position: relative;
            z-index: 2;

            margin-right: 40px;
        }

        .car-body {
            position: absolute;

            width: 330px;
            height: 75px;

            background: #e10600;

            left: 45px;
            top: 65px;

            border-radius: 80px 100px 20px 20px;

            box-shadow:
                0 0 25px rgba(225, 6, 0, 0.5);
        }

        .car-roof {
            position: absolute;

            width: 150px;
            height: 70px;

            background: #e10600;

            left: 130px;
            top: 20px;

            border-radius: 90px 90px 0 0;
        }

        .window {
            position: absolute;

            width: 100px;
            height: 45px;

            background: #111;

            left: 150px;
            top: 28px;

            border-radius: 50px 50px 0 0;

            border: 3px solid #333;
        }

        .wheel {
            position: absolute;

            width: 60px;
            height: 60px;

            background: #111;

            border: 8px solid #555;

            border-radius: 50%;

            bottom: 5px;
        }

        .wheel-left {
            left: 80px;
        }

        .wheel-right {
            right: 70px;
        }

        .wheel::after {
            content: "";

            position: absolute;

            width: 18px;
            height: 18px;

            background: #e10600;

            border-radius: 50%;

            top: 13px;
            left: 13px;
        }

        .spoiler {
            position: absolute;

            width: 80px;
            height: 10px;

            background: #111;

            right: 20px;
            top: 60px;

            transform: rotate(-5deg);
        }

        /* =====================================================
           DASHBOARD
        ===================================================== */
        .dashboard {
            background: #0a0a0a;
            padding: 70px 8%;
            border-top: 1px solid #333;
        }

        .dashboard-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .dashboard-title h2 {
            font-size: 32px;
            text-transform: uppercase;
        }

        .dashboard-title span {
            color: #e10600;
        }

        .dashboard-title p {
            color: #999;
            margin-top: 8px;
        }

        /* =====================================================
           CARDS
        ===================================================== */
        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: #161616;
            padding: 30px;

            border-left: 4px solid #e10600;

            border-radius: 5px;

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            background: #202020;
            box-shadow: 0 10px 30px rgba(225, 6, 0, 0.15);
        }

        .card-icon {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #e10600;
            margin-bottom: 15px;
        }

        .card p {
            color: #aaa;
            line-height: 1.6;
        }

        /* =====================================================
           IDENTITAS
        ===================================================== */
        .identity {
            padding: 70px 8%;
            background: #111;
        }

        .identity-container {
            max-width: 1000px;
            margin: auto;
        }

        .identity-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .identity-title h2 {
            font-size: 32px;
            text-transform: uppercase;
        }

        .identity-title span {
            color: #e10600;
        }

        .identity-card {
            display: grid;
            grid-template-columns: 150px 1fr;
            gap: 30px;

            background: #161616;

            padding: 35px;

            border: 1px solid #333;
            border-left: 4px solid #e10600;

            border-radius: 8px;
        }

        .avatar {
            width: 120px;
            height: 120px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #e10600;

            border-radius: 50%;

            font-size: 45px;
            font-weight: bold;

            box-shadow:
                0 0 30px rgba(225, 6, 0, 0.35);
        }

        .identity-info h3 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .identity-info p {
            color: #aaa;
            margin: 7px 0;
        }

        .identity-info strong {
            color: white;
        }

        /* =====================================================
           SERVER TIME
        ===================================================== */
        .time-box {
            margin-top: 40px;

            text-align: center;

            background: #e10600;

            padding: 20px;

            border-radius: 5px;

            box-shadow:
                0 8px 25px rgba(225, 6, 0, 0.2);
        }

        .time-box h3 {
            font-size: 15px;
            letter-spacing: 2px;
        }

        #waktu {
            font-size: 28px;
            font-weight: bold;
            margin-top: 8px;
        }

        /* =====================================================
           FOOTER
        ===================================================== */
        footer {
            text-align: center;

            padding: 30px;

            background: #050505;

            color: #777;

            border-top: 1px solid #222;
        }

        footer span {
            color: #e10600;
        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */
        @media (max-width: 900px) {

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-text {
                max-width: 700px;
            }

            .hero h1 {
                font-size: 42px;
            }

            .car {
                margin-top: 50px;
                margin-right: 0;
                transform: scale(0.8);
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .identity-card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .avatar {
                margin: auto;
            }

            .nav-menu {
                gap: 12px;
            }
        }

        @media (max-width: 600px) {

            nav {
                padding: 15px 5%;
                flex-direction: column;
                gap: 10px;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                padding: 50px 5%;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 16px;
            }

            .car {
                transform: scale(0.65);
                margin-left: -50px;
            }

            .dashboard,
            .identity {
                padding-left: 5%;
                padding-right: 5%;
            }

            .button {
                margin-top: 15px;
                display: block;
            }

            .button-secondary {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- =====================================================
         NAVBAR
    ====================================================== -->
    <nav>

        <div class="logo">
            RACE<span>LAB</span>
        </div>

        <div class="nav-menu">
            <a href="#home">HOME</a>
            <a href="#keahlian">KEAHLIAN</a>
            <a href="#tentang">TENTANG</a>
        </div>

    </nav>


    <!-- =====================================================
         HERO
    ====================================================== -->
    <section class="hero" id="home">

        <div class="hero-text">

            <div class="small-title">
                RACING TECHNOLOGY
            </div>

            <h1>
                YUSUF<br>
                <span>RIZAL INDRIANTO</span>
            </h1>

            <p>
                Mahasiswa D3 Teknik Komputer yang sedang mempelajari
                Rekayasa Perangkat Lunak, pemrograman web, jaringan
                komputer, dan teknologi Internet of Things.
            </p>

            <a href="#keahlian" class="button">
                LIHAT KEAHLIAN
            </a>

            <a href="#tentang" class="button button-secondary">
                TENTANG SAYA
            </a>

        </div>


        <!-- =================================================
             MOBIL BALAP
        ================================================== -->
        <div class="car">

            <div class="car-roof"></div>

            <div class="window"></div>

            <div class="car-body"></div>

            <div class="spoiler"></div>

            <div class="wheel wheel-left"></div>

            <div class="wheel wheel-right"></div>

        </div>

    </section>


    <!-- =====================================================
         KEAHLIAN / DASHBOARD
    ====================================================== -->
    <section class="dashboard" id="keahlian">

        <div class="dashboard-title">

            <h2>
                <span>RACE</span> DASHBOARD
            </h2>

            <p>
                Bidang yang sedang saya pelajari dalam perkuliahan.
            </p>

        </div>


        <div class="cards">

            <div class="card">

                <div class="card-icon">🏎️</div>

                <h3>PEMROGRAMAN WEB</h3>

                <p>
                    Mempelajari HTML, CSS, PHP, Laravel, serta
                    pengembangan aplikasi berbasis web.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">🔧</div>

                <h3>JARINGAN KOMPUTER</h3>

                <p>
                    Mempelajari jaringan komputer, MikroTik,
                    konfigurasi jaringan, dan administrasi jaringan.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">🏁</div>

                <h3>INTERNET OF THINGS</h3>

                <p>
                    Mempelajari konsep Internet of Things serta
                    penerapannya dalam sistem monitoring menggunakan
                    sensor dan perangkat IoT.
                </p>

            </div>

        </div>


        <!-- =================================================
             SERVER TIME
        ================================================== -->
        <div class="time-box">

            <h3>SERVER TIME</h3>

            <div id="waktu">
                <?= htmlspecialchars($serverTime, ENT_QUOTES, 'UTF-8') ?>
            </div>

        </div>

    </section>


    <!-- =====================================================
         TENTANG SAYA
    ====================================================== -->
    <section class="identity" id="tentang">

        <div class="identity-container">

            <div class="identity-title">

                <h2>
                    TENTANG <span>SAYA</span>
                </h2>

            </div>


            <div class="identity-card">

                <div class="avatar">
                    <?= strtoupper(substr($student['username'], 0, 1)) ?>
                </div>


                <div class="identity-info">

                    <h3>
                        <?= htmlspecialchars(
                            $student['name'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>
                    </h3>

                    <p>
                        <strong>NIM:</strong>
                        <?= htmlspecialchars(
                            $student['nim'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>
                    </p>

                    <p>
                        <strong>Username:</strong>
                        <?= htmlspecialchars(
                            $student['username'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>
                    </p>

                    <p>
                        <strong>Program Studi:</strong>
                        D3 Teknik Komputer
                    </p>

                    <p>
                        <strong>Mata Kuliah:</strong>
                        Rekayasa Perangkat Lunak
                    </p>

                    <p>
                        <strong>Project:</strong>
                        Interface Web
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FOOTER
    ====================================================== -->
    <footer>

        <p>
            &copy; <?= htmlspecialchars(
                $currentYear,
                ENT_QUOTES,
                'UTF-8'
            ) ?>

            <span>RACELAB</span>
            -
            <?= htmlspecialchars(
                $student['name'],
                ENT_QUOTES,
                'UTF-8'
            ) ?>
        </p>

        <p>
            Rekayasa Perangkat Lunak · D3 Teknik Komputer
        </p>

    </footer>


    <!-- =====================================================
         JAVASCRIPT
    ====================================================== -->
    <script>

        function updateWaktu() {

            const sekarang = new Date();

            const waktu = sekarang.toLocaleTimeString(
                "id-ID",
                {
                    hour: "2-digit",
                    minute: "2-digit",
                    second: "2-digit"
                }
            );

            document.getElementById("waktu").innerHTML = waktu;
        }

        updateWaktu();

        setInterval(updateWaktu, 1000);

    </script>

</body>

</html>