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
                    ZADATAK 11: Unesite brojeva koliko god Vas je volja.
                    Stranica garantirano ispisuje najveći.
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="Z11.php" method="get">
                            <?php
                            $prviTekst = 'Za početak, koliko brojeva?';
                            $drugiTekst = 'Još niste uvjereni? Idemo opet - koliko brojeva?';
                            if (!isset($_GET['kolikoGet'])) {
                                if (isset($_GET['broj'])) {
                                    echo
                                    $drugiTekst,
                                    '<label for="kolikoGet">',
                                    '<input type="number" name="kolikoGet" min="1" required>',
                                    '</label>',
                                    '<label for="submit">',
                                    '<input type="submit" name="kreirajPolja" value="Kreiraj polja za unos" class="button">',
                                    '</label>';
                                } else {
                                    echo
                                    $prviTekst;

                                    echo
                                    '<label for="kolikoGet">',
                                    '<input type="number" name="kolikoGet" min="1" required>',
                                    '</label>',
                                    '<label for="submit">',
                                    '<input type="submit" name="kreirajPolja" value="Kreiraj polja za unos" class="button">',
                                    '</label>';
                                }
                            }

                            if (isset($_GET['kreirajPolja'])) {
                                $kolikoGet = $_GET['kolikoGet'];
                                echo 'Sada unesite brojeve:';
                                for ($i = 0; $i < $kolikoGet; $i++) {
                                    echo
                                    '<label for="unosBroja">',
                                    '<input type="number" name="broj" required>',
                                    '</label>';
                                }
                                if ($i = $kolikoGet) {


                                    echo
                                    '<label for="submit">',
                                    '<input type="submit" name="dajNajveciBroj" value="Koji broj je najveći?" class="button">',
                                    '</label>';
                                    $i = 0;
                                }
                            }

                            if (isset($_GET['dajNajveciBroj'])) {
                                unset($_GET['dajNajveciBroj']);
                                $min = PHP_INT_MIN;
                                foreach ($_GET as $unosBroja) {
                                    if ($unosBroja > $min) {
                                        $min = $unosBroja;
                                        echo 'Najveći od unešenih brojeva je ', '<h5>', '<strong>', $min, '</strong>', '</h5>';
                                    }
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
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