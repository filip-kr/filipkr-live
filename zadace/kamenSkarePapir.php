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
                <h5>Kamen, Škare, Papir?</h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <form method="post">
                <input type="radio" name="odabirIgraca" value="Kamen" id="kamen"><label for="kamen">Kamen</label>
                <br>
                <input type="radio" name="odabirIgraca" value="Škare" id="skare" required><label for="skare">Škare</label>
                <br>
                <input type="radio" name="odabirIgraca" value="Papir" id="papir"><label for="papir">Papir</label>
                <br>
                <input type="submit" class="button" value="Igraj">
                <br>
            </form>
            <?php
            if (isset($_POST['odabirIgraca'])) {
                $odabirIgraca = $_POST['odabirIgraca'];
                $kamenSkarePapir = ['kamen', 'škare', 'papir'];
                $odabirRacunala = $kamenSkarePapir[rand(0, 2)];

                echo 'Računalo igra ' . strtolower($odabirRacunala) . '.', '<br />';

                if ($odabirIgraca === 'Kamen') {
                    if ($odabirRacunala === 'kamen') {
                        echo 'Razmišljaš kao računalo. Igraj opet.';
                    } else if ($odabirRacunala === 'škare') {
                        echo 'Kamen razbija škare. Pobijedio/la si... ovaj put.';
                    } else if ($odabirRacunala === 'papir') {
                        echo 'Papir prekriva kamen. Izgubio/la si... HAHA!';
                    }
                }

                if ($odabirIgraca === 'Škare') {
                    if ($odabirRacunala === 'kamen') {
                        echo 'Kamen razbija škare. Izgubio/la si... HAHA!';
                    } else if ($odabirRacunala === 'škare') {
                        echo 'Razmišljaš kao računalo. Igraj opet.';
                    } else if ($odabirRacunala === 'papir') {
                        echo 'Škare režu papir. Pobijedio/la si... ovaj put.';
                    }
                }

                if ($odabirIgraca === 'Papir') {
                    if ($odabirRacunala === 'kamen') {
                        echo 'Papir prekriva kamen. Pobijedio/la si... ovaj put.';
                    } else if ($odabirRacunala === 'škare') {
                        echo 'Škare režu papir. Izgubio/la si... HAHA!';
                    } else if ($odabirRacunala === 'papir') {
                        echo 'Razmišljaš kao računalo. Igraj opet.';
                    }
                }
            }
            ?>
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