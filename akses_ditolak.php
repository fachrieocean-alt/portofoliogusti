<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Ditolak — Fachrieocean</title>

    <link rel="stylesheet" href="login.css">

    <style>
        .denied-page {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 40px 7%;

            position: relative;
            overflow: hidden;
        }

        .denied-card {
            width: 100%;
            max-width: 460px;

            background: #ffffff;

            border: 1px solid #deded8;

            border-radius: 22px;

            overflow: hidden;

            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);

            position: relative;
            z-index: 2;

            text-align: center;
        }

        .denied-card-top {
            display: flex;

            justify-content: space-between;

            padding: 16px 20px;

            color: #888;

            font-family: monospace;

            font-size: 9px;

            letter-spacing: 1px;

            border-bottom: 1px solid #eeeeea;
        }

        .denied-card-top span:last-child {
            color: #b64b4b;
        }

        .denied-content {
            padding: 45px 35px 35px;
        }

        .denied-icon {
            width: 56px;
            height: 56px;

            margin: 0 auto 22px;

            border-radius: 50%;

            background: #fbeaea;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 26px;

            color: #b64b4b;
        }

        .denied-content p.eyebrow {
            font-family: monospace;
            font-size: 9px;
            letter-spacing: 2px;
            color: #999;
            margin-bottom: 10px;
        }

        .denied-content h1 {
            font-size: 30px;

            letter-spacing: -1px;

            margin-bottom: 14px;
        }

        .denied-content p.desc {
            color: #777;

            font-size: 13px;

            line-height: 1.7;

            max-width: 340px;

            margin: 0 auto 30px;
        }

        .denied-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            height: 48px;

            padding: 0 26px;

            border-radius: 30px;

            background: #171717;

            color: #ffffff;

            font-size: 11px;

            font-weight: 600;

            letter-spacing: 1px;

            text-decoration: none;

            transition: transform 0.2s ease, background 0.2s ease;
        }

        .denied-button:hover {
            transform: translateY(-2px);
            background: #333;
        }
    </style>
</head>

<body>

    <main class="denied-page">

        <div class="denied-card">

            <div class="denied-card-top">
                <span>ACCESS / 403</span>
                <span>● DENIED</span>
            </div>

            <div class="denied-content">

                <div class="denied-icon">⛔</div>

                <p class="eyebrow">RESTRICTED AREA</p>

                <h1>Akses Ditolak</h1>

                <p class="desc">
                    Kamu tidak memiliki izin untuk mengakses halaman ini.
                    Silakan kembali ke halaman portofolio.
                </p>

                <a href="index.html" class="denied-button">
                    <span>KEMBALI KE PORTFOLIO</span>
                    <span>→</span>
                </a>

            </div>

        </div>

    </main>

    <!-- METEOR -->
    <div class="meteor-container">
        <div class="meteor" style="left: 15%; top: 10%; animation-duration: 3s;"></div>
        <div class="meteor" style="left: 40%; top: 20%; animation-duration: 4s;"></div>
        <div class="meteor" style="left: 70%; top: 5%; animation-duration: 3.5s;"></div>
        <div class="meteor" style="left: 85%; top: 35%; animation-duration: 4.5s;"></div>
    </div>

</body>
</html>