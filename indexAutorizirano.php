<?php
session_start();
if (!isset($_SESSION['autoriziran'])) {
  header('location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php require_once 'head.php'; ?>
</head>

<body>
  <!-- START zagljavlje -->
  <header>
    <?php require_once 'zaglavlje.php'; ?>
  </header>
  <!-- END zaglavlje -->

  <!-- START tijelo -->
  <main>
    <div class="callout">
      <div class="gornji-tekst">
        <h5>Dobrodošli!</h5>
      </div>
    </div>
    <div class="callout" id="izlaz">
      Poslužite se izbornikom na vrhu i pogledajte kako marljivo vježbam PHP.
      <br>
      <br>
      <b>Zadaci</b>: zadaci s predavanja
      <br>
      <b>Zadaće</b>: zadaće i vlastite vježbe
      <br>
      <br>
      <br>
      <a href="autorizacija/izlaz.php" class="button alert">Izlaz</a>
    </div>
    
  </main>
  <!-- END tijelo -->

  <!-- START podnožje -->
  <footer>
    <?php require_once 'podnozje.php'; ?>
  </footer>
  <!-- END podnožje -->


  <!-- JavaScript -->
  <?php require_once 'js.php'; ?>
</body>

</html>