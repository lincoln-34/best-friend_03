<?php
session_start();

if (!isset($_SESSION['afwan'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afwan</title>
    <link rel="icon" type="image/png" href="bear3.jpg">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  min-height:100vh;
  background:linear-gradient(135deg,#020617,#0f172a);
  color:white;
  font-family:system-ui;
}

.wrapper{
  max-width:900px;
  margin:auto;
  padding:120px 20px 80px;
}

.card-box{
  background:#020617;
  border-radius:20px;
  padding:40px;
  box-shadow:0 20px 60px rgba(0,0,0,.6);
  animation:fadeUp .8s ease;
}

@keyframes fadeUp{
  from{opacity:0; transform:translateY(20px)}
  to{opacity:1; transform:translateY(0)}
}

h1{
  font-weight:700;
  margin-bottom:20px;
  color: white;
  text-align: center;
}
/* =========================
   HALAMAN TENTANG (SAMA KAYAK HOME)
========================= */
.about-page {
  background: linear-gradient(135deg, #020617, #0f172a);
  color: white;
  min-height: 100vh;
}

/* Pastikan teks ikut putih */
.about-page h1,
.about-page p {
  color: white;
}

/* Tombol biar keliatan */
.about-page .btn-outline-l {
  border-color: white;
  color: white;
}

.about-page  {
  background: white;
  color: #020617;
}
.btn-outline-light:hover {
  background: white;
  color: #020617;
}
/* =========================
   TOMBOL GLOBAL (BIRU)
========================= */
.btn {
  background-color: #2563eb;   /* biru */
  border-color: #2563eb;
  color: white;
}

/* Hover effect */
.btn:hover {
  background-color: #1d4ed8;
  border-color: #1d4ed8;
  color: white;
}

/* Tombol outline jadi biru juga */
.btn-outline-light {
  background-color: #2563eb;
  border-color: #2563eb;
  color: white;
}

.btn-outline-light:hover {
  background-color: #1d4ed8;
  border-color: #1d4ed8;
  color: white;
}
.btn {
  border-radius: 50px;
  padding: 12px 32px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(37, 99, 235, 0.45);
}
/* kalimat kecil */
.note {
    margin-top: 14px;
    font-size: 13px;
    color: #64748b;
    text-align: center;
}
</style>
<body>
    <h1 class="pt-5">afwan ane masih belum berani buat nunjukin ini</h1>
    <div class="note pb-5">
        kalau benar benar penasaran minta ditele.
    </div>
    <div class="d-flex justify-content-center gap-3 flex-wrap">

        <a href="temen1.php" target="_blank" class="btn btn-primary px-4">
            ⬅️ Kembali
        </a>
    </div>
</body>
</html>