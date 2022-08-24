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
                    SUB ZADATAK 4: Program ispisuje zbroj svih vrijednosti primljenih GET parametara
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <?php
                        if (isset($_GET)) {
                            $suma = 0;

                            foreach ($_GET as $parametar) {
                                $parametar = (int)$parametar;
                                $suma += $parametar;
                            }

                            echo 'Zbroj svih parametara iznosi ', $suma;
                            
                        } else {
                            echo 'Unesite GET parametre u URL';
                        }
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