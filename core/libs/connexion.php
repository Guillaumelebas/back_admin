<?php
//Variable booléenne qui détermine si on travaille
//en local ou en distant (false = local).
$online = false;
//Déclaration des variables utiles à la connexion
//2 jeux de variables, 1 pour le boulot en local
//1 pour le boulot distant.
if($online){
    $serveur='Fourni par votre hébergeur';
    $user = "Fourni par l'hébergeur";
    $password = "Fourni par l'hébergeur";
    $bdd = "Fourni par l'hébergeur";
}else{
    $serveur='localhost';
    $user = "root";
    $password = "";
    $bdd = "back_admin";
}
//Connexion au serveur
$connexion = mysqli_connect($serveur, $user, $password) or die('Erreur de connexion au serveur');
//Séléction de la base de données
mysqli_select_db($connexion, $bdd) or die("Erreur de selection de base de données");
//Transactions forcées en UTF8
mysqli_query($connexion, "SET NAMES 'utf8'");
?>