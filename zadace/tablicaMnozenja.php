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
                <h5>Back to school</h5>
            </div>
        </div>
        <div class="callout" id="izlaz">
            <div class="grid-container fluid">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4">

                        <?php

                        echo '<table class="tablica-mnozenja">';
                        for ($i = 1; $i <= 10; $i++) {
                            echo '<tr class="tr-tm">';
                            for ($j = 1; $j <= 10; $j++) {
                                echo '<td class="tr-tm">', $i * $j, '</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</table>';

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
        <!-- FOOTER -->
    </footer>
    <!-- END podnožje -->


    <!-- JavaScript -->
    <?php require_once '../js.php'; ?>
</body>

</html>