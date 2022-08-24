<?php

if (!isset($_POST['korisnickoime']) || !isset($_POST['lozinka'])) {
    header('location: index.php');
    exit;
}

if ($_POST['korisnickoime'] === 'g0st' && $_POST['lozinka'] === 'dobrodosli1') {
    session_start();
    $_SESSION['autoriziran'] = $_POST['korisnickoime'];
    header('location: ../indexAutorizirano.php');
} else {
    header('location: ../index.php?neuspjelo');
}