<?php
include "../config/db_connector.php";
 
//recuperation du donnees

$cin = $_POST['cin'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$email = $_POST['email'];

//connexion a la base
$base = connect_to_db();

//preparation du requette 

$_requette ="insert into etudiant values ('$cin','$nom','$prenom',$age,'$email')";

// insertion des donnees

$nbligne = $base ->exec($_requette);

//affiche resultat de l'insertion
 
if ($nbligne == 1) {
    echo " student inserted";

}else{
    echo "error";
}







?>