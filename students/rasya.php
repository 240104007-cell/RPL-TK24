<?php
// ============================================================
// TUGAS INTERFACE WEB - REKAYASA PERANGKAT LUNAK
// Mahasiswa : Muhammad Rasya Robi Ahnaf Sandjoyo
// NIM       : 240104008
// Username  : rasya
//
// Aturan: seluruh HTML, CSS, JavaScript, dan PHP tugas mahasiswa
//          ditempatkan pada SATU file ini.
// ============================================================

declare(strict_types=1);

$student = [
    'name' => 'Muhammad Rasya Robi Ahnaf Sandjoyo',
    'nim' => '240104008',
    'username' => 'rasya',
];

$pageTitle = 'Sistem Inventaris Lab - ' . $student['name'];$currentYear = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Inventaris Laboratorium - Rekayasa Perangkat Lunak">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root {
            --bg: #050711;
            --panel: rgba(10, 15, 31, .82);
            --line: rgba(0, 255, 224, .22);
            --cyan: #00ffe0;
            --blue: #4d7cff;
            --purple: #a855f7;
            --text: #eefcff;
            --muted: #91a7b7;
            --danger: #ff3b81;
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
            min-height: 100vh;
            overflow-x: hidden;
            color: var(--text);
            font-family: "Segoe UI", Inter, Arial, sans-serif;
            background:
                radial-gradient(circle at 15% 20%, rgba(0,255,224,.09), transparent 28%),
                radial-gradient(circle at 85% 75%, rgba(168,85,247,.12), transparent 30%),
                var(--bg);
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: .25;
            background-image:
                linear-gradient(rgba(0,255,224,.045) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,255,224,.045) 1px, transparent 1px);
            background-size: 42px 42px;
            mask-image: linear-gradient(to bottom, black, transparent 85%);
        }

        .scanline {
            position: fixed;
            inset: 0;
            z-index: 10;
            pointer-events: none;
            background: linear-gradient(
                to bottom,
                transparent 0%,
                rgba(0,255,224,.025) 50%,
                transparent 100%
            );
            background-size: 100% 7px;
            mix-blend-mode: screen;
        }

        .shell {
            width: min(1120px, calc(100% - 36px));
            margin: auto;
        }

        nav {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 24px 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            letter-spacing: .12em;
            text-transform: uppercase;
            font-size: .88rem;
        }

        .brand-mark {
            width: 35px;
            height: 35px;
            display: grid;
            place-items: center;
            border: 1px solid var(--cyan);
            color: var(--cyan);
            box-shadow: 0 0 18px rgba(0,255,224,.25);
            background: rgba(0,255,224,.05);
        }

        .status {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--muted);
            font: 600 .72rem/1 monospace;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--cyan);
            box-shadow: 0 0 12px var(--cyan);
            animation: pulse 1.5s infinite;
        }

        main {
            position: relative;
            z-index: 1;
            min-height: calc(100vh - 84px);
            display: grid;
            place-items: center;
            padding: 55px 0 80px;
        }

        .hero {
            width: 100%;
            position: relative;
            padding: clamp(32px, 6vw, 72px);
            border: 1px solid var(--line);
            background: linear-gradient(145deg, rgba(11,18,38,.9), rgba(5,7,17,.72));
            box-shadow:
                0 0 0 1px rgba(77,124,255,.04),
                0 25px 80px rgba(0,0,0,.45),
                inset 0 0 70px rgba(0,255,224,.025);
            overflow: hidden;
        }

        .hero::before,
        .hero::after {
            content: "";
            position: absolute;
            width: 85px;
            height: 85px;
            pointer-events: none;
        }

        .hero::before {
            top: -1px;
            left: -1px;
            border-top: 2px solid var(--cyan);
            border-left: 2px solid var(--cyan);
        }

        .hero::after {
            right: -1px;
            bottom: -1px;
            border-right: 2px solid var(--purple);
            border-bottom: 2px solid var(--purple);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 22px;
            color: var(--cyan);
            font: 700 .76rem/1 monospace;
            letter-spacing: .22em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: ">";
            color: var(--purple);
        }

        h1 {
            max-width: 850px;
            margin-bottom: 20px;
            font-size: clamp(2.35rem, 7vw, 5.4rem);
            line-height: .95;
            letter-spacing: -.055em;
            text-transform: uppercase;
            text-shadow: 0 0 32px rgba(0,255,224,.13);
        }

        h1 span {
            color: var(--cyan);
            text-shadow:
                0 0 8px rgba(0,255,224,.55),
                0 0 35px rgba(0,255,224,.22);
        }

        .description {
            max-width: 670px;
            color: var(--muted);
            font-size: clamp(1rem, 2vw, 1.12rem);
            line-height: 1.8;
        }

        .terminal {
            margin: 34px 0;
            padding: 18px 20px;
            border: 1px solid rgba(77,124,255,.2);
            background: rgba(0,0,0,.24);
            font: .82rem/1.7 monospace;
            color: #abc0ce;
        }

        .terminal-line {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .terminal-line b {
            color: var(--cyan);
        }

        .terminal-line strong {
            color: #fff;
            font-weight: 600;
        }

        .actions {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 52px;
            padding: 0 25px;
            border: 1px solid var(--cyan);
            color: #03100f;
            background: var(--cyan);
            text-decoration: none;
            font: 800 .78rem/1 monospace;
            letter-spacing: .12em;
            text-transform: uppercase;
            box-shadow: 0 0 22px rgba(0,255,224,.18);
            transition: .2s ease;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 35px rgba(0,255,224,.35);
        }

        .btn.secondary {
            color: var(--cyan);
            background: transparent;
            border-color: rgba(0,255,224,.35);
            box-shadow: none;
        }

        .btn.secondary:hover {
            background: rgba(0,255,224,.06);
            box-shadow: 0 0 24px rgba(0,255,224,.12);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 46px;
        }

        .stat {
            padding: 18px;
            border: 1px solid rgba(145,167,183,.13);
            background: rgba(255,255,255,.018);
        }

        .stat-number {
            display: block;
            margin-bottom: 7px;
            color: var(--cyan);
            font: 800 1.2rem monospace;
        }

        .stat-label {
            color: var(--muted);
            font: .68rem monospace;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        footer {
            position: relative;
            z-index: 1;
            padding: 0 0 26px;
            color: #5e7180;
            text-align: center;
            font: .68rem monospace;
            letter-spacing: .08em;
        }

        .corner-code {
            position: absolute;
            right: 24px;
            top: 24px;
            color: rgba(145,167,183,.38);
            font: .64rem/1.7 monospace;
            text-align: right;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: .4; transform: scale(.75); }
        }

        @media (max-width: 700px) {
            .shell {
                width: min(100% - 22px, 1120px);
            }

            nav {
                padding: 16px 0;
            }

            .status {
                display: none;
            }

            main {
                padding: 25px 0 50px;
            }

            .hero {
                padding: 32px 22px;
            }

            .corner-code {
                display: none;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="scanline"></div>

    <div class="shell">
        <nav>
            <div class="brand">
                <div class="brand-mark">⌬</div>
                <span>LAB // <?= htmlspecialchars($student['username']) ?></span>
            </div>

            <div class="status">
                <span class="status-dot"></span>
                SYSTEM ONLINE
            </div>
        </nav>

        <main>
            <section class="hero">
                <div class="corner-code">
                    OPERATOR: <?= htmlspecialchars($student['username']) ?><br>
                    NIM: <?= htmlspecialchars($student['nim']) ?><br>
                    NODE: <span id="nodeTime">000000</span>
                </div>

                <div class="eyebrow">Laboratory Inventory Network</div>

                <h1>
                    Sistem Inventaris <span>Laboratorium</span>
                </h1>

                <p class="description">
                    Aplikasi praktikum Rekayasa Perangkat Lunak untuk mengelola informasi inventaris laboratorium. 
                    Dikelola oleh <?= htmlspecialchars($student['name']) ?> (NIM: <?= htmlspecialchars($student['nim']) ?>).
                </p>

                <div class="terminal">
                    <div class="terminal-line">
                        <b><?= htmlspecialchars($student['username']) ?>@rpl-lab:~$</b>
                        <strong>whoami</strong>
                    </div>
                    <div class="terminal-line">
                        <span>[AUTH]</span>
                        <span>Operator:</span>
                        <strong><?= htmlspecialchars($student['name']) ?> (<?= htmlspecialchars($student['nim']) ?>)</strong>
                    </div>
                    <div class="terminal-line">
                        <span>[OK]</span>
                        <span>Server time:</span>
                        <strong><span id="serverTime">--</span></strong>
                    </div>
                    <div class="terminal-line">
                        <span>[OK]</span>
                        <span>Database interface ready...</span>
                    </div>
                </div>

                <div class="actions">
                    <a href="#" class="btn">ACCESS SYSTEM →</a>
                    <a href="#info" class="btn secondary">SYSTEM INFO</a>
                </div>

                <div class="stats" id="info">
                    <div class="stat">
                        <span class="stat-number">01</span>
                        <span class="stat-label">Inventory Core</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">RPL</span>
                        <span class="stat-label">Practical Module</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">LIVE</span>
                        <span class="stat-label">Server Status</span>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            Sistem Inventaris Lab // <?= htmlspecialchars($student['name']) ?> - <?= htmlspecialchars($student['nim']) ?> // <span id="year"><?= htmlspecialchars((string)$currentYear) ?></span>
        </footer>
    </div>

<script>
(function () {
    const pad = n => String(n).padStart(2, '0');
    function updateClock() {
        const d = new Date();
        const full = `${pad(d.getDate())}-${pad(d.getMonth()+1)}-${d.getFullYear()} ${pad(d.getHours())}:${pad(d.getMinutes())}:${pad(d.getSeconds())}`;
        const node = `${pad(d.getHours())}${pad(d.getMinutes())}${pad(d.getSeconds())}`;
        document.getElementById('serverTime').textContent = full;
        document.getElementById('nodeTime').textContent = node;
    }
    updateClock();
    setInterval(updateClock, 1000);
})();
</script>
</body>
</html>