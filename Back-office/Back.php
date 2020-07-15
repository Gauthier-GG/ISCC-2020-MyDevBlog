<?php
    if($_GET['page'] == 'ajout-article'){
        include('Ajout-article.php');
    }
    elseif($_GET['page'] == 'utilisateurs'){
        include('Utilisateurs.php');
    }
    elseif($_GET['page'] == 'accueil-back'){
        include('Accueil-back.php');
    }
    else{
        include('404.php');
    }
?>


