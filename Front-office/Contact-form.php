<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['Name'];
    $mail = $_POST['e-mail'];
    $message = $_POST['subject'];

    if(empty($name)){
        echo "Tes parents ont oublié de te donner un prénom ?";
    }
    elseif(empty($mail)){
        echo "Ça existe encore les gens qui n'ont pas d'adresse mail ?? Huga-huga ?";
    }
    elseif(empty($message)){
        echo "Hep hep hep, t'a rien à me dire ?";
    }
    else{
    echo "Vos données ont bien été envoyées !";
    }
}
?>