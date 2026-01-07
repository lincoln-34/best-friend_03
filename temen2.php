<?php
session_start();
if (!isset($_SESSION['temen2'])) {
  header("Location: login.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Khalid Terbaikku</title>
  <link rel="icon" type="image/png" href="bear3.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="friend-page">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolled">
  <div class="container">
    <a class="navbar-brand" href="index.php">BestFriend 💙</a>
  </div>
</nav>

<!-- CONTENT -->
<section class="friend-section">
  <div class="container">

    <!-- FOTO -->
    <div class="text-center mb-5">
      <img src="bayangk.jpg" alt="Temen Terbaikku" class="friend-img">
      <h1 class="mt-4">Untuk Kamu, yang Selalu Diam Tapi Berarti</h1>
      <p class="extra-text pt-1 pb-3">Khalid</p></p>
    </div>

    <!-- CERITA -->
    <div class="friend-story">

      <p>
        Kamu bukan tipe orang yang banyak bicara.
        Kamu sering memilih diam,
        memilih mendengarkan,
        memilih berjalan sedikit di belakang.
        Tapi justru dari situlah aku belajar,
        bahwa tidak semua yang berarti harus selalu terlihat di depan.
      </p>

      <p>
        Kamu hadir dengan caramu sendiri.
        Tenang, pelan,
        tapi selalu konsisten.
        Kadang aku baru sadar kamu ada
        setelah menoleh ke belakang
        dan melihat kamu masih di sana.
        Tidak pergi.
        Tidak tergesa-gesa.
      </p>

      <p>
        Kamu itu lucu,
        bukan lucu yang dibuat-buat.
        Lucu karena kamu apa adanya.
        Dan entah kenapa,
        setiap kali kamu teriak,
        suaramu selalu terdengar berbeda —
        aneh, khas, dan selalu berhasil bikin kami ketawa.
      </p>

      <p>
        Kamu suka menulis.
        Menyimpan banyak hal di kepalamu
        dan menumpahkannya lewat kata-kata.
        Aku tahu,
        mungkin ada perasaan yang lebih mudah kamu tulis
        daripada kamu ucapkan.
        Dan itu nggak apa-apa.
        Karena caramu memahami dunia juga indah.
      </p>

      <p>
        Kamu bukan orang yang ribut menunjukkan perhatian,
        tapi kamu peduli.
        Lewat tindakan kecil,
        lewat kehadiran,
        lewat hal-hal sederhana
        yang sering tidak disadari orang lain.
      </p>

      <p>
        Kamu juga sering mentraktir.
        Lagi-lagi,
        bukan soal makanannya,
        tapi soal niatnya.
        Kamu berbagi dengan tulus,
        tanpa banyak kata,
        tanpa ingin dipuji.
      </p>

      <p>
        Kadang kamu jalan di belakang kami berdua.
        Seolah memberi ruang,
        seolah tidak ingin mengganggu.
        Tapi percayalah,
        kehadiranmu tetap terasa.
        Tanpa kamu,
        langkah kami tidak akan terasa lengkap.
      </p>

      <p>
        Kamu mengajarkan aku satu hal penting:
        bahwa tidak semua orang harus bersuara keras
        untuk bisa berarti.
        Bahwa diam juga bisa penuh makna.
      </p>

      <p>
        Terima kasih sudah menjadi dirimu sendiri.
        Jangan merasa kecil hanya karena kamu tidak ramai.
        Dunia butuh orang sepertimu —
        yang tenang,
        yang tulus,
        dan yang selalu ada
        meski memilih berjalan sedikit di belakang.
      </p>

    </div>
    
    <div class="extra-section mt-5 text-center pt-3">

    <p class="extra-text pb-3">
        perasaanku khusus ke kamu
    </p>

    <div class="d-flex justify-content-center gap-3 flex-wrap">

        <a href="login.php" target="_blank" class="btn btn-primary px-4">
            perasaanku
        </a>
    </div>
</div>
<div class="extra-section mt-5 text-center pt-3">

    <p class="extra-text pb-3">
        karyamu
    </p>

    <div class="d-flex justify-content-center gap-3 flex-wrap">

        <a href="https://khalidakbarkhalid84-eng.github.io/Khalid_portfolio/" target="_blank" class="btn btn-primary px-4">
            💻 Web portofolio
        </a>

    </div>
</div>

<p class="extra-text pt-5 pb-3">
  beberapa hal yang belum sempat aku sampaikan.
</p>
    <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap;">
      <a href="verify-chat.php?group=1" class="btn btn-primary">💬 Grup 1</a>
      <a href="verify-chat.php?group=2" class="btn btn-primary">📝 Grup 2</a>
      <a href="verify-chat.php?group=4" class="btn btn-primary">💙 Grup 3</a>
    </div>



    <!-- TOMBOL -->
    <div class="text-center mt-5">
      <a href="temen.php" class="btn btn-primary btn-lg">
        ← Kembali ke Teman
      </a>
    </div>

  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

