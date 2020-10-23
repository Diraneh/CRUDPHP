<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Défi PHP - 01</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <?php



             $dsn = 'mysql:host=localhost;dbname=nouveaulivre;port=3308;charset=utf8';

              try {
 
                $pdo = new PDO($dsn, 'root' , '');

                   }
             catch (PDOException $exception) {
 
                 exit('Erreur de connexion à la base de données');
 
                  }

            ?>

    <div class="container">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-4">
                    <form method="GET">
                        <input type="text" placeholder="Id_livre" name="Id_Livre">
                        <input type="text" placeholder="auteur_Livre" name="auteur_Livre">
                        <button type="submit" name="action">Enregistre</button>
                    </form>
                        <?php

                      

                           if(isset($_GET['action']) && !empty($_GET['Id_Livre'])  && !empty($_GET['auteur_Livre'])){

                        
                          $ajouter = $pdo->prepare('INSERT INTO livre VALUES (:Id_Livre,:auteur_Livre)');
                          $ajouter->bindParam(':Id_Livre', $_GET['Id_Livre'], 
                          PDO::PARAM_STR);
        
                          $ajouter->bindParam(':auteur_Livre', $_GET['auteur_Livre'], 
                          PDO::PARAM_STR);
                           $estceok = $ajouter->execute();
      
                                if($estceok){
                                    echo 'votre enregistrement a été ajouté avec succés';
                
            
                                 } else {
                                      echo 'Veuillez recommencer svp, une erreur est survenue';
                                      }
                          }
       
                   ?>


                </div>  

                <div class="col-4">
                    <form method="GET">
                        <input type="number" placeholder="Idd" name="Idd">
                       
                        <button type="submit" name="action">supprimer</button>
                    </form>
                        <?php

                             
                            if(isset($_GET['action'])  && !empty($_GET['Idd'])){
                                

                                   $supprimer = $pdo->prepare('DELETE FROM livre WHERE Id_Livre =:Idd');
                                   $supprimer->bindParam(':Idd', $_GET['Idd'], 
                                   PDO::PARAM_STR);
                                   


                                  $supprimer = $supprimer->execute();
                                  if($supprimer){
                                       echo 'votre enregistrement a bien été supprimé';
            
        
                                    } else {
                                         echo 'Veuillez recommencer svp, une erreur est survenue';
                                        }
                            }
       
                        ?>





                </div>


                <div class="col-4">
                    <form method="GET">
                        <input type="number" placeholder="Id" name="Id">
                        <input type="text" placeholder="auteur" name="auteur">
                       
                        <button type="submit" name="action">modifier</button>
                    </form>
                        <?php

                             
                            if(isset($_GET['action'])  && !empty($_GET['auteur'] ) && !empty($_GET['Id'])){
                                
                             

                                   $modifier = $pdo->prepare('UPDATE livre SET auteur_Livre=:auteur WHERE Id_Livre=:Id');
                                   $modifier->bindParam(':auteur', $_GET['auteur'], 
                                   PDO::PARAM_STR);

                                   $modifier->bindParam(':Id', $_GET['Id'], 
                                   PDO::PARAM_STR);
                                   


                                  $modifier = $modifier->execute();
                                  if($modifier){
                                       echo 'Votre modification a été bien enregistre';
            
        
                                    } else {
                                         echo 'Veuillez recommencer svp, une erreur est survenue';
                                        }
                            }
       
                        ?>





                </div>




            </div>

        </div>

    </div>


</body>

</html>
