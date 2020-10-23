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
    <div class="container">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form method="GET">
                        <input class="utilisateur" type="text" placeholder="Email" name="user">
                        <input class="motspass" type="password" placeholder="password" name="pwd">
                        <center>
                            <button class="boutton" type="submit">Connect vous</button>
                        </center>
                </div>

            </div>
            <div class="col-6">

                <?php


                if(isset($_GET [ 'user' ]) && !empty($_GET [ 'user' ]) && isset($_GET [ 'pwd' ]) && !empty($_GET [ 'pwd' ])){

                    include("config.php");
                    session_start();
                   

                }
              
                else {
                    echo "Merci de saisir votre mots de passe";
                }

                ?>

            </div>

        </div>

    </div>

    </form>

</body>

</html>