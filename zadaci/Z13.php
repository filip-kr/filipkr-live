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
                    ZADATAK 13: napisati funckciju koja ne prima parametre i ne vraća vrijednost,
                    te koja ispisuje sve parne brojeve od 2 do 85. Pozvati tu funkciju
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <?php
                        function parniBrojevi()
                        {
                            for ($i = 2; $i <= 84; $i++) {
                                echo $i, ', ';
                            }

                            if ($i = 85) {
                                echo $i;
                            }
                        }

                        parniBrojevi();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
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