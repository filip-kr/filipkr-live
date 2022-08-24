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
                    ZADATAK 5: Stranica prima 3 GET parametra (x, y, z) koji su cijeli brojevi
                    te ispisuje najveći primljeni broj
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <?php
            $x = $_GET['x'];
            $y = $_GET['y'];
            $z = $_GET['z'];
            ?>

            <ul>
                <li>Prvi parametar: <?php echo $_GET['x']; ?></li>
                <li>Drugi parametar: <?php echo $_GET['y']; ?></li>
                <li>Treći parametar: <?php echo $_GET['z']; ?></li>
            </ul>

            <div>
                <b>Najveći broj: </b>
                <?php
                if (isset($_GET['x']) && isset($_GET['y']) && isset($_GET['z'])) {
                    if ($x > $y && $x > $z) {
                        echo $x;
                    } else if ($y > $x && $y > $z) {
                        echo $y;
                    } else if ($z > $x && $z > $y) {
                        echo $z;
                    }
                }
                ?>
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