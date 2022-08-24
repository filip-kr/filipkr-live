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
                    Program će dva unesena broja zbrojiti,
                    pomnožiti s 100, te uvećati za 10
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">

                        <?php
                        $x = isset($_GET['x']) ? $_GET['x'] : 0;
                        $y = isset($_GET['y']) ? $_GET['y'] : 0;
                        ?>

                        <form action="" method="get">
                            <label>
                                x
                                <input type="text" name="x" value="<?= $x ?>">
                            </label>

                            <label>
                                y
                                <input type="text" name="y" value="<?= $y ?>">
                            </label>

                            <input type="submit" class="success button" value="Izračunaj"><br>

                            <?php

                            $rez = $x + $y;
                            $rez *= 100;
                            $rez = $rez + 10;
                            echo '<b>Rezultat:</b> ', $rez;

                            ?>
                        </form>
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