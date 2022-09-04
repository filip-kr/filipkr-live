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
                    <b>CIKLIČNA TABLICA OOP:</b> broj 1 se nalazi u donjem desnom kutu,
                    a polja se popunjavaju spiralno ciklički u krug u smjeru
                    kazaljke na satu
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="" method="post">
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
                        <label for="reset">
                            <a href="ciklicnaTablicaOOP.php" class="button alert">Resetiraj</a>
                        </label>
                    </div>
                    <div class="cell small-4">
                        <?php require_once 'ciklicnaTablicaRequireOOP.php';

                        if (isset($_POST['generiraj'])) {
                            $ciklicnaTablica = new CiklicnaTablica($_POST['brojRedova'], $_POST['brojStupaca']);

                            $matrica = $ciklicnaTablica->getMatrica();
                            $crtice = $ciklicnaTablica->getCrtice();

                            $brojacRed = $_POST['brojRedova'];
                            $brojacStup = $_POST['brojStupaca'];

                            echo '<table class="ciklicnaTablica">';
                            for ($i = 0; $i < $brojacRed; $i++) {
                                echo '<tr>';
                                for ($j = 0; $j < $brojacStup; $j++) {
                                    if ($matrica[$i][$j] === $brojacRed * $brojacStup) {
                                        echo '<td class="ciklicnaPosljednjaCelija">',
                                        $matrica[$i][$j],
                                        '</td>';
                                    } else {
                                        echo '<td class="ciklicnaCelija">',
                                        '<div class="divSlika">';
                                        switch ($crtice[$i][$j]) {
                                            case 'lijevo':
                                                echo '<img src="crtica.png" class="ciklicnaCrticaLijevo">';
                                                break;
                                            case 'gore':
                                                echo '<img src="crticaVert.png" class="ciklicnaCrticaGore">';
                                                break;
                                            case 'desno':
                                                echo '<img src="crtica.png" class="ciklicnaCrticaDesno">';
                                                break;
                                            case 'dolje':
                                                echo '<img src="crticaVert.png" class="ciklicnaCrticaDolje">';
                                                break;
                                        }
                                        echo '<br />',
                                        '</div>',
                                        '<div class="divTekst">',
                                        $matrica[$i][$j],
                                        '</div>',
                                        '</td>';
                                    }
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