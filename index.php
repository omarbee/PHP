<?php
try
{
    // On se connecte à MySQL
    $pdo = new PDO('pgsql:ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d6ngsqf1ledqck;', 'znpcoimcuailgi', 'a1aff9d7e4d6481a2071aefde60dadae5ab6e83748362e34e418a6e782bc4d32);
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$query = 'INSERT INTO classes (etudiant_id,title ) VALUES (1, super);';
$querry='SELECT * FROM classes;';
$prep = $pdo->prepare($query);
 
$prep->bindValue(1, 'bertand', PDO::PARAM_STR);
$prep->bindValue(2, 'ceci est un test pour desc', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM classes');
while ($donnees = $resultat->fetch())
     
{
  echo '<br/>';
  echo $donnees['nom'];
  echo ' : ';
  echo $donnees['description'];
}
   var_dump($resultat);
?>
