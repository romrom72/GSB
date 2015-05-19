<?php

$Hostname = "localhost";
$NameBDD = "GSB";
$User = "Romain";
$Password = "memoires";

try
{
    $connexion = new PDO("mysql:host=$Hostname;dbname=$NameBDD", $User, $Password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
    
}

?>