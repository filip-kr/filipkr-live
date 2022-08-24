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
                    Generirane su nasumične vrijednosti varijabli zajedno s matematičkim operatorima.
                    Pokušajte izračunati krajnju vrijednost $j, a zatim
                    ju provjerite.
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">

                        <?php
                        if (isset($_GET['rez'])) {
                            $rez = $_GET['rez'];
                            $i = $_GET['i'];
                            $j = $_GET['j'];
                            $J = $j;
                            $rand1 = $_GET['rand1'];
                            $rand2 = $_GET['rand2'];

                            if ($rand1 > $rand2) {
                                $k1 = '$i + $j';
                                eval('$k1=' . $k1 . ';');
                                $k = $k1;
                            } else {
                                $k1 = '$i - $j';
                                eval('$k1=' . $k1 . ';');
                                $k = $k1;
                            }

                            if ($rand1 > 250 && $rand2 > 250) {
                                $J1 = '++$k';
                                eval('$J1=' . $J1 . ';');
                                $J += $J1;
                            } else if ($rand1 < 250 && $rand2 < 250) {
                                $J1 = '--$k';
                                eval('$J1=' . $J1 . ';');
                                $J -= $J1;
                            } else if ($rand1 > 250 && $rand2 < 250) {
                                $J1 = '--$k';
                                eval('$J1=' . $J1 . ';');
                                $J += $J1;
                            } else if ($rand1 < 250 && $rand2 > 250) {
                                $J1 = '++$k';
                                eval('$J1=' . $J1 . ';');
                                $J -= $J1;
                            }
                        } else {
                            $rez = '';
                            $i = rand(0, 5);
                            $j = rand(0, 5);
                            $J = $j;
                            $rand1 = rand(0, 500);
                            $rand2 = rand(0, 500);

                            if ($rand1 > $rand2) {
                                $k1 = '$i + $j';
                                eval('$k1=' . $k1 . ';');
                                $k = $k1;
                            } else {
                                $k1 = '$i - $j';
                                eval('$k1=' . $k1 . ';');
                                $k = $k1;
                            }

                            if ($rand1 > 250 && $rand2 > 250) {
                                $J1 = '++$k';
                                eval('$J1=' . $J1 . ';');
                                $J += $J1;
                            } else if ($rand1 < 250 && $rand2 < 250) {
                                $J1 = '--$k';
                                eval('$J1=' . $J1 . ';');
                                $J -= $J1;
                            } else if ($rand1 > 250 && $rand2 < 250) {
                                $J1 = '--$k';
                                eval('$J1=' . $J1 . ';');
                                $J += $J1;
                            } else if ($rand1 < 250 && $rand2 > 250) {
                                $J1 = '++$k';
                                eval('$J1=' . $J1 . ';');
                                $J -= $J1;
                            }
                        }
                        ?>

                        $i = <?= $i ?>
                        <br>
                        $j = <?= $j ?>
                        <br>
                        <?php
                        echo '$k = ';
                        if ($rand1 > $rand2) {
                            echo '$i + $j', '<br />';
                        } else {
                            echo '$i - $j', '<br />';
                        }

                        echo '$j ';
                        if ($rand1 > 250 && $rand2 > 250) {
                            echo '+= ++$k', '<br />';
                        } else if ($rand1 < 250 && $rand2 < 250) {
                            echo '-= --$k', '<br />';
                        } else if ($rand1 > 250 && $rand2 < 250) {
                            echo '+= --$k', '<br />';
                        } else if ($rand1 < 250 && $rand2 > 250) {
                            echo '-= ++$k', '<br />';
                        } else {
                            echo '+= ++$k', '<br />';
                        }
                        ?>
                        <br>

                        $j = ?
                        <form>
                            <label>
                                <input type="text" name="rez" method="get" required>
                                <input type="hidden" name="i" value=<?= $i ?>>
                                <input type="hidden" name="j" value=<?= $j ?>>
                                <input type="hidden" name="rand1" value=<?= $rand1 ?>>
                                <input type="hidden" name="rand2" value=<?= $rand2 ?>>
                                <input type="submit" class="button success" value="Provjeri">
                                <a href="poligon.php" class="button alert">Resetiraj</a>
                            </label>
                        </form>
                        <?php
                        if (isset($_GET['rez'])) {
                            if ($rez == $J) {
                                echo 'Točno!';
                            } else {
                                echo 'Netočno. Rezultat je ', $J, '.';
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