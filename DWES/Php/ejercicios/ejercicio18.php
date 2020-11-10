<?php
$langosta = 55;
$angula = 75;
$caviar = 600;


if (($langosta > 50 && $angula > 70) || ($angula > 70 && $caviar > 600) || ($caviar > 600 && $langosta > 50)) {
    printf("Cierto");
} else {
    printf("Falso");
}
