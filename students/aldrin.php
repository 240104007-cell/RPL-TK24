 <?php

$student = [
    'name' => 'Aldrin Sandeanto',
    'nim' => '240104001',
    'username' => 'aldrin',
    'program' => 'D3 Teknik Komputer'
];

$pageTitle = 'Aldrin | Computer Networking';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #07111f;
            color: #ffffff;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        /* NAVBAR */
        header {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(7, 17, 31, 0.95);
            border-bottom: 1px solid #1e334d;
        }

        .navbar {
            min-height: 70px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .logo span {
            color: #00d9ff;
        }

        .nav-menu {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-menu a {
            color: #a9bbcf;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #00d9ff;
        }

        /* HERO */
        .hero {
            min-height: 650px;

            display: flex;
            align-items: center;

            background:
                radial-gradient(
                    circle at 80% 30%,
                    rgba(0, 217, 255, 0.12),
                    transparent 30%
                ),
                #07111f;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 60px;
            align-items: center;
        }

        .badge {
            display: inline-block;

            padding: 7px 14px;
            margin-bottom: 20px;

            border: 1px solid #00d9ff;
            border-radius: 30px;

            color: #00d9ff;
            font-size: 12px;
            font-weight: bold;
        }

        .hero h1 {
            font-size: clamp(45px, 7vw, 75px);
            line-height: 1;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #00d9ff;
        }

        .hero p {
            max-width: 650px;

            color: #9db0c5;
            font-size: 17px;
        }

        .buttons {
            margin-top: 30px;

            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 13px 20px;
            border-radius: 10px;

            font-weight: bold;
            transition: 0.3s;
        }

        .btn-primary {
            color: #00121b;
            background: #00d9ff;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 217, 255, 0.25);
        }

        .btn-secondary {
            border: 1px solid #29415c;
            background: #0b1a2b;
            color: white;
        }

        .btn-secondary:hover {
            border-color: #00d9ff;
            transform: translateY(-3px);
        }

        /* PROFILE */
        .profile-card {
            padding: 30px;

            background: #0c1c2f;

            border: 1px solid #1d3852;
            border-radius: 22px;

            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.3);
        }

        .avatar {
            width: 80px;
            height: 80px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 20px;

            border-radius: 20px;

            background: linear-gradient(
                135deg,
                #087ea4,
                #00d9ff
            );

            font-size: 35px;
            font-weight: bold;
        }

        .profile-card h2 {
            margin-bottom: 5px;
        }

        .role {
            color: #00d9ff;
            margin-bottom: 20px;
        }

        .profile-item {
            padding: 13px 0;

            border-bottom: 1px solid #20374e;
        }

        .profile-item:last-child {
            border-bottom: none;
        }

        .profile-item small {
            display: block;
            color: #71879e;
            font-size: 11px;
        }

        .profile-item strong {
            font-size: 14px;
        }

        /* SECTION */
        section {
            padding: 90px 0;
        }

        .section-title {
            margin-bottom: 40px;
        }

        .section-label {
            color: #00d9ff;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title h2 {
            margin-top: 8px;

            font-size: 38px;
        }

        .section-title p {
            max-width: 650px;
            margin-top: 10px;

            color: #8fa4ba;
        }

        /* SKILLS */
        .skills {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .skill-card {
            padding: 25px;

            background: #0c1c2f;

            border: 1px solid #1d3852;
            border-radius: 18px;

            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-8px);
            border-color: #00d9ff;
        }

        .icon {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .skill-card h3 {
            margin-bottom: 8px;
        }

        .skill-card p {
            color: #8fa4ba;
            font-size: 14px;
        }

        /* PROJECT */
        .projects {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .project-card {
            padding: 28px;

            min-height: 250px;

            display: flex;
            flex-direction: column;

            background: #0c1c2f;

            border: 1px solid #1d3852;
            border-radius: 18px;

            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-8px);
            border-color: #00d9ff;
        }

        .project-number {
            color: #00d9ff;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .project-card h3 {
            margin-bottom: 10px;
        }

        .project-card p {
            color: #8fa4ba;
            font-size: 14px;
        }

        .tags {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;

            margin-top: auto;
            padding-top: 20px;
        }

        .tag {
            padding: 5px 9px;

            border: 1px solid #29415c;
            border-radius: 6px;

            color: #9db0c5;
            font-size: 11px;
        }

        /* ABOUT */
        .about {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .about-card {
            padding: 28px;

            background: #0c1c2f;

            border: 1px solid #1d3852;
            border-radius: 18px;
        }

        .about-card h3 {
            margin-bottom: 12px;
        }

        .about-card p {
            color: #8fa4ba;
        }

        /* FOOTER */
        footer {
            padding: 35px 0;

            border-top: 1px solid #1d3852;

            color: #71879e;
            text-align: center;
        }

        footer span {
            color: #00d9ff;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {

            .hero-content {
                grid-template-columns: 1fr;
            }

            .skills {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects {
                grid-template-columns: 1fr;
            }

            .about {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {

            .navbar {
                flex-direction: column;
                padding: 15px 0;
                gap: 12px;
            }

            .nav-menu {
                gap: 15px;
            }

            .nav-menu a {
                font-size: 12px;
            }

            .hero {
                padding: 70px 0;
            }

            .hero h1 {
                font-size: 45px;
            }

            .skills {
                grid-template-columns: 1fr;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                text-align: center;
            }

            section {
                padding: 65px 0;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<header>
    <div class="container navbar">

        <a href="#home" class="logo">
            ALDRIN<span>.DEV</span>
        </a>

        <ul class="nav-menu">
            <li>
                <a href="#home">Home</a>
            </li>

            <li>
                <a href="#skills">Skills</a>
            </li>

            <li>
                <a href="#projects">Projects</a>
            </li>

            <li>
                <a href="#about">About</a>
            </li>
        </ul>

    </div>
</header>


<!-- HERO -->
<section class="hero" id="home">

    <div class="container hero-content">

        <div>

            <div class="badge">
                RPL INTERFACE WEB 2026
            </div>

            <h1>
                Computer
                <span>Networking.</span>
            </h1>

            <p>
                Halo, saya
                <strong>
                    <?= htmlspecialchars($student['name']) ?>
                </strong>.

                Saya mahasiswa
                <?= htmlspecialchars($student['program']) ?>
                yang tertarik pada networking,
                Linux, MikroTik, web development,
                dan Internet of Things.
            </p>

            <div class="buttons">

                <a
                    href="#skills"
                    class="btn btn-primary"
                >
                    Explore Skills →
                </a>

                <a
                    href="#projects"
                    class="btn btn-secondary"
                >
                    My Projects
                </a>

            </div>

        </div>


        <!-- PROFILE CARD -->
        <div class="profile-card">

            <div class="avatar">
                A
            </div>

            <h2>
                <?= htmlspecialchars($student['name']) ?>
            </h2>

            <div class="role">
                <?= htmlspecialchars($student['program']) ?>
            </div>


            <div class="profile-item">

                <small>NIM</small>

                <strong>
                    <?= htmlspecialchars($student['nim']) ?>
                </strong>

            </div>


            <div class="profile-item">

                <small>USERNAME</small>

                <strong>
                    @<?= htmlspecialchars($student['username']) ?>
                </strong>

            </div>


            <div class="profile-item">

                <small>FOCUS</small>

                <strong>
                    Computer & Networking
                </strong>

            </div>


            <div class="profile-item">

                <small>STATUS</small>

                <strong>
                    ● Active Learning
                </strong>

            </div>

        </div>

    </div>

</section>


<!-- SKILLS -->
<section id="skills">

    <div class="container">

        <div class="section-title">

            <div class="section-label">
                Technical Skills
            </div>

            <h2>
                Skills yang saya pelajari
            </h2>

            <p>
                Beberapa bidang teknologi yang sedang
                saya pelajari dalam perkuliahan dan
                pengembangan project.
            </p>

        </div>


        <div class="skills">

            <div class="skill-card">

                <div class="icon">
                    🌐
                </div>

                <h3>
                    Networking
                </h3>

                <p>
                    IP Address, routing, jaringan lokal
                    dan dasar administrasi jaringan.
                </p>

            </div>


            <div class="skill-card">

                <div class="icon">
                    🐧
                </div>

                <h3>
                    Linux
                </h3>

                <p>
                    Linux, Debian, terminal dan
                    konfigurasi server.
                </p>

            </div>


            <div class="skill-card">

                <div class="icon">
                    📡
                </div>

                <h3>
                    MikroTik
                </h3>

                <p>
                    DHCP, IP Address, routing dan
                    konfigurasi jaringan.
                </p>

            </div>


            <div class="skill-card">

                <div class="icon">
                    🤖
                </div>

                <h3>
                    IoT
                </h3>

                <p>
                    Sensor, mikrokontroler dan
                    pengembangan Internet of Things.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- PROJECTS -->
<section id="projects">

    <div class="container">

        <div class="section-title">

            <div class="section-label">
                Projects
            </div>

            <h2>
                Project yang pernah dikerjakan
            </h2>

            <p>
                Contoh project yang berkaitan dengan
                komputer, jaringan dan teknologi IoT.
            </p>

        </div>


        <div class="projects">

            <div class="project-card">

                <div class="project-number">
                    PROJECT 01
                </div>

                <h3>
                    IoT Monitoring
                </h3>

                <p>
                    Sistem monitoring berbasis IoT
                    menggunakan sensor dan
                    mikrokontroler.
                </p>

                <div class="tags">

                    <span class="tag">
                        IoT
                    </span>

                    <span class="tag">
                        Sensor
                    </span>

                    <span class="tag">
                        Arduino
                    </span>

                </div>

            </div>


            <div class="project-card">

                <div class="project-number">
                    PROJECT 02
                </div>

                <h3>
                    Computer Networking
                </h3>

                <p>
                    Praktik konfigurasi jaringan
                    komputer menggunakan Linux
                    dan MikroTik.
                </p>

                <div class="tags">

                    <span class="tag">
                        Linux
                    </span>

                    <span class="tag">
                        MikroTik
                    </span>

                    <span class="tag">
                        TCP/IP
                    </span>

                </div>

            </div>


            <div class="project-card">

                <div class="project-number">
                    PROJECT 03
                </div>

                <h3>
                    Web Interface
                </h3>

                <p>
                    Pembuatan interface website
                    menggunakan HTML, CSS dan PHP.
                </p>

                <div class="tags">

                    <span class="tag">
                        PHP
                    </span>

                    <span class="tag">
                        HTML
                    </span>

                    <span class="tag">
                        CSS
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ABOUT -->
<section id="about">

    <div class="container">

        <div class="section-title">

            <div class="section-label">
                About Me
            </div>

            <h2>
                Mengenal Aldrin
            </h2>

        </div>


        <div class="about">

            <div class="about-card">

                <h3>
                    👨‍💻 Computer & Networking
                </h3>

                <p>
                    Saya adalah mahasiswa
                    <?= htmlspecialchars($student['program']) ?>
                    dengan ketertarikan pada komputer,
                    jaringan, Linux, MikroTik,
                    web development dan IoT.
                </p>

            </div>


            <div class="about-card">

                <h3>
                    🚀 Learning Journey
                </h3>

                <p>
                    Website ini dibuat sebagai interface
                    personal untuk tugas Rekayasa
                    Perangkat Lunak dan menampilkan
                    informasi serta kemampuan saya
                    dalam bidang teknologi.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->
<footer>

    <div class="container">

        &copy; 2026

        <span>
            <?= htmlspecialchars($student['name']) ?>
        </span>

        · RPL Interface Web

    </div>

</footer>

</body>
</html> 
