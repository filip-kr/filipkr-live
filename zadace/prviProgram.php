<?php

$x = isset($_GET['x']) ? $_GET['x'] : 0;
$y = isset($_GET['y']) ? $_GET['y'] : 0;

$rez = $x + $y;
$rez *= 100;
$rez = $rez + 10;

echo $rez;
