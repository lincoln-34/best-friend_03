<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Anda terganggu</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #202124; /* Warna gelap khas Chrome Dark Mode */
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: #e8eaed;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            padding-left: 10%; /* Memberikan jarak dari kiri seperti di gambar */
        }

        .container {
            max-width: 600px;
        }

        /* Membuat Ikon Dokumen Sedih Pixel Art dengan CSS */
        .error-icon {
            position: relative;
            width: 44px;
            height: 52px;
            border: 3px solid #9aa0a6;
            border-radius: 2px;
            margin-bottom: 40px;
            background-color: transparent;
        }

        /* Efek lipatan kertas di pojok kanan atas */
        .error-icon::before {
            content: '';
            position: absolute;
            top: -3px;
            right: -3px;
            width: 12px;
            height: 12px;
            border-left: 3px solid #9aa0a6;
            border-bottom: 3px solid #9aa0a6;
            background: #202124;
        }

        /* Mata kiri, mata kanan, dan mulut sedih */
        .error-icon::after {
            content: '';
            position: absolute;
            top: 14px;
            left: 8px;
            width: 4px;
            height: 4px;
            background: #9aa0a6;
            /* Duplikasi kotak untuk mata kanan dan mulut sedih menggunakan box-shadow */
            box-shadow: 
                16px 0 0 #9aa0a6,    /* Mata kanan */
                4px 16px 0 #9aa0a6,   /* Kiri mulut */
                8px 14px 0 #9aa0a6,   /* Atas mulut (lengkung sedih) */
                12px 14px 0 #9aa0a6,  /* Atas mulut (lengkung sedih) */
                16px 16px 0 #9aa0a6;  /* Kanan mulut */
        }

        h1 {
            font-size: 24px;
            font-weight: 500;
            color: #e8eaed;
            margin-bottom: 16px;
        }

        .description {
            font-size: 14px;
            color: #9aa0a6;
            margin-bottom: 12px;
        }

        .error-code {
            font-size: 12px;
            color: #757b80;
            font-family: monospace;
            margin-bottom: 48px;
        }

        .btn-reload {
            display: inline-block;
            background-color: #8ab4f8; /* Warna biru tombol Chrome dark mode */
            color: #202124;
            padding: 10px 24px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            border-radius: 100px; /* Membuat tombol lonjong sempurna */
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .btn-reload:hover {
            background-color: #9ec2f9;
        }

        .btn-reload:active {
            background-color: #76a2e8;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="error-icon"></div>

        <h1>Koneksi Anda terganggu</h1>
        <p class="description">Perubahan jaringan terdeteksi.</p>
        <p class="error-code">ERR_NETWORK_CHANGED</p>

        <button class="btn-reload" onclick="window.location.reload();">Muat ulang</button>
    </div>

</body>
</html>