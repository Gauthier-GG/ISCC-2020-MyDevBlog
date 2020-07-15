<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
        elseif($_GET['page'] == 'administration'){
            include('Login.php');
        }
        elseif($_GET['page'] == 'site-vitrine'){
            include('vitrine-accueil.html');
        }
        elseif($_GET['page'] == 'mon-cv'){
            include('mon-cv.html');
        }
        else{
            include('404.php');
        }
        ?>
    </body>
</html>

