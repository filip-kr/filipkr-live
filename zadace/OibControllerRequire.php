<?php

class OibController
{
    public function iskontrolirajOib($oib)
    {
        $oibNiz = array_map('intval', str_split($oib));
        $posljednjaZnamenka = $oibNiz[10];

        //  1. prva znamenka zbroji se s brojem 10
        $oibNiz[0] += 10;

        for ($i = 0; $i < 10; $i++) {
            //  2. dobiveni zbroj cjelobrojno (s ostatkom) podijeli se brojem 10; ako je dobiveni
            //  ostatak 0 zamijeni se brojem 10 (ovaj broj je tzv. međuostatak)
            if ($oibNiz[$i] % 10 === 0) {
                $oibNiz[$i] = 10;
            } else {
                $oibNiz[$i] %= 10;
            }
            //  3. dobiveni međuostatak pomnoži se brojem 2
            $oibNiz[$i] *= 2;
            // 4. dobiveni umnožak cjelobrojno (s ostatkom) podijeli se brojem 11
            $oibNiz[$i] %= 11;
            //  5. slijedeća znamenka zbroji se s ostatkom u prethodnom koraku 
            $oibNiz[$i + 1] += $oibNiz[$i];
            // 6. ponavljaju se koraci 2, 3, 4 i 5 dok se ne potroše sve znamenke
        }

        // 7. razlika između broja 11 i ostatka u zadnjem koraku je kontrolna znamenka; ako je
        // ostatak 1 kontrolna znamenka je 0 (11-1=10, a 10 ima dvije znamenke)
        if ($oibNiz[9] === 1) {
            $kontrolnaZnamenka = 0;
        } else {
            $kontrolnaZnamenka = 11 - $oibNiz[9];
        }

        if ($kontrolnaZnamenka === $posljednjaZnamenka) {
            return true;
        }

        return false;
    }
}
