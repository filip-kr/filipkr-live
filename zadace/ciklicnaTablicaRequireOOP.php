<?php

class CiklicnaTablica
{
    public array $matrica;
    public int $brojRed;
    public int $brojStup;
    public int $x;
    public int $y;
    public int $vrijednost;

    public function __construct($brojRedova, $brojStupaca)
    {
        $this->matrica = [[]];

        $this->brojRed = $brojRedova;
        $this->brojStup = $brojStupaca;

        $this->x = $brojRedova - 1;
        $this->y = $brojStupaca - 1;

        $this->vrijednost = 1;
    }

    public function ispuniMatricu(): array
    {
        while ($this->brojRed > 0 && $this->brojStup > 0) {

            // S desna na lijevo
            for ($i = 0; $i < $this->brojStup; $i++) {
                if ($this->brojRed == 0 || $this->brojStup == 0) {
                    break;
                }

                $this->matrica[$this->x][$this->y--] = $this->vrijednost++;
            }

            $this->x--;
            $this->y++;
            $this->brojRed--;

            // Od dolje prema gore
            for ($i = 0; $i < $this->brojRed; $i++) {
                if ($this->brojRed == 0 || $this->brojStup == 0) {
                    break;
                }

                $this->matrica[$this->x--][$this->y] = $this->vrijednost++;
            }

            $this->x++;
            $this->y++;
            $this->brojStup--;

            // S lijeva na desno
            for ($i = 0; $i < $this->brojStup; $i++) {
                if ($this->brojRed == 0 || $this->brojStup == 0) {
                    break;
                }

                $this->matrica[$this->x][$this->y++] = $this->vrijednost++;
            }

            $this->x++;
            $this->y--;
            $this->brojRed--;

            // Od gore prema dolje
            for ($i = 0; $i < $this->brojRed; $i++) {
                if ($this->brojRed == 0 || $this->brojStup == 0) {
                    break;
                }

                $this->matrica[$this->x++][$this->y] = $this->vrijednost++;
            }

            $this->x--;
            $this->y--;
            $this->brojStup--;
        }
        return $this->matrica;
    }
}
