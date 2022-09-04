<?php

class CiklicnaTablica
{
    public array $matrica;
    public array $crtice;
    public int $brojRed;
    public int $brojStup;
    public int $x;
    public int $y;
    public int $vrijednost;

    public function __construct(int $brojRedova, int $brojStupaca)
    {
        $this->matrica = [[]];
        $this->crtice = [[]];

        $this->brojRed = $brojRedova;
        $this->brojStup = $brojStupaca;

        $this->x = $brojRedova - 1;
        $this->y = $brojStupaca - 1;

        $this->vrijednost = 1;
    }

    public function ispuniMatricuBrojevima(): array
    {
        while ($this->brojRed > 0 && $this->brojStup > 0) {

            // S desna na lijevo
            for ($i = 0; $i < $this->brojStup; $i++) {
                if ($this->brojRed === 0 || $this->brojStup === 0) {
                    break;
                }

                $this->matrica[$this->x][$this->y--] = $this->vrijednost++;
            }

            $this->x--;
            $this->y++;
            $this->brojRed--;

            // Od dolje prema gore
            for ($i = 0; $i < $this->brojRed; $i++) {
                if ($this->brojRed === 0 || $this->brojStup === 0) {
                    break;
                }

                $this->matrica[$this->x--][$this->y] = $this->vrijednost++;
            }

            $this->x++;
            $this->y++;
            $this->brojStup--;

            // S lijeva na desno
            for ($i = 0; $i < $this->brojStup; $i++) {
                if ($this->brojRed === 0 || $this->brojStup === 0) {
                    break;
                }

                $this->matrica[$this->x][$this->y++] = $this->vrijednost++;
            }

            $this->x++;
            $this->y--;
            $this->brojRed--;

            // Od gore prema dolje
            for ($i = 0; $i < $this->brojRed; $i++) {
                if ($this->brojRed === 0 || $this->brojStup === 0) {
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

    public function poredajCrticePremaMatrici(int $brojRedova, int $brojStupaca): array
    {
        $x = $brojRedova - 1;
        $y = $brojStupaca - 1;

        while ($brojRedova > 0 && $brojStupaca > 0) {

            // S desna na lijevo
            for ($i = 0; $i < $brojStupaca; $i++) {
                if ($brojRedova == 0 || $brojStupaca == 0) {
                    break;
                }
                if ($i < $brojStupaca && $i != $brojStupaca - 1) {
                    $this->crtice[$x][$y] = 'lijevo';
                } else if ($i == $brojStupaca - 1) {
                    $this->crtice[$x][$y] = 'gore';
                }

                $y--;
            }

            $x--;
            $y++;
            $brojRedova--;

            // Od dolje prema gore
            for ($i = 0; $i < $brojRedova; $i++) {
                if ($brojRedova == 0 || $brojStupaca == 0) {
                    break;
                }

                if ($i < $brojRedova && $i != $brojRedova - 1) {
                    $this->crtice[$x][$y] = 'gore';
                } else if ($i == $brojRedova - 1) {
                    $this->crtice[$x][$y] = 'desno';
                }

                $x--;
            }

            $x++;
            $y++;
            $brojStupaca--;

            // S lijeva na desno
            for ($i = 0; $i < $brojStupaca; $i++) {
                if ($brojRedova == 0 || $brojStupaca == 0) {
                    break;
                }

                if ($i < $brojStupaca && $i != $brojStupaca - 1) {
                    $this->crtice[$x][$y] = 'desno';
                } else if ($i == $brojStupaca - 1) {
                    $this->crtice[$x][$y] = 'dolje';
                }

                $y++;
            }

            $x++;
            $y--;
            $brojRedova--;

            // Od gore prema dolje
            for ($i = 0; $i < $brojRedova; $i++) {
                if ($brojRedova == 0 || $brojStupaca == 0) {
                    break;
                }

                if ($i < $brojRedova && $i != $brojRedova - 1) {
                    $this->crtice[$x][$y] = 'dolje';
                } else if ($i == $brojRedova - 1) {
                    $this->crtice[$x][$y] = 'lijevo';
                }

                $x++;
            }

            $x--;
            $y--;
            $brojStupaca--;
        }
        return $this->crtice;
    }
}
