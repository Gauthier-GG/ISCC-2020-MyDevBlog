<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style-back.css">
    </head>
    <header>
        <?php include('Back-header.php'); ?>
    </header>
    <nav>
        <?php include('Nav-back.php')?>
    </nav>
    <body>
    <main>
        <h2>Nouvel utilisateur</h2>
            <div class="formulaire-utilisateur">
                <form action="contact-user.php" method="POST">
                    <label for="nom">Name</label>
                    <br>
                    <input type="text" id="name" name="Name" placeholder="Votre nom">
                    <br>
                    <label for="mail">E-mail</label>
                    <br>
                    <input type="text" id="mail" name="e-mail" placeholder="Votre e-mail">
                    <br>
                    <label for="mdp">Password</label>
                    <br>
                    <input type="password" id="password" name="mdp" placeholder="Votre mot de passe">
                    <br>
                    <label for="mdp2">Confirm password</label>
                    <br>
                    <input type="password" id="password2" name="mdp2" placeholder="Confirmez votre mot de passe">
                    <br>
                    <input type="submit" value="envoyer">
                  
                </form>
            </div>
        </main>
    </body>
</html>