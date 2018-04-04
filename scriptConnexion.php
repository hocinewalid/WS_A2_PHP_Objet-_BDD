<?php

$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'root', '');

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

$req = $bdd->prepare('SELECT id FROM utilisateurs WHERE pseudo=? AND motDePasse=?');
$req->execute(array($_POST['pseudo'] , $_POST['motDePasse']));


if ($donnees = $req->fetch()) {
echo"<script language=\"javascript\">";
echo"alert('connected')";
echo"</script>";
echo "vous etes connecté";
}
else {
echo"<script language=\"javascript\">";
echo"alert('no connected!!!!')";
echo"</script>";
echo "accés refuser";
}


?>