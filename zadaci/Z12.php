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
                    ZADATAK 12: Složiti formu koja ima jedno unosno polje teksta
                    i jednu listu stavaka: Naslov 1, Naslov 2, Naslov 3.
                    Kada korisnik postavi vrijednosti ispisuje se
                    uneseni tekst s pripadajućom h oznakom.
                </h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">
                        <form action="Z12.php" method="get">
                            <label for="tekst">Unesite tekst:</label>
                            <input type="text" name="tekst" required>


                            <label for="izbor">Odaberite jednu od stavki:</label>
                            <select name="izbor">
                                <option value="naslov1">Naslov 1</option>
                                <option value="naslov2" selected>Naslov 2</option>
                                <option value="naslov3">Naslov 3</option>
                            </select>

                            <label for="ispis">
                                <input type="submit" name="submit" value="Ispiši" class="button">
                            </label>
                        </form>
                    </div>
                    <div class="cell small-4">
                        <?php
                        if (isset($_GET['tekst']) && isset($_GET['izbor'])) {
                            $tekst = $_GET['tekst'];
                            $izbor = $_GET['izbor'];

                            if ($izbor == 'naslov1') {
                                echo '<h1>', $tekst, '</h1>';
                            } else if ($izbor == 'naslov2') {
                                echo '<h2>', $tekst, '</h2>';
                            } else if ($izbor == 'naslov3') {
                                echo '<h3>', $tekst, '</h3>';
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