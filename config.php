
<?php



$dsn = 'mysql:host=localhost;dbname=nouveaulivre;port=3308;charset=utf8';

try {
 
$pdo = new PDO($dsn, 'root' , '');
echo "je suis connecte";
}
catch (PDOException $exception) {
 
 exit('Erreur de connexion à la base de données');
 
}



$mysql_query = $pdo->query('UPDATE `livre` SET `Id_Livre`=400 WHERE `auteur_Livre`="elmi"');



?>
