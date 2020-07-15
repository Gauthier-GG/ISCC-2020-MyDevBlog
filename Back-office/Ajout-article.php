<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
    </head>
    <header>
        <?php include('Header-back.php'); ?>
    </header>
    <nav>
        <?php include('Nav-back.php'); ?>
    </nav>
    
    <body>
    <main>
        <h2>Nouvel article <article></article></h2>
            <div class="formulaire-article">
                
                    <label for="title">Titre</label>
                    <br>
                    <input type="text" id="name" name="titre" placeholder="titre de l'article">
                    <br>
                    <label for="image">Image</label>
                    <br>
                    <input type="img" id="name" name="image" placeholder="Votre e-mail">
                    <br>
                    <label for="date">Date</label>
                    <br>
                    <input type="text" id="name" name="date" placeholder="JJ / mm/ aaaa">
                    <br>
                    <label for="autor">Auteur</label>
                    <br>
                    <input type="text" id="name" name="auteur" placeholder="nom de l'auteur">
                    <br>
                    <label for="contenu">Contenu</label>
                    <br>
                    <input type="text" id="name" name="contenu" placeholder="contenu du texte">
                    <br>
                    <label for="extrait">Extrait</label>
                    <br>
                    <textarea id="subject" name="subject" placeholder="extrait" style="height:150px"></textarea>
                    <br>
                    <input type="submit" value="Publier">
                  
                </form>
            </div>
        </main>
    </body>

</html>