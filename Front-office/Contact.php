<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
    </head>
    <header>
        <?php include('Header-front.php'); ?>
    </header>
    <nav>
        <?php include('Nav-front.php'); ?>
    </nav>
    
    <body>
    <main>
        <h2>Contact</h2>
            <div class="formulaire">
                <form action="contact-form.php" method="POST">
                         
                    <input type="text" id="name" name="Name" placeholder="Votre nom - prénom">
                  
                    <input type="text" id="mail" name="e-mail" placeholder="votre e-mail">
                
                    <textarea id="subject" name="subject" placeholder="Message" style="height:200px"></textarea>
                  
                    <input type="submit" value="envoyer">
                  
                </form>
            </div>
        </main>
    </body>

    <footer>
        <?php include('Footer.php'); ?>
    </footer>
</html>