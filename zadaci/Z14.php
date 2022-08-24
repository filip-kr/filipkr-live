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
                    ZADATAK 14: napisati funkciju koja prima parametar i ne vraća vrijednost. Funkcija prima indeksni niz brojeva
                    i ispisuje zbroj svih brojeva u primljenom nizu.
                    Deklarirati niz, pozvati funkciju
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <?php
                        $niz = [5, 3, 7, 4, 2];

                        function zbrojNiza($nizZbroj)
                        {
                            $suma = 0;
                            foreach ($nizZbroj as $vrijednost) {
                                $suma += $vrijednost;
                            }

                            echo 'Zbroj iznosi ', $suma, '<br/>', ' Deklarirani niz:', '<hr/>';
                        }

                        zbrojNiza($niz);

                        echo '<pre>';
                        print_r($niz);
                        echo '</pre>';
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