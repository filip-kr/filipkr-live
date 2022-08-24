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
                    SUB ZADATAK 1: Program prima parametar x.
                    Ako je vrijednost cijeli broj ispisuje ga,
                    inače ispisuje poruku da mora biti cijeli broj
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="SUB01.php" method="get">
                            <label for="tekst">Unesite x:</label>
                            <input type="text" name="x" required>

                            <label for="ispis">
                                <input type="submit" name="submit" value="Ispiši" class="button">
                            </label>
                        </form>
                    </div>
                    <div class="cell small-4">
                        <?php
                        if (isset($_GET['x'])) {
                            $stringX = $_GET['x'];
                            $intX = (int)$stringX;

                            if ($intX !== 0) {
                                echo $intX;
                            } else {
                                echo 'x mora biti cijeli broj';
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