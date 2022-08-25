<?php
// Kod se izvršava unosom imena i klikom na gumb 'Izračunaj'
if (isset($_GET['izracunaj'])) {

    // Primanje imena
    $ime1 = $_GET['ime1'];
    $ime2 = $_GET['ime2'];

    // Pretvaranje svih velikih slova u mala
    $ime1 = strtolower($ime1);
    $ime2 = strtolower($ime2);

    // Čišćenje od razmaka
    $ime1 = str_replace(' ', '', $ime1);
    $ime2 = str_replace(' ', '', $ime2);

    // Konkatenacija
    $imena = $ime1 . $ime2;

    // 'filip' i 'tea' ili obrnuto
    if ($ime1 === 'filip' && $ime2 === 'tea' || $ime1 === 'tea' && $ime2 === 'filip') {
        echo '<h3>', 'Postotak ljubavi u zraku iznosi ', '</h3>', '<br/>', '<br/>', '<h1>', 'error: Previše ljubavi u zraku', '</h1>';
        // Varijabla za uvjetovanje SVG animacije
        $filipTea = 1;
    } else {
        $filipTea = 0;

        // Za sve ostale unose:
        // Pretvaranje stringa u niz
        $imena = str_split($imena);

        // Stvaranje zrcalnog niza radi brojanja istih slova
        $imena2 = array_count_values($imena);

        // Prazan niz koji će biti prvi red brojeva
        $ponovljenaSlova = [];

        // Stvaranje prvog reda brojeva, odnosno
        // 'count($imena)' brojeva čije vrijednosti su brojevi ponavljanja svakog slova
        // između oba imena
        for ($i = 0; $i < count($imena); $i++) {
            if (array_key_exists($imena[$i], $imena2)) {
                $ponovljenaSlova[] = $imena2[$imena[$i]];
            }
        }

        function ljubavniKalkulator($niz)
        {
            // Kada ostanu dva broja ili se dobije 100 (1 + 0 + 0 = 1)
            // $niz se pretvara u string i vraća
            if (count($niz) == 2 && array_sum($niz) < 20 || array_sum($niz) == 1) {
                $niz = implode($niz);
                return $niz;
            }

            // Petlja zbraja prvi i zadnji broj u $niz,
            // uklanja zadnji, te se pomjera na sljedeći broj
            for ($i = 0; $i < count($niz) - 1; $i++) {
                $niz[$i] = $niz[$i] + $niz[count($niz) - 1];
                array_pop($niz);
            }

            // $niz se pretvara u string i zatim ponovno
            // u niz kako bi se dvoznamenkasti brojevi podijelili
            // na dva broja
            $nizString = implode($niz);
            $niz = str_split($nizString);

            return ljubavniKalkulator($niz);
        }

        $ljubavniPostotak = ljubavniKalkulator($ponovljenaSlova);
        echo '<h3>', 'Postotak ljubavi u zraku iznosi ', '</h3>', '<br/>', '<br/>', '<h1>', $ljubavniPostotak, '% !', '</h1>';
    }
}
