<?php

$fichier = fopen("compteur.txt", "r+");

$nbVues = fgets($fichier);
$nbVues = (int) $nbVues;
if (!isset($nbVues)) {
    $nbVues = 0;
}
$nbVues++;
fseek($fichier, 0);
fputs($fichier, $nbVues);

fclose($fichier);

echo "la page a été vue " . $nbVues . " fois.";