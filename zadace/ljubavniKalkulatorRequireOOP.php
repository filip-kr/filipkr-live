<?php

class LjubavniKalkulator
{
    public string $ime1;
    public string $ime2;
    public string | array $imena;
    public array $imena2;
    public array $ponovljenaSlova;
    public bool $filipTea;

    public function __construct(string $prvoIme, string $drugoIme)
    {
        $this->ime1 = $prvoIme;
        $this->ime1 = mb_strtolower($this->ime1);
        $this->ime1 = str_replace(' ', '', $this->ime1);

        $this->ime2 = $drugoIme;
        $this->ime2 = mb_strtolower($this->ime2);
        $this->ime2 = str_replace(' ', '', $this->ime2);

        $this->imena = $this->ime1 . $this->ime2;
        $this->imena = mb_str_split($this->imena);

        $this->imena2 = array_count_values($this->imena);

        $this->ponovljenaSlova = [];

        if ($this->ime1 === 'filip' && $this->ime2 === 'tea' || $this->ime1 === 'tea' && $this->ime2 === 'filip') {
            $this->filipTea = true;
        } else {
            $this->filipTea = false;
        }
    }

    public function stvoriPrviRedBrojeva(): array
    {
        for ($i = 0; $i < count($this->imena); $i++) {
            if (array_key_exists($this->imena[$i], $this->imena2)) {
                $this->ponovljenaSlova[] = $this->imena2[$this->imena[$i]];
            }
        }
        return $this->ponovljenaSlova;
    }

    public function izracunajPostotakLjubavi(array $niz): string
    {
        if (count($niz) == 2 && array_sum($niz) < 20 || array_sum($niz) == 1) {
            return $niz = implode($niz);
        }

        for ($i = 0; $i < count($niz) - 1; $i++) {
            $niz[$i] = $niz[$i] + $niz[count($niz) - 1];
            array_pop($niz);
        }

        $nizString = implode($niz);
        $niz = mb_str_split($nizString);

        return $this->izracunajPostotakLjubavi($niz);
    }
}
