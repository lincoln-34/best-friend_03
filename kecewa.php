<?php
session_start();

if (!isset($_SESSION['kecewa'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kecewa</title>
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
}

p{
  line-height:1.9;
  font-size:1.05rem;
  color:#e5e7eb;
}

.note{
  color:#94a3b8;
  font-size:0.95rem;
  margin-top:30px;
  font-style:italic;
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
  <div class="card-box">

    <h1>Hal yang bikin aku kecewa</h1>

    <p>
      Aku nulis ini bukan karena benci,  
      bukan juga karena pengen nyalahin siapa-siapa.  
      Aku cuma pengen jujur tentang apa yang aku rasain.
    </p>

    <p>
      Ada momen-momen di mana kita jalan bareng,  
      tapi rasanya aku sendirian.  
      Bukan karena aku benar-benar sendiri,  
      tapi karena perhatian kalian lebih sering ada di layar HP  
      daripada di sekitar.
    </p>

    <p>
      Kita jalan bareng,  
      tapi masing-masing sibuk dengan dunia sendiri.  
      Aku pengen ngobrol, pengen ketawa bareng,  
      tapi yang aku lihat cuma kepala nunduk dan jari yang terus geser layar.
    </p>

    <p>
      Saat makan bareng juga sama.  
      Harusnya itu jadi waktu sederhana buat cerita hal-hal kecil,  
      tapi yang terasa malah hening dan jarak yang pelan-pelan tumbuh.
    </p>

    <p>
      Aku nggak minta diperhatiin terus.  
      Aku juga ngerti semua orang punya urusan dan dunianya sendiri.  
      Tapi kadang, sedikit hadir sepenuhnya itu berarti besar buat aku.
    </p>

    <p>
      Aku kangen versi kita yang benar-benar bareng.  
      Yang ketawa tanpa distraksi,  
      yang dengerin tanpa jeda notifikasi.
    </p>

    <p>
      Kalau sekarang aku kelihatan lebih diam,  
      mungkin karena aku capek ngerasa sendirian  
      di tengah keramaian.
    </p>
    <p>
  Aku juga kecewa karena kadang aku masih merasa ditinggal sendirian.
  Bukan ditinggal secara fisik,
  tapi ditinggal secara perasaan.
</p>

<p>
  Ada momen di mana aku ada di dekat kalian,
  tapi rasanya aku nggak benar-benar diajak hadir.
  Aku jalan bareng,
  duduk bareng,
  tapi seperti berjalan sendiri.
</p>

<p>
  Mungkin bagi kalian itu hal kecil.
  Mungkin tidak disengaja.
  Tapi buat aku,
  rasa ditinggal itu terasa nyata.
</p>

<p>
  Aku nggak butuh diperhatikan terus.
  Aku cuma ingin sesekali ditanya,
  diajak ngobrol,
  atau sekadar disadari keberadaannya.
</p>

<p>
  Saat aku terdiam,
  bukan berarti aku nyaman.
  Kadang aku cuma nggak tahu harus bereaksi bagaimana
  ketika merasa sendirian di tengah keramaian.
</p>

<p>
  Aku sadar perasaanku bisa berlebihan.
  Tapi perasaan itu tetap ada,
  dan aku capek terus berpura-pura baik-baik saja.
</p>
<p>
  Aku juga mau jujur,
  kadang aku merasa marah,
  walaupun aku sering memilih untuk diam.
</p>

<p>
  Ada momen-momen kecil
  yang sebenarnya sederhana,
  tapi cukup mengganggu perasaanku.
  Seperti saat kita sudah duduk bertiga,
  sudah merasa tempat itu “cukup” untuk kita.
</p>

<p>
  Tapi kemudian teman-teman lain datang,
  terutama teman dari salah satu dari kalian,
  dan akhirnya ikut makan di situ.
</p>

<p>
  Aku tahu itu mungkin hal biasa.
  Aku tahu tidak ada niat buruk di dalamnya.
  Tapi jujur,
  di saat-saat seperti itu
  aku langsung kehilangan mood.
</p>

<p>
  Bukan karena aku membenci orang-orang itu,
  tapi karena aku merasa ruang kecil yang seharusnya untuk kita
  tiba-tiba terasa penuh,
  dan aku kembali merasa tidak punya tempat.
</p>

<p>
  Aku jadi malas untuk makan bareng.
  Malas untuk ikut ngobrol.
  Malas untuk berpura-pura nyaman
  saat sebenarnya perasaanku sedang tidak baik-baik saja.
</p>

<p>
  Aku sadar,
  temanku punya banyak teman,
  dan itu bukan kesalahan siapa pun.
  Tapi di saat tertentu,
  aku hanya ingin punya momen sederhana
  tanpa harus merasa tersisih.
</p>

<p>
  Mungkin reaksiku berlebihan.
  Mungkin aku terlalu sensitif.
  Tapi perasaan itu nyata,
  dan aku capek terus menahannya sendiri.
</p>



    <p class="note">
      Aku nulis ini bukan buat menyalahkan,  
      tapi berharap suatu hari kita bisa lebih saling hadir.
    </p>

    <div class="text-center btn-back">
      <a href="tentang-aku.php" class="btn btn-outline-light px-5">
        ⬅️ Kembali
      </a>
    </div>

  </div>
</div>
<?php
session_destroy(); ?>

</body>
</html>
