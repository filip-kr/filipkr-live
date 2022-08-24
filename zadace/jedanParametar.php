<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php require_once '../head.php'; ?>
</head>

<body>
  <!-- START zagljavlje -->
  <header>
    <?php require_once '../zaglavlje.php'; ?>
  </header>
  <!-- END zaglavlje -->

  <!-- START tijelo -->
  <main>
    <div class="callout">
      <div class="gornji-tekst">
        <h5>Unesite parametar 'ime' u URL</h5>
      </div>
    </div>
    <div class="callout" id="izlaz">
      'ime' glasi <?php echo $_GET['ime']; ?>
    </div>
  </main>
  <!-- END tijelo -->

  <!-- START podnožje -->
  <footer>
    <?php require_once '../podnozje.php'; ?>
  </footer>
  <!-- END podnožje -->

  <!-- JavaScript -->
  <?php require_once '../js.php'; ?>
</body>

</html>