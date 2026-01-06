<?php
session_start();

if (!isset($_SESSION['perasaan2'])) {
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
</style>
</head>

<body>

<div class="wrapper">
  <div class="box">

    <h1>Perasaan ku kekamu</h1>

    <p>
      Halaman ini aku tulis bukan tentang rasa yang berat,
      tapi tentang satu hal sederhana:
      bagaimana aku melihat kamu.
    </p>

    <p>
      Buatku,
      kamu itu orang yang keren.
      Bukan karena hal besar,
      tapi karena caramu bersikap,
      caramu menghadapi orang lain,
      dan caramu tetap jadi diri sendiri.
    </p>

    <p>
      Ada banyak hal kecil
      yang mungkin tidak kamu sadari,
      tapi cukup membuatku kagum.
    </p>

    <p>
      Aku juga ingin minta maaf
      untuk hal-hal kecil
      yang mungkin terasa sepele,
      tapi bisa membuatmu tidak nyaman.
    </p>

    <p>
      Seperti saat aku kadang berjalan berdua di depanmu.
      Padahal aku tahu,
      kamu sering menyuruh kami duluan,
      atau memilih berjalan sedikit di belakang.
    </p>

    <p>
      Mungkin aku salah mengartikan itu.
      Mungkin aku terlalu terbiasa
      tanpa berpikir panjang.
    </p>

    <p>
      Maaf kalau sikapku itu
      pernah membuatmu merasa
      seperti ditinggal,
      atau tidak diajak benar-benar berjalan bersama.
    </p>

    <p>
      Tidak ada maksud untuk menjauhkan.
      Tidak juga ada niat untuk membuat jarak.
      Kadang aku hanya tidak peka,
      dan baru menyadari setelah kupikirkan ulang.
    </p>

    <p>
      Aku sedang belajar
      lebih memperhatikan,
      lebih peka,
      dan tidak hanya berjalan
      sesuai kebiasaanku sendiri.
    </p>

    <p>
      Aku menulis ini
      karena aku menghargai pertemanan kita.
      Dan karena aku tidak ingin
      hal-hal kecil yang tidak dibicarakan
      berubah jadi jarak yang besar.
    </p>

    <p>
      Kamu itu orang yang berarti.
      Dan aku ingin bersikap
      dengan cara yang lebih baik,
      tanpa harus berlebihan.
    </p>

    <p class="note">
      Kadang yang perlu diperbaiki
      bukan perasaannya,
      tapi caranya.
    </p>

    <div class="back">
      <a href="temen2.php" class="btn btn-outline-light px-5 me-2">
        ⬅️ Kembali
      </a>
    </div>

  </div>
</div>

</body>
</html>
