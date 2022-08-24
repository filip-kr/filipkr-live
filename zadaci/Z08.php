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
                    ZADATAK 8: Ispisuju se svi parni brojevi između x i y.
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">

                        <form action="Z08.php" method="get">
                            <label for="x">
                                x
                                <input type="number" name="x" required>
                            </label>
                            <label for="Y">
                                y
                                <input type="number" name="y" required>
                            </label>
                            <label for="prikazi">
                                <input type="submit" value="Prikaži" class="button">
                            </label>
                        </form>
                        <a href="Z08.php"><input type="button" value="Resetiraj" class="button alert"></a>
                        <br>
                        <strong>ISPIS:</strong>
                        <?php
                        if (isset($_GET['x']) && isset($_GET['y'])) {
                            $x = $_GET['x'];
                            $y = $_GET['y'];

                            if ($x > $y) {
                                for ($i = $y; $i <= $x; $i++) {
                                    if ($i % 2 === 0 && $i !== 0) {
                                        echo $i, ' ';
                                        $i++;
                                    }
                                }
                            } else if ($x < $y) {
                                for ($i = $x; $i <= $y; $i++) {
                                    if ($i % 2 === 0 && $i !== 0) {
                                        echo $i, ' ';
                                        $i++;
                                    }
                                }
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