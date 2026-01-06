<?php
session_start();

if (!isset($_SESSION['perasaan1'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Perasaan ku kekamu</title>
<link rel="icon" type="image/png" href="bear3.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">

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

.box{
    background:#020617;
    border-radius:22px;
    padding:48px;
    box-shadow:0 25px 70px rgba(0,0,0,.65);
    animation:fadeUp .9s ease;
}

@keyframes fadeUp{
    from{opacity:0; transform:translateY(25px)}
    to{opacity:1; transform:translateY(0)}
}

h1{
    font-weight:700;
    margin-bottom:28px;
}

p{
    line-height:2;
    font-size:1.05rem;
    color:#e5e7eb;
    margin-bottom:18px;
}

.note{
    margin-top:42px;
    font-size:0.95rem;
    color:#94a3b8;
    font-style:italic;
}

.back{
    margin-top:52px;
    text-align:center;
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
</style>
</head>

<body>

<div class="wrapper">
  <div class="box">

    <h1>Perasaan ku kekamu</h1>

    <p>
      Halaman ini aku tulis dengan hati yang cukup jujur.
      Bukan untuk menuntut apa pun,
      tapi untuk mengatakan sesuatu
      yang mungkin tidak pernah aku ucapkan langsung.
    </p>

    <p>
      Aku ingin jujur,
      ada satu perasaan yang berbeda
      ketika aku bersama kamu
      dibandingkan dengan teman-teman yang lain.
    </p>

    <p>
      Aku sayang kamu,
      lebih dari sekadar teman biasa.
      Bukan dalam arti ingin memiliki,
      tapi dalam arti peduli yang lebih dalam.
    </p>

    <p>
      Aku memperhatikan hal-hal kecil.
      Cara kamu bicara,
      cara kamu capek,
      dan cara kamu tetap bertahan
      walaupun tidak selalu baik-baik saja.
    </p>

    <p>
      Aku juga ingin minta maaf
      karena mungkin aku tidak selalu hadir
      dengan cara yang seharusnya.
    </p>

    <p>
      Saat kamu sakit,
      aku tahu.
      Aku peduli.
      Aku khawatir.
      Tapi aku hanya bisa melihat dari jauh.
    </p>

    <p>
      Bukan karena aku tidak mau datang.
      Tapi karena aku terlalu pemalu,
      terlalu banyak takut salah,
      dan terlalu sering merasa
      kehadiranku justru akan mengganggu.
    </p>

    <p>
      Aku melihat orang lain bisa datang,
      bisa menemani,
      bisa bersikap lebih berani.
      Dan aku cuma bisa diam,
      menyimpan keinginan itu sendiri.
    </p>

    <p>
      Maaf kalau itu membuatku terlihat
      seperti tidak peduli.
      Padahal sebenarnya aku peduli,
      hanya saja caraku salah
      dan keberanianku kurang.
    </p>

    <p>
      Aku tidak berharap kamu membalas perasaan ini.
      Aku juga tidak ingin kamu merasa terbebani.
    </p>

    <p>
      Aku hanya ingin jujur,
      bahwa kepedulianku ini nyata,
      walaupun sering tidak terlihat.
    </p>

    <p>
      Kalau suatu hari nanti
      jarak itu benar-benar ada,
      aku ingin setidaknya kamu tahu
      bahwa aku pernah menyayangi dengan caraku sendiri.
    </p>
    <p>
  Aku sayang sama kamu bukan tanpa alasan.
  Ini pertama kalinya aku menemukan teman
  dengan cara yang berbeda.
</p>

<p>
  
  Kamu lembut, kamu sabar, kamu perhatian, kamu sabar, 
  kamu lucu dengan caramu sendiri,
  dan kehadiranmu sering terasa menenangkan,
  bahkan tanpa harus banyak bicara.
</p>

<p>
  Aku jarang menemukan orang seperti itu.
  Dan mungkin karena itulah
  perasaanku ke kamu tumbuh lebih dalam
  dibandingkan ke teman-teman yang lain.
</p>

<p>
  Aku sadar,
  dari rasa sayang itu
  kadang muncul sikap yang tidak sehat.
  Aku jadi sedikit posesif,
  sedikit takut kehilangan,
  dan terlalu ingin menjaga sesuatu
  yang sebenarnya tidak bisa aku kendalikan.
</p>

<p>
  Itu bukan karena aku ingin memiliki,
  tapi karena aku takut
  kehilangan sosok yang buatku merasa nyaman
  dengan cara yang belum pernah aku rasakan sebelumnya.
</p>

<p>
  Maaf kalau dari rasa sayang itu
  justru muncul sikap yang membuatmu tidak nyaman.
  Aku masih belajar
  membedakan antara peduli
  dan terlalu melekat.
</p>


    <p class="note">
      Tidak semua perasaan harus dimiliki.
      Beberapa cukup diakui,
      lalu dijaga agar tidak melukai.
    </p>

    <div class="back">
      <a href="temen1.php" class="btn btn-outline-light px-5">
        ⬅️ Kembali
      </a>
    </div>

  </div>
</div>

</body>
</html>
