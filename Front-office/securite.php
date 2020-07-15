<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <link rel="stylesheet"  href="page.css">

    </head>
<?php
session_start();
function connect_to_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = "mydevblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"Vous êtes connecté à la base de donnée.";
        header('Location:../Back-office/Accueil-back.php?page=accueil-back');
        die();

        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();

    }
}
function login ($pdo){
    try{


            if (!empty($_POST['login'])&& !empty($_POST['password'])){
                $login=$_POST['login'];
                $password=$_POST['password'];

                $requete=$pdo->query("SELECT passwordd
                FROM utilisateurs
                WHERE loginn='$login'");
                $res=$requete->fetchAll();

                if ($res){

                    if($password == $res[0]['passwordd']){
                        echo "Bonjour ".$_POST['login']." !";
                        echo '<br>';
                        echo "Vous êtes connectés";
                        echo '<br>';
                        echo '<a href="../Back-office/Accueil-back?page=accueil-back" administrateur</a>';
                    }
                }
                    else{
                        echo '<p>mauvais couple identifiant / mot de passe.</p>';
                        echo '<p><a href=""</a></p>';
                        }
            }
        }
    catch(PDOException $e){
        echo "Login erreur" .$e->getMessage();

    }
}

$pdo= connect_to_database();
login($pdo);
?>
</html>