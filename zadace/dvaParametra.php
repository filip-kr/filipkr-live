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
        <h5>Unesite parametar 'ime' i 'boja' (CSS atribut) u URL</h5>
      </div>
    </div>
    <div class="callout" id="izlaz">
      Ime glasi <p style="color: <?php echo $_GET['boja']; ?>"><?php echo $_GET['ime']; ?></p>
      Kao što vidite, njegova boja je na engleskom <i><?php echo $_GET['boja']; ?></i>.
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