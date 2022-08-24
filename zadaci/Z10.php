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
                    Server kaže:
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <?php
            foreach ($_SERVER as $kljuc => $vrijednost) {
                echo '<strong>', $kljuc, '</strong>', ' = ', $vrijednost, '<br />';
            }
            ?>
        </div>
    </main>
    <!-- END tijelo -->

    <!-- START podnožje -->
    <footer>
        <!-- FOOTER -->
    </footer>
    <!-- END podnožje -->


    <!-- JavaScript -->
    <?php require_once '../js.php'; ?>
</body>

</html>