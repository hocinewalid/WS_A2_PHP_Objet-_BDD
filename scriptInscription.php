<?php
$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'root', '');

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

$req = $bdd->prepare('SELECT id FROM utilisateurs WHERE pseudo=?');
$req->execute(array($_POST['pseudo']));

if ($donnees = $req->fetch()) {
    echo "this username is already used by another user";
} else {
    // le pseudo n'est pas utilisé
    echo "this username is availble";
    // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO utilisateurs (pseudo, motDePasse) VALUES( :pseudo,:motDePasse)");
    $requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);
$requete->execute();
}
