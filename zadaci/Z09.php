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
                    ZADATAK 9: Generira se tablica s X u kutevima.
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="Z09.php" method="get">
                            <label for="brojRedaka">
                                BROJ REDAKA:
                                <input type="number" name="brojRedaka" min="2" required>
                            </label>

                            <label for="brojStupaca">
                                BROJ STUPACA:
                                <input type="number" name="brojStupaca" min="2" required>
                            </label>

                            <label for="submit">
                                <input type="submit" name="generiraj" value="Generiraj" class="button">
                            </label>
                        </form>
                    </div>
                    <div class="cell small-4">
                        <?php
                        if (isset($_GET['brojRedaka']) && isset($_GET['brojStupaca'])) {
                            $bRed = $_GET['brojRedaka'];
                            $bStup = $_GET['brojStupaca'];


                            echo '<table class="tablica">';
                            for ($i = 0; $i < $bStup; $i++) {
                                echo '<tr>';
                                for ($j = 0; $j < $bRed; $j++) {
                                    echo '<td>';
                                    if (
                                        ($i === 0 && $j === 0)
                                        ||
                                        ($i === 0 && $j === $bRed - 1)
                                        ||
                                        ($i === $bStup - 1 && $j === $bRed - 1)
                                        ||
                                        ($i === $bStup - 1 && $j === 0)
                                    ) {
                                        echo '<strong>X</strong>';
                                    } else {
                                        echo '&nbsp;';
                                    }
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