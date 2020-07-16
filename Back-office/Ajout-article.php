<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="utf-8">

    </head>
    <header>
        <?php include('Back-header.php'); ?>
    </header>
    <nav>
        <?php include('Nav-back.php'); ?>
    </nav>
    
    <body>
    <main>
        <h2>Nouvel article <article></article></h2>
            <div class="formulaire-article">
                
                    
                    
                    <input type="text" id="name" name="titre" placeholder="titre de l'article">
                    <br><br>
                    
                    
                    <input type="img" id="name" name="image" placeholder="Votre e-mail">
                    <br><br>
                    
                    <input type="text" id="name" name="date" placeholder="JJ / mm/ aaaa">
                    <br><br>
                    
                    <input type="text" id="name" name="auteur" placeholder="nom de l'auteur">
                    <br><br>
                    
                    <input type="text" id="name" name="contenu" placeholder="contenu du texte">
                    <br><br>
                    
                    <textarea id="subject" name="subject" placeholder="extrait" style="height:150px"></textarea>
                    <br>
                    <input type="submit" value="Publier">
                  
             
            </div>
        </main>
    </body>

</html>