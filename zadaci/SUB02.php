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
                    SUB ZADATAK 2: u odnosu na primljenu brojčanu vrijednost ocjene ispisati naziv
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="SUB02.php" method="get">
                            <label for="tekst">Provjerite ocjenu:</label>
                            <input type="number" name="ocjena" min="1" max="5" required>

                            <label for="ispis">
                                <input type="submit" name="submit" value="Provjeriti" class="button">
                            </label>
                        </form>
                    </div>
                    <div class="cell small-4">
                        <?php
                        if (isset($_GET['ocjena'])) {
                            $ocjena = $_GET['ocjena'];

                            switch ($ocjena) {
                                case 1:
                                    echo 'Ocjena ', $ocjena, ' je nedovoljan';
                                    break;
                                case 2:
                                    echo 'Ocjena ', $ocjena, ' je dovoljan';
                                    break;
                                case 3:
                                    echo 'Ocjena ', $ocjena, ' je dobar';
                                    break;
                                case 4:
                                    echo 'Ocjena ', $ocjena, ' je vrlo dobar';
                                    break;
                                case 5:
                                    echo 'Ocjena ', $ocjena, ' je odličan';
                                    break;
                            }
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