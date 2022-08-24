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
                <h5>
                    ZADATAK 7: Svi parni brojevi od 1 do 21, Vama na usluzi.
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <?php
            for ($i = 0; $i < 21; $i++) {
                if ($i % 2 === 0 && $i !== 0) {
                    echo $i, ' ';
                }
            }
            ?>
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