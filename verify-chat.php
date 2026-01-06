<?php
session_start();

$error   = "";
$success = false;

$group = $_GET['group'] ?? "";

// password tiap grup
$passwords = [
    "1" => "silahkanmasuk",
    "2" => "tentangrahasiakutapiyahh",
    "3" => "agakkhothiiiiir",
    "4" => "agakkhothiiiiir",
    "kecewa" => "kecewalaisajiddan"
];

// tujuan tiap grup
$redirects = [
    "1" => "https://chatgpt.com/gg/v/69363761a144819a8fedbae0a1230351?token=g2rk2XqYoI613xS7RdNAvA",
    "2" => "https://chatgpt.com/gg/v/695484810c0c819ebc50d7b663195918?token=3gyZcbHSdRKPOycop5ZQ8g",
    "3" => "afwan.php",
    "4" => "afwan2.php",
    "kecewa" => "kecewa.php"
];

// pesan saat sukses
$messages = [
    "1" => "Terima kasih sudah memilih untuk berbicara.  
            Tidak semua hal mudah diucapkan, tapi kamu berani sampai di sini.",
    "2" => "Ada cerita yang tidak selalu bisa ditulis dengan kata biasa.  
            Semoga tempat ini cukup aman untukmu.",
    "3" => "Perasaan itu tidak pernah salah.  
            Terima kasih sudah mempercayaiku untuk sampai sejauh ini.",
    "4" => "Perasaan itu tidak pernah salah.  
            Terima kasih sudah mempercayaiku untuk sampai sejauh ini.",
    "kecewa" => "Kamu berhasil masuk.
    Di balik halaman ini ada perasaan yang sering aku pendam—
    rasa kecewa yang muncul karena aku merasa sendiri,
    bahkan saat kita bersama."
];

// proses form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = $_POST["password"] ?? "";

    if (!isset($passwords[$group])) {
        $error = "Akses tidak valid";
    }
    elseif ($input === $passwords[$group]) {

        // ✅ KHUSUS KECEWA → SET SESSION
        if ($group === "kecewa") {
            $_SESSION['verified_kecewa'] = true;
        }

        $success = true;
    }
    else {
        $error = "Sandi salah 😢";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Verifikasi</title>
<link rel="icon" type="image/png" href="bear3.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?php if ($success): ?>
<meta http-equiv="refresh" content="8;url=<?= $redirects[$group] ?>">
<?php endif; ?>


<style>
body{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,#020617,#0f172a);
    color:white;
    font-family:system-ui;
}
.box{
    background:#020617;
    padding:34px;
    border-radius:20px;
    width:100%;
    max-width:420px;
    text-align:center;
    box-shadow:0 20px 60px rgba(0,0,0,.7);
    animation:fadeUp .7s ease;
}
@keyframes fadeUp{
    from{opacity:0; transform:translateY(20px)}
    to{opacity:1; transform:translateY(0)}
}
input{
    background:#020617!important;
    color:white!important;
    border:1px solid #1e293b!important;
}
.note{
    font-size:14px;
    color:#94a3b8;
}
.heart{
    font-size:42px;
    margin-bottom:10px;
}
/* =========================
   TOMBOL GLOBAL (BIRU)
========================= */
.btna {
  background-color: #2563eb;   /* biru */
  border-color: #2563eb;
  color: white;
}

/* Hover effect */
.btna:hover {
  background-color: #1d4ed8;
  border-color: #1d4ed8;
  color: white;
}

/* Tombol outline jadi biru juga */
.btna-outline-light {
  background-color: #2563eb;
  border-color: #2563eb;
  color: white;
}

.btna-outline-light:hover {
  background-color: #1d4ed8;
  border-color: #1d4ed8;
  color: white;
}
.btna {
  padding: 10px 30px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btna:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(37, 99, 235, 0.45);
}
</style>
</head>

<body>

<div class="box">

<?php if ($success): ?>

    <div class="heart">💙</div>
    <h4>Terima kasih</h4>

    <p class="note mt-3">
        <?= nl2br($messages[$group]) ?>
    </p>

    <p class="note mt-3" style="font-size:12px">
        Mengalihkan ke obrolan…
    </p>

<?php else: ?>

    <h4 class="mb-1">🔒 Verifikasi</h4>
    <p class="note mb-3">
        Masukkan sandi untuk melanjutkan
    </p>

    <?php if ($error): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="post" action="?group=<?= htmlspecialchars($group) ?>">
        <div class="input-group mb-3 password-group">
            <input type="password" name="password" id="password" class="form-control" required>
            <button type="button" class="btn btn-light" onclick="togglePassword()">👁️</button>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-2 btna btna-outline-light">Lanjutkan</button>
    </form>



<?php endif; ?>
<script>
function togglePassword() {
    const input = document.getElementById("password");
    input.type = input.type === "password" ? "text" : "password";
}
</script>



</div>

</body>
</html>
