<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST['password'];

    if ($password === "mhmmddkkrnwn49111") {
        $_SESSION['temen1'] = true;
        header("Location: temen1.php");
        exit;
    } 
    elseif ($password === "khldkeren4946") {
        $_SESSION['temen2'] = true;
        header("Location: temen2.php");
        exit;
    } 
    elseif ($password === "andaamjiddan") {
        $_SESSION['kecewa'] = true;
        header("Location: kecewa.php");
        exit;
    }
    elseif ($password === "ro'yiikadzaalika") {
        $_SESSION['perasaan'] = true;
        header("Location: perasaan.php");
        exit;
    }
    elseif ($password === "hadzaakhoshlaka") {
        $_SESSION['perasaan1'] = true;
        header("Location: prsntmn1.php");
        exit;
    }
    elseif ($password === "faqotlaka") {
        $_SESSION['perasaan2'] = true;
        header("Location: prsntmn2.php");
        exit;
    }
    elseif ($password === "laaastathii'") {
        $_SESSION['afwan'] = true;
        header("Location: afwan.php");
        exit;
    }
    elseif ($password === "laaastathii") {
        $_SESSION['afwan2'] = true;
        header("Location: afwan2.php");
        exit;
    }
    else {
        $error = "Password salah 😢";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="icon" type="image/png" href="bear3.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    min-height: 100vh;
    background: linear-gradient(135deg, #020617, #0f172a);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-family: system-ui, sans-serif;
}

/* card */
.login-card {
    background: rgba(2, 6, 23, 0.96);
    border-radius: 20px;
    padding: 38px;
    width: 100%;
    max-width: 420px;
    box-shadow: 0 25px 70px rgba(0,0,0,.75);
    animation: fadeUp .7s ease forwards;
}

/* animasi masuk */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.login-card h2 {
    text-align: center;
    margin-bottom: 6px;
    letter-spacing: .5px;
}

.login-card .subtitle {
    text-align: center;
    font-size: 14px;
    color: #94a3b8;
}

/* input */
.form-control {
    background: #020617;
    border: 1px solid #1e293b;
    color: white;
}

.form-control:focus {
    background: #020617;
    color: white;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59,130,246,.25);
}

.input-group-text {
    background: #020617;
    border: 1px solid #1e293b;
    cursor: pointer;
}

/* tombol */
.btn-primary {
    background: #2563eb;
    border: none;
}

.btn-primary:hover {
    background: #1d4ed8;
}

/* kalimat kecil */
.note {
    margin-top: 14px;
    font-size: 13px;
    color: #64748b;
    text-align: center;
}
</style>
</head>

<body>

<div class="login-card">
    <h2>💙 BestFriend</h2>
    <div class="subtitle">Hal kecil untuk orang yang berarti</div>

    <?php if ($error): ?>
        <div class="alert alert-danger mt-3"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" class="mt-4">
        <label class="form-label">Password</label>

        <div class="input-group mb-3">
            <input type="password" id="password" name="password" class="form-control" required>
            <span class="input-group-text" onclick="togglePassword()">👁️</span>
        </div>

        <button class="btn btn-primary w-100 py-2">
            Masuk
        </button>
    </form>

    <div class="note">
        Tenang, ini cuma untuk orang yang benar-benar berarti.
    </div>
</div>

<script>
function togglePassword() {
    const input = document.getElementById("password");
    input.type = input.type === "password" ? "text" : "password";
}
</script>

</body>
</html>
