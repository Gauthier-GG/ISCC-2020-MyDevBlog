<? include('Header-front.php'); ?>
<div class="login">
<form action="securite.php" method="POST">
<label for="nom">Name</label>
    <br>
    <input type="text" id="login" name="Login" placeholder="Nom"><br>

<label for="mdp">Password</label>
    <br>
    <input type="password" id="password" name="Password" placeholder="Mot de passe"><br>
    <br>

<input type="submit" value="Envoyer">
</form>