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
                    <b>OIB KONTROLER:</b> unesite broj i provjerite ispravnost formata
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="" method="post">
                            <label for="oib">
                                OIB:
                                <input type="number" name="oib" required>
                            </label>

                            <label for="provjeri">
                                <input type="submit" name="provjeri" value="Provjeri" class="button">
                            </label>
                        </form>
                    </div>
                    <div class="cell small-4 ljubavniKalkulatorRezultat">
                        <?php
                        require_once 'OibControllerRequire.php';

                        if (isset($_POST['provjeri'])) {
                            $oib = new OibController;
                            $oibBoolean = $oib->iskontrolirajOib($_POST['oib']);

                            if ($oibBoolean) {
                                echo '<h4><b>' . $_POST['oib'] . '</b></h4>', '<br />', 'Uneseni broj <h5><b>MOŽE</b></h5> biti validni OIB';
                            } else {
                                echo '<h4><b>' . $_POST['oib'] . '</b></h4>', '<br />', 'Uneseni broj <h5><b>NE MOŽE</b></h5> biti validni OIB';
                            }
                        }
                        ?>
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