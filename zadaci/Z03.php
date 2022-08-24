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
                    ZADATAK 3: Stranica prima 4 parametara
                    i ispisuje ih jedno pored drugog
                    svaki u svom panelu (callout) na large širini
                    (p1, p2, p3, p4)
                </h5>
            </div>
        </div>
        <div class="grid-x grid-padding-x align-center">
            <div class="callout primary">
                <?php echo $_GET['p1']; ?>
            </div>
            <div class="callout success">
                <?php echo $_GET['p2']; ?>
            </div>
            <div class="callout warning">
                <?php echo $_GET['p3']; ?>
            </div>
            <div class="callout alert">
                <?php echo $_GET['p4']; ?>
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