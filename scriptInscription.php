<?php



$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

$bdd = new PDO( 'mysql:host=localhost;dbname=wsprosit5;charset=utf8','root','');
try
{
$requete = $bdd->prepare("INSERT INTO utilisateurs (pseudo, motDePasse) VALUES ( :pseudo, :motDePasse)");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$result = $requete->fetch();
if($result)
{
if($result[0] == 1) echo "Username already taken";
else "username free";
}

$requete->bindValue(' :pseudo',$pseudo,PDO::PARAM_STR);
$requete->bindValue(' :motDePasse',$motDePasse,PDO::PARAM_STR);

$requete->execute(array(
	'pseudo' => $pseudo,
	'motDePasse'=>$motDePasse,



));

?>
