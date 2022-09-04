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
                    <b>CIKLIČNA TABLICA:</b> broj 1 se nalazi u donjem desnom kutu,
                    a polja se popunjavaju spiralno ciklički u krug u smjeru
                    kazaljke na satu
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="" method="get">
                            <label for="brojRedaka">
                                BROJ REDAKA:
                                <input type="number" name="brojRedova" min=1 required>
                            </label>

                            <label for="brojStupaca">
                                BROJ STUPACA:
                                <input type="number" name="brojStupaca" min=1 required>
                            </label>

                            <label for="submit">
                                <input type="submit" name="generiraj" value="Generiraj" class="button">
                            </label>
                        </form>
                    </div>
                    <div class="cell small-4">
                        <?php require_once 'ciklicnaTablicaRequireOOP.php';

                        if (isset($_GET['generiraj'])) {
                            $ciklicnaTablica = new CiklicnaTablica($_GET['brojRedova'], $_GET['brojStupaca']);
                            $brojacRed = $ciklicnaTablica->brojRed;
                            $brojacStup = $ciklicnaTablica->brojStup;

                            $ciklicnaTablica->ispuniMatricu();

                            echo '<table>';
                            for ($i = 0; $i < $brojacRed; $i++) {
                                echo '<tr>';
                                for ($j = 0; $j < $brojacStup; $j++) {
                                    echo '<td>';
                                    echo $ciklicnaTablica->matrica[$i][$j];
                                    echo '</td>';
                                }
                                echo '</tr>';
                            }
                            echo '</table>';
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