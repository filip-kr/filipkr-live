<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php require_once 'head.php'; ?>
</head>

<body>
    <!-- START tijelo -->
    <main>
        <div class="callout">
            <div class="gornji-tekst">
                <h5>Molim unesite pristupne podatke:</h5>
            </div>
        </div>
        <div class="grid-container" id="izlaz">
            <div class="grid-x grid-padding-x">
                <div class="medium-3 cell">
                    <form action="autorizacija/autorizacija.php" method="post">
                        <label for="korisnickoime">Korisničko ime</label>
                        <input type="text" name="korisnickoime" id="korisnickoime" placeholder="'g0st'">

                        <label for="lozinka">Lozinka</label>
                        <input type="password" name="lozinka" id="lozinka" placeholder="'dobrodosli1'">

                        <input type="submit" value="Pristup" class="button success">
                        <?php
                        if(isset($_GET['neuspjelo']) === true) {
                            echo '<b>', '<br />', 'Netočni pristupni podaci.', '<br />', 'Savjet: nove naočale.', '</b>';
                        }

                        if (isset($_GET['izlaz']) === true) {
                            echo '<br />', '<b>', 'Do iduće prilike!', '</b>';
                        }
                        ?>
                    </form>
                </div>
            </div>
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