<?php
session_start();

if ($_POST['password'] === 'rahasia1') {
    $_SESSION['temen1'] = true;
    header("Location: temen1.php");
    exit;
}

if ($_POST['password'] === 'rahasia2') {
    $_SESSION['temen2'] = true;
    header("Location: temen2.php");
    exit;
}

if ($_POST['password'] === 'kecewa') {
    $_SESSION['kecewa'] = true;
    header("Location: kecewa.php");
    exit;
}

header("Location: login.php?error=1");
exit;
