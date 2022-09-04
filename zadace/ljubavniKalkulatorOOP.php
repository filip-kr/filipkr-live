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
                    <b>LJUBAVNI KALKULATOR OOP:</b> unesite dva imena i izračunajte
                    koliko ima ljubavi u zraku
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="" method="post">
                            <label for="ime1">
                                IME 1:
                                <input type="text" name="ime1" required>
                            </label>

                            <label for="ime2">
                                IME 2:
                                <input type="text" name="ime2" required>
                            </label>

                            <label for="izracunaj">
                                <input type="submit" name="izracunaj" value="Izračunaj" class="button">
                            </label>
                        </form>
                        <a href="ljubavniKalkulatorOOP.php" class="button alert">Resetiraj</a>
                    </div>
                    <div class="cell small-4 ljubavniKalkulatorRezultat">
                        <?php
                        require_once 'ljubavniKalkulatorRequireOOP.php';

                        if (isset($_POST['izracunaj'])) {
                            $ljubavniKalkulator = new LjubavniKalkulator($_POST['ime1'], $_POST['ime2']);
                            $ime1 = $ljubavniKalkulator->getIme1();
                            $ime2 = $ljubavniKalkulator->getIme2();
                            $postotakLjubavi = $ljubavniKalkulator->getPostotakLjubavi();

                            if ($ime1 === 'filip' && $ime2 === 'tea' || $ime1 === 'tea' && $ime2 === 'filip') {
                                echo '<h3>', 'Postotak ljubavi u zraku iznosi ', '</h3>',
                                '<br/>',
                                '<br/>',
                                '<h1>', 'error: Previše ljubavi u zraku', '</h1>';
                            } else {
                                echo '<h3>', 'Postotak ljubavi u zraku iznosi ', '</h3>',
                                '<br/>',
                                '<br/>',
                                '<h1>', $postotakLjubavi, '% !', '</h1>';

                                require_once '../zadace/svg/srce.svg';
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