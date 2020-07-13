<!DOCTYPE html>
<html>
    <head>
        <title>Site routing</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/vitrine.css">
    </head>
    <body>
        <?php
        if($_GET['page'] == 'accueil'){
            include('Accueil.php');
        }
        elseif($_GET['page'] == 'articles'){
            include('Article-list.php');
        }
        elseif($_GET['page'] == 'contact'){
            include('Contact.php');
        }
        else{
            include('404.php');
        }
        ?>
    </body>
</html>

