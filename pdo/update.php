<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=phpmysql;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$possesseur = "Julien";
$possesseur2 = "Julien2";

$req = $bdd->prepare('UPDATE jeux_video SET possesseur = :possesseur2 WHERE possesseur = :possesseur');
$nbModif = $req->execute(array(
	'possesseur' => $possesseur,
	'possesseur2' => $possesseur2,
	));

echo $req->rowCount() . ' enregistrements modifiés.';