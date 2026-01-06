<?php
session_start();

if (!isset($_SESSION['perasaan'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Perasaan ku</title>
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

    <h1>Perasaan</h1>

    <p>
      Halaman ini aku tulis khusus tentang perasaanku ke kalian berdua.
      Bukan untuk menyalahkan,
      bukan juga untuk meminta apa pun.
      Aku cuma ingin jujur,
      mungkin untuk pertama kalinya.
    </p>

    <p>
      Kadang aku punya perasaan aneh,
      perasaan bahwa hubungan ini
      mungkin tidak akan bertahan lama.
      Bukan karena ada masalah besar,
      tapi karena aku sering merasa jaraknya pelan-pelan bertambah.
    </p>

    <p>
      Aku sering takut,
      takut kalau suatu hari nanti
      semuanya berakhir begitu saja.
      Tanpa marah,
      tanpa pertengkaran,
      cuma saling menjauh
      karena sudah tidak searah.
    </p>

    <p>
      Yang mungkin tidak kalian tahu,
      sebenarnya aku lebih memilih
      menghabiskan waktu bersama kalian.
      Ngobrol bareng,
      makan bareng,
      jalan bareng,
      walaupun hal-hal itu sederhana.
    </p>

    <p>
      Aku menikmati momen-momen kecil itu.
      Duduk bertiga,
      cerita hal sepele,
      atau bahkan diam bareng.
      Buatku, itu sudah cukup.
    </p>

    <p>
      Walaupun sering kali
      aku merasa kalah dengan HP.
      Kalah dengan layar yang lebih menarik
      daripada obrolan yang sedang terjadi.
    </p>

    <p>
      Aku tahu itu hal yang biasa.
      Semua orang main HP.
      Aku tidak menyalahkan siapa pun.
      Tapi jujur,
      kadang aku merasa tidak benar-benar ditemani.
    </p>

    <p>
      Meski begitu,
      aku tetap memilih ada di situ.
      Tetap duduk.
      Tetap ikut.
      Karena aku lebih memilih bersama,
      daripada sendiri.
    </p>

    <p>
      Bahkan ada saat-saat
      di mana aku lebih memilih
      tinggal di pondok bersama kalian
      daripada pulang ke rumah.
    </p>

    <p>
      Bukan karena aku membenci rumah,
      tapi karena bersama kalian
      aku merasa punya tempat.
      Merasa tidak sendirian.
    </p>

    <p>
      Aku sadar,
      mungkin perasaanku terlalu dalam.
      Mungkin aku terlalu menaruh arti
      pada kebersamaan yang bagi kalian biasa saja.
    </p>

    <p>
      Tapi perasaan itu nyata.
      Dan aku capek terus berpura-pura
      kalau semuanya baik-baik saja.
    </p>

    <p>
      Aku sering bertanya ke diriku sendiri,
      apakah aku terlalu berharap?
      Apakah aku terlalu takut kehilangan?
      Atau memang aku sedang berada
      di tempat yang salah?
    </p>

    <p>
      Aku tidak ingin menuntut.
      Aku tidak ingin diprioritaskan.
      Aku cuma ingin jujur,
      bahwa aku peduli.
    </p>

    <p>
      Dan mungkin karena itulah
      aku sering merasa takut
      hubungan ini akan berakhir cepat.
      Karena aku merasa
      aku yang lebih banyak bertahan.
    </p>

    <p>
      Halaman ini tidak meminta apa pun.
      Tidak jawaban.
      Tidak perubahan.
      Ini hanya pengakuan
      dari seseorang
      yang memilih bertahan
      walaupun sering merasa kalah.
    </p>

    <p class="note">
      Kadang bukan soal kalah atau menang.
      Tapi soal siapa yang tetap memilih tinggal,
      walaupun tahu rasanya tidak selalu nyaman.
    </p>

    <div class="back">
      <a href="index.html" class="btn btn-outline-light px-5">
        ⬅️ Kembali
      </a>
    </div>

  </div>
</div>

</body>
</html>
