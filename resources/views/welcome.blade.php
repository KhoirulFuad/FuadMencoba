<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUGO Style Landing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-1: #041c2f;
            --bg-2: #031427;
            --text-primary: #f4f9ff;
            --text-muted: #9bacbe;
            --btn: #2ca6e5;
            --btn-hover: #1694d7;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            color: var(--text-primary);
            background: radial-gradient(circle at 50% 15%, rgba(20, 106, 169, 0.32), transparent 38%),
                        repeating-linear-gradient(90deg, rgba(70, 118, 168, 0.1) 0, rgba(70, 118, 168, 0.1) 48px, transparent 48px, transparent 96px),
                        linear-gradient(180deg, var(--bg-1), var(--bg-2));
        }

        .page {
            min-height: 100vh;
            padding: 22px 32px 48px;
            display: flex;
            flex-direction: column;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            color: #d8e4f1;
        }

        .brand {
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 34px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            font-size: 24px;
            color: #9fb1c4;
            flex: 1;
            margin-left: 36px;
        }

        .nav-links a {
            color: inherit;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: #e8f5ff;
        }

        .search {
            font-size: 28px;
            color: #a7bbcf;
        }

        .hero {
            margin: auto;
            width: min(1200px, 100%);
            text-align: center;
            padding-top: 18px;
        }

        .logo-row {
            display: inline-flex;
            gap: 18px;
            margin-bottom: 38px;
        }

        .hex {
            width: 150px;
            height: 170px;
            clip-path: polygon(25% 5%, 75% 5%, 100% 50%, 75% 95%, 25% 95%, 0% 50%);
            display: grid;
            place-items: center;
            font-size: 82px;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.92);
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.25);
            box-shadow: inset 0 0 0 5px rgba(255, 255, 255, 0.15);
        }

        .hex.pink { background: #ec2f8f; }
        .hex.blue { background: #2f95db; }
        .hex.green { background: #35be9f; }
        .hex.yellow { background: #e9c123; }

        h1 {
            margin: 0;
            font-weight: 600;
            font-size: clamp(42px, 5vw, 82px);
            line-height: 1.2;
            letter-spacing: 0.2px;
        }

        .subtitle {
            max-width: 1040px;
            margin: 28px auto 34px;
            font-size: clamp(22px, 2.2vw, 38px);
            line-height: 1.6;
            color: var(--text-muted);
            font-weight: 300;
        }

        .cta {
            display: inline-block;
            background: var(--btn);
            color: #eaf8ff;
            text-decoration: none;
            font-size: 30px;
            font-weight: 600;
            padding: 18px 48px;
            border-radius: 4px;
            box-shadow: 0 9px 24px rgba(26, 142, 207, 0.28);
            transition: background .2s ease;
        }

        .cta:hover {
            background: var(--btn-hover);
        }

        @media (max-width: 980px) {
            .brand { font-size: 28px; }
            .nav-links { gap: 12px; font-size: 16px; margin-left: 16px; }
            .search { font-size: 18px; }
            .hex { width: 84px; height: 94px; font-size: 42px; }
            .hero { padding-top: 30px; }
            .subtitle { font-size: 18px; }
            .cta { font-size: 20px; padding: 13px 28px; }
        }
    </style>
</head>
<body>
<div class="page">
    <header class="nav">
        <div class="brand">HUGO</div>
        <nav class="nav-links">
            <a href="#">News</a>
            <a href="#">Docs</a>
            <a href="#">Themes</a>
            <a href="#">Showcase</a>
            <a href="#">Community</a>
            <a href="#">GitHub</a>
        </nav>
        <div class="search">🔍 Search the Docs</div>
    </header>

    <main class="hero">
        <div class="logo-row">
            <div class="hex pink">H</div>
            <div class="hex blue">U</div>
            <div class="hex green">G</div>
            <div class="hex yellow">O</div>
        </div>

        <h1>The world’s fastest framework for building websites</h1>
        <p class="subtitle">
            Hugo is one of the most popular open-source static site generators. With its amazing speed and flexibility,
            Hugo makes building websites fun again.
        </p>
        <a class="cta" href="#">Quick Start</a>
    </main>
</div>
</body>
</html>
