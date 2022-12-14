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
                        <input type="text" name="korisnickoime" id="korisnickoime" placeholder="'g0st'" value="g0st">

                        <label for="lozinka">Lozinka</label>
                        <input type="password" name="lozinka" id="lozinka" placeholder="'dobrodosli1'" value="dobrodosli1">

                        <input type="submit" value="Pristup" class="button success">
                        <?php
                        if (isset($_GET['neuspjelo']) === true) {
                            echo '<b>', '<br />', 'Netočni pristupni podaci.', '</b>';
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

    <!-- START kolačići -->
    <div class="cookie-container">
        <h4>Kolačići</h4>
        <p>Korištenjem ove stranice pristajete na uporabu kolačića u pregledniku.</p>
        <button type="button" class="button alert cookieBtn">Razumijem</button>
    </div>
    <!-- END kolačići  -->

    <!-- JavaScript -->
    <?php require_once 'js.php'; ?>
</body>

</html>