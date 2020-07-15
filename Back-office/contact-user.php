<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['Name'];
    $mail = $_POST['e-mail'];
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];

    if(empty($name)){
        echo "Tes parents ont oublié de te donner un prénom ?";
    }
    elseif(empty($mail)){
        echo "Ça existe encore les gens qui n'ont pas d'adresse mail ?? Huga-huga ?";
    }
    elseif(empty($mdp) or empty($mdp2)){
        echo "Hep hep hep, donne moi ton mot de passe que je puisse accéder à ta vie privée.";
    }
    elseif($mdp == $mdp2){
        echo "Je vous souahite la bienvenue sur notre site $name !";
    }
    else{
    echo "Vos mots de passe ne correspondent pas... </br>";
    echo "Veuillez <a href='Ajout-utilisateur.php'>réessayer</a> !";
    }
}
?>